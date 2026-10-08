<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    
<!-- Mirrored from nayonacademy.com/html/evenzax/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:47 GMT -->
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
                            <h1 class="breadcrumb-title">Error Pages</h1>
                             <ul class="breadcrumb-list">
                                <li><a href=" {{ route('index') }}">Home</a></li>
                                <li><i class="fa-sharp fa-solid fa-arrow-right"></i></li>
                                <li>Error Pages</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
                <!-- Eror Section Start -->
                <section class="error-section section-padding fix">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="error-items">
                                    <div class="error-image wow fadeInUp" data-wow-delay=".3s">
                                        <img src="{{ asset('assets/img/inner-page/404.html') }}" alt="img">
                                    </div>
                                    <h2 class="wow fadeInUp" data-wow-delay=".5s">
                                        <span>Oops!</span> Page not found
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay=".7s">The page you are looking for does not exist</p>
                                    <a href="route{{ ('index') }}" class="theme-btn wow fadeInUp" data-wow-delay=".8s">
                                        <i class="fa-regular fa-house"></i> Back To Home
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

<!-- Mirrored from nayonacademy.com/html/evenzax/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 08:50:48 GMT -->
</html>