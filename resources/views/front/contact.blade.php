<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from nayonacademy.com/html/evenzax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:49:32 GMT -->
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
                            <h1 class="breadcrumb-title">Contact Us</h1>
                             <ul class="breadcrumb-list">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
                <!-- Contact Section Start -->
                <section class="location-section-2 section-padding fix">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xl-5 col-lg-6">
                                <div class="location-left-content-inner">
                                    <div class="section-title mb-0">
                                        <h6 class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                        LGrt In Touch <span class="line-2"></span></h6>
                                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Contact with Us For Your Any Help</h2>
                                    </div>
                                    <p class="location-text wow fadeInUp" data-wow-delay=".3s">
                                        We’d love to hear from you! Whether you have questions, need <br> more information, or are ready to discuss how we can help you.
                                    </p>
                                    <div class="contact-list">
                                        <ul>
                                            <li class="wow fadeInUp">
                                                <span>Call Center:</span>
                                                <p><a href="tel:+163217322978">+163 2173 22978</a></p>
                                                <p><a href="tel:+163217322979">+163 2173 22979</a></p>
                                            </li>
                                            <li class="wow fadeInUp">
                                                <span>Our Social:</span>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="wow fadeInUp">
                                                <span>Our Location:</span>
                                                <p>Apple Upper West Side, Brooklyn</p>
                                            </li>
                                            <li class="wow fadeInUp">
                                                <span>Our Email:</span>
                                                <p><a href="mailto:evenza@gmail.com">evenza@gmail.com</a></p>
                                                <p><a href="mailto:Support@Info.com">Support@Info.com</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="map-section-contact-inner">
                                    <div class="google-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Section Start -->
                <section class="contact-section-inner section-padding fix pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <form action="https://nayonacademy.com/html/evenzax/contact.php" id="contact-form" class="contact-form-box">
                                    <h3 class="wow fadeInUp">Get In Touch</h3>
                                    <div class="row g-4 align-items-center justify-content-center">
                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="form-clt">
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/inner-page/contact-icon-01.svg') }}" alt="img">
                                                </div>
                                                <input type="text" name="name" id="name" placeholder="Your name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="form-clt">
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/inner-page/contact-icon-02.svg') }}" alt="img">
                                                </div>
                                                <input type="text" name="email" id="email2" placeholder="Email address*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="form-clt">
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/inner-page/contact-icon-03.svg') }}" alt="img">
                                                </div>
                                                <input type="text" name="phone" id="phone" placeholder="Phone number*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <div class="form">
                                                    <select class="single-select w-100">
                                                        <option>Select service</option>
                                                        <option>Event Planning</option>
                                                        <option>Venue Selection</option>
                                                        <option>Event Branding</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                                            <div class="form-clt">
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/inner-page/contact-icon-04.svg') }}" alt="img">
                                                </div>
                                                <textarea name="message" id="message" placeholder="Write a message*"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                            <div class="contact-button">
                                                <button type="submit" class="theme-btn">
                                                Submit Message
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

<!-- Mirrored from nayonacademy.com/html/evenzax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:49:40 GMT -->
</html>