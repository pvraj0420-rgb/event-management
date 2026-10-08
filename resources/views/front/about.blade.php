<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<!-- Mirrored from nayonacademy.com/html/evenzax/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:05 GMT -->

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

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div id="smooth-wrapper">
        <div id="smooth-content">


            <!-- Breadcrumb Section Start -->
            <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
                <div class="container">
                    <div class="page-heading wow fadeInUp" data-wow-delay=".3s">
                        <h1 class="breadcrumb-title">About Us</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- About Creativity Section Start -->
            <section class="about-creativity-section section-padding fix">
                <div class="container">
                    <div class="about-creativity-wrapper">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-7 col-lg-6">
                                <div class="about-creativity-left-items">
                                    <div class="section-title mb-0">
                                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                            The Journey of Creativity Unleashed <span class="line-2"></span>
                                        </h6>
                                        <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                                            The Journey of How Creativity, Community, and Collaboration Came Together
                                        </h2>
                                    </div>

                                    <p class="creativity-text wow fadeInUp" data-wow-delay=".2s">
                                        It started with a simple idea: what if the world’s most imaginative minds had one place to collide, create, and inspire each other?
                                    </p>

                                    <p class="mt-3 wow fadeInUp" data-wow-delay=".4s">
                                        In 2017, a small group of artists, designers, and creative technologists gathered in a local studio with one vision Evenza to build something different.
                                    </p>

                                    <a href="{{ route('contact') }}" class="theme-btn wow fadeInUp" data-wow-delay=".6s">
                                        Buy Ticket
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>

                                    <div class="list-items">
                                        <ul>
                                            <li>World-Class Speakers Industry Leaders</li>
                                            <li>Cutting-Edge Topics & Insights</li>
                                        </ul>
                                        <ul>
                                            <li>Interactive Workshops & Hands-On</li>
                                            <li>Opportunities</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-5 col-lg-6">
                                <div class="about-creativity-right-items">
                                    <div class="thumb wow fadeInUp" data-wow-delay=".2s">
                                        <img src="{{ asset('assets/img/inner-page/about-01.html') }}" alt="img">
                                        <div class="sm-thumb">
                                            <img src="{{ asset('assets/img/inner-page/about-ratting.html') }}" alt="img">
                                        </div>
                                    </div>

                                    <p class="wow fadeInUp" data-wow-delay=".4s">
                                        The NextGen Education Conference is an annual gathering...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Feature Award Section Start -->
            <section class="feature-award-section section-padding fix pt-0">
                <div class="container">
                    <div class="feature-award-wrapper">

                        <div class="feature-award-wrap">
                            <div class="number">2022</div>
                            <div class="feature-award-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/feature-award-01.html') }}" alt="img">
                                </div>
                                <h3>The First Workshop</h3>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="feature-award-wrap">
                            <div class="number">2023</div>
                            <div class="feature-award-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/feature-award-02.html') }}" alt="img">
                                </div>
                                <h3>First Global Conference</h3>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="feature-award-wrap">
                            <div class="number">2024</div>
                            <div class="feature-award-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/feature-award-03.html') }}" alt="img">
                                </div>
                                <h3>10,000+ Creatives</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!-- Join Event Section Start -->
            <section class="join-event-section section-padding fix bg-cover"
                style="background-image: url('assets/img/inner-page/join-event-bg.html');">

                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="event-join-box-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/join-event-icon-01.html') }}" alt="img">
                                </div>
                                <h3>Experienced Specker</h3>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="event-join-box-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/join-event-icon-02.html') }}" alt="img">
                                </div>
                                <h3>Live Workshop Program</h3>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="event-join-box-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/join-event-icon-03.html') }}" alt="img">
                                </div>
                                <h3>Exciting Q&A Sessions</h3>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="event-join-box-items">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/inner-page/join-event-icon-04.html') }}" alt="img">
                                </div>
                                <h3>Exciting Giveaways Program</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!-- Achieve Success Section Start -->
            <section class="achieve-success-section section-padding fix">
                <div class="container">
                    <div class="row g-4">

                        <div class="col-xl-6 col-lg-6">
                            <div class="achieve-left-thumb">
                                <img src="{{ asset('assets/img/inner-page/achive-01.html') }}" alt="img">
                                <div class="sm-thumb">
                                    <img src="{{ asset('assets/img/inner-page/achive-02.html') }}" alt="img">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/inner-page/achive-icon-01.html') }}" alt="img">
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/inner-page/achive-icon-02.html') }}" alt="img">
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Team Section Start -->
            <section class="team-section section-padding fix bg-cover"
                style="background-image: url('assets/img/inner-page/team-bg.html');">

                <div class="container">
                    <div class="section-title text-center">
                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                            <span class="line-1"></span>
                            Our speakers
                            <span class="line-2"></span>
                        </h6>
                        <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                            Meet our great event speaker
                        </h2>
                    </div>

                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="team-box-items-3 style-2">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/inner-page/team-01.html') }}" alt="">
                                    <img src="{{ asset('assets/img/inner-page/team-01.html') }}" alt="">
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="{{ route('team.details', $speakers[0]->id) }}">Dianne Russell</a>
                                    </h3>
                                    <p>Innovative Speaker</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="team-box-items-3 style-2">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/inner-page/team-02.html') }}" alt="">
                                    <img src="{{ asset('assets/img/inner-page/team-02.html') }}" alt="">
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="{{ route('team.details', $speakers[0]->id) }}">Jenny Wilson</a>
                                    </h3>
                                    <p>Innovative Speaker</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="team-box-items-3 style-2">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/inner-page/team-03.html') }}" alt="">
                                    <img src="{{ asset('assets/img/inner-page/team-03.html') }}" alt="">
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="{{ route('team.details', $speakers[0]->id) }}">Esther Howard</a>
                                    </h3>
                                    <p>Innovative Speaker</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="team-box-items-3 style-2">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/inner-page/team-04.html') }}" alt="">
                                    <img src="{{ asset('assets/img/inner-page/team-04.html') }}" alt="">
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="{{ route('team.details', $speakers[0]->id) }}">Robert Fox</a>
                                    </h3>
                                    <p>Innovative Speaker</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Brand Section Start -->
            <div class="brand-section section-padding fix">
                <div class="container">
                    <div class="section-title text-center">
                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                            <span class="line-1"></span>
                            Our Platinum Sponsors
                            <span class="line-2"></span>
                        </h6>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Our Official Sponsors</h2>
                    </div>

                    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-2 row-cols-2 g-0 wow fadeInUp" data-wow-delay=".3s">

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-01.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-01.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-02.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-02.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-03.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-03.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-04.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-04.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-05.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-05.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-06.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-06.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-07.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-07.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-08.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-08.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-09.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-09.png') }}" alt="img">
                                </span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="brand-box">
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-10.png') }}" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="{{ asset('assets/img/home-1/brand-10.png') }}" alt="img">
                                </span>
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

<!-- Mirrored from nayonacademy.com/html/evenzax/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:24 GMT -->

</html>