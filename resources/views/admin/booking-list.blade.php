<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>
</head>

<body>
    @include('admin.header')
    @include('admin.leftsidebar')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid mt-4 px-4">
                <div class="card-box">
                    <h4><b>Booking List</b></h4>
                    <div class="table-responsive">
                        <table class="table table-striped table bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Event</th>
                                    <th>Tickets</th>
                                    <th>Date</th>

                                    <!-- ✅ ADDED -->
                                    <th>Payment Method</th>
                                    <th>Status</th>

                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td> {{$book->username}}</td>
                                    <td> {{$book->email}}</td>
                                    <td> {{$book->mobile}}</td>
                                    <td>{{$book->event->title ?? 'N/A'}}</td>
                                    <td>{{$book->tickets}}</td>
                                    <td>{{$book->created_at}}</td>

                                    <!-- ✅ ADDED -->
                                    <td>{{ $book->payment_method }}</td>

                                    <td>
                                        @if($book->payment_status == 'paid')
                                        <span style="color:green;font-weight:bold;">Paid</span>
                                        @else
                                        <span style="color:red;font-weight:bold;">Pending</span>
                                        @endif
                                    </td>

                                    <td>
                                        <!-- ✅ APPROVE BUTTON -->
                                        @if($book->payment_status == 'pending')
                                        <a href="{{ route('admin.approve.payment', $book->id) }}"
                                            class="btn btn-success btn-sm">
                                            Approve
                                        </a>
                                        @endif

                                        <form action="{{ route('admin.deletebooking', $book->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to delete?')">
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
        @include('admin.footer')
</body>

</html>