<base href="{{ url('/') }}/">
<!--<< Favcion >>-->
<link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}">
<!--<< Bootstrap min.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!--<< All Min Css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<!--<< Animate.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<!--<< Magnific Popup.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<!--<< MeanMenu.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
<!--<< Swiper Bundle.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<!--<< Nice Select.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
<!--<< Main.css >>-->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

<!-- Preloader -->
<div class="preloader">
    <div class="spinner-wrap">
        <div class="preloader-logo">
            <img src="{{asset('assets/img/preloader.svg')}}" alt="" class="img-fluid">
        </div>
        <div class="spinner"></div>
    </div>
</div>

<!-- Back To Top Start -->
<button id="back-top" class="back-to-top">
    <i class="fa-regular fa-arrow-up"></i>
</button>

<!-- MouseCursor Start -->
<div class="mouseCursor cursor-outer"></div>
<div class="mouseCursor cursor-inner"></div>

<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{route('index') }}">
                            <img src="{{ asset('assets/img/logo/black-logo.svg')}}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909">+11002345909</a>
                            </div>
                        </li>
                    </ul>
                    <a href="{{route('contact')}}" class="theme-btn mt-4">
                        Get A Ticket
                        <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Section Start -->
<header class="header-section">
    <div class="container">
        <div class="header-top-wrapper">
            <ul>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    523 Jerry Mench Dr.USA
                </li>
                <li class="line">

                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-phone"></i>
                    <a href="tel:+163217322978"> +163 2173 22978</a>
                </li>
                <li class="line">

                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:info@example.com">
                        Evenzahelp@gmail.com
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    Open Hours: 09am - 05pm Mon-Sat
                </li>
                <li class="line">

                </li>
                <li>
                    <div class="social-icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main d-flex align-items-center justify-content-between flex-nowrap">
                    <div class="header-left">
                        <a href="{{ route('index')}}" class="logo">
                            <img src="{{ asset('assets/img/logo/black-logo.svg')}}" alt="img">
                        </a>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active">
                                            <a href="javascript:void(0)" class="border-none">
                                                Home
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('index')}}">Home 01</a></li>
                                                <li><a href="{{ route('index-2')}}">Home 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('about')}}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                EVENTS
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('event')}}">Events</a></li>
                                                @if(isset($events))
                                                @foreach($events as $event)
                                                <li>
                                                    <a href="{{ route('event.details', $event->id) }}">
                                                        {{ $event->title }}
                                                    </a>
                                                </li>
                                                @endforeach
                                                @endif


                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="javascript:void(0)">
                                                Pages
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        SPEAKERS
                                                        <i class="fa-solid fa-chevron-down"></i>
                                                    </a>
                                                    <ul class="submenu">

                                                        <!-- Main Page -->
                                                        <li><a href="{{ route('speakers') }}">Speakers</a></li>

                                                        <!-- Dynamic List -->
                                                        @if(isset($speakers))
                                                        @foreach($speakers as $speaker)
                                                        <li>
                                                            <a href="{{ route('team.details', $speaker->id) }}">
                                                                {{ $speaker->name }}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                        @endif

                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('gallery')}}">Event Gallery</a></li>
                                                <li><a href="{{ route('pricing')}}">pricing Page</a></li>
                                                <li><a href="{{ route('faq')}}">faq Page</a></li>
                                                <li><a href="{{route('error.404')}}">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                Blog
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{route('news.grid')}}">Blog Grid</a></li>
                                                <li><a href="{{route('news')}}">Blog Standard</a></li>
                                                <li><a href="{{route('news.details')}}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center flex-nowrap">
                        <a href="#" class="main-header__search search-toggler">
                            <i class="fa-regular fa-magnifying-glass"></i>
                        </a>
                        @if(Session::has('user'))

                        <div class="dropdown">

                            <button class="theme-btn dropdown-toggle" data-bs-toggle="dropdown">

                                {{ Session::get('user')->name ?? '' }}

                            </button>

                            <ul class="dropdown-menu">

                                <li>
                                    <a class="dropdown-item" href="{{ route('editprofile') }}">
                                        Edit Profile
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('my.orders') }}">
                                        My Orders
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        Logout
                                    </a>
                                </li>

                            </ul>

                        </div>

                        @else

                        <a href="{{ route('register') }}" class="theme-btn me-2">Register</a>
                        <a href="{{ route('login') }}" class="theme-btn">Login</a>

                        @endif
                        <a href="{{route('event')}}" class="theme-btn btn-sm-ticket">
                            Get A Ticket
                            <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fa-regular fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>