@include('admin.header')
@include('admin.leftsidebar')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Admin Dashboard</h4>
                    <p class="text-muted page-title-alt">Overview & Real-Time Event Analytics</p>
                </div>
            </div>

            <!-- Stats Widgets -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card-box" style="border-top: 3px solid #3b82f6;">
                        <h4 class="m-t-0 text-muted" style="font-size: 14px; text-transform: uppercase;">Total Events</h4>
                        <h2 class="text-primary m-b-0" style="font-weight: 700;">{{ $totalEvents }}</h2>
                        <p class="text-muted m-t-10 m-b-0" style="font-size: 12px;">Active published events</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card-box" style="border-top: 3px solid #10b981;">
                        <h4 class="m-t-0 text-muted" style="font-size: 14px; text-transform: uppercase;">Total Bookings</h4>
                        <h2 class="text-success m-b-0" style="font-weight: 700;">{{ $totalBookings }}</h2>
                        <p class="text-muted m-t-10 m-b-0" style="font-size: 12px;">Cumulative ticket orders</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card-box" style="border-top: 3px solid #f59e0b;">
                        <h4 class="m-t-0 text-muted" style="font-size: 14px; text-transform: uppercase;">Total Revenue</h4>
                        <h2 class="text-warning m-b-0" style="font-weight: 700;">
                            ₹{{ number_format($totalRevenueInr > 0 ? $totalRevenueInr : $totalRevenue, 2) }}
                        </h2>
                        <p class="text-muted m-t-10 m-b-0" style="font-size: 12px;">
                            Total earnings in INR (₹)
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card-box" style="border-top: 3px solid #8b5cf6;">
                        <h4 class="m-t-0 text-muted" style="font-size: 14px; text-transform: uppercase;">Registered Users</h4>
                        <h2 class="text-purple m-b-0" style="font-weight: 700;">{{ $totalUsers }}</h2>
                        <p class="text-muted m-t-10 m-b-0" style="font-size: 12px;">Registered attendees</p>
                    </div>
                </div>
            </div>

            <!-- Recent Bookings Table -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-6">
                                <h4 class="m-t-0 header-title"><b>Recent Ticket Bookings</b></h4>
                                <p class="text-muted font-13 m-b-0">Latest bookings placed on the system.</p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{ route('admin.bookinglist') }}" class="btn btn-default btn-sm waves-effect">
                                    View All Bookings
                                </a>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Event</th>
                                    <th>Attendee Name</th>
                                    <th>Email</th>
                                    <th>Tickets</th>
                                    <th>Total</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentBookings as $b)
                                <tr>
                                    <td>#{{ $b->id }}</td>
                                    <td><strong>{{ $b->event->title ?? 'N/A' }}</strong></td>
                                    <td>{{ $b->name }}</td>
                                    <td>{{ $b->email }}</td>
                                    <td><span class="badge badge-info">{{ $b->tickets }}</span></td>
                                    <td>
                                        ₹{{ number_format($b->amount_inr ?: $b->total_amount, 2) }}
                                    </td>
                                    <td>
                                        <span class="badge badge-default">{{ strtoupper(str_replace('_', ' ', $b->payment_method)) }}</span>
                                    </td>
                                    <td>
                                        @if($b->payment_status == 'paid')
                                            <span class="label label-success">Paid</span>
                                        @else
                                            <span class="label label-danger">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($b->created_at)->format('d M Y, h:i A') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted">No bookings recorded yet.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@include('admin.footer')