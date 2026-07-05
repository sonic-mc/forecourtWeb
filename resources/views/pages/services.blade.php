@extends('layouts.app')

@section('title', 'Our Services - ' . config('site.name'))
@section('meta_description', 'Professional fuel handling services in Zimbabwe: tank calibration, flowmeter & dispenser calibration, leak & pressure testing, tank cleaning, pumps & dispensers, and electrical work.')

@push('structured_data')
    {!! App\Support\Schema::script(
        App\Support\Schema::serviceList($services),
        App\Support\Schema::breadcrumbs([
            'Home' => route('home'),
            'Services' => null,
        ]),
    ) !!}
@endpush

@section('content')

@include('partials.breadcrumb', ['title' => 'Our Services'])

<!--Start Service Style1 Area-->
<section class="service-style1-area service-page1">
    <div class="container">
        <div class="title">
            <h1>Comprehensive fuel handling solutions<br> delivered by certified professionals.<br> <a href="{{ route('contact') }}">#Request a quote.</a></h1>
        </div>
        <div class="row">
            @foreach($services as $index => $service)
            <!--Start Single Service Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-service-style1">
                    <div class="icon-holder">
                        <i class="fa {{ $service['icon'] }} thm_clr1" style="font-size:60px;" aria-hidden="true"></i>
                    </div>
                    <div class="text-holder">
                        <h3><a href="{{ route('services.show', $service['slug']) }}">{!! $service['heading'] !!}</a></h3>
                        <p>{{ $service['excerpt'] }}</p>
                        <div class="count-box">{{ $index + 1 }}</div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style1-->
            @endforeach
        </div>
    </div>
</section>
<!--End Service Style1 Area-->

@include('partials.fact-counter', ['factCounterClass' => 'pdbottom120'])

@include('partials.testimonials')

@endsection
