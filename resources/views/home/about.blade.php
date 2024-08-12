@extends('home.base')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('home/images/backgrounds/page-header-bg.jpg')}});">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="{{asset('home/images/shapes/page-header-shape-2.png')}}" alt="">
        </div>
        <div class="page-header__shape-1 float-bob-y">
            <img src="{{asset('home/images/shapes/page-header-shape-1.png')}}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{asset('home/images/shapes/page-header-shape-3.png')}}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{$pageName}}</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>{{$pageName}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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
                <div class="col-xl-12">
                    <img src="{{asset('envestacert.jpg')}}" />
                </div>
            </div>
        </div>
    </section>
    <!--About Three Start-->

@endsection
