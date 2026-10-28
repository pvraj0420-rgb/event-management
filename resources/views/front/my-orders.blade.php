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
                                    <table class="table table-bordered table-hover align-middle mt-3">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="text-center" width="60">#ID</th>
                                                <th>Event</th>
                                                <th class="text-center">Tickets</th>
                                                <th>Payment Method</th>
                                                <th class="text-center">Status</th>
                                                <th>Date</th>
                                                <th class="text-center">Ticket</th>
                                                <th class="text-center">Invoice</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($bookings as $book)
                                            <tr>
                                                <td class="text-center font-weight-bold">#{{ $book->id }}</td>
                                                <td>
                                                    <strong>{{ $book->event->title ?? 'N/A' }}</strong>
                                                    @if(!empty($book->event->date))
                                                        <br><small class="text-muted"><i class="fa-regular fa-calendar-days"></i> {{ \Carbon\Carbon::parse($book->event->date)->format('d M Y') }}</small>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-secondary">{{ $book->tickets }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-capitalize">{{ strtoupper(str_replace('_', ' ', $book->payment_method ?? 'ONLINE')) }}</span>
                                                </td>

                                                <td class="text-center">
                                                    @if($book->payment_status == 'paid')
                                                    <span class="badge bg-success" style="font-size: 12px; padding: 6px 10px;">Paid</span>
                                                    @else
                                                    <span class="badge bg-warning text-dark" style="font-size: 12px; padding: 6px 10px;">Pending</span>
                                                    @endif
                                                </td>

                                                <td>{{ !empty($book->created_at) ? \Carbon\Carbon::parse($book->created_at)->format('d M Y') : 'N/A' }}</td>

                                                <!-- ✅ DOWNLOAD TICKET BUTTON -->
                                                <td class="text-center">
                                                    @if($book->payment_status == 'paid')
                                                    <a href="{{ route('download.ticket', $book->id) }}" class="btn btn-success btn-sm text-nowrap">
                                                        <i class="fa-solid fa-ticket"></i> Download Ticket
                                                    </a>
                                                    @else
                                                    <span class="badge bg-light text-muted">Not Available</span>
                                                    @endif
                                                </td>

                                                <!-- ✅ DOWNLOAD INVOICE BUTTON -->
                                                <td class="text-center">
                                                    @if($book->payment_status == 'paid')
                                                    <a href="{{ route('invoice.download', $book->id) }}" class="btn btn-primary btn-sm text-nowrap">
                                                        <i class="fa-solid fa-file-invoice"></i> Download Invoice
                                                    </a>
                                                    @else
                                                    <span class="badge bg-light text-muted">Not Available</span>
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