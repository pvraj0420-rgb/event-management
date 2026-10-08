<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Evenza</title>
       @include('front.header')
</head>

<body>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Breadcrumb Section Start -->
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">
                        <h1 class="breadcrumb-title">Login</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Login Section Start -->
            <section class="contact-section-inner section-padding fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">

                            @if(session('success'))
                            <div style="background:#d4edda;color:#155724;padding:12px;margin-bottom:15px;border-radius:5px;">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if(session('error'))
                            <div style="background:#f8d7da;color:#721c24;padding:12px;margin-bottom:15px;border-radius:5px;">
                                {{ session('error') }}
                            </div>
                            @endif

                            <form action="{{ route('logincheck') }}" method="POST" class="contact-form-box">
                                @csrf

                                <h3 class="wow fadeInUp">Login To Your Account</h3>
                                
                                <div class="row g-4 align-items-center justify-content-center">

                                    <!-- Email -->
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/inner-page/contact-icon-02.svg') }}" alt="">
                                            </div>
                                            <input type="email" name="email" placeholder="Email Address*" required>
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

                                    <!-- Submit -->
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="contact-button">
                                            <button type="submit" class="theme-btn">
                                                Login Now
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </button>
                                        </div>
                                    </div>
<!-- Forgot Password -->
<div class="col-lg-12 text-center mt-2 wow fadeInUp" data-wow-delay=".75s">
    <a href="{{ route('user.forgot.password') }}" style="color:#ff5e14; font-weight:600;">
        Forgot Password?
    </a>
</div>
                                    <!-- Don't Have Account -->
                                    <div class="col-lg-12 text-center mt-3 wow fadeInUp" data-wow-delay=".8s">
                                        <p>
                                            Don't have an account?
                                            <a href="{{ route('register') }}" style="color:#ff5e14; font-weight:600;">
                                                Register Here
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