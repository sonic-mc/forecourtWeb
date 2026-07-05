<!-- main header -->
<header class="main-header">
    <div class="header-top">
        <div class="container">
            <div class="outer-box">
                <div class="header-top-left">
                    <div class="welcome-text">
                        <h6><span class="flaticon-chat thm_clr1"></span>Certified fuel equipment specialists — <b class="thm_clr1">trusted across Zimbabwe!</b></h6>
                    </div>
                </div>
                <div class="header-top-middle">
                    <div class="header-social-links">
                        <ul class="social-links-style1">
                            <li>
                                <a href="{{ config('site.facebook') }}"><span class="flaticon-facebook-1 fb"></span></a>
                            </li>
                            <li>
                                <a href="{{ config('site.twitter') }}"><span class="flaticon-twitter-1"></span></a>
                            </li>
                            <li>
                                <a href="{{ config('site.instagram') }}"><span class="flaticon-instagram-1"></span></a>
                            </li>
                            <li>
                                <a href="{{ config('site.linkedin') }}"><span class="flaticon-linkedin-1"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-menu">
                        <ul>
                            <li><a href="{{ config('site.whatsapp') }}" target="_blank"><i class="fa fa-whatsapp"></i> WhatsApp Us</a></li>
                            <li><a href="{{ route('store') }}">Online Store</a></li>
                            <li><a href="{{ route('contact') }}">Get Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Start Header upper -->
    <div class="header-upper">
        <div class="container clearfix">
            <div class="outer-box clearfix">
                <div class="header-upper-left float-left clearfix">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="{{ config('site.name') }}" title="{{ config('site.name') }}" style="max-height:70px;width:auto;"></a>
                    </div>
                </div>
                <div class="header-upper-right float-right clearfix">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-call thm_clr1"></span>
                                </div>
                                <div class="title">
                                    <span class="thm_clr1">Call us anytime</span>
                                    <h6><a href="tel:{{ config('site.phone_primary_href') }}">{{ config('site.phone_primary') }}</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-clock thm_clr1"></span>
                                </div>
                                <div class="title">
                                    <span class="thm_clr1">Opening time</span>
                                    <h6>{{ config('site.hours') }}</h6>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-mail thm_clr1"></span>
                                </div>
                                <div class="title">
                                    <span class="thm_clr1">Email us now</span>
                                    <h6><a href="mailto:{{ config('site.email_primary') }}">{{ config('site.email_primary') }}</a></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Start header lawer -->
    <div class="header-lawer">
        <div class="container clearfix">
            <div class="outer-box clearfix">
                <!--Top Left-->
                <div class="header-lawer-left float-left">

                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light" aria-label="Main navigation">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                                        <a class="home-icon" href="{{ route('home') }}"><span class="hometext">Home</span><span class="flaticon-real-estate homeicon"></span></a>
                                    </li>
                                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="dropdown {{ request()->routeIs('services') || request()->routeIs('services.show') ? 'current' : '' }}"><a href="{{ route('services') }}">Services</a>
                                        <ul>
                                            @foreach(config('forecourt.services') as $navService)
                                                <li><a href="{{ route('services.show', $navService['slug']) }}">{{ $navService['title'] }}</a></li>
                                            @endforeach
                                            <li><a href="{{ route('services') }}">All Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('projects') ? 'current' : '' }}"><a href="{{ route('projects') }}">Projects</a></li>
                                    <li class="{{ request()->routeIs('store') ? 'current' : '' }}"><a href="{{ route('store') }}">Store</a></li>
                                    <li class="{{ request()->routeIs('faq') ? 'current' : '' }}"><a href="{{ route('faq') }}">FAQ</a></li>
                                    <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>

                </div>
                <!--Top Right-->
                <div class="header-lawer-right clearfix float-right">
                    <div class="quote-button">
                        <a href="{{ route('contact') }}">Get a Quote<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End header lawer -->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="{{ route('home') }}" class="img-responsive"><img src="{{ asset('logo.png') }}" alt="{{ config('site.name') }}" title="{{ config('site.name') }}" style="max-height:60px;width:auto;"></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix" aria-label="Sticky navigation">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box" aria-label="Mobile navigation">
            <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="{{ config('site.name') }}" title="" style="max-height:60px;width:auto;"></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="{{ config('site.facebook') }}"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="{{ config('site.twitter') }}"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="{{ config('site.whatsapp') }}" target="_blank"><span class="fab fa fa-whatsapp"></span></a></li>
                    <li><a href="mailto:{{ config('site.email_primary') }}"><span class="fa fa-envelope-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
