<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from nayonacademy.com/html/evenzax/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:40 GMT -->
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
                            <h1 class="breadcrumb-title">Event Gallery</h1>
                             <ul class="breadcrumb-list">
                                <li><a href="{{route('index') }}">Home</a></li>
                                <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                                <li>Event Gallery</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
 <!-- Gallery Section Start -->
    <div class="gallery-section-2 fix section-padding"> 
        <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="gallery-thumb-2">
                    <a href="{{ asset('assets/img/inner-page/gallery-1.html') }}" class="img-popup">
                        <img src="{{ asset('assets/img/inner-page/gallery-1.html') }}" alt="img">
                        <div class="icon">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
             <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="gallery-thumb-2">
                    <a href="{{ asset('assets/img/inner-page/gallery-2.html') }}" class="img-popup">
                        <img src="{{ asset('assets/img/inner-page/gallery-2.html') }}" alt="img">
                        <div class="icon">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
             <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="gallery-thumb-2">
                    <a href="{{ asset('assets/img/inner-page/gallery-3.html') }}" class="img-popup">
                        <img src="{{ asset('assets/img/inner-page/gallery-3.html') }}" alt="img">
                        <div class="icon">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
             <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="gallery-thumb-2">
                    <a href="{{ asset('assets/img/inner-page/gallery-4.html') }}" class="img-popup">
                        <img src="{{ asset('assets/img/inner-page/gallery-4.html') }}" alt="img">
                        <div class="icon">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
             <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="gallery-thumb-2">
                    <a href="{{ asset('assets/img/inner-page/gallery-5.html') }}" class="img-popup">
                        <img src="{{ asset('assets/img/inner-page/gallery-5.html') }}" alt="img">
                        <div class="icon">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
             <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="gallery-thumb-2">
                    <a href="{{ asset('assets/img/inner-page/gallery-6.html') }}" class="img-popup">
                        <img src="{{ asset('assets/img/inner-page/gallery-6.html') }}" alt="img">
                        <div class="icon">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
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

<!-- Mirrored from nayonacademy.com/html/evenzax/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:46 GMT -->
</html>