<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Evenza</title>
    @include('front.header')
</head>

<body>
<div id="smooth-wrapper">
<div id="smooth-content">

<!-- Breadcrumb Section Start -->
<section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
    <div class="container">
        <div class="page-heading wow fadeInUp" data-wow-delay=".3s">
            <h1 class="breadcrumb-title">Register</h1>
            <ul class="breadcrumb-list">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</section>

<!-- Register Section Start -->
<section class="contact-section-inner section-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('adddata') }}" method="POST" class="contact-form-box">
                    @csrf

                    <h3 class="wow fadeInUp">Create Your Account</h3>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div style="color: green; margin-bottom:15px; font-weight:600;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Error Message -->
                    @if(session('error'))
                        <div style="color: red; margin-bottom:15px; font-weight:600;">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="row g-4 align-items-center justify-content-center">

                        <!-- Name -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="form-clt">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/contact-icon-01.svg') }}" alt="">
                                </div>
                                <input type="text" name="name" placeholder="Full Name*" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="form-clt">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/contact-icon-02.svg') }}" alt="">
                                </div>
                                <input type="email" name="email" placeholder="Email Address*" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="form-clt">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/contact-icon-03.svg') }}" alt="">
                                </div>
                                <input type="text" name="phone" placeholder="Phone Number*" required>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="form-clt">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/contact-icon-04.svg') }}" alt="">
                                </div>
                                <input type="password" name="password" placeholder="Password*" required>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="form-clt">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/contact-icon-04.svg') }}" alt="">
                                </div>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password*" required>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                            <div class="contact-button">
                                <button type="submit" class="theme-btn">
                                    Register Now
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Already Have Account -->
                        <div class="col-lg-12 text-center mt-3 wow fadeInUp" data-wow-delay=".8s">
                            <p>
                                Already have an account?
                                <a href="{{ route('login') }}" style="color:#ff5e14; font-weight:600;">
                                    Login Here
                                </a>
                            </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('front.footer')

</div>
</div>

</body>
</html>