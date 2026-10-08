<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile - Evenza</title>
      @include('front.header')
</head>

<body>
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Breadcrumb Section Start -->
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">

                        <h1 class="breadcrumb-title">Update Profile</h1>

                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>Update Profile</li>
                        </ul>

                    </div>
                </div>
            </section>


            <!-- Update Profile Section -->
            <section class="contact-section-inner section-padding fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">

                            <form action="{{ route('updatedata') }}" method="POST" class="contact-form-box">
                                @csrf

                                <h3 class="wow fadeInUp">Update Profile</h3>

                                <!-- Success Message -->
                                @if(session('success'))
                                <div style="color:green;margin-bottom:15px;font-weight:600;">
                                    {{ session('success') }}
                                </div>
                                @endif


                                <div class="row g-4 align-items-center justify-content-center">

                                    <!-- Name -->
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="form-clt">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/inner-page/contact-icon-01.svg') }}">
                                            </div>

                                            <input type="text" name="name" value="{{ $record->name ?? '' }}" placeholder="Full Name*" required>

                                        </div>
                                    </div>


                                    <!-- Email -->
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/inner-page/contact-icon-02.svg') }}">
                                            </div>

                                            <input type="email" name="email" value="{{ $record->email ?? '' }}" placeholder="Email Address*" required>

                                        </div>
                                    </div>


                                    <!-- Phone -->
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="form-clt">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/inner-page/contact-icon-03.svg') }}">
                                            </div>

                                            <input type="text" name="phone" value="{{ $record->phone ?? '' }}" placeholder="Phone Number*" required>

                                        </div>
                                    </div>


                                    <!-- Password -->
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/inner-page/contact-icon-04.svg') }}">
                                            </div>

                                            <input type="password" name="password" placeholder="New Password (optional)">

                                        </div>
                                    </div>


                                    <!-- Submit Button -->
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="contact-button">

                                            <button type="submit" class="theme-btn">
                                                Update Profile
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