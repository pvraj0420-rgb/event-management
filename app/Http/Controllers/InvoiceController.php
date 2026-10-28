<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Invoice;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    function generateInvoiceNumber()
    {
        $last = Invoice::latest('id')->first();

        if (!$last) {
            $number = 1;
        } else {
            $parts = explode('-', $last->invoice_no);
            $lastNum = end($parts);
            $number = is_numeric($lastNum) ? intval($lastNum) + 1 : ($last->id + 1);
        }

        return 'INV-' . date('Y') . '-' . str_pad($number, 4, '0', STR_PAD_LEFT);
    }

    public function createInvoice($booking_id, $event_id, $amount)
    {
        $user = Session::get('user');

        if (!$user) {
            return null;
        }

        return Invoice::create([
            'invoice_no' => $this->generateInvoiceNumber(),
            'booking_id' => $booking_id,
            'user_id' => $user->id,
            'event_id' => $event_id,
            'amount' => $amount,
            'status' => 'paid'
        ]);
    }
    public function download($booking_id)
    {
        $invoice = Invoice::with(['user', 'event', 'booking'])
            ->where('booking_id', $booking_id)
            ->first();

        if (!$invoice) {
            $invoice = Invoice::with(['user', 'event', 'booking'])->find($booking_id);
            if (!$invoice) {
                // Check if this booking exists and is paid - auto-generate invoice
                $booking = Booking::with(['user', 'event'])->find($booking_id);
                if ($booking && $booking->payment_status === 'paid') {
                    $invoice = Invoice::create([
                        'invoice_no' => $this->generateInvoiceNumber(),
                        'booking_id' => $booking->id,
                        'user_id'    => $booking->user_id,
                        'event_id'   => $booking->event_id,
                        'amount'     => $booking->total_amount,
                        'status'     => 'paid'
                    ]);
                    $invoice->load(['user', 'event', 'booking']);
                } else {
                    abort(404, 'Invoice not found');
                }
            }
        }

        $sessionUser = Session::get('user');
        $sessionAdmin = Session::get('admin');

        // IDOR Protection: must be the user who owns the invoice or an admin
        if (!$sessionAdmin && (!$sessionUser || $sessionUser->id != $invoice->user_id)) {
            abort(403, 'Unauthorized access to invoice');
        }

        $pdf = Pdf::loadView('invoice', compact('invoice'))
            ->setPaper('a4', 'portrait')
            ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        return $pdf->download($invoice->invoice_no . '.pdf');
    }
    public function adminInvoiceList()
    {
        $invoices = \App\Models\Invoice::with(['user', 'event'])->latest()->get();

        return view('admin.invoice_list', compact('invoices'));
    }
    public function deleteInvoice($id)
    {
        $invoice = \App\Models\Invoice::findOrFail($id);
        $invoice->delete();

        return back()->with('success', 'Invoice deleted successfully');
    }
    public function viewInvoiceById($id)
    {
        $invoice = \App\Models\Invoice::with(['user', 'event'])->findOrFail($id);

        return view('admin.invoice_view', compact('invoice'));
    }
}
