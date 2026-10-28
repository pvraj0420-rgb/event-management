<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\EventModels;
use App\Models\Invoice;
use App\Helpers\CurrencyHelper;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    private $keyId;
    private $keySecret;

    public function __construct()
    {
        $this->keyId = config('services.razorpay.key_id') ?: config('services.razorpay.key');
        $this->keySecret = config('services.razorpay.key_secret') ?: config('services.razorpay.secret');
    }

    /**
     * Initiate Razorpay Order in INR (RuPay / UPI / Cards / NetBanking)
     */
    public function initiatePayment(Request $request)
    {
        if (!Session::has('user')) {
            return redirect()->route('login')->with('error', 'Please login to book tickets.');
        }

        $user = Session::get('user');
        $event = EventModels::findOrFail($request->event_id);
        $tickets = (int) ($request->tickets ?? 1);

        // Calculate USD amount & convert to INR
        $priceUsd = (float) ($event->price ?? 29);
        $totalUsd = $tickets * $priceUsd;
        $totalInr = CurrencyHelper::convertUsdToInr($totalUsd);
        $amountInPaise = CurrencyHelper::toPaise($totalInr);

        $orderId = 'order_' . uniqid();

        // Attempt official Razorpay Order creation if valid credentials available
        if ($this->keyId && $this->keySecret && !str_starts_with($this->keySecret, 'your_test')) {
            try {
                if (class_exists(\Razorpay\Api\Api::class)) {
                    $api = new \Razorpay\Api\Api($this->keyId, $this->keySecret);
                    $razorpayOrder = $api->order->create([
                        'receipt'         => 'rcpt_' . time() . '_' . $user->id,
                        'amount'          => $amountInPaise,
                        'currency'        => 'INR',
                        'payment_capture' => 1
                    ]);
                    $orderId = $razorpayOrder['id'];
                } else {
                    $response = Http::withBasicAuth($this->keyId, $this->keySecret)
                        ->post('https://api.razorpay.com/v1/orders', [
                            'receipt'         => 'rcpt_' . time() . '_' . $user->id,
                            'amount'          => $amountInPaise,
                            'currency'        => 'INR',
                            'payment_capture' => 1
                        ]);

                    if ($response->successful()) {
                        $orderId = $response->json('id');
                    }
                }
            } catch (\Exception $e) {
                Log::error('Razorpay order creation fallback: ' . $e->getMessage());
            }
        }

        // Store pending booking
        $booking = Booking::create([
            'event_id'          => $event->id,
            'user_id'           => $user->id,
            'username'          => $user->name,
            'name'              => $request->name ?? $user->name,
            'email'             => $request->email ?? $user->email,
            'mobile'            => $request->mobile ?? $user->mobile,
            'tickets'           => $tickets,
            'total_amount'      => $totalUsd,
            'currency'          => 'INR',
            'amount_inr'        => $totalInr,
            'payment_method'    => 'razorpay_rupay',
            'payment_status'    => 'pending',
            'razorpay_order_id' => $orderId
        ]);

        return view('front.razorpay-checkout', [
            'booking'       => $booking,
            'event'         => $event,
            'user'          => $user,
            'orderId'       => $orderId,
            'amountInPaise' => $amountInPaise,
            'totalInr'      => $totalInr,
            'razorpayKey'   => $this->keyId
        ]);
    }

    /**
     * Verify Razorpay Signature (HMAC SHA-256)
     */
    public function verifyPayment(Request $request)
    {
        $request->validate([
            'razorpay_order_id'   => 'required',
            'razorpay_payment_id' => 'required',
            'booking_id'          => 'required|exists:bookings,id'
        ]);

        $booking = Booking::findOrFail($request->booking_id);

        $isVerified = false;

        if ($this->keySecret && !str_starts_with($this->keySecret, 'your_test')) {
            $expectedSignature = hash_hmac(
                'sha256',
                $request->razorpay_order_id . '|' . $request->razorpay_payment_id,
                $this->keySecret
            );

            if (hash_equals($expectedSignature, (string) $request->razorpay_signature)) {
                $isVerified = true;
            }
        } else {
            // Local dev / test environment fallback
            $isVerified = true;
        }

        if (!$isVerified) {
            $booking->update(['payment_status' => 'failed']);
            return redirect()->route('my.orders')->with('error', 'Payment verification failed: Invalid Signature.');
        }

        // Atomic transaction: mark paid & generate tax invoice
        DB::transaction(function () use ($booking, $request) {
            $booking->update([
                'payment_status'       => 'paid',
                'razorpay_payment_id'  => $request->razorpay_payment_id,
                'razorpay_signature'   => $request->razorpay_signature ?? 'test_sig'
            ]);

            // Create Invoice
            $invoiceNumber = 'INV-' . date('Y') . '-' . str_pad($booking->id, 4, '0', STR_PAD_LEFT);
            Invoice::updateOrCreate(
                ['booking_id' => $booking->id],
                [
                    'invoice_no' => $invoiceNumber,
                    'user_id'    => $booking->user_id,
                    'event_id'   => $booking->event_id,
                    'amount'     => $booking->amount_inr ?? $booking->total_amount,
                    'status'     => 'paid'
                ]
            );
        });

        return redirect()->route('my.orders')->with('success', 'Payment Successful! RuPay / UPI payment approved.');
    }

    /**
     * Razorpay Webhook Handler
     */
    public function handleWebhook(Request $request)
    {
        $webhookSecret = config('services.razorpay.webhook_secret');
        $payload = $request->getContent();
        $signature = $request->header('X-Razorpay-Signature');

        if ($webhookSecret && $signature) {
            $expectedSignature = hash_hmac('sha256', $payload, $webhookSecret);
            if (!hash_equals($expectedSignature, $signature)) {
                return response()->json(['error' => 'Invalid webhook signature'], 400);
            }
        }

        $data = json_decode($payload, true);
        $event = $data['event'] ?? '';

        if (in_array($event, ['payment.captured', 'order.paid'])) {
            $orderId = $data['payload']['payment']['entity']['order_id'] ?? null;
            $paymentId = $data['payload']['payment']['entity']['id'] ?? null;

            if ($orderId) {
                $booking = Booking::where('razorpay_order_id', $orderId)->first();
                if ($booking && $booking->payment_status !== 'paid') {
                    DB::transaction(function () use ($booking, $paymentId) {
                        $booking->update([
                            'payment_status'      => 'paid',
                            'razorpay_payment_id' => $paymentId
                        ]);

                        $invoiceNumber = 'INV-' . date('Y') . '-' . str_pad($booking->id, 4, '0', STR_PAD_LEFT);
                        Invoice::updateOrCreate(
                            ['booking_id' => $booking->id],
                            [
                                'invoice_no' => $invoiceNumber,
                                'user_id'    => $booking->user_id,
                                'event_id'   => $booking->event_id,
                                'amount'     => $booking->amount_inr ?? $booking->total_amount,
                                'status'     => 'paid'
                            ]
                        );
                    });
                }
            }
        }

        return response()->json(['status' => 'ok']);
    }
}
