<!--Start Testimonial style1 Area-->
<section class="testimonial-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="testimonial-style1-title-box" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
                    <div class="sec-title">
                        <p>Trusted By Fuel Retailers Nationwide!</p>
                        <div class="big-title"><h1>What Our Clients Say</h1></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="single-vertical-carousel">
                    @foreach(config('forecourt.testimonials') as $testimonial)
                    <div class="slide">
                        <!--Start Single Testimonial Style1-->
                        <div class="single-testimonial-style1">
                            <div class="text">
                                <p>{{ $testimonial['text'] }}</p>
                            </div>
                            <div class="client-info">
                                <div class="icon-box">
                                    <span class="flaticon-engineer-1"></span>
                                </div>
                                <div class="title-box">
                                    <h3>{{ $testimonial['name'] }}</h3>
                                    <p>{{ $testimonial['role'] }}</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial Style1-->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Style1 Area-->
