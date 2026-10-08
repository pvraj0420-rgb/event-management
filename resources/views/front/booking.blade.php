<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - Evenza</title>

    @include('front.header')
</head>

<body>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Breadcrumb Section -->
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url('assets/img/inner-page/breadcrumb.jpg');">
                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">
                        <h1 class="breadcrumb-title">Event Booking</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>Booking</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Booking Section -->
            <section class="contact-section-inner section-padding fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">

                            <!-- Success Message -->
                            @if(session('success'))
                            <div style="background:#d4edda;color:#155724;padding:12px;margin-bottom:15px;border-radius:5px;">
                                {{ session('success') }}
                            </div>
                            @endif

                            <!-- FORM START -->
                            <form action="{{ route('book.event') }}" method="POST" class="contact-form-box">
                                @csrf

                                <h3 class="wow fadeInUp">Book Your Event</h3>

                                <div class="row g-4 align-items-center justify-content-center">

                                    <!-- Event Info -->
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <h4>{{ $event->title }}</h4>
                                            <p><b>Location:</b> {{ $event->location }}</p>
                                            <p><b>Date:</b> {{ $event->date }}</p>
                                           <p><b>Tickets:</b> <span id="showTickets">{{$qty}}</span></p>
<p><b>Total Price:</b> $<span id="showTotal">{{$total}}</span></p>
                                        </div>
                                    </div>

                                    <!-- Hidden Event ID -->
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">

                                    <!-- Name -->
                                    <div class="col-lg-6 wow fadeInUp">
                                        <div class="form-clt">
                                            <input type="text" name="name" placeholder="Your Name*" required>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-lg-6 wow fadeInUp">
                                        <div class="form-clt">
                                            <input type="email" name="email" placeholder="Email Address*" required>
                                        </div>
                                    </div>

                                    <!-- Mobile -->
                                    <div class="col-lg-6 wow fadeInUp">
                                        <div class="form-clt">
                                            <input type="text" name="mobile" placeholder="Mobile Number*" required>
                                        </div>
                                    </div>

                                    <!-- Tickets -->
                                    <div class="col-lg-6 wow fadeInUp">
                                        <div class="form-clt">
                                    <input type="number" id="ticketInput" name="tickets" value="{{ $qty }}" min="1">

<input type="hidden" id="totalInput" name="total_amount" value="{{ $total }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp">
    <div class="form-clt">
        <label><b>Select Payment Method</b></label>
        <select name="payment_method" required 
            style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
            
            <option value="">-- Select Payment --</option>
            <option value="card">Card Payment</option>
            <option value="cash">Cash Payment</option>
            <option value="offline">Offline Payment</option>

        </select>
    </div>
</div>

                                    <!-- Submit -->
                                    <div class="col-lg-12 wow fadeInUp">
                                        <div class="contact-button">
                                            <button type="submit" class="theme-btn">
                                                Book Now
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!-- FORM END -->

                        </div>
                    </div>
                </div>
            </section>

            @include('front.footer')

        </div>
    </div>
<script>



let price = Number("{{ $event->price ?? 29 }}");

let ticketInput = document.getElementById('ticketInput');
let totalInput = document.getElementById('totalInput');

let showTickets = document.getElementById('showTickets');
let showTotal = document.getElementById('showTotal');

ticketInput.addEventListener('input', function () {

    let qty = this.value;
    let total = qty * price;

    // update UI
    showTickets.innerText = qty;
    showTotal.innerText = total;

    // update hidden input
    totalInput.value = total;
});
</script>
</body>

</html>