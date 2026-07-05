<!--Start Fact Counter Area-->
<section class="fact-counter-area {{ $factCounterClass ?? '' }}">
    <div class="container">
        <div class="row">
            @foreach(config('forecourt.stats') as $stat)
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-fact-counter text-left wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="title">
                        <h3>{!! $stat['label'] !!}</h3>
                    </div>
                    <div class="count-box">
                        <h1>
                            <span class="timer" data-from="1" data-to="{{ $stat['value'] }}" data-speed="5000" data-refresh-interval="50">{{ $stat['value'] }}</span>
                        </h1>
                        <div class="icon"><span class="flaticon-plus"></span></div>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
            @endforeach
        </div>
    </div>
</section>
<!--End Fact Counter Area-->
