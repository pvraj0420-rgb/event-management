<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice - {{ $invoice->invoice_no }}</title>

    <style>
        @page {
            margin: 25px 30px;
            size: a4 portrait;
        }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 11px;
            color: #0f172a;
            background: #ffffff;
            line-height: 1.45;
            margin: 0;
            padding: 0;
        }

        .invoice-box {
            width: 100%;
            margin: 0 auto;
        }

        /* 1. HEADER SECTION */
        table.header-table {
            width: 100%;
            border-bottom: 2px solid #1e40af;
            padding-bottom: 14px;
            margin-bottom: 20px;
        }

        table.header-table td {
            vertical-align: top;
        }

        .logo-img {
            width: 140px;
            height: auto;
            display: block;
            margin-bottom: 6px;
        }

        .company-fallback-name {
            font-size: 22px;
            font-weight: bold;
            color: #1e40af;
            letter-spacing: 0.5px;
            margin: 0 0 2px 0;
        }

        .company-sub {
            font-size: 11px;
            color: #475569;
            margin: 1px 0;
        }

        .invoice-main-title {
            font-size: 24px;
            font-weight: bold;
            color: #1e40af;
            margin: 0;
            text-align: right;
            letter-spacing: 1px;
        }

        .invoice-meta {
            text-align: right;
            margin-top: 5px;
            font-size: 11px;
            color: #334155;
        }

        .invoice-number-badge {
            font-weight: bold;
            color: #0f172a;
            font-size: 12px;
        }

        /* 2. BILLING & EVENT CARDS */
        table.meta-cards {
            width: 100%;
            border-collapse: separate;
            border-spacing: 12px 0;
            margin-bottom: 20px;
        }

        .info-card {
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            background-color: #f8fafc;
            padding: 12px 14px;
            vertical-align: top;
        }

        .card-header {
            font-size: 12px;
            font-weight: bold;
            color: #1e40af;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            border-bottom: 1px solid #cbd5e1;
            padding-bottom: 5px;
            margin-bottom: 8px;
        }

        table.card-content {
            width: 100%;
            border-collapse: collapse;
        }

        table.card-content td {
            padding: 3px 0;
            font-size: 11px;
        }

        .card-label {
            color: #475569;
            font-weight: 600;
            width: 32%;
        }

        .card-val {
            color: #0f172a;
            font-weight: bold;
            width: 68%;
        }

        /* 3. ITEMS TABLE */
        table.items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 18px;
        }

        table.items-table th {
            background-color: #1e40af;
            color: #ffffff;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 9px 10px;
            border: 1px solid #1e3a8a;
            text-align: left;
        }

        table.items-table td {
            padding: 10px;
            font-size: 11px;
            border: 1px solid #cbd5e1;
            color: #0f172a;
        }

        table.items-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        /* 4. TOTALS & PAYMENT SECTION */
        table.summary-layout {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table.summary-layout td {
            vertical-align: top;
        }

        .payment-box {
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            background-color: #f8fafc;
            padding: 12px 14px;
            margin-right: 15px;
        }

        .payment-box-title {
            font-size: 11px;
            font-weight: bold;
            color: #1e40af;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
            border-bottom: 1px solid #cbd5e1;
            padding-bottom: 4px;
        }

        table.totals-table {
            width: 100%;
            border-collapse: collapse;
        }

        table.totals-table td {
            padding: 5px 8px;
            font-size: 11px;
        }

        .total-label {
            text-align: right;
            color: #334155;
            font-weight: 600;
        }

        .total-val {
            text-align: right;
            font-weight: bold;
            color: #0f172a;
            width: 110px;
        }

        .grand-total-row td {
            border-top: 2px solid #1e40af;
            padding-top: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #1e40af;
        }

        /* 5. BADGES */
        .badge-paid {
            background-color: #16a34a;
            color: #ffffff;
            font-weight: bold;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 10px;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* 6. FOOTER */
        .footer-section {
            margin-top: 35px;
            border-top: 1px solid #cbd5e1;
            padding-top: 14px;
            text-align: center;
            font-size: 10px;
            color: #64748b;
            line-height: 1.5;
        }
    </style>
</head>

<body>

@php
    $logoPath = public_path('assets/img/logo/logo.png');
    $logoBase64 = file_exists($logoPath) ? 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath)) : null;

    $ticketsCount = !empty($invoice->booking->tickets) ? (int)$invoice->booking->tickets : 1;
    $amountValue = (float) $invoice->amount;
    $unitPriceValue = $amountValue / ($ticketsCount ?: 1);

    // Currency representation: Indian Rupee (₹)
    $currencyPrefix = '₹';
    $formattedUnit = '₹' . number_format($unitPriceValue, 2);
    $formattedTotal = '₹' . number_format($amountValue, 2);

    $invoiceDate = !empty($invoice->created_at) ? date('d M Y', strtotime($invoice->created_at)) : date('d M Y');
    $eventDate = !empty($invoice->event->date) ? date('l, d F Y', strtotime($invoice->event->date)) : 'N/A';
    $paymentMethodText = !empty($invoice->booking->payment_method) ? strtoupper(str_replace('_', ' ', $invoice->booking->payment_method)) : 'CARD';
@endphp

<div class="invoice-box">

    <!-- 1. HEADER SECTION -->
    <table class="header-table">
        <tr>
            <td width="60%">
                @if($logoBase64)
                    <img src="{{ $logoBase64 }}" class="logo-img" alt="Evenza">
                @else
                    <div class="company-fallback-name">EVENZA</div>
                @endif
                <div style="font-size: 14px; font-weight: bold; color: #1e40af; margin-bottom: 2px;">Evenza Event Management</div>
                <p class="company-sub">Apple Upper West Side, Brooklyn, New York</p>
                <p class="company-sub">Email: support@evenza.com &bull; Web: www.evenza.com</p>
            </td>

            <td width="40%">
                <h1 class="invoice-main-title">INVOICE</h1>
                <div class="invoice-meta">
                    <div>Invoice No: <span class="invoice-number-badge">{{ $invoice->invoice_no }}</span></div>
                    <div>Date: <strong>{{ $invoiceDate }}</strong></div>
                    <div>Booking Ref: <strong>#BK-{{ str_pad($invoice->booking_id ?? $invoice->id, 5, '0', STR_PAD_LEFT) }}</strong></div>
                    <div style="margin-top: 5px;">
                        Status: <span class="badge-paid">PAID IN FULL</span>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <!-- 2. METADATA 2-COLUMN CARDS -->
    <table class="meta-cards">
        <tr>
            <!-- CUSTOMER DETAILS -->
            <td width="50%" class="info-card">
                <div class="card-header">Billed To (Customer)</div>
                <table class="card-content">
                    <tr>
                        <td class="card-label">Name:</td>
                        <td class="card-val">{{ $invoice->user->name ?? $invoice->booking->name ?? 'Valued Customer' }}</td>
                    </tr>
                    <tr>
                        <td class="card-label">Email:</td>
                        <td class="card-val">{{ $invoice->user->email ?? $invoice->booking->email ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="card-label">Mobile:</td>
                        <td class="card-val">{{ $invoice->booking->mobile ?? $invoice->user->phone ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="card-label">Customer ID:</td>
                        <td class="card-val">#USR-{{ str_pad($invoice->user_id ?? 1, 4, '0', STR_PAD_LEFT) }}</td>
                    </tr>
                </table>
            </td>

            <!-- EVENT DETAILS -->
            <td width="50%" class="info-card">
                <div class="card-header">Event Details</div>
                <table class="card-content">
                    <tr>
                        <td class="card-label">Event:</td>
                        <td class="card-val">{{ $invoice->event->title ?? 'Evenza Conference' }}</td>
                    </tr>
                    <tr>
                        <td class="card-label">Event Date:</td>
                        <td class="card-val">{{ $eventDate }}</td>
                    </tr>
                    <tr>
                        <td class="card-label">Venue:</td>
                        <td class="card-val">{{ $invoice->event->venue ?? 'Main Auditorium' }}</td>
                    </tr>
                    <tr>
                        <td class="card-label">Location:</td>
                        <td class="card-val">{{ $invoice->event->location ?? 'New York City' }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- 3. ITEMS BREAKDOWN TABLE -->
    <table class="items-table">
        <thead>
            <tr>
                <th width="8%" class="text-center">#</th>
                <th width="47%">Item Description</th>
                <th width="15%" class="text-center">Quantity</th>
                <th width="15%" class="text-right">Unit Price</th>
                <th width="15%" class="text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>
                    <strong>{{ $invoice->event->title ?? 'Event Admission Pass' }}</strong>
                    <div style="font-size: 10px; color: #475569; margin-top: 2px;">
                        Standard Admission &bull; Access to all sessions and workshops
                    </div>
                </td>
                <td class="text-center">{{ $ticketsCount }} ticket(s)</td>
                <td class="text-right">{{ $formattedUnit }}</td>
                <td class="text-right" style="color: #1e40af;"><strong>{{ $formattedTotal }}</strong></td>
            </tr>
        </tbody>
    </table>

    <!-- 4. SUMMARY SECTION -->
    <table class="summary-layout">
        <tr>
            <!-- LEFT: PAYMENT DETAILS BOX -->
            <td width="55%">
                <div class="payment-box">
                    <div class="payment-box-title">Payment Information</div>
                    <table style="width: 100%; font-size: 11px;">
                        <tr>
                            <td style="color: #475569; width: 45%; padding: 2px 0; font-weight: 600;">Payment Method:</td>
                            <td style="font-weight: bold; color: #0f172a; padding: 2px 0;">{{ $paymentMethodText }}</td>
                        </tr>
                        <tr>
                            <td style="color: #475569; padding: 2px 0; font-weight: 600;">Payment Status:</td>
                            <td style="padding: 2px 0;"><span class="badge-paid">COMPLETED</span></td>
                        </tr>
                        <tr>
                            <td style="color: #475569; padding: 2px 0; font-weight: 600;">Transaction Ref:</td>
                            <td style="font-weight: bold; color: #0f172a; padding: 2px 0; font-family: monospace;">
                                {{ $invoice->booking->razorpay_payment_id ?? ('TXN-' . strtoupper(substr(md5($invoice->id . ($invoice->created_at ?? date('Ymd'))), 0, 10))) }}
                            </td>
                        </tr>
                    </table>
                </div>
            </td>

            <!-- RIGHT: TOTALS CALCULATION -->
            <td width="45%">
                <table class="totals-table">
                    <tr>
                        <td class="total-label">Subtotal:</td>
                        <td class="total-val">{{ $formattedTotal }}</td>
                    </tr>
                    <tr>
                        <td class="total-label">Taxes & Fees:</td>
                        <td class="total-val">{{ $currencyPrefix }}0.00</td>
                    </tr>
                    <tr class="grand-total-row">
                        <td class="total-label" style="color: #1e40af;">Grand Total:</td>
                        <td class="total-val">{{ $formattedTotal }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- 5. FOOTER NOTE -->
    <div class="footer-section">
        <p style="margin: 0 0 3px 0; font-weight: bold; color: #334155;">
            Thank you for choosing Evenza! We look forward to welcoming you at the event.
        </p>
        <p style="margin: 0;">
            This is an official computer-generated tax invoice. No physical signature is required.
            For any queries or modifications, please contact support@evenza.com.
        </p>
    </div>

</div>

</body>
</html>