@php
    $ThankYou = getContent('Thank_You!.content', true);
    $ThankYous = getContent('Thank_You!.element', false, 4, true);
@endphp
{{--<div class="best-coffe__area position-relative">--}}
    {{--<div class="best-coffe__bg">--}}
        {{--<img src="{{getImage('assets/images/frontend/Thank_You!/'.$ThankYou->data_values->image1,'300x400') }}" alt="">--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-end">--}}
            {{--<div class="col-xl-8 pl-35">--}}
                {{--<div class="best-coffe__wrapper">--}}
                    {{--<div class="section-heading section-heading__black">--}}
                        {{--<h2 class="title mb-25">{{__($ThankYou->data_values->heading)}}</h2>--}}
                        {{--<p   class="col-xl-12"  style="text-align: center; color: #0a0e26;" >--}}
                            {{--{{__($ThankYou->data_values->sub_heading)}}--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<section class="topgrade__area topgrade__area--2 grey-bg pt-115 pb-115 position-relative">

    <span class="shape shape__1 position-absolute"><img src="assets/images/shape/top-grade-shape-2-1.png" alt=""></span>
    <span class="shape shape__2 position-absolute"><img src="assets/images/shape/top-grade-shape-2-2.png" alt=""></span>


       <div class="best-coffe__area position-relative">
        <div class="best-coffe__bg">
            <img src="{{getImage('assets/images/frontend/Thank_You!/'.$ThankYou->data_values->image1,'300x400') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 pl-35">
                    <div class="best-coffe__wrapper">
                        <div class="section-heading section-heading__black">
                            <h2 class="title mb-25">{{__($ThankYou->data_values->heading)}}</h2>
                            <p   class="col-xl-12"  style="text-align: center; color: #0a0e26;" >
                                {{__($ThankYou->data_values->sub_heading)}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{--<div class="row">--}}
            {{--<div class="col-xl-12 text-center">--}}
                {{--<div class="section-heading section-heading__black mb-55">--}}
                    {{--<h3 class="title"  style="text-align: center; color: #0a0e26;"  >{{__($Whyitwork->data_values->heading)}}</h3>--}}
                    {{--<p   class="col-xl-12"  style="text-align: center; color: #0a0e26;" >--}}
                        {{--{{__($Whyitwork->data_values->sub_heading)}}--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row mt-none-30">--}}
            {{--@foreach($Whyitworks as $key=>  $value)--}}
            {{--<div class="col-xl-3 col-lg-6 col-md-6 mt-30">--}}
                {{--<div class="topgrade__item topgrade__item--2 text-center">--}}
                    {{--<div class="thumb">--}}
                        {{--<img src="{{getImage('assets/images/frontend/Why_it_works/'.$value->data_values->image2,'300x400') }}" alt="">--}}
                        {{--<span class="count">@php echo $key+1 @endphp</span>--}}
                    {{--</div>--}}
                    {{--<div class="content mt-20">--}}
                        {{--<h2 class="title">{{__($value->data_values->title)}}</h2>--}}
                        {{--<p> {{__($value->data_values->sub_title)}}  </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}


</section>
