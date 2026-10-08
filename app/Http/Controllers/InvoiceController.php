<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    function generateInvoiceNumber()
    {
        $last = Invoice::latest()->first();

        if (!$last) {
            $number = 1;
        } else {
            $number = intval(substr($last->invoice_no, -3)) + 1;
        }

        return 'INV-' . date('Y') . '-' . str_pad($number, 3, '0', STR_PAD_LEFT);
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
    $invoice = Invoice::with(['user', 'event'])
        ->where('booking_id', $booking_id)
        ->first();

    if (!$invoice) {
        abort(404, 'Invoice not found');
    }

    $pdf = Pdf::loadView('invoice', compact('invoice'));

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
