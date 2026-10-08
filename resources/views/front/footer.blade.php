 <!-- Footer Section Start -->
                <footer class="footer-section bg-cover fix" style="background-image: url('assets/img/home-1/footer-bg.jpg');">
                    <div class="container">
                        <div class="footer-wrappper">
                            <div class="row g-4">
                                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="footer-widget-items">
                                        <div class="widget-head">
                                            <a href="{{route('index')}}" class="footer-logo">
                                                <img src="{{asset('assets/img/logo/white-logo.svg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="footer-content">
                                            <p>
                                                We have very good strength in innovative technology and tools with over 35 years of experience. We makes long-term investments goal in global companies in different 
                                            </p>
                                            <div class="social-icon">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="footer-widget-items">
                                        <div class="widget-head">
                                            <h3>Quick Links</h3>
                                            <div class="line"></div>
                                        </div>
                                        <ul class="list-area">
                                            <li>
                                                <a href="{{route('index')}}">
                                                    <i class="fa-regular fa-bookmark"></i> Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('event')}}">
                                                    <i class="fa-regular fa-bookmark"></i> Our Events
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('speakers')}}">
                                                    <i class="fa-regular fa-bookmark"></i> Speakers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('contact')}}">
                                                    <i class="fa-regular fa-bookmark"></i> Get Ticket
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('contact')}}">
                                                    <i class="fa-regular fa-bookmark"></i> Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                     </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="footer-widget-items">
                                        <div class="widget-head">
                                            <h3>Information</h3>
                                            <div class="line"></div>
                                        </div>
                                        <ul class="icon-area">
                                            <li>
                                                <div class="icon">
                                                    <img src="{{asset('assets/img/home-1/footer-icon-01.svg')}}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <p>Make a Quote</p>
                                                    <a href="mailto:evenza@gmail.com">evenza@gmail.com</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <img src="{{asset('assets/img/home-1/footer-icon-02.svg')}}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <p>Call Us 7/24</p>
                                                    <a href="tel:+1085051736">+108-505-1736</a>
                                                </div>
                                            </li>
                                        </ul>
                                     </div>
                                </div>
                                <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="footer-widget-items">
                                        <div class="widget-head">
                                            <h3>Up Coming Events</h3>
                                            <div class="line"></div>
                                        </div>
                                        <ul class="recent-post">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('assets/img/home-1/footer-post-01.jpg')}}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <p> <i class="fa-solid fa-calendar"></i> 12 January, 2026</p>
                                                    <h4><a href="{{route('news.details')}}">Top 5 Most Famous Technology Trend In 2024</a></h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('assets/img/home-1/footer-post-02.jpg')}}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <p> <i class="fa-solid fa-calendar"></i> 09 May, 2026</p>
                                                    <h4><a href="{{route('news.details')}}">How Can You Growing Your Agriculture Products</a></h4>
                                                </div>
                                            </li>
                                        </ul>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="footer-bottom-wrapper">
                                <p class="wow fadeInUp" data-wow-delay=".2s">© All Copyright 2026 by Evenza</p>       
                                <ul class="footer-menu wow fadeInUp" data-wow-delay=".4s">
                                    <li>
                                        <a href="{{route('contact')}}">
                                            Terms & Condition
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">
                                        Privacy Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>


            </div>
        </div>

        <script>
    document.querySelectorAll('.progress-bar').forEach(function(bar) {
        let width = bar.getAttribute('data-width');
        bar.style.width = width + '%';
    });
</script>


        
       <!--<< All JS Plugins >>-->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

<!--<< Viewport Js >>-->
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>

<!--<< Bootstrap Js >>-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!--<< Gsap Min Js >>-->
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>

<!--<< ScrollTrigger Min Js >>-->
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>

<!--<< ScrollSmoother Min Js >>-->
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>

<!--<< ScrollToPlugin Min Js >>-->
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>

<!--<< SplitText Min Js >>-->
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>

<!--<< TextPlugin Min Js >>-->
<script src="{{ asset('assets/js/TextPlugin.js') }}"></script>

<!--<< nice-select Js >>-->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

<!--<< Waypoints Js >>-->
<script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>

<!--<< Counterup Js >>-->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<!--<< Swiper Slider Js >>-->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

<!--<< MeanMenu Js >>-->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>

<!--<< Magnific Popup Js >>-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<!--<< Wow Animation Js >>-->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<!--<< Main.js >>-->
<script src="{{ asset('assets/js/main.js') }}"></script>