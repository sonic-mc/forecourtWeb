@extends('layouts.app')

@section('title', 'Equipment Store - ' . config('site.name'))
@section('meta_description', 'Shop professional fuel handling equipment in Zimbabwe: PIUSI pumps, fuel dispensers, nozzles, hoses, flowmeters, LPG equipment and safety valves. Contact us for prices and availability.')

@push('structured_data')
    {!! App\Support\Schema::script(
        App\Support\Schema::productList($products),
        App\Support\Schema::breadcrumbs([
            'Home' => route('home'),
            'Store' => null,
        ]),
    ) !!}
@endpush

@section('content')

@include('partials.breadcrumb', ['title' => 'Equipment Store', 'current' => 'Store'])

<!--Start Shop area-->
<section id="shop-area" class="main-shop-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>Professional Fuel Handling Equipment &amp; Accessories</p>
            <div class="big-title black-clr"><h1>Our Equipment Store</h1></div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="project-menu-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <ul class="project-filter clearfix post-filter has-dynamic-filters-counter">
                        <li data-filter=".filter-item" class="active"><span class="filter-text"><i class="flaticon-menu"></i>All Equipment</span></li>
                        @foreach($categories as $key => $label)
                            <li data-filter=".{{ $key }}"><span class="filter-text">{{ $label }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="row filter-layout masonary-layout">
            @foreach($products as $product)
            <!--Start single product item-->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 filter-item {{ $product['category'] }}">
                <div class="single-product-item">
                    <div class="img-holder">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" style="width:100%;height:220px;object-fit:cover;">
                        <div class="product-info">
                            <p>{{ $product['tag'] }}</p>
                        </div>
                        <div class="overlay-content">
                            <a href="{{ config('site.whatsapp') }}?text={{ urlencode('Hello ' . config('site.name') . ', I am enquiring about: ' . $product['name']) }}" target="_blank">Enquire Now<span class="flaticon-supermarket"></span></a>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h4><a href="{{ config('site.whatsapp') }}?text={{ urlencode('Hello ' . config('site.name') . ', I am enquiring about: ' . $product['name']) }}" target="_blank">{{ $product['name'] }}</a></h4>
                        <p style="margin-top:8px;">{{ $product['description'] }}</p>
                        <ul style="margin-top:8px;padding-left:0;list-style:none;">
                            @foreach($product['features'] as $feature)
                                <li style="font-size:13px;line-height:22px;"><i class="fa fa-check thm_clr1" aria-hidden="true"></i> {{ $feature }}</li>
                            @endforeach
                        </ul>
                        <div class="bottom">
                            <div class="price-box">
                                <span>Price on Request</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single product item-->
            @endforeach
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="all-service-button text-center" style="padding-top:30px;">
                    <a class="btn-one" href="{{ route('contact') }}">Request a Quotation<span class="flaticon-next"></span></a>
                    <a class="btn-two" href="{{ config('site.whatsapp') }}" target="_blank" style="margin-left:15px;">WhatsApp: {{ config('site.phone_primary') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Shop area-->

@include('partials.fact-counter', ['factCounterClass' => 'pdbottom120'])

@endsection
