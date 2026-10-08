<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reset Password - Evenza</title>
    @include('front.header')
</head>

<body>
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Breadcrumb Section Start -->
            <section class="breadcrumb-wrapper bg-cover fix"
                style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">

                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">

                        <h1 class="breadcrumb-title">Reset Password</h1>

                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>Reset Password</li>
                        </ul>

                    </div>
                </div>
            </section>


            <!-- Reset Password Section -->
            <section class="contact-section-inner section-padding fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">

                            <form action="{{ route('user.update.password') }}" method="POST" class="contact-form-box">
                                @csrf

                                <h3 class="wow fadeInUp">Reset Password</h3>

                                <!-- Error Message -->
                                @if(session('error'))
                                <div style="color:red;margin-bottom:15px;font-weight:600;">
                                    {{ session('error') }}
                                </div>
                                @endif

                                <div class="row g-4 align-items-center justify-content-center">

                                    <!-- New Password -->
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="form-clt">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/inner-page/contact-icon-04.svg') }}">
                                            </div>

                                            <input type="password" name="password"
                                                placeholder="Enter New Password*" required>

                                        </div>
                                    </div>


                                    <!-- Submit Button -->
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="contact-button">

                                            <button type="submit" class="theme-btn">
                                                Update Password
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </button>

                                        </div>
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