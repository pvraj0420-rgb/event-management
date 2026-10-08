<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<!-- Mirrored from nayonacademy.com/html/evenzax/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:35 GMT -->

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
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">
                        <h1 class="breadcrumb-title">Speakers</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>Speakers</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Team Section Start -->
            <section class="team-section-3 fix section-padding">
                <div class="container">
                    <div class="row g-4">
                        @foreach($speakers as $speaker)
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp">
                            <div class="team-box-items-3">
                                <div class="thumb">
                                    <img src="{{ asset('speaker_images/'.$speaker->image) }}" alt="">
                                    <img src="{{ asset('speaker_images/'.$speaker->image) }}" alt="">
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('team.details',$speaker->id) }}">{{$speaker->name}}</a></h3>
                                    <p>{{$speaker->designation}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
            <!-- Brand Section End -->

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

<!-- Mirrored from nayonacademy.com/html/evenzax/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:39 GMT -->

</html>