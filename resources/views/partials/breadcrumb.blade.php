<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset($bg ?? 'assets/images/breadcrumb/breadcrumb-1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span class="flaticon-next-1"></span></li>
                            @isset($parent)
                                <li><a href="{{ $parentUrl }}">{{ $parent }}</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                            @endisset
                            <li class="active">{{ $current ?? $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
