<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>
</head>

<body>
@include('admin.header')
@include('admin.leftsidebar')

<div class="content-page">
    <div class="content">
        <div class="container-fluid mt-4 px-4">

            <div class="card-box">
                <h4><b>Invoice Details</b></h4>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered"> <!-- FIXED -->

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Invoice No</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Event</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $invoice->id }}</td>
                                <td>{{ $invoice->invoice_no }}</td>
                                <td>{{ $invoice->user->name ?? 'N/A' }}</td>
                                <td>{{ $invoice->user->email ?? 'N/A' }}</td>
                                <td>{{ $invoice->event->title ?? 'N/A' }}</td>
                                <td>{{ $invoice->amount }}</td>

                                <td>
                                    @if($invoice->status == 'paid')
                                        <span style="color:green;font-weight:bold;">Paid</span>
                                    @else
                                        <span style="color:red;font-weight:bold;">Pending</span>
                                    @endif
                                </td>

                                <td>{{ $invoice->created_at }}</td>

                                <td>
                                    
                                    <a href="{{ route('admin.invoice.list') }}"
                                       class="btn btn-secondary btn-sm">
                                        Back
                                    </a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

@include('admin.footer')
</body>
</html>