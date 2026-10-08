<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<!-- Mirrored from nayonacademy.com/html/evenzax/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:24 GMT -->

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
                        <h1 class="breadcrumb-title">Events</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                            <li>Events</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Event Section Start -->
            <section class="event-section-3 fix section-padding">
                <div class="container">
                    <div class="section-title-area">
                        <div class="section-title">
                            <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                Our Event <span class="line-2"></span> </h6>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Information of Event <br> Schedules</h2>
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
                            @foreach($events as $event)
                            <div class="event-signle-list-items pt-0">
                                <div class="event-left-items">
                                    <div class="date-text">
                                        <h2>{{ date('d', strtotime($event->date)) }}</h2>
                                        <span>{{ date('F, Y', strtotime($event->date)) }}</span>
                                    </div>
                                    <div class="thumb">
                                        
                                    </div>
                                    <div class="content">
                                        <h3><a href="{{route('event.details',$event->id)}}">{{ $event->title }}</a></h3>
                                        <ul>
                                            <li>
                                                <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                {{ $event->location }}
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                {{ $event->start_time }} - {{ $event->end_time }}
                                            </li>
                                        </ul>
                                        <div class="client-img">
                                            <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('contact')}}" class="theme-btn">
                                    Buy Ticket
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div id="thumb2" class="tab-pane fade show active">
                            @foreach($events as $event)
                            <div class="event-signle-list-items pt-0">
                                <div class="event-left-items">
                                    <div class="date-text">
                                        <h2>{{ date('d', strtotime($event->date)) }}</h2>
                                        <span>{{ date('F, Y', strtotime($event->date)) }}</span>
                                    </div>
                                    <div class="thumb">
                                        
                                        
                                    </div>
                                    <div class="content">
                                        <h3><a href="{{route('event.details',$event->id)}}">{{ $event->title }}</a></h3>
                                        <ul>
                                            <li>
                                                <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                {{ $event->location }}
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                {{ $event->start_time }} - {{ $event->end_time }}
                                            </li>
                                        </ul>
                                        <div class="client-img">
                                            <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('contact')}}" class="theme-btn">
                                    Buy Ticket
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div id="thumb3" class="tab-pane fade">
                            @foreach($events as $event)
                            <div class="event-signle-list-items pt-0">
                                <div class="event-left-items">
                                    <div class="date-text">
                                        <h2>{{ date('d', strtotime($event->date)) }}</h2>
                                        <span>{{ date('F, Y', strtotime($event->date)) }}</span>
                                    </div>
                                    <div class="thumb">
                                    
                                    </div>
                                    <div class="content">
                                        <h3><a href="{{route('event.details',$event->id)}}">{{ $event->title }}</a></h3>
                                        <ul>
                                            <li>
                                                <img src="{{asset('assets/img/home-1/service-icon-03.svg')}}" alt="img">
                                                {{ $event->location }}
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/img/home-1/service-icon-02.svg')}}" alt="img">
                                                {{ $event->start_time }} - {{ $event->end_time }}
                                            </li>
                                        </ul>
                                        <div class="client-img">
                                            <img src="{{asset('assets/img/home-1/service-client-01.png')}}" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('contact')}}" class="theme-btn">
                                    Buy Ticket
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>

                            </div>

                            @endforeach
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

<!-- Mirrored from nayonacademy.com/html/evenzax/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:28 GMT -->

</html>