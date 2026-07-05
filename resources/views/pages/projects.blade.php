@extends('layouts.app')

@section('title', 'Our Projects - ' . config('site.name'))
@section('meta_description', 'Explore our portfolio of fuel handling equipment installations, tank calibrations, service station construction and maintenance projects across Zimbabwe.')

@push('structured_data')
    {!! App\Support\Schema::script(
        App\Support\Schema::breadcrumbs([
            'Home' => route('home'),
            'Projects' => null,
        ]),
    ) !!}
@endpush

@section('content')

@include('partials.breadcrumb', ['title' => 'Our Projects'])

<!--Start Latest Portfolio Area-->
<section class="latest-portfolio-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>Fuel Infrastructure Across Zimbabwe!</p>
            <div class="big-title black-clr"><h1>Our Project Portfolio</h1></div>
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
            @foreach($projects as $project)
            <!--Start Single portfolio Style1-->
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item {{ $project['category'] }}">
                <div class="single-portfolio-style1">
                    <div class="img-holder">
                        <div class="inner-box">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" style="height:280px;object-fit:cover;width:100%;">
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
                            <h5>{{ $project['title'] }}</h5>
                            <p><span class="flaticon-location-pin"></span>{{ $project['location'] }} &nbsp;•&nbsp; {{ $project['date'] }}</p>
                            <p style="margin-top:8px;">{{ $project['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single portfolio Style1-->
            @endforeach
        </div>
    </div>
</section>
<!--End Latest Portfolio Area-->

@include('partials.fact-counter', ['factCounterClass' => 'pdbottom120'])

@endsection
