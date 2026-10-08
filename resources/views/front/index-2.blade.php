<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<!-- Mirrored from nayonacademy.com/html/evenzax/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:49:40 GMT -->

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

    <!-- Search Start -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" name="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="search-btn">
                    <span><i class="fa-regular fa-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
    </div>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Hero Section2 Start -->
            <section class="hero-section-2 hero-2 fix bg-cover" style="background-image: url('assets/img/home-2/hero-bg.jpg');">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Events <br>
                            <span class="hero-sm-img"><img src="{{ asset('assets/img/home-2/hero-sm-img.jpg') }}" alt="img"></span>
                            <span class="hero-text">Conference</span>
                        </h1>
                    </div>
                    <div class="hero-countdown-wrapper">
                        <div class="cooming-soon-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="coming-soon-time" data-event-time="2026-12-31T23:59:59">
                                <div class="timer-content">
                                    <h2 id="day">00</h2>
                                    <span>Days</span>
                                </div>
                                <div class="timer-content">
                                    <h2 id="hour">00</h2>
                                    <span>HRS</span>
                                </div>
                                <div class="timer-content">
                                    <h2 id="min">00</h2>
                                    <span>Mins</span>
                                </div>
                                <div class="timer-content">
                                    <h2 id="sec">00</h2>
                                    <span>Secs</span>
                                </div>
                            </div>
                        </div>
                        <div class="hero-bottom-area wow fadeInUp" data-wow-delay=".5s">
                            <div class="frist-text">
                                <p>20-25</p>
                                <h3>November 2026 </h3>
                            </div>
                            <div class="middle-text">
                                <h3>Minere Arena Banqute Hall</h3>
                                <p>Ciudad Deportiva Collado Villalba, Madrid, Spain</p>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn">
                                Book Your Set
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section2 Start -->
            <section class="about-section-2 section-padding fix">
                <div class="container">
                    <div class="about-wrapper-2">
                        <div class="top-area">
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Creative Conference is a global gathering of designers, storytellers, artists, innovators, and forward-thinkers redefining the boundaries of creativity</h2>
                        </div>
                        <div class="about-main-content">
                            <div class="row g-4">
                                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="frist-content">
                                        <div class="section-title">
                                            <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                                Creative Minds Together
                                            </h6>
                                        </div>
                                        <div class="about-image">
                                            <img src="{{ asset('assets/img/home-2/about-image-01.png') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 order-2 order-md-1 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="middle-content">
                                        <div class="about-text">
                                            <img src="{{ asset('assets/img/home-2/about-text.png') }}" alt="img">
                                        </div>
                                        <div class="about-client-img-area">
                                            <div class="client-img">
                                                <img src="{{asset('assets/img/home-2/about-client.png') }}" alt="img">
                                            </div>
                                            <h3>15,000+ Creatives Worldwide</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-6 order-1 order-md-2">
                                    <div class="about-last-content">
                                        <div class="about-img">
                                            <div class="fix img-custom-anim-right">
                                                <img src="{{  asset('assets/img/home-2/about-image-02.html') }}" alt="img">
                                            </div>
                                            <a href="{{ route('contact') }}" class="theme-btn">
                                                Contact Us
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </a>
                                        </div>
                                        <p class="wow fadeInUp" data-wow-delay=".3s">
                                            Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut
                                        </p>
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
                                        <img src="{{  asset('assets/img/home-1/brand-04.png') }}" alt="img">
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

            <!-- Event Venue Section2 Start -->
            <section class="event-venue-section-2 pb-0 section-padding fix bg-cover" style="background-image: url('assets/img/home-2/event-value-01.html');">
                <div class="container">
                    <div class="event-venue-wrapper-2">
                        <div class="event-left-content">
                            <div class="section-title">
                                <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                    Our Event Venue <span class="line-2"></span></h6>
                                <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">Detailed Information On <br> Event Schedule & Timings</h2>
                            </div>
                        </div>
                        <ul class="event-right-items wow fadeInUp" data-wow-delay=".3s">
                            <li>
                                <div class="icon">
                                    <i class="fa-light fa-calendar"></i>
                                </div>
                                <div class="content">
                                    <h4>24-25 December 2026</h4>
                                    <p>10:00 AM – 2.00 PM</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Mine Arena Banq Hall</h4>
                                    <p>23rd Villalba, Madrid, Spain,</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-navs">
                        <ul class="nav">
                            <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                                <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                    <div class="text-items">
                                        <span class="text1">Day 01</span>
                                        <span class="text2">Dec 25, 2026</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                                <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                    <div class="text-items">
                                        <span class="text1">Day 02</span>
                                        <span class="text2">Dec 22, 2026</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item wow fadeInUp" data-wow-delay=".6s">
                                <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                    <div class="text-items">
                                        <span class="text1">Day 03</span>
                                        <span class="text2">Dec 24, 2026</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                                <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                    <div class="text-items">
                                        <span class="text1">Day 04</span>
                                        <span class="text2">Dec 27, 2026</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Event Section2 Start -->
            <div class="event-section-2 section-padding fix pt-0">
                <div class="tab-content">
                    <div id="thumb1" class="tab-pane fade show active">
                        <div class="container">

                            @foreach($events as $event)
                            <div class="event-box-wrapper-2">
                                <div class="event-content-area">
                                    <div class="event-thumb">
                                        <img src="{{ asset('assets/img/home-2/event-01.html') }}" alt="img">
                                        <img src="{{ asset('assets/img/home-2/event-01.html') }}" alt="img">
                                    </div>
                                    <div class="event-content">
                                        <div class="date-item">
                                            <i class="fa-light fa-calendar"></i>
                                            24, Sep 2026
                                        </div>
                                        <h3><a href="{{ route('event.details', $event->id) }}">The Future of AI Trends <br> & Innovations</a></h3>
                                        <p>Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut</p>
                                        <a href="{{ route('event.details', $event->id) }}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="client-info-area">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/home-1/service-client-01.png') }}" alt="img">
                                    </div>
                                    <ul class="client-info">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-01.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Entry Fee: <span>$59/Per Person</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-02.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Timing: <span>10:00 AM – 2.00 PM</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-03.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Location: <span>Main Auditorium, TechHub Conference Center</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="event-box-wrapper-2">
                                <div class="event-content-area">
                                    <div class="event-thumb">
                                        <img src="{{ asset('assets/img/home-2/event-02.html') }}" alt="img">
                                        <img src="{{ asset('assets/img/home-2/event-02.html') }}" alt="img">
                                    </div>
                                    <div class="event-content">
                                        <div class="date-item">
                                            <i class="fa-light fa-calendar"></i>
                                            24, Sep 2026
                                        </div>
                                        <h3><a href="{{ route('event.details', $event->id) }}">Cybersecurity Protecting <br> Data & Privacy</a></h3>
                                        <p>Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut</p>
                                        <a href="{{ route('event.details', $event->id) }}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="client-info-area">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/home-1/service-client-01.png') }}" alt="img">
                                    </div>
                                    <ul class="client-info">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-01.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Entry Fee: <span>$59/Per Person</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-02.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Timing: <span>10:00 AM – 2.00 PM</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-03.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Location: <span>Main Auditorium, TechHub Conference Center</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    
                    </div>
                    <div id="thumb2" class="tab-pane fade">
                        <div class="container">

                            @foreach($events as $event)
                            <div class="event-box-wrapper-2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="event-content-area">
                                    <div class="event-thumb">
                                        <img src="{{ asset('assets/img/home-2/event-01.html')}}" alt="img">
                                        <img src="{{ asset('assets/img/home-2/event-01.html')}}" alt="img">
                                    </div>
                                    <div class="event-content">
                                        <div class="date-item">
                                            <i class="fa-light fa-calendar"></i>
                                            24, Sep 2026
                                        </div>
                                        <h3><a href="{{ route('event.details', $event->id) }}">The Future of AI Trends <br> & Innovations</a></h3>
                                        <p>Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut</p>
                                        <a href="{{ route('event.details', $event->id) }}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="client-info-area">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/home-1/service-client-01.png') }}" alt="img">
                                    </div>
                                    <ul class="client-info">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-01.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Entry Fee: <span>$59/Per Person</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Timing: <span>10:00 AM – 2.00 PM</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-03.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Location: <span>Main Auditorium, TechHub Conference Center</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="event-box-wrapper-2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="event-content-area">
                                    <div class="event-thumb">
                                        <img src="{{ asset('assets/img/home-2/event-02.html') }}" alt="img">
                                        <img src="{{ asset('assets/img/home-2/event-02.html') }}" alt="img">
                                    </div>
                                    <div class="event-content">
                                        <div class="date-item">
                                            <i class="fa-light fa-calendar"></i>
                                            24, Sep 2026
                                        </div>
                                        <h3><a href="{{ route('event.details', $event->id) }}">Cybersecurity Protecting <br> Data & Privacy</a></h3>
                                        <p>Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut</p>
                                        <a href="{{ route('event.details', $event->id) }}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="client-info-area">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                    </div>
                                    <ul class="client-info">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-01.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Entry Fee: <span>$59/Per Person</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-02.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Timing: <span>10:00 AM – 2.00 PM</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Location: <span>Main Auditorium, TechHub Conference Center</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div id="thumb3" class="tab-pane fade">
                        <div class="container">

                            @foreach($events as $event)
                            <div class="event-box-wrapper-2">
                                <div class="event-content-area">
                                    <div class="event-thumb">
                                        <img src="{{ asset('assets/img/home-2/event-01.html')}}" alt="img">
                                        <img src="{{ asset('assets/img/home-2/event-01.html') }}" alt="img">
                                    </div>
                                    <div class="event-content">
                                        <div class="date-item">
                                            <i class="fa-light fa-calendar"></i>
                                            24, Sep 2026
                                        </div>
                                        <h3><a href="{{ route('event.details', $event->id) }}">The Future of AI Trends <br> & Innovations</a></h3>
                                        <p>Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut</p>
                                        <a href="{{ route('event.details', $event->id) }}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="client-info-area">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/home-1/service-client-01.png') }}" alt="img">
                                    </div>
                                    <ul class="client-info">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-01.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Entry Fee: <span>$59/Per Person</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-02.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Timing: <span>10:00 AM – 2.00 PM</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-03.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Location: <span>Main Auditorium, TechHub Conference Center</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="event-box-wrapper-2">
                                <div class="event-content-area">
                                    <div class="event-thumb">
                                        <img src="{{ asset('assets/img/home-2/event-02.html') }}" alt="img">
                                        <img src="{{ asset('assets/img/home-2/event-02.html') }}" alt="img">
                                    </div>
                                    <div class="event-content">
                                        <div class="date-item">
                                            <i class="fa-light fa-calendar"></i>
                                            24, Sep 2026
                                        </div>
                                        <h3><a href="{{ route('event.details', $event->id) }}">Cybersecurity Protecting <br> Data & Privacy</a></h3>
                                        <p>Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut</p>
                                        <a href="{{ route('event.details', $event->id) }}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="client-info-area">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                    </div>
                                    <ul class="client-info">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-01.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Entry Fee: <span>$59/Per Person</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Timing: <span>10:00 AM – 2.00 PM</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-03.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Location: <span>Main Auditorium, TechHub Conference Center</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div id="thumb4" class="tab-pane fade">
                        <div class="container">

                            @foreach($events as $event)
                            <div class="event-box-wrapper-2">
                                <div class="event-content-area">
                                    <div class="event-thumb">
                                        <img src="{{ asset('assets/img/home-2/event-01.html') }}" alt="img">
                                        <img src="{{ asset('assets/img/home-2/event-01.html') }}" alt="img">
                                    </div>
                                    <div class="event-content">
                                        <div class="date-item">
                                            <i class="fa-light fa-calendar"></i>
                                            24, Sep 2026
                                        </div>
                                        <h3><a href="{{ route('event.details', $event->id) }}">The Future of AI Trends <br> & Innovations</a></h3>
                                        <p>Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut</p>
                                        <a href="{{ route('event.details', $event->id) }}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="client-info-area">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/home-1/service-client-01.png') }}" alt="img">
                                    </div>
                                    <ul class="client-info">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-01.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Entry Fee: <span>$59/Per Person</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-02.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Timing: <span>10:00 AM – 2.00 PM</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Location: <span>Main Auditorium, TechHub Conference Center</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="event-box-wrapper-2">
                                <div class="event-content-area">
                                    <div class="event-thumb">
                                        <img src="{{ asset('assets/img/home-2/event-02.html')}}" alt="img">
                                        <img src="{{ asset('assets/img/home-2/event-02.html')}}" alt="img">
                                    </div>
                                    <div class="event-content">
                                        <div class="date-item">
                                            <i class="fa-light fa-calendar"></i>
                                            24, Sep 2026
                                        </div>
                                        <h3><a href="{{ route('event.details', $event->id) }}">Cybersecurity Protecting <br> Data & Privacy</a></h3>
                                        <p>Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugiat finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dolor. Vivamus sed ex ut</p>
                                        <a href="{{ route('event.details', $event->id) }}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="client-info-area">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                    </div>
                                    <ul class="client-info">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Entry Fee: <span>$59/Per Person</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Timing: <span>10:00 AM – 2.00 PM</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <p>Location: <span>Main Auditorium, TechHub Conference Center</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           @endforeach
                        </div>
                        
                    </div>








                </div>

            </div>

            <!-- Cta Video Section2 Start -->
            <section class="cta-video-section-2 section-padding fix bg-cover" style="background-image: url('assets/img/home-2/cta-video-bg.html');">
                <div class="container">
                    <div class="video">
                        <a href="https://www.youtube.com/watch?v=8oON21G1Bqg" class="video-btn video-popup">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="row g-4">
                        <div class="col-xl-6 col-lg-8">
                            <div class="cta-video-content-2">
                                <div class="section-title mb-0">
                                    <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                        Ready to start With Us? <span class="line-2"></span></h6>
                                    <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">Get the best experience In <br> Business Objective</h2>
                                    <p class="cta-text wow fadeInUp" data-wow-delay=".3s">Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugia finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dor. </p>
                                    <a href="{{route('contact')}}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                                        registration Now
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Feature dream Section2 Start -->
            <section class="feature-dream-section-2 section-padding fix">
                <div class="container">
                    <div class="feature-dream-wrapper-2">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="feature-dream-thumb fix img-custom-anim-left">
                                    <img src="{{ asset('assets/img/home-2/feature-dream-01.html') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="feature-dream-content">
                                    <div class="section-title mb-0">
                                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                            Empowering brands with creativity <span class="line-2"></span></h6>
                                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">We Turning Your Dream into Reality.</h2>
                                    </div>
                                    <ul class="feature-dream-list wow fadeInUp" data-wow-delay=".3s">
                                        <li>
                                            <h5><img src="{{ asset('assets/img/home-1/check-icon.svg')}}" alt="img">Expert keynote speakers</h5>
                                            <p>
                                                Hear from thought leaders and industry pioneers as they share their expertise, trends, and strategies to keep you ahead of the curve.
                                            </p>
                                        </li>
                                        <li>
                                            <h5><img src="{{ asset('assets/img/home-1/check-icon.svg')}}" alt="img">Education Programs</h5>
                                            <p>
                                                Hear from thought leaders and industry pioneers as they share their expertise, trends, and strategies to keep you ahead of the curve.
                                            </p>
                                        </li>
                                        <li>
                                            <h5><img src="{{asset('assets/img/home-1/check-icon.svg')}}" alt="img">Notes & Highlights</h5>
                                            <p>
                                                Hear from thought leaders and industry pioneers as they share their expertise, trends, and strategies to keep you ahead of the curve.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pricing Section2 Start -->
            <section class="pricing-section-2 section-padding fix bg-cover" style="background-image: url('assets/img/home-2/pricing-bg.html');">
                <div class="container">
                    <div class="section-title text-center">
                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                            <span class="line-1"></span>
                            Join with us <span class="line-2"></span>
                        </h6>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Simple pricing </h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="pricing-box-items style-2">
                                <div class="pricing-header">
                                    <h3>Starter Pass</h3>
                                    <p>Perfect for students and early-stage designer</p>
                                    <h2>$49 <sub>/ Per Person</sub></h2>
                                </div>
                                <a href="{{route('contact')}}" class="theme-btn">
                                    Purchase now
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                                <h4>WHAT’S INCLUDED</h4>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>Breakfast, Lunch, Free Parking
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Standard Networking Opportunities
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Recording of All Talks
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Premium Conference Materials
                                    </li>
                                    <li class="style-2">
                                        <i class="fa-solid fa-circle-check color-2"></i> Full or half-day instructor-led course
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="pricing-box-items style-2">
                                <span>Most Popular</span>
                                <div class="pricing-header">
                                    <h3>Professional Pass</h3>
                                    <p>Best for freelancers and working professional</p>
                                    <h2>$59 <sub>/ Per Person</sub></h2>
                                </div>
                                <a href="{{route('contact')}}" class="theme-btn color-2">
                                    Purchase now
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                                <h4>WHAT’S INCLUDED</h4>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>Breakfast, Lunch, Free Parking
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Standard Networking Opportunities
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Recording of All Talks
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Premium Conference Materials
                                    </li>
                                    <li class="style-2">
                                        <i class="fa-solid fa-circle-check color-2"></i> Full or half-day instructor-led course
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="pricing-box-items style-2">
                                <div class="pricing-header">
                                    <h3>All-Access VIP</h3>
                                    <p>Designed for senior creatives and design</p>
                                    <h2>$69 <sub>/ Per Person</sub></h2>
                                </div>
                                <a href="{{route('contact')}}" class="theme-btn">
                                    Purchase now
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                                <h4>WHAT’S INCLUDED</h4>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>Breakfast, Lunch, Free Parking
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Standard Networking Opportunities
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Recording of All Talks
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i> Premium Conference Materials
                                    </li>
                                    <li class="style-2">
                                        <i class="fa-solid fa-circle-check color-2"></i> Full or half-day instructor-led course
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Faq Section2 Start -->
            <section class="faq-section-2 section-padding fix">
                <div class="container">
                    <div class="faq-wrapper-2">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-7">
                                <div class="faq-left-content">
                                    <div class="section-title">
                                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                            Frequently question <span class="line-2"></span></h6>
                                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Have Any Question? Find <br> Answer Below</h2>
                                    </div>
                                    <div class="faq-page-items mt-4 mt-md-0">
                                        <ul class="accordion-box">
                                            <!--Block-->
                                            <li class="accordion block active-block wow fadeInUp">
                                                <div class="acc-btn active">
                                                    Are there discounts for students or groups?
                                                    <div class="icon fa-solid fa-plus"></div>
                                                </div>
                                                <div class="acc-content current">
                                                    <div class="content">
                                                        <div class="text">
                                                            Depending on your ticket type, you'll gain access to keynote talks, panel sessions, networking events, exhibitions, and exclusive downloadable resources. VIP and Creator passes include extra perks like meet-the-speaker lounges,
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--Block-->
                                            <li class="accordion block wow fadeInUp" data-wow-delay=".2s">
                                                <div class="acc-btn">
                                                    What’s included in my ticket?
                                                    <div class="icon fa-solid fa-plus"></div>
                                                </div>
                                                <div class="acc-content">
                                                    <div class="content">
                                                        <div class="text">
                                                            Depending on your ticket type, you'll gain access to keynote talks, panel sessions, networking events, exhibitions, and exclusive downloadable resources. VIP and Creator passes include extra perks like meet-the-speaker lounges,
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--Block-->
                                            <li class="accordion block wow fadeInUp" data-wow-delay=".4s">
                                                <div class="acc-btn">
                                                    Can I attend the event online?
                                                    <div class="icon fa-solid fa-plus"></div>
                                                </div>
                                                <div class="acc-content">
                                                    <div class="content">
                                                        <div class="text">
                                                            Depending on your ticket type, you'll gain access to keynote talks, panel sessions, networking events, exhibitions, and exclusive downloadable resources. VIP and Creator passes include extra perks like meet-the-speaker lounges,
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--Block-->
                                            <li class="accordion block wow fadeInUp" data-wow-delay=".6s">
                                                <div class="acc-btn">
                                                    Can I change or transfer my ticket?
                                                    <div class="icon fa-solid fa-plus"></div>
                                                </div>
                                                <div class="acc-content">
                                                    <div class="content">
                                                        <div class="text">
                                                            Depending on your ticket type, you'll gain access to keynote talks, panel sessions, networking events, exhibitions, and exclusive downloadable resources. VIP and Creator passes include extra perks like meet-the-speaker lounges,
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="faq-right-thumb fix">
                                    <img class="img-custom-anim-right" src="{{asset('assets/img/home-2/faq-01.html')}}" alt="img">
                                    <div class="support-text-area wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/home-2/faq-info-icon.html')}}" alt="img">
                                        </div>
                                        <h3>24/7</h3>
                                        <p>Support Center</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial Section2 Start -->
            <section class="testimonial-section-2 section-bg fix">
                <div class="testimonial-wrapper-2 section-padding">
                    <div class="testimonial-left-thumb">
                        <img class="img-custom-anim-left" src="{{asset('assets/img/home-2/testimonial-01.html')}}" alt="img">
                    </div>
                    <div class="testi-bg-shape">
                        <img src="{{asset('assets/img/home-2/testi-bg-shape.html')}}" alt="img">
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-xl-6">

                        </div>
                        <div class="col-xl-6">
                            <div class="section-title mb-0">
                                <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                    Testimonial <span class="line-2"></span></h6>
                                <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">What People Are Saying <br> at Our Event</h2>
                            </div>
                            <div class="testimonial-right-content">
                                <div class="swiper testimonial-slide-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-box-items-2">
                                                <div class="top-area">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/img/home-2/quote-icon.html')}}" alt="img">
                                                    </div>
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <h5>
                                                    “Iterative approaches corporate strategy fo collaborative thinking further the overall val proposition organically grows the holistic world views of disruptive innovation via work place diversity strategies”
                                                </h5>
                                                <div class="client-info">
                                                    <div class="client-thumb">
                                                        <img src="{{asset('assets/img/home-2/testi-client-01.html')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Esther Howard</h4>
                                                        <p>Software Tester</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-box-items-2">
                                                <div class="top-area">
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-2/quote-icon.html')}}" alt="img">
                                                    </div>
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <h5>
                                                    “Iterative approaches corporate strategy fo collaborative thinking further the overall val proposition organically grows the holistic world views of disruptive innovation via work place diversity strategies”
                                                </h5>
                                                <div class="client-info">
                                                    <div class="client-thumb">
                                                        <img src="{{asset('assets/img/home-2/testi-client-01.html')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Esther Howard</h4>
                                                        <p>Software Tester</p>
                                                    </div>
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

            <!-- Location Section2 Start -->
            <section class="location-section-2 section-padding fix">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-xl-6 col-lg-6">
                            <div class="location-left-content">
                                <div class="section-title mb-0">
                                    <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                        Location <span class="line-2"></span></h6>
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Find the conference <br> room's directions.</h2>
                                </div>
                                <p class="location-text wow fadeInUp" data-wow-delay=".3s">
                                    A wide range of desktop publishing tools and web design editors now feature dummy text as their primary example content if you look up. Welcome to the 2026 global innovation summit, where the brightest minds and visionary leaders gather to explore the future of technology & innovation.
                                </p>
                                <ul class="wow fadeInUp" data-wow-delay=".5s">
                                    <li>
                                        <h4><img src="{{asset('assets/img/home-2/celender-icon.html')}}" alt="img">24, july -2026</h4>
                                    </li>
                                    <li>
                                        <h4><img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">10:00 AM – 2.00 PM</h4>
                                    </li>
                                </ul>
                                <div class="location-line">
                                    <h4><img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img"> Apple Upper West Side, Brooklyn</h4>
                                </div>
                                <a href="{{route('contact')}}" class="theme-btn">
                                    Get Directions
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="map-section-contact">
                                <div class="google-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- News Section2 Start -->
            <section class="news-section-2 section-padding fix bg-cover" style="background-image: url('assets/img/home-2/news-bg.html');">
                <div class="container">
                    <div class="section-title text-center">
                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                            <span class="line-1"></span>
                            Blog Post <span class="line-2"></span>
                        </h6>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Insights from business <br> experts Meetup</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="news-box-items-2">
                                <div class="news-thumb">
                                    <img src="{{asset('assets/img/home-2/news-01.html')}}" alt="img">
                                    <img src="{{asset('assets/img/home-2/news-01.html')}}" alt="img">
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <span><i class="fa-light fa-calendar"></i> June 16, 2026</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-clock"></i> 08 min read</span>
                                        </li>
                                    </ul>
                                    <h3><a href="{{route('news.details')}}">The Evolution of Conference Branding Engaging Audiences in 2026"</a></h3>
                                    <a href="{{route('news.details')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="news-box-items-2 style-2">
                                <div class="news-thumb">
                                    <img src="{{asset('assets/img/home-2/news-02.html')}}" alt="img">
                                    <img src="{{asset('assets/img/home-2/news-02.html')}}" alt="img">
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <span><i class="fa-light fa-calendar"></i> June 16, 2026</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-clock"></i> 08 min read</span>
                                        </li>
                                    </ul>
                                    <h3><a href="{{route('news.details')}}">The Ultimate Guide to Engaging & Immersive </a></h3>
                                    <a href="{{route('news.details')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="news-box-items-2 style-2">
                                <div class="news-thumb">
                                    <img src="{{asset('assets/img/home-2/news-03.html')}}" alt="img">
                                    <img src="{{asset('assets/img/home-2/news-03.html')}}" alt="img">
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <span><i class="fa-light fa-calendar"></i> June 16, 2026</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-clock"></i> 08 min read</span>
                                        </li>
                                    </ul>
                                    <h3><a href="{{route('news.details')}}">Conferences Inspire & Innovation Collaboration</a></h3>
                                    <a href="{{route('news.details')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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

<!-- Mirrored from nayonacademy.com/html/evenzax/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:05 GMT -->

</html>