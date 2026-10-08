<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice List</title>
</head>

<body>
    @include('admin.header')
    @include('admin.leftsidebar')

    <div class="content-page">
        <div class="content">

            <div class="container">

                <div class="row">
                    <div class="col-sm-12">

                        @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <h4 class="m-t-0 header-title"><b>All Invoices</b></h4>

                                    <table id="datatable" class="table table-striped table-bordered">
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($invoices as $invoice)
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
                                                    <a href="{{ route('invoice.view', $invoice->id) }}"
                                                       class="btn btn-info btn-sm">
                                                        View
                                                    </a>


                                                      <form action="{{ route('admin.invoice.delete', $invoice->id) }}" 
          method="POST" 
          style="display:inline;">
        @csrf
        @method('DELETE')

        <button type="submit" 
                class="btn btn-danger btn-sm"
                onclick="return confirm('Are you sure to delete this invoice?')">
            Delete
        </button>
    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('admin.footer')
</body>

</html>