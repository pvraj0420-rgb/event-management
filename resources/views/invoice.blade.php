<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #333;
        }

        .container {
            width: 100%;
            padding: 20px;
        }

        .header {
            border-bottom: 2px solid #4f46e5;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .company {
            font-size: 20px;
            font-weight: bold;
            color: #4f46e5;
        }

        .right {
            text-align: right;
        }

        table {
            width: 100%;
        }

        .box {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .box h3 {
            margin-bottom: 8px;
            color: #4f46e5;
        }

        table.items {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table.items th {
            background: #4f46e5;
            color: #fff;
            padding: 10px;
            border: 1px solid #ddd;
        }

        table.items td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .text-right {
            text-align: right;
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-size: 16px;
            font-weight: bold;
            color: #4f46e5;
        }

        .footer {
            margin-top: 40px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            text-align: center;
            font-size: 11px;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- HEADER -->
        <table class="header">
            <tr>
                <td>
                    
                    
                    @if(file_exists(public_path('assets/img/logo/logo.png')))
    <img src="{{ public_path('assets/img/logo/logo.png') }}" width="120">
@endif

                    <div class="company">Evenza</div>
                    <div>Apple Upper West Side, Brooklyn</div>

                </td>

                <td class="right">
                    <h1 style="color:#4f46e5; margin:0;">INVOICE</h1>
                    <p><strong># {{ $invoice->invoice_no }}</strong></p>
                    <p>{{ date('d M Y') }}</p>
                </td>
            </tr>
        </table>

        <!-- DETAILS -->
        <table>
            <tr>
                <td width="50%">
                    <div class="box">
                        <h3>Customer</h3>
                        <p>Name: {{ $invoice->user->name }}</p>
                        <p>Email: {{ $invoice->user->email }}</p>
                    </div>
                </td>

                <td width="50%">
                    <div class="box">
                        <h3>Event</h3>
                        <p>{{ $invoice->event->title }}</p>
                        <p>Date: {{ $invoice->event->date }}</p>
                    </div>
                </td>
            </tr>
        </table>

        <!-- ITEMS -->
        <table class="items">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th class="text-right">Amount</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{ $invoice->event->title }}</td>
                    <td class="text-right">${{ $invoice->amount }}</td>
                </tr>
            </tbody>
        </table>

        <!-- TOTAL -->
        <div class="total">
            Total: ${{ $invoice->amount }}
        </div>

        <!-- FOOTER -->
        <div class="footer">
            Thank you for your booking!
        </div>

    </div>

</body>

</html>