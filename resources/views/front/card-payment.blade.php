<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Payment - Evenza</title>

    @include('front.header')
</head>

<body>

<div id="smooth-wrapper">
<div id="smooth-content">

    <!-- Breadcrumb -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url('assets/img/inner-page/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading wow fadeInUp">
                <h1 class="breadcrumb-title">Card Payment</h1>
                <ul class="breadcrumb-list">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                    <li>Payment</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Payment Section -->
    <section class="contact-section-inner section-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <!-- FORM START -->
                    <form action="{{ route('card.payment.process') }}" method="POST" class="contact-form-box">
                        @csrf

                        <h3 class="wow fadeInUp">Enter Card Details</h3>

                        <div class="row g-4 align-items-center justify-content-center">

                            <!-- Card Number -->
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="form-clt">
                                    <input type="text" name="card_number" placeholder="Card Number" required>
                                </div>
                            </div>

                            <!-- Card Holder -->
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="form-clt">
                                    <input type="text" name="card_name" value="{{ session('booking_data.name') ?? session('user')->name ?? '' }}" placeholder="Card Holder Name" required>
                                </div>
                            </div>

                            <!-- Expiry -->
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="form-clt">
                                    <input type="text" name="expiry" placeholder="Expiry (MM/YY)" required>
                                </div>
                            </div>

                            <!-- CVV -->
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="form-clt">
                                    <input type="text" name="cvv" placeholder="CVV" required>
                                </div>
                            </div>

                            <!-- Amount -->
                            <div class="col-lg-12 wow fadeInUp">
                                <div class="form-clt">
                                    <input type="text" value="Amount:${{ session('booking_data.tickets') * 29 }}" readonly>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-lg-12 wow fadeInUp">
                                <div class="contact-button">
                                    <button type="submit" class="theme-btn">
                                        Pay Now
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

</body>
</html>