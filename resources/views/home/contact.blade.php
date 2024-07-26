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

    <!-- Business One -->
    <div class="contact__three pb-0 section-padding">
        <div class="container">
            <div class="row justify-content-center">



                @if(!empty($web->phone))
                    <div class="col-xl-4 col-md-6 lg-mb-30">
                        <div class="contact__three-info">
                            <div class="contact__three-info-icon">
                                <img src="{{asset('home//img/icon/call.png')}}" alt="">
                            </div>
                            <div class="contact__three-info-content">
                                <h4>Talk to US</h4>
                                <p><a href="{{$web->phone}}">{{$web->phone}}</a></p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-xl-4 col-md-6 md-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="{{asset('home//img/icon/email.png')}}" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Quick Email</h4>
                            <p><a href="mailto:{{$web->email}}">{{$web->email}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="{{asset('home//img/icon/locations.png')}}" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Office Location</h4>
                            <p>{!! $web->address !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Map One -->
    <section class="map-one">
        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- End Map One -->


@endsection
