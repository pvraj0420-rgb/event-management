<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from nayonacademy.com/html/evenzax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:46:59 GMT -->
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

                <!-- Hero Section Start -->
                <section class="hero-section-1 hero-1 fix bg-cover" style="background-image: url('assets/img/home-1/hero-bg.jpg');">
                    <div class="hero-light">
                        <img src="{{asset('assets/img/home-1/hero-light.png')}}" alt="">
                    </div>
                    <div class="hero-light2">
                        <img src="{{asset('assets/img/home-1/hero-light2.png')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-8 col-lg-7">
                                <div class="hero-content">
                                    <h2 class="wow fadeInUp">WORLD CREATIVE</h2>
                                    <h1 class="wow fadeInUp" data-wow-delay=".3s">CONFERENCE</h1>
                                    <div class="year-area wow fadeInUp" data-wow-delay=".5s">
                                        <h3 class="hero-text">
                                          2 <span class="d-xxl-none">0</span> <span class="svg-text d-none d-xxl-block"><svg width="192" height="86" viewBox="0 0 192 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="9" y="9" width="174" height="68" rx="34" stroke="white" stroke-width="18"/>
                                            </svg>
                                            </span>  26
                                        </h3>
                                        <div class="year-content">
                                            <h4>10-18
                                                <span>OCT, 25</span>
                                            </h4>
                                            <h5>Ciudad Deportiva Collado VillalbaC. las Águedas, 295, 28400 Collado Villalba, Madrid, Spain</h5>
                                        </div>
                                    </div>
                                    <div class="hero-bottom wow fadeInUp" data-wow-delay=".7s">
                                        <a href="{{route('contact')}}" class="theme-btn">
                                            Get A Ticket
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                        <div class="client-image">
                                            <div class="image">
                                                <img src="{{asset('assets/img/home-1/client-img.png')}}" alt="img">
                                            </div>
                                            <p>Speakers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                                <div class="hero-image">
                                    <img src="{{asset('assets/img/home-1/hero-img-01.png')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- About Section Start -->
                <section class="about-section section-padding fix">
                    <div class="container">
                        <div class="about-wrapper">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="about-image-items">
                                        <div class="row g-4">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="about-image1">
                                                    <img src="{{asset('assets/img/home-1/about-image1.jpg')}}" alt="">
                                                </div>
                                                <div class="about-counters">
                                                    <img src="{{asset('assets/img/home-1/icon.png')}}" alt="">
                                                    <h2><span class="count">15</span>+</h2>
                                                    <p>Iconic <br> Speakers</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="about-image-2">
                                                   <img src="{{asset('assets/img/home-1/about-image-2.jpg')}}" alt="">
                                                </div>
                                                <div class="about-image-3">
                                                   <img src="{{asset('assets/img/home-1/about-image-3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-content">
                                        <div class="section-title mb-0">
                                            <h6 class="sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                                What Is Event Conference 
                                                <span class="line-2"></span>
                                            </h6>
                                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Reasons to Participate in Our Event Program</h2>
                                        </div>
                                        <p class="about-text wow fadeInUp" data-wow-delay=".3s">
                                            Attend the leading conference for software product managers in Manhattan, New York, with 500 other people for a full day of motivational keynotes and networking opportunities.
                                        </p>
                                        <div class="icon-items-area wow fadeInUp" data-wow-delay=".5s">
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{asset('assets/img/home-1/about-icon-01.svg')}}" alt="img">
                                                </div>
                                                <h4>6,000+ people’s
                                                In Person Meet-up</h4>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{asset('assets/img/home-1/about-icon-02.svg')}}" alt="img">
                                                </div>
                                                <h4>Connect with
                                                Industry Leaders</h4>
                                            </div>
                                        </div>
                                        <p class="about-text-2 wow fadeInUp" data-wow-delay=".7s">when an unknown printer took a galley of type and scrambled it to make pecimen book. </p>
                                        <div class="about-bottom-area wow fadeInUp" data-wow-delay=".9s">
                                            <a href="{{route('contact')}}" class="theme-btn">
                                                Buy Ticket
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </a>
                                            <div class="client-phn-area">
                                                <div class="client-image">
                                                    <img src="{{asset('assets/img/home-1/about-client.png')}}" alt="img">
                                                    <div class="phone-icon">
                                                        <i class="fa-solid fa-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="client-content">
                                                    <p>Call Us:</p>
                                                    <a href="tel:+1(1234)567-800">+1 (1234)-567-800</a>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Service Section Start -->
                <section class="service-section section-padding fix bg-cover" style="background-image: url('assets/img/home-1/service-bg.jpg');">
                    <div class="container">
                        <div class="section-title text-center mb-0">
                            <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                <span class="line-1"></span>
                                Schedule for Event 
                                <span class="line-2"></span>
                            </h6>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Our Events Schedule Plan</h2>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".3s">
                                We are hosting the 2026 World Marketing Summit this year, same like <br> last year.  It is the assembly of all the large
                            </p>
                        </div>
                        <ul class="nav wow fadeInUp" data-wow-delay=".5">
                            <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                                <a href="#thumb1" data-bs-toggle="tab" class="nav-link">
                                Day 01
                                </a>
                            </li>
                            <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                                <a href="#thumb2" data-bs-toggle="tab" class="nav-link active">
                                Day 02
                                </a>
                            </li>
                            <li class="nav-item wow fadeInUp" data-wow-delay=".6s">
                                <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                    Day 03
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="thumb1" class="tab-pane fade">
                             <div class="row">
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-01.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-01.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-02.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-02.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">Cybersecurit Protecting Data & Privacy</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-03.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-03.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                           <img src="{{asset('assets/img/home-1/service-04.png')}}" alt="img"> 
                                            <img src="{{asset('assets/img/home-1/service-04.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thumb2" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-01.png')}}" alt="img">
                                              <img src="{{asset('assets/img/home-1/service-01.png')}}" alt="img">
                                             
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-02.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-02.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">Cybersecurit Protecting Data & Privacy</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-03.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-03.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-04.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-04.png')}}" alt="img">
                                           
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thumb3" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-01.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-01.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-02.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-02.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">Cybersecurit Protecting Data & Privacy</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-03.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-03.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-box-items">
                                        <div class="service-thumb">
                                            <img src="{{asset('assets/img/home-1/service-04.png')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/service-04.png')}}" alt="img">
                                            <div class="date-item">
                                                <i class="fa-light fa-calendar"></i>
                                                24, Sep 2026
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="{{route('news.details')}}">The Future of AI Trends & Innovations</a></h3>
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-01.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Entry Fee: <span>$59/Per Person</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Timing:  <span>10:00 AM – 2.00 PM</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <p>Location: <span>54 Street, New york City</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="service-bottom-area">
                                                 <a href="{{route('news.details')}}" class="events-btn">
                                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="text">View Details</span>
                                                </a>
                                                <div class="client-img">
                                                    <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Team Section Start -->
                <section class="team-section section-padding fix">
                    <div class="container">
                        <div class="section-title-area">
                            <div class="section-title">
                                <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                our speakers <span class="line-2"></span> </h6>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Our Amazing & learned <br> event Speakers</h2>
                            </div>
                            <a href="{{route('contact')}}" class="theme-btn wow fadeInUp" data-wow-delay=".3s">
                                registration Now
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                        <div class="team-wraper">
                            <div class="row g-4">
                                <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-left-content">
                                        <div class="team-image">
                                            <img src="{{asset('assets/img/home-1/team-01.jpg')}}" alt="img">
                                            <img src="{{asset('assets/img/home-1/team-01.jpg')}}" alt="img">
                                        </div>
                                        <div class="team-content">
                                           <h3><a href="{{ route('team.details', $speakers[0]->id) }}">Ralph Edwards</a></h3>
                                            <p>Maxiis Manager</p>
                                            <div class="line"></div>
                                            <a href="tel:+44(0)3075487536" class="call-number">+44 (0)  307 548 7536</a>
                                            <div class="social-icon d-flex">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#" class="color-2"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="team-right-items">
                                        <div class="row g-4">
                                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="team-thumb-box">
                                                    <img src="{{asset('assets/img/home-1/team-02.jpg')}}" alt="img">
                                                    <img src="{{asset('assets/img/home-1/team-02.jpg')}}" alt="img">
                                                    <ul class="team-icon d-grid justify-content-center align-items-center">
                                                        <li>
                                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fab fa-pinterest-p"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="content">
                                                        <h3><a href="{{ route('team.details', $speakers[0]->id) }}">Annette Black</a></h3>
                                                    </div>
                                                </div>
</div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                                <div class="team-thumb-box">
                                                    <img src="{{asset('assets/img/home-1/team-03.jpg')}}" alt="img">
                                                    <img src="{{asset('assets/img/home-1/team-03.jpg')}}" alt="img">
                                                    <ul class="team-icon d-grid justify-content-center align-items-center">
                                                        <li>
                                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fab fa-pinterest-p"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="content">
                                                    <h3><a href="{{ route('team.details', $speakers[0]->id) }}">Kristin Watson</a></h3>
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

                <!-- Experience Section Start -->
                <section class="experience-section section-padding fix bg-cover" style="background-image: url('assets/img/home-1/experience-bg.jpg');">
                    <div class="shape-bg">
                        <img src="{{asset('assets/img/home-1/experience-bg-shape.png')}}" alt="img">
                    </div>
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xl-6 col-lg-8">
                                <div class="experience-content">
                                    <div class="section-title mb-0">
                                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                       Get Experience <span class="line-2"></span> </h6>
                                        <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">the Greatest Experience in Your Business Goals</h2>
                                    </div>
                                    <p class="experience-text wow fadeInUp" data-wow-delay=".3s">
                                        Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugia finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dor. 
                                    </p>
                                    <a href="{{route('contact')}}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                                        registration Now 
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Feature Section Start -->
                <section class="feature-section section-padding fix">
                    <div class="container">
                        <div class="section-title text-center">
                            <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                <span class="line-1"></span>
                                Our benefits
                                <span class="line-2"></span>
                            </h6>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">What You Will Get</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="feature-box-items">
                                    <div class="box-shape">
                                        <img src="{{asset('assets/img/home-1/feature-bg-shape.png')}}" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/home-1/feature-icon-01.svg')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Confirm Speakers
                                        </h4>
                                        <p>
                                            Integer ac felis ac augue tempu id non dui. Nam feugiat finibus scelerisque. Proin semper
                                        </p>
                                        <a href="{{route('about')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="feature-box-items">
                                    <div class="box-shape">
                                        <img src="{{asset('assets/img/home-1/feature-bg-shape.png')}}" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/home-1/feature-icon-02.svg')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Best Digital Ideas
                                        </h4>
                                        <p>
                                            Integer ac felis ac augue tempu id non dui. Nam feugiat finibus scelerisque. Proin semper
                                        </p>
                                        <a href="{{route('about')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="feature-box-items">
                                    <div class="box-shape">
                                        <img src="{{asset('assets/img/home-1/feature-bg-shape.png')}}" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/home-1/feature-icon-03.svg')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Networking People
                                        </h4>
                                        <p>
                                            Integer ac felis ac augue tempu id non dui. Nam feugiat finibus scelerisque. Proin semper
                                        </p>
                                        <a href="{{route('about')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="feature-box-items">
                                    <div class="box-shape">
                                        <img src="{{asset('assets/img/home-1/feature-bg-shape.png')}}" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/home-1/feature-icon-04.svg')}}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Inspiring Keynotes
                                        </h4>
                                        <p>
                                            Integer ac felis ac augue tempu id non dui. Nam feugiat finibus scelerisque. Proin semper
                                        </p>
                                        <a href="{{route('about')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Reasons Feature Section Start -->
                <section class="reasons-feature-section fix section-bg">
                    <div class="shape-1">
                        <img src="{{asset('assets/img/home-1/reasons-shape-01.png')}}" alt="img">
                    </div>
                    <div class="reasons-wrapper">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-6">
                                <div class="reasons-left-video-thumb fix">
                                    <img data-speed=".8" src="{{asset('assets/img/home-1/reasons-01.jpg')}}" alt="img">
                                    <div class="video">
                                        <a href="https://www.youtube.com/watch?v=8oON21G1Bqg" class="video-btn video-popup">
                                        <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="reasons-right-content">
                                    <div class="reasons-bg-shape">
                                        <img src="{{asset('assets/img/home-1/reasons-bg-shape.png')}}" alt="img">
                                    </div>
                                    <div class="section-title mb-0">
                                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                            Reasons To Attend 
                                            <span class="line-2"></span>
                                        </h6>
                                        <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">The Digital Perspectives <br> To Enhance Interaction</h2>
                                    </div>
                                    <p class="reasons-text wow fadeInUp" data-wow-delay=".3s">
                                        Integer ac felis ac augue ullamcorper tempus id non dui. Nam feugia finibus scelerisque. Proin semper arcu no scelerisque feugiat at a dor. Vivamus sed ex ut At BoxOffice, we offer personalized event solutions
                                    </p>
                                    <div class="list-items wow fadeInUp" data-wow-delay=".5s">
                                        <ul class="wow fadeInUp">
                                            <li>
                                                <img src="{{asset('assets/img/home-1/check-icon.svg')}}" alt="img">
                                                Regular Seating
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/img/home-1/check-icon.svg')}}" alt="img">
                                                Afternoon Snack
                                            </li>
                                        </ul>
                                        <ul class="wow fadeInUp">
                                            <li>
                                                <img src="{{asset('assets/img/home-1/check-icon.svg')}}" alt="img">
                                                Idea Sharing
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/img/home-1/check-icon.svg')}}" alt="img">
                                                Comfortable Sleeping
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="counter-items-area wow fadeInUp" data-wow-delay=".7s">
                                        <div class="counter-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/home-1/reasons-icon-01.png')}}" alt="img">
                                                <h2><span class="count">4</span>K</h2>
                                            </div>
                                            <h5>Tickets Confirmed</h5>
                                        </div>
                                        <div class="counter-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/home-1/reasons-icon-02.png')}}" alt="img">
                                                <h2><span class="count">39</span></h2>
                                            </div>
                                            <h5>Talented Speakers</h5>
                                        </div>
                                        <div class="counter-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/home-1/reasons-icon-03.png')}}" alt="img">
                                                <h2><span class="count">50</span></h2>
                                            </div>
                                            <h5>Food Coffee Breaks</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Pricing Section Start -->
                <section class="pricing-section section-padding fix">
                    <div class="container">
                        <div class="section-title text-center">
                            <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                            <span class="line-1"></span>
                                Pricing Plans
                                <span class="line-2"></span>
                            </h6>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Get Your Event Ticket</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="pricing-box-items">
                                    <span>Standard</span>
                                    <div class="pricing-header">
                                        <h3>Single Access</h3>
                                        <p>All prices exclude 15% VAT</p>
                                        <h2>$49 <sub>/ Per Person</sub></h2>
                                    </div>
                                    <h4>WHAT’S INCLUDED</h4>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i>Standard Feature
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i> Dashboard Access
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i> Unlimited pages for sitemap
                                        </li>
                                        <li class="style-2">
                                            <i class="fa-solid fa-circle-check color-2"></i> 100% Satisfaction Guarantee
                                        </li>
                                        <li class="style-2">
                                            <i class="fa-solid fa-circle-check color-2"></i> Lifetime free support
                                        </li>
                                    </ul>
                                    <a href="{{route('contact')}}" class="theme-btn">
                                        Purchase now
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="pricing-box-items active">
                                    <span>Premium</span>
                                    <div class="pricing-header">
                                        <h3>For VIP Access</h3>
                                        <p>All prices exclude 15% VAT</p>
                                        <h2>$69 <sub>/ Per Person</sub></h2>
                                    </div>
                                    <h4>WHAT’S INCLUDED</h4>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i>Standard Feature
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i> Dashboard Access
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i> Unlimited pages for sitemap
                                        </li>
                                        <li class="style-2">
                                            <i class="fa-solid fa-circle-check color-2"></i> 100% Satisfaction Guarantee
                                        </li>
                                        <li class="style-2">
                                            <i class="fa-solid fa-circle-check color-2"></i> Lifetime free support
                                        </li>
                                    </ul>
                                    <a href="{{route('contact')}}" class="theme-btn">
                                        Purchase now
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="pricing-box-items">
                                    <span>Platinum</span>
                                    <div class="pricing-header">
                                        <h3>Standard Access</h3>
                                        <p>All prices exclude 15% VAT</p>
                                        <h2>$99 <sub>/ Per Person</sub></h2>
                                    </div>
                                    <h4>WHAT’S INCLUDED</h4>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i>Standard Feature
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i> Dashboard Access
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i> Unlimited pages for sitemap
                                        </li>
                                        <li class="style-2">
                                            <i class="fa-solid fa-circle-check color-2"></i> 100% Satisfaction Guarantee
                                        </li>
                                        <li class="style-2">
                                            <i class="fa-solid fa-circle-check color-2"></i> Lifetime free support
                                        </li>
                                    </ul>
                                    <a href="{{route('contact')}}" class="theme-btn">
                                        Purchase now
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Gallery Section Start -->
                <div class="gallery-section fix">
                    <div class="row g-0">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="gallery-card-item-inner">
                                <div class="gallery-image style-height">
                                    <a href="{{asset('assets/img/home-1/gallery-01.jpg')}}" class="img-popup">
                                        <img src="{{asset('assets/img/home-1/gallery-01.jpg')}}" alt="img">
                                        <div class="icon">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="gallery-card-item-inner">
                                <div class="gallery-image style-height">
                                    <a href="{{asset('assets/img/home-1/gallery-02.jpg')}}" class="img-popup">
                                        <img src="{{asset('assets/img/home-1/gallery-02.jpg')}}" alt="img">
                                        <div class="icon">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="gallery-card-item-inner">
                                <div class="gallery-image style-height">
                                    <a href="{{asset('assets/img/home-1/gallery-03.jpg')}}" class="img-popup">
                                        <img src="{{asset('assets/img/home-1/gallery-03.jpg')}}" alt="img">
                                        <div class="icon">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="gallery-card-item-inner">
                                <div class="gallery-image style-height">
                                    <a href="{{asset('assets/img/home-1/gallery-04.jpg')}}" class="img-popup">
                                        <img src="{{asset('assets/img/home-1/gallery-04.jpg')}}" alt="img">
                                        <div class="icon">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="gallery-card-item-inner">
                                <div class="gallery-image style-height">
                                    <a href="{{asset('assets/img/home-1/gallery-05.jpg')}}" class="img-popup">
                                        <img src="{{asset('assets/img/home-1/gallery-05.jpg')}}" alt="img">
                                        <div class="icon">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="gallery-card-item-inner">
                                <div class="gallery-image style-height">
                                    <a href="{{asset('assets/img/home-1/gallery-06.jpg')}}" class="img-popup">
                                        <img src="{{asset('assets/img/home-1/gallery-06.jpg')}}" alt="img">
                                        <div class="icon">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="gallery-card-item-inner">
                                <div class="gallery-image style-height">
                                    <a href="{{asset('assets/img/home-1/gallery-07.jpg')}}" class="img-popup">
                                        <img src="{{asset('assets/img/home-1/gallery-07.jpg')}}" alt="img">
                                        <div class="icon">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="gallery-card-item-inner">
                                <div class="gallery-image style-height">
                                    <a href="{{asset('assets/img/home-1/gallery-08.jpg')}}" class="img-popup">
                                        <img src="{{asset('assets/img/home-1/gallery-08.jpg')}}" alt="img">
                                        <div class="icon">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brand Section Start -->
                <section class="brand-section section-padding fix">
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
                                        <img src="{{asset('assets/img/home-1/brand-01.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-01.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-02.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-02.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-03.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-03.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-04.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-04.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-05.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-05.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-06.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-06.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-07.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-07.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-08.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-08.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-09.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-09.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="brand-box">
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-10.png')}}" alt="img">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="{{asset('assets/img/home-1/brand-10.png')}}" alt="img">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Cta Countdown Section Start -->
                <section class="cta-countdown-section section-padding fix bg-cover" style="background-image: url('assets/img/home-1/cta-countdown-bg.jpg');">
                    <div class="container">
                        <div class="cta-countdown-wrapper">
                            <div class="content">
                                <div class="section-title mb-0">
                                    <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                        Countdown
                                        <span class="line-2"></span>
                                    </h6>
                                    <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">Countdown Until The <br> Event. Register Now</h2>
                                </div>
                            </div>
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
                        </div>
                    </div>
                </section>

                <!-- News Section Start -->
                <section class="news-section section-padding fix">
                    <div class="container">
                        <div class="section-title text-center">
                            <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                            <span class="line-1"></span>
                                Crafting unforgettable events
                                <span class="line-2"></span>
                            </h6>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Innovative event solutions</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-box-items">
                                    <div class="news-thumb">
                                        <img src="{{asset('assets/img/home-1/news-01.jpg')}}" alt="img">
                                        <img src="{{asset('assets/img/home-1/news-01.jpg')}}" alt="img">
                                        <div class="post-date">
                                            <h4>10</h4>
                                            <p>July</p>
                                        </div>
                                    </div>
                                    <div class="news-content">
                                        <p>Client Engagement</p>
                                        <h3><a href="{{route('news.details')}}">Trends shaping the future of event management services</a></h3>
                                        <a href="{{route('news.details')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="news-box-items">
                                    <div class="news-thumb">
                                        <img src="{{asset('assets/img/home-1/news-02.jpg')}}" alt="img">
                                        <img src="{{asset('assets/img/home-1/news-02.jpg')}}" alt="img">
                                        <div class="post-date">
                                            <h4>08</h4>
                                            <p>July</p>
                                        </div>
                                    </div>
                                    <div class="news-content">
                                        <p>Venue Selection</p>
                                        <h3><a href="{{route('news.details')}}">Guest management strategies for large events</a></h3>
                                        <a href="{{route('news.details')}}" class="link-btn">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="news-box-items">
                                    <div class="news-thumb">
                                        <img src="{{asset('assets/img/home-1/news-01.jpg')}}" alt="img">
                                        <img src="{{asset('assets/img/home-1/news-01.jpg')}}" alt="img">
                                        <div class="post-date">
                                            <h4>04</h4>
                                            <p>July</p>
                                        </div>
                                    </div>
                                    <div class="news-content">
                                        <p>Client Engagement</p>
                                        <h3><a href="{{route('news.details')}}">Trends shaping the future of event management services</a></h3>
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

<!-- Mirrored from nayonacademy.com/html/evenzax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:49:07 GMT -->
</html>