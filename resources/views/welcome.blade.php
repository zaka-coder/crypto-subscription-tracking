<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypto Signals</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/sass/app.scss'])
</head>

<body>
    <div class="container-fluid">
        <!-- hero video -->
        <div class="container-fluid p-0">
            <div class="row hero-video-wrapper">
                <video autoplay muted loop>
                    <source src="{{asset('assets/videos/webiste-hero.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <!-- hero video end-->

        <!--   navbar  + hero text-->
        <div class="">
            <!--  navbar -->
            <nav class="navbar navbar-expand-lg position-fixed top-0 w-100 z-3">
                <div class="container pt-1 pe-4 pe-md-0">
                    <a class="navbar-brand" href="#">
                        {{-- <img src="{{asset('assets/images/logo.png')}}" class="object-fit-cover" alt="logo-image"
                            height="" width="120"> --}}
                        <h2 class="font-display text-white">Crypto Signals</h2>
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="filter:invert(1)"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item header-item">
                                <a class="font-body text-lg text-decoration-none text-white font-regular"
                                    aria-current="page" href="#plans">Pricing Plans</a>
                            </li>
                            <li class="nav-item header-item">
                                <a class="font-body text-lg text-decoration-none text-white font-regular"
                                    aria-current="page" href="#ourTeam">About us</a>
                            </li>
                            <li class="header-item">
                                <a href="https://wa.me/03049164099"
                                    class="text-decoration-none font-heading font-regular text-white text-md border border-2 rounded-pill px-5 py-2 special-btn-hover">
                                    Register now
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--  navbar end-->

            <!--  hero text -->
            <div class="row z-1">
                <div class="mt-5 position-absolute w-100 z-1" style="top:70px">
                    <div class="container z-1">
                        <h2 class="text-white font-display display-5">Profit from every signal</h2>
                        <p class="font-heading text-white text-lg font-regular mt-4" style="letter-spacing: 5px">
                            Get expert crypto signals and real-time<br> alerts—profits at your fingertips.</p>
                        <a href="https://wa.me/03049164099"
                            class="text-decoration-none font-heading font-regular text-white text-md border border-2 rounded-pill px-5 py-3 mt-4 d-inline-block special-btn-hover">
                            Register now
                        </a>
                    </div>
                </div>
            </div>
            <!--  hero text end -->
        </div>
        <!--   navbar end-->

        <!-- secondary hero text -->
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-8">
                    <h3 class="text-white font-display display-5">Trade with Confidence</h3>
                    <p class="font-body text-white text-base">With a team of seasoned market experts and a track record
                        of proven results, our crypto signals provide you with trustworthy, data-driven insights—helping
                        you trade confidently and achieve consistent returns.</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                    <a href="https://wa.me/03049164099"
                        class="text-decoration-none font-heading font-regular text-white text-xl rounded-pill mt-4 d-inline-block gaint-btn w-100 text-center">
                        Register now
                    </a>
                </div>
            </div>
        </div>
        <!-- secondary hero text end-->

    </div>

    <!--  gradient divider -->
    <div class="container-fluid bg-info gradient-divider mb-5">
    </div>
    <!--  gradient divider end -->


    <div class="container-fluid">
        <div class="container-xxl p-0">
            <!-- keynotes section -->
            <div class="row" id="ourTeam">
                <div class="col-lg-4 keynotes-text px-3 py-4 p-md-5">
                    <small class="text-primary font-heading" style="letter-spacing: 5px;font-size:11px">KEYNOTES</small>
                    <h3 class="text-white font-display display-5 mt-4">Meet Our Expert Team</h3>
                    <p class="font-body text-white text-base mt-5 mb-5">Our dedicated team of seasoned crypto analysts
                        combines years of market experience with a passion for innovation. Each member is committed to
                        providing you with the most accurate and actionable signals, leveraging advanced analytics and
                        real-time data. Trust in our expertise as we navigate the ever-evolving world of cryptocurrency
                        together, ensuring you stay ahead of the curve.</p>

                    <a href="#"
                        class="d-inline-block mt-5 font-heading font-regular text-white text-md text-decoration-none gradient-border-bottom">Learn
                        more</a>
                </div>
                <div class="col-lg-8 keynotes-images p-0">
                    <a href="#">
                        <img src="{{asset('assets/images/keynotes-persons.png')}}" alt="" class="object-fit-cover"
                            width="100%">
                    </a>
                </div>
            </div>
            <!-- keynotes section end-->

            <!-- plans -->
            <div class="row expert-insight-section px-1 px-md-5 py-5 mt-5" id="plans">
                <div class="col-lg-12">
                    <div class="row mb-5">
                        <div class="col-md-10">
                            <h3 class="text-white font-display display-5">Pricing Plans</h3>
                        </div>
                        <div class="mt-5 mt-md-0 col-md-2 position-relative">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <!-- Slider main container -->
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper h-auto">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide single-slider-item">
                                <div class="slider-card rounded-4 shadow">
                                    <div class="p-4 mt-4 slider-body">
                                        <p class="rounded-pill bg-white ms-auto text-black text-center font-body text-base"
                                            style="width: 100px">Basic
                                        </p>
                                        <div class="title font-heading font-regular text-white text-lg mb-4">$
                                            <span class="text-display display-3">19.99</span> <span
                                                class="font-body text-base">/ Month</span>
                                        </div>
                                        <div class="text">
                                            <ul class="list-unstyled">
                                                <li class="">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Receive one daily signal for a popular cryptocurrency
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Clear, straightforward buy/sell points
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Signals delivered directly to your inbox
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-danger text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-x-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Get signals for multiple top-performing cryptocurrencies
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-danger text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-x-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Comprehensive buy/sell points with risk management
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-danger text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-x-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Instant notifications via email and app
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-danger text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-x-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Exclusive insights into crypto market trends
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a href="#"
                                                class="d-inline-block mt-5 font-heading font-regular text-white text-md text-decoration-none gradient-border-bottom">Learn
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide single-slider-item">
                                <div class="slider-card rounded-4 shadow">
                                    <div class="p-4 mt-4 slider-body">
                                        <p class="rounded-pill bg-white ms-auto text-black text-center font-body text-base"
                                            style="width: 100px">Standard
                                        </p>
                                        <div class="title font-heading font-regular text-white text-lg mb-4">$
                                            <span class="text-display display-3">29.99</span> <span
                                                class="font-body text-base">/ Month</span>
                                        </div>
                                        <div class="text">
                                            <ul class="list-unstyled">
                                                <li class="">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Receive one daily signal for a popular cryptocurrency
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Clear, straightforward buy/sell points
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Signals delivered directly to your inbox
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Get signals for multiple top-performing cryptocurrencies
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Comprehensive buy/sell points with risk management
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Instant notifications via email and app
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Exclusive insights into crypto market trends
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-danger text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-x-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Access all available signals across multiple crypto assets.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-danger text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-x-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            In-depth analysis and high-probability setups.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-danger text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-x-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Access to 1:1 support and Q&A sessions with analysts.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-danger text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-x-lg"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Detailed reports covering performance, trends, and
                                                            forecasts.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a href="#"
                                                class="d-inline-block mt-5 font-heading font-regular text-white text-md text-decoration-none gradient-border-bottom">Learn
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide single-slider-item">
                                <div class="slider-card rounded-4 shadow">
                                    <div class="p-4 mt-4 slider-body">
                                        <p class="rounded-pill bg-white ms-auto text-black text-center font-body text-base"
                                            style="width: 100px">Premium
                                        </p>
                                        <div class="title font-heading font-regular text-white text-lg mb-4">$
                                            <span class="text-display display-3">49.99</span> <span
                                                class="font-body text-base">/ Month</span>
                                        </div>
                                        <div class="text">
                                            <ul class="list-unstyled">
                                                <li class="">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Receive one daily signal for a popular cryptocurrency
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Clear, straightforward buy/sell points
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Signals delivered directly to your inbox
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Get signals for multiple top-performing cryptocurrencies
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Comprehensive buy/sell points with risk management
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Instant notifications via email and app
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Exclusive insights into crypto market trends
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Access all available signals across multiple crypto assets.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            In-depth analysis and high-probability setups.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Access to 1:1 support and Q&A sessions with analysts.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Detailed reports covering performance, trends, and
                                                            forecasts.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a href="#"
                                                class="d-inline-block mt-5 font-heading font-regular text-white text-md text-decoration-none gradient-border-bottom">Learn
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide single-slider-item">
                                <div class="slider-card rounded-4 shadow">
                                    <div class="p-4 mt-4 slider-body">
                                        <p class="rounded-pill bg-white ms-auto text-black text-center font-body text-base"
                                            style="width: 120px">Super Yearly
                                        </p>
                                        <div class="title font-heading font-regular text-white text-lg mb-4">$
                                            <span class="text-display display-3">99.99</span> <span
                                                class="font-body text-base">/ Year</span>
                                        </div>
                                        <div class="text">
                                            <ul class="list-unstyled">
                                                <li class="">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Receive one daily signal for a popular cryptocurrency
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Clear, straightforward buy/sell points
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Signals delivered directly to your inbox
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Get signals for multiple top-performing cryptocurrencies
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Comprehensive buy/sell points with risk management
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Instant notifications via email and app
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Exclusive insights into crypto market trends
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Access all available signals across multiple crypto assets.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            In-depth analysis and high-probability setups.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Access to 1:1 support and Q&A sessions with analysts.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-2 d-flex align-items-center justify-content-center">
                                                            <span
                                                                class="bg-primary text-dark rounded-circle d-flex align-items-center justify-content-center"
                                                                style="height: 30px;width:30px">
                                                                <i class="bi bi-check2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 font-body text-base">
                                                            Detailed reports covering performance, trends, and
                                                            forecasts.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a href="#"
                                                class="d-inline-block mt-5 font-heading font-regular text-white text-md text-decoration-none gradient-border-bottom">Learn
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- <div class="col-lg-5 p-5">
                    <h3 class="text-white font-display display-5 mt-4 p-5">Welcome to the infinite toolbox</h3>
                    <p class="font-body text-white text-base p-5 pt-0" style="line-height: 30px">Registration is now
                        open. Come join us in Las
                        Vegas for five exciting days of keynotes, breakout sessions, chalk talks, interactive learning
                        opportunities,<br> and career-changing connections. Get a head start today on choosing your best
                        learning path, booking transportation <br>and accommodations, and bringing your team to an
                        unforgettable week of innovation, connection, and fun.<br><br>

                        Your conversations with AWS leaders, experts, and peers will leave you feeling inspired and
                        equipped to build nearly anything you can imagine—and tackle your most ambitious goals.</p>
                </div> --}}
            </div>
            <!-- plans end-->

            <!--  gradient divider -->
            <div class="row bg-info gradient-divider">
            </div>
            <!--  gradient divider end -->

            <div class="row footer-section p-2 p-md-5">
                <footer class="p-2">
                    <!-- <img src="{{asset('assets/images/logo.png')}}" alt="" width="250"> -->
                    <h2 class="font-display text-white">Crypto Signals</h2>
                    <div class="row mt-5">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <h4 class="font-body font-regular text-white text-xl">Stay up to date with Us.
                            </h4>
                            <form action="" class="w-100 w-md-75 mt-4 px-2">
                                <div class="mb-4">
                                    <label for="email_address"
                                        class="d-block form-label text-white font-thin text-sm font-medium"
                                        style="letter-spacing:1px">*
                                        Bussiness
                                        Email Address</label>
                                    <input type="email" name="" id="email_address"
                                        class="form-control rounded-pill myInput">
                                </div>
                                <div class="mb-4">
                                    <label for="country"
                                        class="d-block form-label text-white font-thin text-sm font-medium"
                                        style="letter-spacing:1px">* Country
                                        /
                                        Region</label>
                                    <input type="text" name="" id="country" class="form-control rounded-pill myInput">
                                </div>
                                <div class="mb-3">
                                    <label for="country"
                                        class="d-block form-label text-white font-thin text-sm font-medium">* I
                                        am
                                        completing this form in connection with my:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="interest"
                                            id="bussiness_interest">
                                        <label class="form-check-label text-white font-thin text-sm font-medium"
                                            for="bussiness_interest">
                                            Business interests
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="interest"
                                            id="personal_interest" checked>
                                        <label class="form-check-label text-white font-thin text-sm font-medium"
                                            for="personal_interest">
                                            Personal interests
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit"
                                        class="font-heading font-regular bg-black text-white text-md border border-2 rounded-pill px-5 py-3 mt-4 d-inline-block w-100 special-btn-hover">
                                        Register now
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-thin text-base font-medium text-white opacity-75"
                                        style="letter-spacing: 1px">Quick Links</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <a href="#plans"
                                                class="font-body text-lg text-white opacity-75 text-decoration-none">
                                                Pricing Plans
                                            </a>
                                        </li>
                                        <li class="mb-3">
                                            <a href="#ourTeam"
                                                class="font-body text-lg text-white opacity-75 text-decoration-none">
                                                Our team
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <p class="font-thin text-base font-medium text-white opacity-75"
                                        style="letter-spacing: 1px">Contact Details</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <a href="#"
                                                class="font-body text-lg text-white opacity-75 text-decoration-none">
                                                info@gmail.com
                                            </a>
                                        </li>
                                        <li class="mb-3">
                                            <a href="#"
                                                class="font-body text-lg text-white opacity-75 text-decoration-none">
                                                +92345678901
                                            </a>
                                        </li>
                                        <li class="mb-3">
                                            <a href="#"
                                                class="font-body text-lg text-white opacity-75 text-decoration-none">
                                                Whatsapp
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </div>
</body>

</html>