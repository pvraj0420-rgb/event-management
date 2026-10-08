<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<!-- Mirrored from nayonacademy.com/html/evenzax/team-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:39 GMT -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themeservices">
    <meta name="description" content="Evenza – Event Conference HTML Template">
    <!-- ======== Page title ============ -->
    <title>Evenza – Event Conference HTML Template</title>
    @include('front.header')

</head>

<body>


    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Breadcrumb Section Start -->
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url('assets/img/inner-page/breadcrumb.jpg');">
                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">
                        <h1 class="breadcrumb-title">Speakers Details</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>Speakers Details</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Team Details Section Start -->
            <section class="team-details-section fix section-padding">
                <div class="container">
                    <div class="team-details-wrapper">
                        <div class="row g-4">
                            <div class="col-xl-5 col-lg-6">
                                <div class="team-details-image fix">
                                    <img data-speed=".8" src="{{ asset('speaker_images/' . $speaker->image) }}" alt="img">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="team-details-content">
                                    <div class="details-head">
                                        <div class="content">
                                            <h3>{{ $speaker->name }}</h3>
                                            <span>{{ $speaker->designation }}</span>
                                        </div>
                                        <div class="social-icon d-flex align-items-center">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                    <p>
                                        {{ $speaker->description }}
                                    </p>
                                    <div class="row details-contact-info justify-content-between">
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 8C5.875 7.97917 4.92708 7.59375 4.15625 6.84375C3.40625 6.07292 3.02083 5.125 3 4C3.02083 2.875 3.40625 1.92708 4.15625 1.15625C4.92708 0.40625 5.875 0.0208333 7 0C8.125 0.0208333 9.07292 0.40625 9.84375 1.15625C10.5938 1.92708 10.9792 2.875 11 4C10.9792 5.125 10.5938 6.07292 9.84375 6.84375C9.07292 7.59375 8.125 7.97917 7 8ZM7 1C6.14583 1.02083 5.4375 1.3125 4.875 1.875C4.3125 2.4375 4.02083 3.14583 4 4C4.02083 4.85417 4.3125 5.5625 4.875 6.125C5.4375 6.6875 6.14583 6.97917 7 7C7.85417 6.97917 8.5625 6.6875 9.125 6.125C9.6875 5.5625 9.97917 4.85417 10 4C9.97917 3.14583 9.6875 2.4375 9.125 1.875C8.5625 1.3125 7.85417 1.02083 7 1ZM8.59375 9.5C10.1146 9.54167 11.3854 10.0729 12.4062 11.0938C13.4271 12.1146 13.9583 13.3854 14 14.9062C14 15.2188 13.8958 15.4792 13.6875 15.6875C13.4792 15.8958 13.2188 16 12.9062 16H1.09375C0.78125 16 0.520833 15.8958 0.3125 15.6875C0.104167 15.4792 0 15.2188 0 14.9062C0.0416667 13.3854 0.572917 12.1146 1.59375 11.0938C2.61458 10.0729 3.88542 9.54167 5.40625 9.5H8.59375ZM12.9062 15C12.9688 15 13 14.9688 13 14.9062C12.9583 13.6562 12.5312 12.6146 11.7188 11.7812C10.8854 10.9688 9.84375 10.5417 8.59375 10.5H5.40625C4.15625 10.5417 3.11458 10.9688 2.28125 11.7812C1.46875 12.6146 1.04167 13.6562 1 14.9062C1 14.9688 1.03125 15 1.09375 15H12.9062Z" fill="#E32682" />
                                                        </svg>

                                                    </div>
                                                    <div class="content">
                                                        <span>Experience</span>
                                                        <h4>{{ $speaker->experience }}</h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.1562 10.4062C15.4688 10.5521 15.6979 10.7708 15.8438 11.0625C15.9896 11.3542 16.0312 11.6667 15.9688 12L15.2812 14.9688C15.1979 15.3021 15.0312 15.5625 14.7812 15.75C14.5312 15.9583 14.2396 16.0625 13.9062 16.0625C11.3229 16.0417 8.98958 15.4062 6.90625 14.1562C4.80208 12.9271 3.13542 11.2604 1.90625 9.15625C0.65625 7.07292 0.0208333 4.73958 0 2.15625C0 1.82292 0.104167 1.53125 0.3125 1.28125C0.5 1.03125 0.760417 0.864583 1.09375 0.78125L4.0625 0.09375C4.39583 0.03125 4.70833 0.0729167 5 0.21875C5.29167 0.364583 5.51042 0.59375 5.65625 0.90625L7.03125 4.09375C7.26042 4.73958 7.125 5.29167 6.625 5.75L5.375 6.78125C6.29167 8.46875 7.59375 9.77083 9.28125 10.6875L10.3125 9.4375C10.7708 8.9375 11.3229 8.80208 11.9688 9.03125L15.1562 10.4062ZM14.3125 14.75L15 11.7812C15.0208 11.5729 14.9375 11.4167 14.75 11.3125L11.5625 9.9375C11.375 9.875 11.2188 9.91667 11.0938 10.0625L9.78125 11.6562C9.61458 11.8438 9.41667 11.8854 9.1875 11.7812C8.125 11.2604 7.17708 10.5729 6.34375 9.71875C5.48958 8.88542 4.80208 7.9375 4.28125 6.875C4.17708 6.64583 4.21875 6.44792 4.40625 6.28125L6 4.96875C6.14583 4.84375 6.1875 4.6875 6.125 4.5L4.75 1.3125C4.66667 1.14583 4.54167 1.0625 4.375 1.0625C4.33333 1.0625 4.30208 1.0625 4.28125 1.0625L1.3125 1.75C1.125 1.8125 1.02083 1.94792 1 2.15625C1.02083 4.55208 1.60417 6.71875 2.75 8.65625C3.91667 10.5938 5.46875 12.1458 7.40625 13.3125C9.34375 14.4583 11.5104 15.0417 13.9062 15.0625C14.1146 15.0417 14.25 14.9375 14.3125 14.75Z" fill="#E32682" />
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <span>Phone Number</span>
                                                        <h4><a href="tel:{{ $speaker->phone }}">{{ $speaker->phone }}</a></h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-5 mt-4 mt-xl-0">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 2C0.0208333 1.4375 0.21875 0.96875 0.59375 0.59375C0.96875 0.21875 1.4375 0.0208333 2 0H14C14.5625 0.0208333 15.0312 0.21875 15.4062 0.59375C15.7812 0.96875 15.9792 1.4375 16 2V10C15.9792 10.5625 15.7812 11.0312 15.4062 11.4062C15.0312 11.7812 14.5625 11.9792 14 12H2C1.4375 11.9792 0.96875 11.7812 0.59375 11.4062C0.21875 11.0312 0.0208333 10.5625 0 10V2ZM1 2V3.25L7.125 7.71875C7.70833 8.11458 8.29167 8.11458 8.875 7.71875L15 3.25V2C15 1.70833 14.9062 1.46875 14.7188 1.28125C14.5312 1.09375 14.2917 1 14 1H1.96875C1.69792 1 1.46875 1.09375 1.28125 1.28125C1.09375 1.46875 0.989583 1.70833 0.96875 2H1ZM1 4.5V10C1 10.2917 1.09375 10.5312 1.28125 10.7188C1.46875 10.9062 1.70833 11 2 11H14C14.2917 11 14.5312 10.9062 14.7188 10.7188C14.9062 10.5312 15 10.2917 15 10V4.5L9.46875 8.53125C9.03125 8.86458 8.54167 9.03125 8 9.03125C7.45833 9.03125 6.96875 8.86458 6.53125 8.53125L1 4.5Z" fill="#E32682" />
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <span>Email Address</span>
                                                        <h4><a href="mailto:{{ $speaker->email }}">{{ $speaker->email }}</a></h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.1562 10.4062C15.4688 10.5521 15.6979 10.7708 15.8438 11.0625C15.9896 11.3542 16.0312 11.6667 15.9688 12L15.2812 14.9688C15.1979 15.3021 15.0312 15.5625 14.7812 15.75C14.5312 15.9583 14.2396 16.0625 13.9062 16.0625C11.3229 16.0417 8.98958 15.4062 6.90625 14.1562C4.80208 12.9271 3.13542 11.2604 1.90625 9.15625C0.65625 7.07292 0.0208333 4.73958 0 2.15625C0 1.82292 0.104167 1.53125 0.3125 1.28125C0.5 1.03125 0.760417 0.864583 1.09375 0.78125L4.0625 0.09375C4.39583 0.03125 4.70833 0.0729167 5 0.21875C5.29167 0.364583 5.51042 0.59375 5.65625 0.90625L7.03125 4.09375C7.26042 4.73958 7.125 5.29167 6.625 5.75L5.375 6.78125C6.29167 8.46875 7.59375 9.77083 9.28125 10.6875L10.3125 9.4375C10.7708 8.9375 11.3229 8.80208 11.9688 9.03125L15.1562 10.4062ZM14.3125 14.75L15 11.7812C15.0208 11.5729 14.9375 11.4167 14.75 11.3125L11.5625 9.9375C11.375 9.875 11.2188 9.91667 11.0938 10.0625L9.78125 11.6562C9.61458 11.8438 9.41667 11.8854 9.1875 11.7812C8.125 11.2604 7.17708 10.5729 6.34375 9.71875C5.48958 8.88542 4.80208 7.9375 4.28125 6.875C4.17708 6.64583 4.21875 6.44792 4.40625 6.28125L6 4.96875C6.14583 4.84375 6.1875 4.6875 6.125 4.5L4.75 1.3125C4.66667 1.14583 4.54167 1.0625 4.375 1.0625C4.33333 1.0625 4.30208 1.0625 4.28125 1.0625L1.3125 1.75C1.125 1.8125 1.02083 1.94792 1 2.15625C1.02083 4.55208 1.60417 6.71875 2.75 8.65625C3.91667 10.5938 5.46875 12.1458 7.40625 13.3125C9.34375 14.4583 11.5104 15.0417 13.9062 15.0625C14.1146 15.0417 14.25 14.9375 14.3125 14.75Z" fill="#E32682" />
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <span>Fax</span>
                                                        <h4><a href="tel:{{ $speaker->fax }}">{{ $speaker->fax }}</a></h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{ route('contact') }}" class="theme-btn">
                                        Contact Me
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="personal-skills-items">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <h3 class="mb-3">About Me</h3>
                                <p class="mt-4">
                                    {{ $speaker->description }}
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="mb-3">Personal skills</h3>
                                <div class="skill-feature">
                                    <h3 class="box-title">{{ $speaker->skill1_name ?? 'Skill 1' }}</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: <?php echo ($speaker->skill1_percent ?? 0); ?>%;">
                                            <div class="progress-value">
                                                <span>{{ $speaker->skill1_percent ?? 0 }}</span>%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-feature">
                                    <h3 class="box-title">{{ $speaker->skill2_name ?? 'Skill 2' }}</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: <?php echo ($speaker->skill2_percent ?? 0); ?>%;">
                                            <div class="progress-value">
                                                <span>{{ $speaker->skill2_percent ?? 0 }}</span>%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-feature">
                                    <h3 class="box-title">{{ $speaker->skill3_name ?? 'Skill 3' }}</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: <?php echo ($speaker->skill3_percent ?? 0); ?>%;">
                                            <div class="progress-value">
                                                <span>{{ $speaker->skill3_percent ?? 0 }}</span>%
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-section-2 section-padding fix pt-0">
            <div class="container">
                <div class="brand-top-text text-center">
                    <p>Our Official Sponsors worldwide with <b>Evenza</b></p>
                </div>
                <div class="swiper brand-slide-2">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-01.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-01.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-02.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-02.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-03.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-03.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-04.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-04.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-05.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-05.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Cta Section Start -->
        <section class="cta-section bg-cover" style="background-image: url('assets/img/home-1/cta-bg.jpg');">
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
</body>

<!-- Mirrored from nayonacademy.com/html/evenzax/team-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:40 GMT -->

</html>