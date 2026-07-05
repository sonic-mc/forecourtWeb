@extends('layouts.app')

@section('title', 'Contact Us - ' . config('site.name'))
@section('meta_description', 'Contact ' . config('site.name') . ' in Graniteside, Harare. Call +263 785 862 182, WhatsApp us, or send a message for quotes on fuel handling equipment services.')

@push('structured_data')
    {!! App\Support\Schema::script(
        App\Support\Schema::breadcrumbs([
            'Home' => route('home'),
            'Contact Us' => null,
        ]),
    ) !!}
@endpush

@section('content')

@include('partials.breadcrumb', ['title' => 'Contact Us', 'current' => 'Contact'])

<!--Start Contact Info Area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-info-box text-center">
                    <div class="icon"><span class="flaticon-headphones"></span></div>
                    <div class="title">
                        <h3>Our Phone</h3>
                        <ul>
                            <li><a href="tel:{{ config('site.phone_primary_href') }}">{{ config('site.phone_primary') }}</a></li>
                            <li><a href="tel:{{ config('site.phone_secondary_href') }}">{{ config('site.phone_secondary') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-info-box text-center">
                    <div class="icon"><span class="flaticon-mail-1"></span></div>
                    <div class="title">
                        <h3>Our Mail Box</h3>
                        <ul>
                            <li><a href="mailto:{{ config('site.email_primary') }}">{{ config('site.email_primary') }}</a></li>
                            <li><a href="mailto:{{ config('site.email_secondary') }}">{{ config('site.email_secondary') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-info-box text-center">
                    <div class="icon"><span class="flaticon-pin-1"></span></div>
                    <div class="title">
                        <h3>Our Location</h3>
                        <p>{{ config('site.address_line1') }}<br> {{ config('site.address_line2') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Contact Info Area-->

<!--Start Contact Form Section-->
<section class="contact-form-area">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="contact-form">
                    <div class="title">
                        <h3>Send Us a Message</h3>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success" role="alert" style="margin-bottom:20px;">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert" style="margin-bottom:20px;">
                            <ul style="margin:0;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="inner-box">
                        <form id="contact-form" name="contact_form" class="default-form2" action="{{ route('contact.submit') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input-box">
                                        <p>Name:</p>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-box">
                                        <p>Email Address:</p>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input-box">
                                        <p>Subject:</p>
                                        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-box">
                                        <p>Phone:</p>
                                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <p>Message:</p>
                                        <textarea name="message" placeholder="" required>{{ old('message') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="contact-information-box">
                    <div class="title">
                        <h3>Contact Info</h3>
                        <p>Reach us directly — we respond quickly to quote requests and emergency call-outs.</p>
                    </div>
                    <ul class="contact-us">
                        <li>
                            <div class="icon">
                                <span class="flaticon-pin-1"></span>
                            </div>
                            <div class="text">
                                <p>{{ config('site.address_line1') }},<br> {{ config('site.address_line2') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="flaticon-open-envelope-with-letter"></span>
                            </div>
                            <div class="text">
                                <a href="mailto:{{ config('site.email_primary') }}">{{ config('site.email_primary') }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="flaticon-smartphone"></span>
                            </div>
                            <div class="text">
                                <a href="tel:{{ config('site.phone_primary_href') }}">{{ config('site.phone_primary') }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-whatsapp" style="font-size:30px;" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <a href="{{ config('site.whatsapp') }}" target="_blank">Chat on WhatsApp</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Contact Form Section-->

<section class="google-map-area">
    <div class="map-outer">
        <iframe
            src="https://www.google.com/maps?q=Carlton%20Road%20Graniteside%20Harare%20Zimbabwe&output=embed"
            style="width:100%;height:450px;border:0;display:block;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="{{ config('site.name') }} location map"></iframe>
    </div>
</section>

@endsection
