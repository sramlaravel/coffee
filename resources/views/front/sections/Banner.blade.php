@php
    $banners = getContent('banner.element', false, 4, true);

@endphp

<!-- hero area start -->
@foreach($banners as $banner)
<section class="hero__area hero__area--3 bg_img" data-overlay="dark" data-opacity="4" data-background="{{getImage('assets/images/frontend/banner/'. @$banner->data_values->banner_image )}}">
    <div class="container-fluid custom-width custom-width__2">
        <div class="row">

            <div class="col-xl-6 col-lg-7 col-md-8 align-self-center">
                <div class="hero__content hero__content--3 position-relative">
                    <h1 class="title mb-20">{{__($banner->data_values->heading)}} <br></h1>
                    <p>{{__($banner->data_values->sub_heading)}}</p>
                    <div class="btns mt-45 d-flex align-items-center justify-content-start">
                        <a href="about.html" class="site-btn">{{__($banner->data_values->btn_name)}}</a>
                        <a href="contact.html" class="site-btn site-btn__borderd site-btn__borderd--double">Read More</a>
                    </div>
                    <div class="social-links mt-60 d-flex justify-content-start align-items-center">
                        <a href="#0"><i class="fab fa-facebook"></i> <span>Facebook</span></a>
                        <a href="#0"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
                        <a href="#0"><i class="fab fa-youtube"></i> <span>youtube</span></a>
                    </div>
                </div>
            </div>

                <div class="vide-wrapper">
                    <a href="http://www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection" data-animation="fadeInLeft" class="video-btn video-btn__2 video-btn__2--white d-flex align-items-center"><i class="fas fa-play"></i><span class="border-effect">play video</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- hero area end -->

{{--<section class="banner-section bg--section overflow-hidden">--}}
    {{--<div class="banner-slider owl-theme owl-carousel">--}}
        {{--@foreach($banners as $banner)--}}
            {{--<div class="banner-slide-item">--}}
                {{--<div class="container">--}}
                    {{--<div class="banner-wrapper @if($loop->even) flex-row-reverse @endif">--}}
                        {{--<div class="banner-content">--}}
                            {{--<h6 class="subtitle">{{__($banner->data_values->heading)}}</h6>--}}
                            {{--<h1 class="title">{{__($banner->data_values->sub_heading)}}</h1>--}}
                            {{--<p>--}}
                                {{--{{__($banner->data_values->description)}}--}}
                            {{--</p>--}}
                            {{--<div class="btn__grp">--}}
                                {{--<a href="{{url($banner->data_values->btn_url)}}" class="cmn--btn">{{__($banner->data_values->btn_name)}}</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="banner-thumb">--}}
                            {{--<img src="{{getImage('assets/images/frontend/banner/'. @$banner->data_values->banner_image, '720x506')}}" alt="@lang('banner')">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}
    {{--</section>--}}