@extends('layouts.app')

@section('title', $service['title'] . ' - ' . config('site.name'))
@section('meta_description', $service['excerpt'])
@section('og_image', url($service['image']))
@section('og_image_alt', $service['title'])

@push('structured_data')
    {!! App\Support\Schema::script(
        App\Support\Schema::service($service),
        App\Support\Schema::breadcrumbs([
            'Home' => route('home'),
            'Services' => route('services'),
            $service['title'] => null,
        ]),
    ) !!}
@endpush

@section('content')

@include('partials.breadcrumb', [
    'title' => $service['title'],
    'parent' => 'Services',
    'parentUrl' => route('services'),
    'current' => $service['title'],
])

<!--Start Service Imagegalley Area-->
<section class="service-imagegalley-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="top-single-service">
                    <div class="left">
                        <div class="icon">
                            <i class="fa {{ $service['icon'] }} thm_clr1" style="font-size:60px;" aria-hidden="true"></i>
                        </div>
                        <h2>{!! $service['heading'] !!}</h2>
                    </div>
                    <div class="right">
                        <p>{{ $service['intro'] }}</p>
                    </div>
                </div>
                <div class="single-service-big-image">
                    <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" style="width:100%;max-height:520px;object-fit:cover;">
                </div>
                <div class="single-service-image">
                    <div class="row">
                        @foreach($service['gallery'] as $galleryImage)
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-img-box">
                                <a class="lightbox-image" data-fancybox="service-gallery" href="{{ asset($galleryImage) }}">
                                    <img src="{{ asset($galleryImage) }}" alt="{{ $service['title'] }} gallery" loading="lazy" decoding="async" style="width:100%;height:200px;object-fit:cover;">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="single-service-text-box">
                    @foreach($service['body'] as $paragraph)
                        <p class="{{ $loop->last ? 'mar0' : '' }}">{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Imagegalley Area-->

<!--Start Service Style1 Area-->
<section class="service-style1-area style4 single-service-page">
    <div class="container">
        <div class="title">
            <h1>Explore our other services or<br> get in touch for a tailored solution.<br> <a href="{{ route('contact') }}">#Request a quote.</a></h1>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="row">
                    @foreach($otherServices as $other)
                    <!--Start Single Service Style1-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-style1">
                            <div class="icon-holder">
                                <i class="fa {{ $other['icon'] }} thm_clr1" style="font-size:50px;" aria-hidden="true"></i>
                            </div>
                            <div class="text-holder">
                                <h3><a href="{{ route('services.show', $other['slug']) }}">{!! $other['heading'] !!}</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Service Style1-->
                    @endforeach
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="brochures-box">
                    <div class="inner-title">
                        <h2>Need This Service?</h2>
                    </div>
                    <ul>
                        <li>
                            <div class="left">
                                <div class="icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <h3>Call Us</h3>
                                <h5><a href="tel:{{ config('site.phone_primary_href') }}">{{ config('site.phone_primary') }}</a></h5>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <div class="icon">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                </div>
                                <h3>WhatsApp</h3>
                                <h5><a href="{{ config('site.whatsapp') }}" target="_blank">Chat With Us</a></h5>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <div class="icon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <h3>Email Us</h3>
                                <h5><a href="mailto:{{ config('site.email_primary') }}">Send an Email</a></h5>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <div class="icon">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                </div>
                                <h3>Request a Quote</h3>
                                <h5><a href="{{ route('contact') }}">Contact Form</a></h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Style1 Area-->

@include('partials.fact-counter', ['factCounterClass' => 'pdbottom120'])

@endsection
