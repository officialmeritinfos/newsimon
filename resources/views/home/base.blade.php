
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('home/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/sinace-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('home/css/sinace.css')}}" />
    <link rel="stylesheet" href="{{asset('home/css/sinace-responsive.css')}}" />
</head>

<body class="custom-cursor">
@inject('injected','App\Defaults\Custom')

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>





<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header-three">
        <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
                <div class="main-menu-three__wrapper-inner">
                    <div class="main-menu-three__logo">
                        <a href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt=""></a>
                    </div>
                    <div class="main-menu-three__wrapper-inner-content">
                        <div class="main-menu-three__top">
                            <div class="main-menu-three__top-inner">
                                <div class="main-menu-three__top-left">
                                    <ul class="list-unstyled main-menu-three__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:{{$web->email}}">{{$web->email}}</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker"></i>
                                            </div>
                                            <div class="text">
                                                <p>{{$web->address}}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu-three__top-right">
                                    <ul class="list-unstyled main-menu-three__top-menu">
                                        <li><a href="{{url('/about')}}">About</a></li>
                                        <li><a href="{{route('register')}}">Register</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                    </ul>
                                    <div class="main-menu-three__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu-three__bottom">
                            <div class="main-menu-three__bottom-inner">
                                <div class="main-menu-three__main-menu-box">
                                    <div class="main-menu-three__main-menu-box-left">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li class="dropdown">
                                                <a href="{{url('/')}}">Home</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="{{url('about')}}">About</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Company</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('about')}}">About Us</a></li>
                                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    @foreach($injected->getSectors() as $sector)
                                                        <li><a href="{{route('service.details',['id'=>$sector->id])}}" >{{$sector->title}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Sectors</a>
                                                <ul class="sub-menu">
                                                    @foreach($injected->getServices() as $service)
                                                        <li><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Help</a>
                                                <ul class="sub-menu">
                                                    <li ><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                                    <li ><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                                    <li ><a href="{{url('privacy')}}" >Privacy policy</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Account</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('login')}}" >Login</a></li>
                                                    <li><a href="{{route('register')}}" >Register</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="main-menu-three__right">
                                    <div class="main-menu-three__btn-box">
                                        <a href="{{route('register')}}" class="thm-btn main-menu-three__btn">
                                            Get Started
                                        </a>
                                    </div>
                                    @if(!empty($web->phone))
                                        <div class="main-menu-three__call">
                                            <div class="main-menu-three__call-icon">
                                                <span class="icon-telephone"></span>
                                            </div>
                                            <div class="main-menu-three__call-content">
                                                <p class="main-menu-three__call-sub-title">Call Anytime</p>
                                                <h5 class="main-menu-three__call-number"><a href="tel:{{$web->phone}}">
                                                        {{$web->phone}}
                                                    </a></h5>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!-- Main Sllider Start -->
    <section class="main-slider-three">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
             data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider-three__slide-1">
                <div class="main-slider-three__bg"
                     style="background-image: url({{asset('home/images/backgrounds/main-slider-3-1.png')}});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider-three__shape-1 img-bounce">
                    <img src="{{asset('home/images/shapes/main-slider-three-shape-1.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="main-slider-three__content">
                        <div class="main-slider-three__shape-2 float-bob-x">
                            <img src="{{asset('home/images/shapes/main-slider-three-shape-2.png')}}" alt="">
                        </div>
                        <div class="main-slider-three__title-box">
                            <h2 class="main-slider-three__title">AI -Powered <br>
                                Investment <br/><span>Strategy</span> <br> </h2>
                        </div>
                        <div class="main-slider-three__btn-box">
                            <a href="{{route('register')}}" class="main-slider-three__btn thm-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider-three__slide-2">
                <div class="main-slider-three__bg"
                     style="background-image: url({{asset('home/images/backgrounds/main-slider-3-2.png')}});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider-three__shape-1 img-bounce">
                    <img src="{{asset('home/images/shapes/main-slider-three-shape-1.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="main-slider-three__content">
                        <div class="main-slider-three__shape-2 float-bob-x">
                            <img src="{{asset('home/images/shapes/main-slider-three-shape-2.png')}}" alt="">
                        </div>
                        <div class="main-slider-three__title-box">
                            <h2 class="main-slider-three__title">Building  <br>
                                your  <span>Wealth</span> <br> the right way</h2>
                        </div>
                        <div class="main-slider-three__btn-box">
                            <a href="{{route('register')}}" class="main-slider-three__btn thm-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Main Sllider Start -->

    <!--Feature Two Start -->
    <section class="feature-two">
        <div class="feature-two__shape-1">
            <img src="{{asset('home/images/shapes/feature-two-shape-1.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-growth-1"></span>
                        </div>
                        <div class="feature-two__content">
                            <h3><a href="#">Diversified Strategy
                                    <br> for Growth</a></h3>
                            <p>
                                Join us in the investment of real estate, gold funds, cannabis, and crypto.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End-->
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-targeted-marketing"></span>
                        </div>
                        <div class="feature-two__content">
                            <h3><a href="#">Daily fixed
                                    <br> returns</a></h3>
                            <p>{{$siteName}} offers an assured daily income stream.</p>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End-->
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-seo"></span>
                        </div>
                        <div class="feature-two__content">
                            <h3><a href="#">Expert Financial
                                    <br> Consultants</a></h3>
                            <p>Put your money in the capable hands of our professional team.</p>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End-->
            </div>
            <div class="feature-two__bottom-text">
                <p>Top Rated consultancy By Customers With 95%% Success Rate</p>
            </div>
        </div>
    </section>
    <!--Feature Two Start-->

    <!--About Three Start-->
    <section class="about-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left">
                        <div class="about-three__img-box">
                            <div class="about-three__img">
                                <img src="{{asset('home/images/resources/about-three-img-1.jpg')}}" alt="">
                                <div class="about-three__shape-2 img-bounce"></div>
                                <div class="about-three__shape-1">
                                    <img src="{{asset('home/images/shapes/about-three-shape-1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="about-three__img-2">
                                <img src="{{asset('home/images/resources/about-three-img-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Welcome to {{$siteName}}</span>
                            </div>
                            <h2 class="section-title__title">Providing Quality
                                <br> Investment <span>Expertise</span></h2>
                        </div>
                        <p class="about-three__text">
                            At {{$siteName}} we believe in more than just investing; we believe in strategic wealth planning.
                            Our team of experts collaborates with you to craft a personalized roadmap for financial success.
                            From short-term gains to long-term legacies, we meticulously plan every step, ensuring your investments
                            align with your aspirations. Join us in redefining the art of wealth creation through strategic
                            planning and astute decision-making.
                        </p>
                        <p class="about-three__text">
                            Embark on a personalized financial journey with Cipher Minin, where we help you uncover the vast
                            potential of your financial horizon. Our tailored strategies and innovative solutions are designed
                            to align with your unique goals, ensuring a path to prosperity that's as individual as you are.
                            Let {{$siteName}} be your compass as you navigate towards a secure and rewarding financial future.
                        </p>
                        <ul class="about-three__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Real Estate</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Mining</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Financial Planning</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three Start-->

    <!--Services Three Start-->
    <section class="services-three">
        <div class="services-three__bg"
             style="background-image: url({{asset('home/images/backgrounds/services-three-bg.png')}});"></div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">what we’re doing</span>
                </div>
                <h2 class="section-title__title">Offering the Best Investment
                    <br> & Finance <span>Services</span></h2>
            </div>
            <div class="row justify-content-center">
                @foreach($services as $service)
                    <!--Services Two Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-two__single">
                            <div class="services-two__img-box">
                                <div class="services-two__img">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                                </div>
                                <div class="services-two__icon">
                                    <span class="icon-pie-chart"></span>
                                </div>
                            </div>
                            <div class="services-two__content">
                                <h3 class="services-two__title"><a href="{{route('service.details',['id'=>$service->id])}}">
                                        {{$service->title}}
                                    </a></h3>
                                <p class="services-two__text">
                                    {{\Illuminate\Support\Str::words($service->short,5)}}
                                </p>
                            </div>
                            <div class="services-two__hover-single">
                                <div class="services-two__hover-img"
                                     style="background-image: url({{asset('home/serv/'.$service->photo)}});">
                                </div>
                                <div class="services-two__hover-content-box">
                                    <div class="services-two__hover-icon">
                                        <span class="icon-pie-chart"></span>
                                    </div>
                                    <div class="services-two__hover-content">
                                        <h3 class="services-two__hover-title"><a href="{{route('service.details',['id'=>$service->id])}}">
                                                {{$service->title}}
                                            </a></h3>
                                        <p class="services-two__hover-text">
                                            {{\Illuminate\Support\Str::words($service->short,5)}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                @endforeach

            </div>
        </div>
    </section>
    <!--Services Three End-->

    <!--Testimonial Three Start-->
    <section class="testimonial-three">
        <div class="testimonial-three__bg"
             style="background-image: url({{asset('home/images/backgrounds/testimonial-three-bg.png')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="testimonial-three__left">
                        <div class="testimonial-three__shape-1 float-bob-y">
                            <img src="{{asset('home/images/shapes/testimonial-three-shape-1.png')}}" alt="">
                        </div>
                        <div class="testimonial-three__carousel owl-carousel owl-theme thm-owl__carousel"
                             data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__quote">
                                        <span>“</span>
                                    </div>
                                    <p class="testimonial-three__text">If we truly know and understand how <br> your
                                        business works, we will be able <br> to deliver the right creative solutions
                                        <br> that
                                        will make a big difference. <br> Because in the end our ideas only <br>
                                        matter.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="{{asset('home/images/testimonial/testimonial-3-1.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-three__client-info">
                                            <h3><a href="testimonials">Sarah Albert</a></h3>
                                            <p>CO Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__quote">
                                        <span>“</span>
                                    </div>
                                    <p class="testimonial-three__text">If we truly know and understand how <br> your
                                        business works, we will be able <br> to deliver the right creative solutions
                                        <br> that
                                        will make a big difference. <br> Because in the end our ideas only <br>
                                        matter.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="{{asset('home/images/testimonial/testimonial-3-2.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-three__client-info">
                                            <h3><a href="testimonials">Tamu Albert</a></h3>
                                            <p>CO Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__quote">
                                        <span>“</span>
                                    </div>
                                    <p class="testimonial-three__text">If we truly know and understand how <br> your
                                        business works, we will be able <br> to deliver the right creative solutions
                                        <br> that
                                        will make a big difference. <br> Because in the end our ideas only <br>
                                        matter.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="{{asset('home/images/testimonial/testimonial-3-3.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-three__client-info">
                                            <h3><a href="testimonials">Robert Hardson</a></h3>
                                            <p>CO Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                            <!--Testimonial Three Single Start-->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__quote">
                                        <span>“</span>
                                    </div>
                                    <p class="testimonial-three__text">If we truly know and understand how <br> your
                                        business works, we will be able <br> to deliver the right creative solutions
                                        <br> that
                                        will make a big difference. <br> Because in the end our ideas only <br>
                                        matter.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="{{asset('home/images/testimonial/testimonial-3-4.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-three__client-info">
                                            <h3><a href="testimonials">Kevin Martin</a></h3>
                                            <p>CO Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Three Single End-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-three__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">real World Experience</span>
                            </div>
                            <h2 class="section-title__title">Finance & Consulting is for Every
                                Type of <span>Businesses</span></h2>
                        </div>
                        <ul class="testimonial-three__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-experience"></span>
                                </div>
                                <h3 class="testimonial-three__title">Large Markets</h3>
                                <p class="testimonial-three__text-2">Sed quia lipsum dolor sit atur adipiscing elit
                                    is
                                    nunc quis tellus sed ligula porta ultricies quis nec magna neulla.</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-consulting"></span>
                                </div>
                                <h3 class="testimonial-three__title">Small Businesses</h3>
                                <p class="testimonial-three__text-2">Sed quia lipsum dolor sit atur adipiscing elit
                                    is
                                    nunc quis tellus sed ligula porta ultricies quis nec magna neulla.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Three End-->

    <!--Project Three Start-->
    <section class="project-three">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Recent work lists</span>
                </div>
                <h2 class="section-title__title">Recently Completed Our
                    <br> Clients <span>Projects</span></h2>
            </div>
            <div class="row">
                <!--Project Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="project-two__single">
                        <div class="project-two__img-box">
                            <div class="project-two__img">
                                <img src="{{asset('home/images/project/project-2-1.jpg')}}" alt="">
                            </div>
                            <div class="project-two__tagline">
                                <p>Consulting</p>
                            </div>
                        </div>
                        <div class="project-two__title-box">
                            <h3 class="project-two__title"><a href="portfolio-details">Data
                                    Analysis</a></h3>
                        </div>
                    </div>
                </div>
                <!--Project Two Single Start-->
                <!--Project Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="project-two__single">
                        <div class="project-two__img-box">
                            <div class="project-two__img">
                                <img src="{{asset('home/images/project/project-2-2.jpg')}}" alt="">
                            </div>
                            <div class="project-two__tagline">
                                <p>Consulting</p>
                            </div>
                        </div>
                        <div class="project-two__title-box">
                            <h3 class="project-two__title"><a href="portfolio-details">Market Rules</a></h3>
                        </div>
                    </div>
                </div>
                <!--Project Two Single Start-->
                <!--Project Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="project-two__single">
                        <div class="project-two__img-box">
                            <div class="project-two__img">
                                <img src="{{asset('home/images/project/project-2-3.jpg')}}" alt="">
                            </div>
                            <div class="project-two__tagline">
                                <p>Consulting</p>
                            </div>
                        </div>
                        <div class="project-two__title-box">
                            <h3 class="project-two__title"><a href="portfolio-details">Pure Consulting</a></h3>
                        </div>
                    </div>
                </div>
                <!--Project Two Single Start-->
                <!--Project Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="project-two__single">
                        <div class="project-two__img-box">
                            <div class="project-two__img">
                                <img src="{{asset('home/images/project/project-2-4.jpg')}}" alt="">
                            </div>
                            <div class="project-two__tagline">
                                <p>Consulting</p>
                            </div>
                        </div>
                        <div class="project-two__title-box">
                            <h3 class="project-two__title"><a href="portfolio-details">Data
                                    Analysis</a></h3>
                        </div>
                    </div>
                </div>
                <!--Project Two Single Start-->
            </div>
        </div>
    </section>
    <!--Project Three End-->

    <!--Together One Start-->
    <section class="together-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="together-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">business growth</span>
                            </div>
                            <h2 class="section-title__title">Together We can Boost
                                <br> Your <span>Business</span></h2>
                        </div>
                        <p class="together-one__text-1">Proin est lacus, sagittis lobortis iaculise get.</p>
                        <p class="together-one__text-2">There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable.</p>
                        <ul class="together-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-growth-2"></span>
                                </div>
                                <h3>Market Management</h3>
                                <p>Lorem ipsum is not tex dolor sit amet, consectetur notted.</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-increment"></span>
                                </div>
                                <h3>Business Analysis</h3>
                                <p>Lorem ipsum is not tex dolor sit amet, consectetur notted.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="together-one__right">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="together-one__explore">
                                    <p>Explore
                                        <br> Consultancy
                                        <br> Services</p>
                                </div>
                                <div class="together-one__img">
                                    <img src="{{asset('home/images/resources/together-one-img-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="together-one__img-2">
                                    <img src="{{asset('home/images/resources/together-one-img-2.jpg')}}" alt="">
                                </div>
                                <div class="together-one__advice">
                                    <p>Get a
                                        <br> Professional
                                        <br> Advice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Together One End-->

    <!--Expectation One Start-->
    <section class="expectation-one">
        <div class="expectation-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url({{asset('home/images/backgrounds/expectation-one-bg.jpg')}});"></div>
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Recent work lists</span>
            </div>
            <h2 class="section-title__title">Consultancy Work that Meets
                <br> Your <span>Expectations</span></h2>
        </div>
        <div class="expectation-one__inner">
            <div class="container">
                <ul class="expectation-one__points list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title"><a href="about">Saving and Strategy</a></h3>
                        <p class="expectation-one__text">There are many variations of passages of available but the
                            majority have suffered alteration in some form injected randomised words.</p>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-conversation"></span>
                        </div>
                        <h3 class="expectation-one__title"><a href="about">HR Business Consulting</a></h3>
                        <p class="expectation-one__text">There are many variations of passages of available but the
                            majority have suffered alteration in some form injected randomised words.</p>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-planning"></span>
                        </div>
                        <h3 class="expectation-one__title"><a href="about">Business Planning</a></h3>
                        <p class="expectation-one__text">There are many variations of passages of available but the
                            majority have suffered alteration in some form injected randomised words.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Expectation One End-->

    <!--Brand Two Start-->
    <section class="brand-two">
        <div class="container">
            <div class="brand-two__inner">
                <div class="brand-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":3
                            },
                            "992":{
                                "items": 5
                            }
                        }
                    }'>
                    <!--Brand Two Single-->
                    <div class="brand-two__single">
                        <div class="brand-two__img">
                            <img src="{{asset('home/images/brand/brand-2-1.png')}}" alt="">
                        </div>
                    </div>
                    <!--Brand Two Single-->
                    <!--Brand Two Single-->
                    <div class="brand-two__single">
                        <div class="brand-two__img">
                            <img src="{{asset('home/images/brand/brand-2-2.png')}}" alt="">
                        </div>
                    </div>
                    <!--Brand Two Single-->
                    <!--Brand Two Single-->
                    <div class="brand-two__single">
                        <div class="brand-two__img">
                            <img src="{{asset('home/images/brand/brand-2-3.png')}}" alt="">
                        </div>
                    </div>
                    <!--Brand Two Single-->
                    <!--Brand Two Single-->
                    <div class="brand-two__single">
                        <div class="brand-two__img">
                            <img src="{{asset('home/images/brand/brand-2-4.png')}}" alt="">
                        </div>
                    </div>
                    <!--Brand Two Single-->
                    <!--Brand Two Single-->
                    <div class="brand-two__single">
                        <div class="brand-two__img">
                            <img src="{{asset('home/images/brand/brand-2-5.png')}}" alt="">
                        </div>
                    </div>
                    <!--Brand Two Single-->
                </div>
                <!-- If we need navigation buttons -->
            </div>
        </div>
    </section>
    <!--Brand Two End-->

    <!--News Two Start -->
    <section class="news-two">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our News Updates</span>
                </div>
                <h2 class="section-title__title">Latest Articles & <br>
                    News from the <span>Blogs</span> </h2>
            </div>
            <div class="row">
                <!--News Two Single Start -->
                <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                    <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                    <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                </div>
                <!--News Two Single End -->

            </div>
        </div>
    </section>
    <!--News Two End -->

    <!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer__shape-1 float-bob-x">
            <img src="{{asset('home/images/shapes/site-footer-shape-1.png')}}" alt="">
        </div>
        <div class="site-footer__bg" style="background-image: url({{asset('home/images/backgrounds/site-footer-bg.png')}});">
        </div>
        <div class="site-footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt=""></a>
                            </div>
                            <p class="footer-widget__about-text">
                                {{$siteName}} is a leading investment management organization that is dedicated to meeting
                                each client’s unique needs through a wide range of investment strategies. Our team of investment
                                experts is committed to increasing our clients’ returns on investment and fostering long-lasting
                                partnerships based on trust and open communication.
                            </p>
                            <div class="site-footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__link">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Explore</h3>
                            </div>
                            <ul class="footer-widget__link-list list-unstyled">
                                <li><a href="{{url('faqs')}}"><i class="far fa-chevron-double-right"></i>Help Center</a></li>
                                <li><a href="{{url('terms')}}"><i class="far fa-chevron-double-right"></i>terms & conditions</a></li>
                                <li><a href="{{url('privacy')}}"><i class="far fa-chevron-double-right"></i>privacy policy</a></li>
                                <li><a href="{{route('register')}}"><i class="far fa-chevron-double-right"></i>Create Account</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© Copyright {{date('Y')}} by <a href="#">{{$siteName}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{url('/')}}" aria-label="logo image"><img src="{{asset('home/images/resources/logo-2.png')}}" width="135"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@sinace.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


<script src="{{asset('home/vendors/jquery/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('home/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('home/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('home/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('home/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('home/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('home/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('home/vendors/wow/wow.js')}}"></script>
<script src="{{asset('home/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('home/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('home/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('home/vendors/vegas/vegas.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('home/vendors/timepicker/timePicker.js')}}"></script>
<script src="{{asset('home/vendors/circleType/jquery.circleType.js')}}"></script>
<script src="{{asset('home/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script src="{{asset('home/vendors/highcharts/highcharts.min.js')}}"></script>
<script src="{{asset('home/vendors/touch/touch-paid-min.js')}}"></script>
<script src="{{asset('home/js/sip-calculator.js')}}"></script>
<script src="{{asset('home/js/lumpsum-calculator.js')}}"></script>
<script src="{{asset('home/js/inflation.js')}}"></script>
<script src="{{asset('home/js/target-amount-calculator.js')}}"></script>
<script src="{{asset('home/js/tab.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')

<!-- template js -->
<script src="{{asset('home/js/sinace.js')}}"></script>
</body>
</html>
