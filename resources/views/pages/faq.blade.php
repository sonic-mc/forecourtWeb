@extends('layouts.app')

@section('title', 'Frequently Asked Questions - ' . config('site.name'))
@section('meta_description', 'Answers to common questions about tank calibration, dispenser calibration, leak testing, spare parts and fuel handling services in Zimbabwe.')

@push('structured_data')
    {!! App\Support\Schema::script(
        App\Support\Schema::faqPage($faqs),
        App\Support\Schema::breadcrumbs([
            'Home' => route('home'),
            'FAQ' => null,
        ]),
    ) !!}
@endpush

@section('content')

@include('partials.breadcrumb', ['title' => 'FAQ', 'current' => 'Frequently Asked Questions'])

<!--Start Faq Content Area-->
<section class="faq-content-area faq-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="faq-content-box">
                    <div class="sec-title">
                        <p>Questions &amp; Answers</p>
                        <div class="big-title black-clr"><h1>Frequently Asked Questions</h1></div>
                    </div>
                    <div class="accordion-box">
                        @foreach($faqs as $faq)
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block {{ $loop->last ? 'marginbottom0' : '' }}">
                            <div class="accord-btn {{ $loop->first ? 'active' : '' }}"><h4>{{ $faq['question'] }}</h4></div>
                            <div class="accord-content {{ $loop->first ? 'collapsed' : '' }}">
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="faq-image-box" data-aos="fade-left" data-aos-duration="0" data-aos-delay="0">
                    <img src="{{ asset('images/fuel.jpg') }}" alt="Fuel handling equipment" style="width:100%;object-fit:cover;">
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Faq Content Area-->

@include('partials.fact-counter', ['factCounterClass' => 'pdbottom120'])

@endsection
