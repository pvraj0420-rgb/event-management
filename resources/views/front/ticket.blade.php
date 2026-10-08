<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Ticket</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }

        .ticket {
            max-width: 800px;
            margin: auto;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            border: 2px dashed #ccc;
        }

        .ticket-header {
            background: #3b82f6;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .ticket-header h1 {
            margin: 0;
            font-size: 28px;
        }

        .ticket-body {
            padding: 20px;
        }

        .section {
            margin-bottom: 15px;
        }

        .section h3 {
            margin-bottom: 8px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
        }

        .row span {
            font-size: 14px;
        }

        .ticket-footer {
            background: #f9fafc;
            padding: 15px;
            text-align: center;
            border-top: 1px dashed #ccc;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .paid {
            background: #10b981;
            color: #fff;
        }

        .pending {
            background: #ef4444;
            color: #fff;
        }

        .print-btn {
            text-align: center;
            margin-top: 15px;
        }

        button {
            padding: 10px 15px;
            background: #3b82f6;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        @media print {
            .print-btn {
                display: none;
            }
        }
    </style>
</head>

<body>

<div class="ticket">

    <!-- Header -->
    <div class="ticket-header">
        <h1>🎟 EVENT TICKET</h1>
        <p>{{ $booking->event->title ?? '' }}</p>
    </div>

    <!-- Body -->
    <div class="ticket-body">

        <!-- Booking Info -->
        <div class="section">
            <h3><i class="fas fa-receipt"></i> Booking Info</h3>
            <div class="row">
                <span>Booking ID:</span>
                <span>#{{ $booking->id }}</span>
            </div>
            <div class="row">
                <span>Date:</span>
                <span>{{ \Carbon\Carbon::parse($booking->created_at)->format('d M Y') }}</span>
            </div>
        </div>

        <!-- User -->
        <div class="section">
            <h3><i class="fas fa-user"></i> Attendee</h3>
            <div class="row">
                <span>Name:</span>
                <span>{{ $booking->username }}</span>
            </div>
            <div class="row">
                <span>Email:</span>
                <span>{{ $booking->email }}</span>
            </div>
            <div class="row">
                <span>Mobile:</span>
                <span>{{ $booking->mobile }}</span>
            </div>
        </div>

        <!-- Event -->
        <div class="section">
            <h3><i class="fas fa-calendar"></i> Event Details</h3>
            <div class="row">
                <span>Date:</span>
                <span>{{ $booking->event->date ?? '' }}</span>
            </div>
            <div class="row">
                <span>Location:</span>
                <span>{{ $booking->event->location ?? '' }}</span>
            </div>
        </div>

        <!-- Ticket Info -->
        <div class="section">
            <h3><i class="fas fa-ticket-alt"></i> Ticket Info</h3>
            <div class="row">
                <span>Tickets:</span>
                <span>{{ $booking->tickets }}</span>
            </div>
            <div class="row">
                <span>Total Amount:</span>
                <span>₹{{ $booking->total_amount }}</span>
            </div>
            <div class="row">
                <span>Status:</span>
                <span>
                    @if($booking->payment_status == 'paid')
                        <span class="badge paid">PAID</span>
                    @else
                        <span class="badge pending">PENDING</span>
                    @endif
                </span>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="ticket-footer">
        <p>✔ Show this ticket at entry</p>
        <p>Thank you for booking!</p>
    </div>

</div>

<div class="print-btn">
    <button onclick="window.print()">Print Ticket</button>
</div>

</body>
</html>