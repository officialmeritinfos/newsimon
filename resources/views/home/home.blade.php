@extends('home.base')
@section('content')
    @push('css')
        <style>
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #e40013;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #e40013;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #e40013;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #e40013;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#e40013;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
            small {
                font-size: 12px;
                text-transform: initial;
            }
        </style>
    @endpush

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

    <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Packages</span>
                <h2>Specialized Investment Packages</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                <small class="text-white">{{$package->note}}</small>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li>
                                        Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                    <li>Contract Duration: {{$package->Duration}}</li>
                                    <li>Referral Bonus: {{$package->referral}}% </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

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
                                    <p class="testimonial-three__text">
                                        "{{$siteName}} Real Estate helped me find the perfect investment property. Their expertise and
                                        guidance made the process smooth and stress-free. Highly recommend!"
                                    </p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="https://ui-avatars.com/api/?name=Sarah" alt="">
                                        </div>
                                        <div class="testimonial-three__client-info">
                                            <h3><a href="#">Sarah </a></h3>
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
                                    <p class="testimonial-three__text">
                                        I was impressed by the level of professionalism and attention to detail provided
                                        by {{$siteName}} Real Estate. They truly went above and beyond to ensure my satisfaction
                                    </p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="https://ui-avatars.com/api/?name=Albert" alt="">
                                        </div>
                                        <div class="testimonial-three__client-info">
                                            <h3><a href="#"> Albert</a></h3>
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
                                    <p class="testimonial-three__text">
                                        I highly recommend {{$siteName}} Investment services to anyone looking to invest and earn.
                                        Their professionalism, expertise, and personalized service are second to none.
                                    </p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-img">
                                            <img src="{{asset('home/images/testimonial/testimonial-3-3.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-three__client-info">
                                            <h3><a href="testimonials">Robert </a></h3>
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
                                Type of <span>Finance</span></h2>
                        </div>
                        <ul class="testimonial-three__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-experience"></span>
                                </div>
                                <h3 class="testimonial-three__title">Diversify</h3>
                                <p class="testimonial-three__text-2">
                                    We work in multiple sectors and provide the best and most efficient financial strategy to grow your wealth.
                                </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-consulting"></span>
                                </div>
                                <h3 class="testimonial-three__title">Manage Asset</h3>
                                <p class="testimonial-three__text-2">
                                    Book a session with our financial experts to schedule the best asset management
                                    technique to use and grow your wealth from zero to hero.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Three End-->


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

@endsection
