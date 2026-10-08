<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - Evenza</title>
    @include('front.header')
</head>

<body>
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Breadcrumb Section -->
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">

                        <h1 class="breadcrumb-title">My Orders</h1>

                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>My Orders</li>
                        </ul>

                    </div>
                </div>
            </section>

            <!-- My Orders Section -->
            <section class="contact-section-inner section-padding fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">

                            <div class="contact-form-box">

                                <h3 class="wow fadeInUp">My Booking List</h3>

                                @if($bookings->isEmpty())
                                <p>No bookings found</p>
                                @else

                                <div class="table-responsive">
                                    <table class="table table-bordered mt-3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Event</th>
                                                <th>Tickets</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Ticket</th>
                                                <th>Invoice</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($bookings as $book)
                                            <tr>
                                                <td>{{ $book->id }}</td>
                                                <td>{{ $book->event->title ?? 'N/A' }}</td>
                                                <td>{{ $book->tickets }}</td>
                                                <td>{{ $book->payment_method }}</td>

                                                <td>
                                                    @if($book->payment_status == 'paid')
                                                    <span style="color:green;font-weight:600;">Paid</span>
                                                    @else
                                                    <span style="color:red;font-weight:600;">Pending</span>
                                                    @endif
                                                </td>

                                                <td>{{ $book->created_at }}</td>

                                                <!-- ✅ DOWNLOAD BUTTON -->
                                                <td>
                                                    @if($book->payment_status == 'paid')
                                                    <a href="{{ route('download.ticket', $book->id) }}" class="btn btn-success btn-sm">
                                                        Download Ticket
                                                    </a>
                                                    @else
                                                    <span style="color:red;">Not Available</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($book->payment_status == 'paid')
                                                    <a href="{{ route('invoice.download', $book->id) }}" class="btn btn-primary btn-sm">
                                                        Download Invoice
                                                    </a>
                                                    @else
                                                    <span style="color:red;">Not Available</span>
                                                    @endif
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            @include('front.footer')

        </div>
    </div>

</body>

</html>