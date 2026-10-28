<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment (Razorpay / RuPay) - Evenza</title>

    @include('front.header')
</head>

<body>

<div id="smooth-wrapper">
<div id="smooth-content">

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url('{{ asset('assets/img/inner-page/breadcrumb.jpg') }}');">
        <div class="container">
            <div class="page-heading wow fadeInUp">
                <h1 class="breadcrumb-title">Secure Online Payment</h1>
                <ul class="breadcrumb-list">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                    <li>Razorpay / RuPay Payment</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Payment Details Section -->
    <section class="contact-section-inner section-padding fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">

                    <div class="contact-form-box" style="background:#fff; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,0.06); padding:40px;">
                        <h3 class="wow fadeInUp" style="margin-bottom:20px;">Complete Your Booking</h3>

                        <!-- Booking Summary -->
                        <div class="table-responsive mb-4">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 40%; background:#f9f9f9;">Event</th>
                                        <td><strong>{{ $event->title }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th style="background:#f9f9f9;">Attendee Name</th>
                                        <td>{{ $booking->name }}</td>
                                    </tr>
                                    <tr>
                                        <th style="background:#f9f9f9;">Registered Email</th>
                                        <td>{{ $booking->email }}</td>
                                    </tr>
                                    <tr>
                                        <th style="background:#f9f9f9;">Total Tickets</th>
                                        <td>{{ $booking->tickets }} ticket(s)</td>
                                    </tr>
                                    <tr>
                                        <th style="background:#f9f9f9;">Total Amount</th>
                                        <td>
                                            <span style="font-size:1.25rem; font-weight:700; color:#198754;">
                                                ₹{{ number_format($totalInr, 2) }}
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Supported Payment Methods Banner -->
                        <div class="p-3 mb-4 rounded text-center" style="background:#f3f6f9; border:1px dashed #ced4da;">
                            <span class="d-block mb-2 text-muted" style="font-size:0.88rem; font-weight:600;">
                                Supported Payment Channels
                            </span>
                            <span class="badge bg-primary me-1 mb-1">RuPay Cards</span>
                            <span class="badge bg-success me-1 mb-1">UPI (GPay, PhonePe, Paytm)</span>
                            <span class="badge bg-info text-dark me-1 mb-1">NetBanking</span>
                            <span class="badge bg-secondary mb-1">Visa & Mastercard</span>
                        </div>

                        <!-- Hidden POST form for signature verification -->
                        <form id="razorpay-response-form" action="{{ route('razorpay.verify') }}" method="POST">
                            @csrf
                            <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                            <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" value="{{ $orderId }}">
                            <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                        </form>

                        <div class="contact-button text-center mt-3">
                            <button type="button" id="pay-btn" class="theme-btn" style="min-width:240px;">
                                Pay ₹{{ number_format($totalInr, 2) }} Now
                                <i class="fa-solid fa-lock ms-2"></i>
                            </button>
                        </div>

                        <p class="text-center text-muted mt-3 mb-0" style="font-size:0.85rem;">
                            <i class="fa-solid fa-shield-halved text-success me-1"></i>
                            256-Bit Encrypted Payment Powered by Razorpay
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('front.footer')

</div>
</div>

<!-- Razorpay Checkout Integration -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    const razorpayKey = "{{ $razorpayKey }}";
    const orderId = "{{ $orderId }}";
    const amountInPaise = {{ $amountInPaise }};
    const bookingId = {{ $booking->id }};

    const options = {
        key: razorpayKey,
        amount: amountInPaise,
        currency: "INR",
        name: "Evenza Event Management",
        description: "{{ $event->title }} - {{ $booking->tickets }} Ticket(s)",
        order_id: orderId,
        handler: function (response) {
            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
            document.getElementById('razorpay_order_id').value = response.razorpay_order_id || orderId;
            document.getElementById('razorpay_signature').value = response.razorpay_signature || '';
            document.getElementById('razorpay-response-form').submit();
        },
        prefill: {
            name: "{{ $booking->name }}",
            email: "{{ $booking->email }}",
            contact: "{{ $booking->mobile }}"
        },
        theme: {
            color: "#e63946"
        }
    };

    document.getElementById('pay-btn').addEventListener('click', function (e) {
        e.preventDefault();
        if (typeof Razorpay !== 'undefined' && razorpayKey && !razorpayKey.startsWith('rzp_test_51a37c35')) {
            const rzp = new Razorpay(options);
            rzp.on('payment.failed', function (response) {
                alert("Payment Failed: " + response.error.description);
            });
            rzp.open();
        } else {
            // Local simulation / fallback for testing
            if (confirm("Proceed with simulated test payment for ₹{{ number_format($totalInr, 2) }}?")) {
                document.getElementById('razorpay_payment_id').value = 'pay_simulated_' + Math.random().toString(36).substring(7);
                document.getElementById('razorpay_signature').value = 'simulated_signature';
                document.getElementById('razorpay-response-form').submit();
            }
        }
    });
</script>

</body>
</html>
