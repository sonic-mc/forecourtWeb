@extends('layouts.app')

@section('title', 'About Us - ' . config('site.name'))
@section('meta_description', 'Learn about ' . config('site.name') . ' — certified fuel handling equipment specialists based in Harare, providing tank calibration, installation and maintenance services across Zimbabwe.')

@push('structured_data')
    {!! App\Support\Schema::script(
        App\Support\Schema::breadcrumbs([
            'Home' => route('home'),
            'About Us' => null,
        ]),
    ) !!}
@endpush

@section('content')

@include('partials.breadcrumb', ['title' => 'About Us'])

<!--Start About Style1 Area-->
<section class="about-style1-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="about-style1-image-box clearfix">
                    <div class="shape zoom-fade"></div>
                    <div class="image-box1">
                        <img src="{{ asset('images/harare.jpg') }}" alt="Service station construction in Harare">
                    </div>
                    <div class="image-box2">
                        <img src="{{ asset('images/dipping.jpg') }}" alt="Tank calibration in progress">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="about-style1-text-box">
                    <div class="title">
                        <p>WHO WE ARE</p>
                        <h1>Your <span>trusted</span> partner<br> in <b>fuel</b> infrastructure<br> solutions.</h1>
                    </div>
                    <div class="inner-contant">
                        <p>{{ config('site.name') }} is a Harare-based engineering company specialising in fuel handling equipment. We supply, install, repair, maintain and calibrate the equipment that keeps Zimbabwe's service stations and fuel depots running safely, accurately and profitably.</p>
                        <p>Our certified technicians combine years of industry experience with modern technology — including acoustic leak detection — and follow international standards on every job. From a single dispenser repair to a complete service station build, we deliver workmanship you can certify, document and trust.</p>
                        <ul style="margin-top:15px;">
                            <li><i class="fa fa-check-circle thm_clr1" aria-hidden="true"></i> Tank calibration for storage tanks &amp; road tankers</li>
                            <li><i class="fa fa-check-circle thm_clr1" aria-hidden="true"></i> Flowmeter &amp; dispenser calibration to legal metrology standards</li>
                            <li><i class="fa fa-check-circle thm_clr1" aria-hidden="true"></i> Acoustic leak &amp; pressure testing without excavation</li>
                            <li><i class="fa fa-check-circle thm_clr1" aria-hidden="true"></i> Tank cleaning &amp; safe fuel transshipment</li>
                            <li><i class="fa fa-check-circle thm_clr1" aria-hidden="true"></i> Pumps, dispensers &amp; submersible pump systems</li>
                            <li><i class="fa fa-check-circle thm_clr1" aria-hidden="true"></i> Commercial &amp; domestic electrical work</li>
                        </ul>
                        <div class="btns-box" style="margin-top:25px;">
                            <a class="btn-one" href="{{ route('services') }}">Explore Our Services<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Style1 Area-->

@include('partials.fact-counter', ['factCounterClass' => 'pdbottom120'])

@include('partials.testimonials')

<!--Start Contact CTA-->
<section class="service-style1-area" style="padding-top:0;">
    <div class="container">
        <div class="title text-center">
            <h1>Ready to upgrade your forecourt?<br> <a href="{{ route('contact') }}">#Talk to our team today.</a></h1>
        </div>
        <div class="row">
            <div class="col-xl-12 text-center">
                <a class="btn-one" href="{{ route('contact') }}">Contact Us<span class="flaticon-next"></span></a>
                <a class="btn-two" href="{{ config('site.whatsapp') }}" target="_blank" style="margin-left:15px;">WhatsApp Us</a>
            </div>
        </div>
    </div>
</section>
<!--End Contact CTA-->

@endsection
