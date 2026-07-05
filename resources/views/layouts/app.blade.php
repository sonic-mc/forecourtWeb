<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('seo.default_title'))</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="@yield('meta_description', config('seo.default_description'))">
    <meta name="keywords" content="@yield('meta_keywords', config('seo.default_keywords'))">
    <meta name="author" content="{{ config('site.name') }}">
    <meta name="robots" content="@yield('meta_robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    @if (config('seo.google_site_verification'))
        <meta name="google-site-verification" content="{{ config('seo.google_site_verification') }}">
    @endif
    @if (config('seo.bing_site_verification'))
        <meta name="msvalidate.01" content="{{ config('seo.bing_site_verification') }}">
    @endif

    <!-- Local SEO -->
    <meta name="geo.region" content="{{ config('seo.geo.region') }}">
    <meta name="geo.placename" content="{{ config('seo.geo.placename') }}">
    <meta name="ICBM" content="{{ config('seo.geo.latitude') }}, {{ config('seo.geo.longitude') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:title" content="@yield('title', config('seo.default_title'))">
    <meta property="og:description" content="@yield('meta_description', config('seo.default_description'))">
    <meta property="og:image" content="@yield('og_image', url(config('seo.default_image')))">
    <meta property="og:image:alt" content="@yield('og_image_alt', config('site.name'))">
    <meta property="og:site_name" content="{{ config('site.name') }}">
    <meta property="og:locale" content="{{ config('seo.locale') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    @if (config('seo.twitter_handle'))
        <meta name="twitter:site" content="{{ config('seo.twitter_handle') }}">
    @endif
    <meta name="twitter:title" content="@yield('title', config('seo.default_title'))">
    <meta name="twitter:description" content="@yield('meta_description', config('seo.default_description'))">
    <meta name="twitter:image" content="@yield('og_image', url(config('seo.default_image')))">

    <!-- Structured Data -->
    {!! App\Support\Schema::script(
        App\Support\Schema::organization(),
        App\Support\Schema::localBusiness(),
        App\Support\Schema::website(),
    ) !!}
    @stack('structured_data')

    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/imp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link href="{{ asset('assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive-fixes.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('flavicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('flavicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    @stack('styles')
</head>

<body>
<div class="boxed_wrapper">

    <div class="preloader"></div>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</div>

<button class="scroll-top scroll-to-target" data-target="html">
    <span class="icon-angle"></span>
</button>

<!-- Template Scripts -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.enllax.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/js/nouislider.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/timePicker.js') }}"></script>
<script src="{{ asset('assets/js/validation.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.min.js') }}"></script>
<!-- thm custom script -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@stack('scripts')
</body>
</html>
