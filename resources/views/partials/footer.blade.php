<!--Start footer area-->
<footer class="footer-area">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget">
                        <div class="our-company-info">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="{{ config('site.name') }}" title="{{ config('site.name') }}" style="max-height:70px;width:auto;"></a>
                            </div>
                            <div class="text">
                                <p>{{ config('site.name') }} — professional fuel handling equipment specialists. Tank calibration, dispenser installation, leak testing, tank cleaning and electrical services across Zimbabwe.</p>
                            </div>
                            <div class="footer-social-links">
                                <ul class="social-links-style1">
                                    <li>
                                        <a href="{{ config('site.facebook') }}" aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ config('site.twitter') }}" aria-label="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ config('site.whatsapp') }}" target="_blank" aria-label="WhatsApp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="mailto:{{ config('site.email_primary') }}" aria-label="Email"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget margin50-0">
                        <div class="title">
                            <h3>Information</h3>
                        </div>
                        <div class="pages-box">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul class="page-links">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('services') }}">Services</a></li>
                                        <li><a href="{{ route('projects') }}">Projects</a></li>
                                        <li><a href="{{ route('store') }}">Online Store</a></li>
                                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul class="page-links">
                                        @foreach(array_slice(config('forecourt.services'), 0, 6) as $footerService)
                                            <li><a href="{{ route('services.show', $footerService['slug']) }}">{{ \Illuminate\Support\Str::limit($footerService['title'], 24) }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget">
                        <div class="twitter-feed-box">
                            <h3><a href="{{ route('contact') }}">Get In Touch</a></h3>
                            <span>{{ config('site.hours') }}</span>
                            <div class="border-box"></div>
                            <div class="text">
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> {{ config('site.address_line1') }}, {{ config('site.address_line2') }}<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{ config('site.phone_primary_href') }}">{{ config('site.phone_primary') }}</a> / <a href="tel:{{ config('site.phone_secondary_href') }}">{{ config('site.phone_secondary') }}</a><br>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{ config('site.email_primary') }}">{{ config('site.email_primary') }}</a>
                                </p>
                            </div>
                            <div class="bottom">
                                <div class="comments">
                                    <a href="{{ config('site.whatsapp') }}" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>Chat on WhatsApp</a>
                                </div>
                                <div class="twitter-icon">
                                    <span class="flaticon-chat"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="outer-box">
                <div class="copyright-text">
                    <p>Copyright© {{ date('Y') }} All Rights Reserved <a href="{{ route('home') }}">{{ config('site.name') }}.</a></p>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('store') }}">Store</a></li>
                        <li><a href="{{ route('contact') }}">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End footer area-->
