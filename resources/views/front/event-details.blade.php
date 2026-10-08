<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<!-- Mirrored from nayonacademy.com/html/evenzax/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:29 GMT -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themeservices">
    <meta name="description" content="Evenza – Event Conference HTML Template">
    <!-- ======== Page title ============ -->
    <title>Evenza – Event Conference HTML Template</title>

</head>

<body>

    @include('front.header')


    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Breadcrumb Section Start -->
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">
                        <h1 class="breadcrumb-title">Events Details</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>Events Details</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Event Details Section Start -->
            <section class="event-details-section section-padding fix">
                <div class="container">
                    <div class="event-details-wrapper">
                        <div class="details-image">
                            <div class="fix">
                                <img data-speed=".8" src="{{ asset('assets/img/inner-page/event-details.html') }}" alt="img">
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-8">
                                <div class="details-content">
                                    <ul class="info-list wow fadeInUp">
                                        <li>
                                            <i class="fa-light fa-location-dot"></i>
                                            {{$event->location}}
                                        </li>
                                        <li>
                                            <i class="fas fa-microphone-alt"></i>
                                            {{$event->speaker_name ?? 'No Speaker'}}
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-clock"></i>
                                            {{ $event->start_time }} - {{ $event->end_time }}
                                        </li>
                                    </ul>
                                    <h2 class="wow fadeInUp" data-wow-delay=".2s">{{$event->title}}</h2>
                                    <div class="event-list-items wow fadeInUp" data-wow-delay=".5s">
                                        <div class="thumb">

                                            <img src="{{ asset('event_images/'.$event->image) }}"
                                                style="width:100%; border-radius:15px; margin-bottom:15px;">
                                        </div>
                                        <p class="mt-3 wow fadeInUp" data-wow-delay=".3s">
                                            {{ $event->description }}
                                        </p>

                                    </div>

                                    <div class="event-speaker-info-wrapper">
                                        <h2 class="wow fadeInUp" data-wow-delay=".6s">Event Speaker’s</h2>

                                        <!-- Speaker Item 1 -->
                                        @if($speaker)
                                        <div class="event-speaker-info-items wow fadeInUp" data-wow-delay=".7s">

                                            <div class="speaker-image-area">
                                                <div class="image-circle">
                                                    <img src="{{ asset('speaker_images/'.$speaker->image) }}" alt="img">
                                                </div>
                                            </div>

                                            <div class="speaker-content">
                                                <div class="speaker-header">
                                                    <div class="name-info">
                                                        <h3>{{ $speaker->name }}</h3>
                                                        <p>{{ $speaker->designation }}</p>
                                                    </div>
                                                </div>

                                                <hr class="divider">

                                                <p class="speaker-bio">
                                                    {{ $speaker->description }}
                                                </p>
                                            </div>

                                        </div>
                                        @else
                                        <p>No Speaker Found</p>
                                        @endif


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="event-information-wrap">
                                    <div class="event-details-info wow fadeInUp" data-wow-delay=".3s">
                                        <h3>Event Info</h3>
                                        <div class="info-list">
                                            <div class="info-item">
                                                <span class="label">Category:</span>
                                                <span class="value">{{ $event->category }}</span>
                                            </div>
                                            <div class="info-item">
                                                <span class="label">Date:</span>
                                                <span class="value">{{ date('d F, Y', strtotime($event->date)) }}</span>
                                            </div>
                                            <div class="info-item">
                                                <span class="label">Time:</span>
                                                <span class="value">{{ $event->start_time }} - {{ $event->end_time }}</span>
                                            </div>
                                            <div class="info-item">
                                                <span class="label">Phone:</span>
                                                <span class="value"> {{ $event->contact }}</span>
                                            </div>
                                            <div class="info-item">
                                                <span class="label">Location:</span>
                                                <span class="value">{{ $event->location }}</span>
                                            </div>
                                            <div class="info-item">
                                                <span class="label">Venue:</span>
                                                <span class="value">{{ $event->venue }}</span>
                                            </div>
                                            <div class="info-item border-none">
                                                <span class="label">E-mail:</span>
                                                <span class="value">{{ $event->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-purchase-ticket-items qty-wrapper wow fadeInUp" data-wow-delay=".5s">
                                        <h3>Purchase Ticket</h3>

                                        <div class="ticket-card">
                                            <div class="ticket-header">
                                                Silver Pass <span class="sub-text">( Unlimited Tickets)</span>
                                            </div>

                                            <div class="ticket-body">
                                                <div class="column">
                                                    <span class="caption">Ticket Price :</span>
                                                    <span class="amount">
                                                        $<span class="unit-price">29</span>
                                                    </span>
                                                </div>

                                                <div class="column">
                                                    <span class="caption">Quantity :</span>
                                                    <div class="quantity-control">
                                                        <button type="button" class="minus-btn">−</button>
                                                        <input type="text" class="qty-input" value="1" readonly>
                                                        <button type="button" class="plus-btn">+</button>
                                                    </div>
                                                </div>

                                                <div class="column">
                                                    <span class="caption">Sub Total :</span>
                                                    <span class="amount">
                                                        $<span class="sub-total">29.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="total-summary">
                                            <p>
                                                Quantity: <span class="summary-qty">01</span>
                                            </p>
                                            <hr>
                                            <h4>
                                                Total Cost: $<span class="total-cost">29.00</span>
                                            </h4>
                                        </div>

                                        @if(Session::has('user'))
<form id="bookingForm" action="{{ route('booking.page', $event->id) }}" method="GET">

        <input type="hidden" name="qty" id="formQty" value="1">
        <input type="hidden" name="total" id="formTotal" value="29">

        <button type="button" onclick="submitForm()" class="theme-btn w-100">
            Purchase Now
        </button>

    </form>
@endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Cta Section Start -->
            <section class="cta-section bg-cover" style="background-image: url('/assets/img/home-1/cta-bg.jpg');">
                <div class="container">
                    <div class="cta-wrapper">
                        <h2 class="title tx-title sec_title  tz-itm-title tz-itm-anim">Subscribe to our newsletter <br> for daily updates</h2>
                        <form action="#" class="wow fadeInUp" data-wow-delay=".3s">
                            <input type="text" placeholder="Email Address">
                            <button class="theme-btn" type="submit">
                                Subscribe Now
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </section>


            @include('front.footer')
            <script>
let qty = 1;
let price = 29;

const qtyInput = document.querySelector('.qty-input');
const subTotal = document.querySelector('.sub-total');
const totalCost = document.querySelector('.total-cost');
const summaryQty = document.querySelector('.summary-qty');

// buttons
document.querySelector('.plus-btn').addEventListener('click', function() {
    qty++;
    update();
});

document.querySelector('.minus-btn').addEventListener('click', function() {
    if (qty > 1) {
        qty--;
        update();
    }
});

function update() {
    let total = qty * price;

    // UI update
    qtyInput.value = qty;
    subTotal.innerText = total.toFixed(2);
    totalCost.innerText = total.toFixed(2);
    summaryQty.innerText = qty;

    // ✅ SAFE CHECK (NO ERROR NOW)
    let formQty = document.getElementById('formQty');
    let formTotal = document.getElementById('formTotal');

    if (formQty && formTotal) {
        formQty.value = qty;
        formTotal.value = total.toFixed(2);
    }
}
function submitForm() {
    update();

    let form = document.getElementById('bookingForm');
    if (form) {
        form.submit();
    }
}
</script>
</body>

<!-- Mirrored from nayonacademy.com/html/evenzax/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:35 GMT -->

</html>