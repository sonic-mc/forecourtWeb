@extends('layouts.app')

@section('title', config('site.name') . ' - Professional Fuel Handling Equipment Services Zimbabwe')
@section('meta_description', 'Leading fuel handling equipment specialists in Zimbabwe. Professional tank calibration, fuel dispenser installation, repair, maintenance & calibration services for petrol stations & commercial facilities.')

@section('content')

<!-- Start Main Slider -->
<section class="main-slider style1">
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide -->
            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('images/harare.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content">
                        <h2>Fuel <span>Equipment</span><br> Experts</h2>
                        <h3><img src="{{ asset('assets/images/icon/slide-title-icon-1.png') }}" alt="">Trusted Across Zimbabwe.</h3>
                        <div class="text">
                            <p>Professional supply, installation, repair &amp; calibration services for service stations across Zimbabwe. Your trusted partner in fuel infrastructure solutions.</p>
                        </div>
                        <div class="btns-box">
                            <a href="{{ route('contact') }}" class="btn-two">Get a Quote</a>
                            <a class="btn-one" href="{{ route('services') }}">Our Services<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide -->
            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('images/tank.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content">
                        <h2>Precision <span>Tank</span><br> Calibration</h2>
                        <h3><img src="{{ asset('assets/images/icon/slide-title-icon-1.png') }}" alt="">Certified &amp; Compliant.</h3>
                        <div class="text">
                            <p>Certified calibration of storage tanks, road tankers, flowmeters and dispensers — accurate measurements, legal compliance and zero stock-loss surprises.</p>
                        </div>
                        <div class="btns-box">
                            <a href="{{ route('contact') }}" class="btn-two">Get a Quote</a>
                            <a class="btn-one" href="{{ route('services.show', 'tank-calibration') }}">Learn More<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide -->
            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('images/fuel.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content">
                        <h2>Forecourt <span>Solutions</span><br> End to End</h2>
                        <h3><img src="{{ asset('assets/images/icon/slide-title-icon-1.png') }}" alt="">Build. Install. Maintain.</h3>
                        <div class="text">
                            <p>From complete service station construction to leak testing, tank cleaning and electrical work — one team for your entire forecourt.</p>
                        </div>
                        <div class="btns-box">
                            <a href="{{ route('contact') }}" class="btn-two">Get a Quote</a>
                            <a class="btn-one" href="{{ route('projects') }}">View Projects<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Slider -->

<!--Start Service Style1 Area-->
<section class="service-style1-area">
    <div class="container">
        <div class="title">
            <h1>Complete forecourt solutions from<br> installation all the way to certified calibration.<br> <a href="{{ route('contact') }}">#Request a quote.</a></h1>
        </div>
        <div class="row">
            <!--Start Single Service Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-service-style1">
                    <div class="icon-holder">
                        <i class="fa fa-wrench thm_clr1" style="font-size:60px;" aria-hidden="true"></i>
                    </div>
                    <div class="text-holder">
                        <h3><a href="{{ route('services.show', 'fuel-pumps-dispensers') }}">Supply &amp;<br> Installation</a></h3>
                        <p>Fuel pumps, dispensers, submersible pumps and underground tanks — supplied and installed.</p>
                        <div class="count-box">1</div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style1-->
            <!--Start Single Service Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-service-style1">
                    <div class="icon-holder">
                        <i class="fa fa-check-circle thm_clr1" style="font-size:60px;" aria-hidden="true"></i>
                    </div>
                    <div class="text-holder">
                        <h3><a href="{{ route('services.show', 'tank-calibration') }}">Calibrate &amp;<br> Certify</a></h3>
                        <p>Certified calibration of tanks, road tankers, flowmeters and dispensers for full compliance.</p>
                        <div class="count-box">2</div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style1-->
            <!--Start Single Service Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-service-style1">
                    <div class="icon-holder">
                        <i class="fa fa-shield thm_clr1" style="font-size:60px;" aria-hidden="true"></i>
                    </div>
                    <div class="text-holder">
                        <h3><a href="{{ route('services.show', 'leak-pressure-testing') }}">Maintain &amp;<br> Protect</a></h3>
                        <p>Leak &amp; pressure testing, tank cleaning and electrical work keeping your site safe.</p>
                        <div class="count-box">3</div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style1-->
        </div>
    </div>
</section>
<!--End Service Style1 Area-->

<!--Start About Style1 Area-->
<section class="about-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="about-style1-image-box clearfix">
                    <div class="shape zoom-fade"></div>
                    <div class="image-box1">
                        <img src="{{ asset('images/harare.jpg') }}" alt="Service station construction in Harare">
                    </div>
                    <div class="image-box2">
                        <img src="{{ asset('images/dipping.jpg') }}" alt="Tank calibration work">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="about-style1-text-box">
                    <div class="title">
                        <p>WELCOME</p>
                        <h1>Zimbabwe's <span>trusted</span><br> <b>forecourt</b> equipment<br> specialists.</h1>
                    </div>
                    <div class="inner-contant">
                        <p>{{ config('site.name') }} provides comprehensive fuel handling equipment services that ensure safety, accuracy and compliance. Our certified technicians use the latest technology — including acoustic leak detection — and follow international standards to deliver exceptional results.</p>
                        <p>From complete service station construction to precision calibration and routine maintenance, we are the single partner your forecourt needs.</p>
                        <div class="btns-box">
                            <a class="btn-one" href="{{ route('about') }}">About Our Company<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Style1 Area-->

<!--Start Service Style2 Area-->
<section class="service-style2-area">
    <div class="layer-outer" style="background-image:url({{ asset('assets/images/parallax-background/service-bg.jpg') }});"></div>
    <div class="container service-box">
        <div class="sec-title text-center">
            <p>WE ARE EXPERT IN</p>
            <div class="big-title"><h1>Our Services</h1></div>
        </div>
        <div class="row">
            @foreach(array_slice($services, 0, 6) as $service)
            <!--Start Single Service Style2-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" loading="lazy" decoding="async" style="height:250px;object-fit:cover;width:100%;">
                        <div class="static-content">
                            <div class="title">
                                <h3><a href="{{ route('services.show', $service['slug']) }}">{{ $service['title'] }}</a></h3>
                            </div>
                            <div class="icon">
                                <a href="{{ route('services.show', $service['slug']) }}"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="icon"><i class="fa {{ $service['icon'] }}" style="font-size:40px;" aria-hidden="true"></i></div>
                                <div class="text-holder">
                                    <div class="title">
                                        <h3><a href="{{ route('services.show', $service['slug']) }}">{{ $service['title'] }}</a></h3>
                                    </div>
                                    <p>{{ $service['excerpt'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style2-->
            @endforeach
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="all-service-button text-center">
                    <a class="btn-one" href="{{ route('services') }}">Our All Services<span class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Style2 Area-->

@include('partials.fact-counter')

<!--Start Latest Portfolio Area-->
<section class="latest-portfolio-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>Fuel Infrastructure Across Zimbabwe!</p>
            <div class="big-title black-clr"><h1>Recent Projects</h1></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="project-menu-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <ul class="project-filter clearfix post-filter has-dynamic-filters-counter">
                        <li data-filter=".filter-item" class="active"><span class="filter-text"><i class="flaticon-menu"></i>All Projects</span></li>
                        <li data-filter=".construction"><span class="filter-text"><i class="flaticon-building"></i>Construction</span></li>
                        <li data-filter=".calibration"><span class="filter-text"><i class="flaticon-settings"></i>Calibration</span></li>
                        <li data-filter=".installation"><span class="filter-text"><i class="flaticon-helmet-1"></i>Installation</span></li>
                        <li data-filter=".maintenance"><span class="filter-text"><i class="flaticon-repair"></i>Maintenance</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">
            @foreach(array_slice($projects, 0, 6) as $project)
            <!--Start Single portfolio Style1-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item {{ $project['category'] }}">
                <div class="single-portfolio-style1">
                    <div class="img-holder">
                        <div class="inner-box">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" loading="lazy" decoding="async" style="height:280px;object-fit:cover;width:100%;">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="inner">
                                        <div class="zoom-button">
                                            <a class="lightbox-image" data-fancybox="gallery" href="{{ asset($project['image']) }}">
                                                <span class="flaticon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-holder">
                            <span class="tag">{{ $project['tag'] }}</span>
                            <h5><a href="{{ route('projects') }}">{{ $project['title'] }}</a></h5>
                            <p><span class="flaticon-location-pin"></span>{{ $project['location'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single portfolio Style1-->
            @endforeach
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="all-portfolio-button text-center">
                    <a class="btn-one" href="{{ route('projects') }}">All Our Projects<span class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Latest Portfolio Area-->

@include('partials.testimonials')

@endsection
