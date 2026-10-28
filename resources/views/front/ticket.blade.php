<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Event Ticket - {{ $booking->event->title ?? 'Evenza' }}</title>

    <style>
        @page {
            margin: 20px 25px;
            size: a4 portrait;
        }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            background-color: #ffffff;
            color: #0f172a;
            margin: 0;
            padding: 10px;
            font-size: 12px;
            line-height: 1.4;
        }

        .ticket-wrapper {
            width: 100%;
            max-width: 680px;
            margin: 0 auto;
            border: 2px solid #1e40af;
            border-radius: 12px;
            background: #ffffff;
            overflow: hidden;
        }

        /* 1. TOP BRANDING BAR (WHITE BACKGROUND FOR CRISP LOGO DISPLAY) */
        .brand-bar {
            background-color: #ffffff;
            padding: 16px 24px;
            border-bottom: 2px solid #e2e8f0;
        }

        table.brand-table {
            width: 100%;
            border-collapse: collapse;
        }

        table.brand-table td {
            vertical-align: middle;
        }

        .brand-logo-img {
            width: 140px;
            height: auto;
            display: block;
        }

        .brand-fallback-title {
            font-size: 22px;
            font-weight: bold;
            color: #1e40af;
            margin: 0;
            letter-spacing: 0.5px;
        }

        .brand-tagline {
            font-size: 10px;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-top: 3px;
        }

        .brand-right {
            text-align: right;
        }

        .badge-confirmed {
            background-color: #16a34a;
            color: #ffffff;
            font-weight: bold;
            font-size: 11px;
            padding: 6px 14px;
            border-radius: 20px;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .ticket-id-text {
            font-size: 12px;
            font-weight: bold;
            color: #1e40af;
            margin-top: 5px;
        }

        /* 2. EVENT HERO BANNER (RICH ROYAL BLUE BACKGROUND) */
        .event-banner {
            background-color: #1e40af;
            color: #ffffff;
            padding: 18px 24px;
        }

        .event-title {
            font-size: 20px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 10px 0;
            line-height: 1.3;
        }

        table.event-meta-table {
            width: 100%;
            border-collapse: collapse;
        }

        table.event-meta-table td {
            padding: 3px 0;
            font-size: 12px;
            color: #e0e7ff;
        }

        .event-meta-label {
            font-weight: bold;
            color: #ffffff;
        }

        /* 3. TICKET BODY (HIGH CONTRAST 2-COLUMN GRID) */
        .ticket-body {
            padding: 22px 24px;
            background-color: #ffffff;
        }

        table.details-grid {
            width: 100%;
            border-collapse: collapse;
        }

        table.details-grid td {
            vertical-align: top;
            width: 50%;
        }

        table.details-grid td.left-col {
            padding-right: 18px;
            border-right: 1px dashed #cbd5e1;
        }

        table.details-grid td.right-col {
            padding-left: 18px;
        }

        .section-header {
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #1e40af;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 6px;
            margin-bottom: 12px;
        }

        table.info-table {
            width: 100%;
            border-collapse: collapse;
        }

        table.info-table td {
            padding: 6px 0;
            font-size: 12px;
            border-bottom: 1px solid #f1f5f9;
        }

        table.info-table tr:last-child td {
            border-bottom: none;
        }

        .info-label {
            color: #334155;
            font-weight: 600;
            width: 44%;
        }

        .info-value {
            color: #0f172a;
            font-weight: bold;
            text-align: right;
            width: 56%;
        }

        .status-badge-paid {
            background-color: #16a34a;
            color: #ffffff;
            padding: 4px 10px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 11px;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge-pending {
            background-color: #dc2626;
            color: #ffffff;
            padding: 4px 10px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 11px;
            display: inline-block;
            text-transform: uppercase;
        }

        /* 4. PERFORATED SECURITY STUB / BARCODE */
        .stub-section {
            background-color: #f8fafc;
            border-top: 2px dashed #94a3b8;
            padding: 16px 24px;
            text-align: center;
        }

        .barcode-box {
            background-color: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 10px 18px;
            margin: 0 auto 8px auto;
            max-width: 360px;
        }

        .barcode-lines {
            letter-spacing: 6px;
            font-family: monospace;
            font-size: 24px;
            font-weight: bold;
            color: #0f172a;
            margin: 0;
            line-height: 1;
        }

        .barcode-token {
            font-size: 12px;
            color: #1e40af;
            font-weight: bold;
            letter-spacing: 2px;
            margin-top: 5px;
            font-family: monospace;
        }

        .scan-instruction {
            font-size: 11px;
            color: #334155;
            font-weight: 600;
        }

        /* 5. ENTRY GUIDELINES & FOOTER */
        .guidelines-section {
            padding: 14px 24px 18px 24px;
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
            font-size: 11px;
            color: #334155;
            line-height: 1.5;
        }

        .guidelines-title {
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .guidelines-section ul {
            margin: 4px 0 0 0;
            padding-left: 18px;
        }

        .guidelines-section li {
            margin-bottom: 2px;
            color: #334155;
        }

        .ticket-footer-note {
            text-align: center;
            font-size: 10px;
            color: #64748b;
            padding-top: 10px;
            border-top: 1px solid #f1f5f9;
            margin-top: 12px;
        }
    </style>
</head>

<body>

@php
    $logoPath = public_path('assets/img/logo/logo.png');
    $logoBase64 = file_exists($logoPath) ? 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath)) : null;

    $eventDate = !empty($booking->event->date) ? \Carbon\Carbon::parse($booking->event->date)->format('l, d F Y') : 'Date to be announced';
    $bookingDate = !empty($booking->created_at) ? \Carbon\Carbon::parse($booking->created_at)->format('d M Y, h:i A') : date('d M Y');

    // Amount & Currency Formatting: Indian Rupee (₹)
    if (!empty($booking->amount_inr)) {
        $formattedAmount = '₹' . number_format($booking->amount_inr, 2);
    } else {
        $formattedAmount = '₹' . number_format($booking->total_amount, 2);
    }

    $tokenRef = 'TKT-' . str_pad($booking->id, 5, '0', STR_PAD_LEFT) . '-' . strtoupper(substr(md5($booking->id . ($booking->created_at ?? date('Ymd'))), 0, 6));
@endphp

<div class="ticket-wrapper">

    <!-- 1. TOP BRANDING BAR (WHITE BG SHOWS LOGO WITH 100% COLOR CLARITY) -->
    <div class="brand-bar">
        <table class="brand-table">
            <tr>
                <td width="60%">
                    @if($logoBase64)
                        <img src="{{ $logoBase64 }}" class="brand-logo-img" alt="Evenza">
                    @else
                        <h1 class="brand-fallback-title">EVENZA</h1>
                    @endif
                    <div class="brand-tagline">Official Event Admission Pass</div>
                </td>
                <td width="40%" class="brand-right">
                    <span class="badge-confirmed">CONFIRMED PASS</span>
                    <div class="ticket-id-text">
                        Pass #{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- 2. EVENT HERO BANNER (SOLID ROYAL BLUE) -->
    <div class="event-banner">
        <h2 class="event-title">{{ $booking->event->title ?? 'Evenza Conference' }}</h2>
        <table class="event-meta-table">
            <tr>
                <td width="55%">
                    <span class="event-meta-label">Date:</span> {{ $eventDate }}
                </td>
                <td width="45%">
                    <span class="event-meta-label">Time:</span> {{ $booking->event->start_time ?? '09:00 AM' }} - {{ $booking->event->end_time ?? '05:00 PM' }}
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 4px;">
                    <span class="event-meta-label">Venue:</span> {{ $booking->event->venue ?? 'Main Auditorium' }}, {{ $booking->event->location ?? 'New York City' }}
                </td>
            </tr>
        </table>
    </div>

    <!-- 3. TICKET INFORMATION (HIGH-CONTRAST 2-COLUMN DETAILS) -->
    <div class="ticket-body">
        <table class="details-grid">
            <tr>
                <!-- LEFT COLUMN: ATTENDEE INFO -->
                <td class="left-col">
                    <div class="section-header">Attendee Information</div>
                    <table class="info-table">
                        <tr>
                            <td class="info-label">Name:</td>
                            <td class="info-value">{{ $booking->name ?: $booking->username }}</td>
                        </tr>
                        <tr>
                            <td class="info-label">Email:</td>
                            <td class="info-value">{{ $booking->email }}</td>
                        </tr>
                        <tr>
                            <td class="info-label">Mobile:</td>
                            <td class="info-value">{{ $booking->mobile ?: 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td class="info-label">Booking Date:</td>
                            <td class="info-value">{{ $bookingDate }}</td>
                        </tr>
                        <tr>
                            <td class="info-label">Booking ID:</td>
                            <td class="info-value">#BK-{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}</td>
                        </tr>
                    </table>
                </td>

                <!-- RIGHT COLUMN: TICKET DETAILS -->
                <td class="right-col">
                    <div class="section-header">Ticket Details</div>
                    <table class="info-table">
                        <tr>
                            <td class="info-label">Pass Type:</td>
                            <td class="info-value">Standard Admission</td>
                        </tr>
                        <tr>
                            <td class="info-label">Total Tickets:</td>
                            <td class="info-value">{{ $booking->tickets }} Ticket(s)</td>
                        </tr>
                        <tr>
                            <td class="info-label">Total Paid:</td>
                            <td class="info-value" style="color: #1e40af; font-size: 13px;">{{ $formattedAmount }}</td>
                        </tr>
                        <tr>
                            <td class="info-label">Payment Mode:</td>
                            <td class="info-value">{{ strtoupper(str_replace('_', ' ', $booking->payment_method ?? 'ONLINE')) }}</td>
                        </tr>
                        <tr>
                            <td class="info-label">Status:</td>
                            <td class="info-value">
                                @if($booking->payment_status === 'paid')
                                    <span class="status-badge-paid">PAID</span>
                                @else
                                    <span class="status-badge-pending">PENDING</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <!-- 4. PERFORATED SECURITY STUB / BARCODE -->
    <div class="stub-section">
        <div class="barcode-box">
            <p class="barcode-lines">||| | |||| || ||| |||| | ||| | ||</p>
            <div class="barcode-token">{{ $tokenRef }}</div>
        </div>
        <div class="scan-instruction">
            Scan this digital pass or quote Code <u>{{ $tokenRef }}</u> at the reception desk.
        </div>
    </div>

    <!-- 5. ENTRY GUIDELINES -->
    <div class="guidelines-section">
        <div class="guidelines-title">Important Entry Guidelines:</div>
        <ul>
            <li>Please present this digital pass (on your smartphone) or a printed copy upon arrival.</li>
            <li>A government-issued photo ID matching the attendee name may be requested at check-in.</li>
            <li>This pass admits <strong>{{ $booking->tickets }} person(s)</strong> and is non-transferable once scanned.</li>
        </ul>
        <div class="ticket-footer-note">
            Evenza Event Management System &bull; 120 Broadway, New York, NY 10271 &bull; support@evenza.com
        </div>
    </div>

</div>

</body>
</html>