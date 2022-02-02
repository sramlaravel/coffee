@php
    $WhyFristCoffee = getContent('Why_Frist_Coffee.content', true);
    $WhyFristCoffees = getContent('Why_Frist_Coffee.element', false, 4, true);
@endphp

<!-- about area start -->
<section class="about__area about__area--2 grey-bg position-relative pt-120 pb-130">
    <span class="shape shape__1 position-absolute"><img src="assets/images/shape/about-shape-2-1.png" alt=""></span>
    <span class="shape shape__2 position-absolute"><img src="assets/images/shape/about-shape-2-2.png" alt=""></span>
    <div class="container">
        <div class="row">

            <div class="col-xl-6 offset-xl-1">
                <div class="about__right about__right--2 pl-45 pt-45">
                    <div class="section-heading section-heading__black">
                        <span class="sub-title">about us</span>
                        <h2 class="title mb-25">{{__($WhyFristCoffee->data_values->heading)}}
                             </h2>
                        <p>{{__($WhyFristCoffee->data_values->sub_heading)}}</p>
                    </div>
                </div>
                <h2 class="title mb-25" style="font-size: 24px; color: #0a0e26">    <li> {{__($WhyFristCoffees[0]->data_values->title)}}</li> </h2>
            @foreach($WhyFristCoffees as $key=>  $value)
                 <ul class="about__list list-unstyled mt-25">
                    <li  style="font-size: 14px;"> <span class="icon"><i class="fal fa-check" ></i></span> {{__($value->data_values->sub_title)}}</li>
                </ul>
                @endforeach
            </div>
            <div class="col-xl-5 col-lg-7">
                <div class="about__left about__left--2 position-relative">
                    <img class="big" src="{{getImage('assets/images/frontend/Why_Frist_Coffee/'.$WhyFristCoffee->data_values->image2,'100x150') }}" alt="img">
                    <img class="small position-absolute" src="{{getImage('assets/images/frontend/Why_Frist_Coffee/'.$WhyFristCoffee->data_values->image1,'100x150') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->


{{--<section class="topgrade__area topgrade__area--2 grey-bg pt-115 pb-115 position-relative">--}}

    {{--<span class="shape shape__1 position-absolute"><img src="assets/images/shape/top-grade-shape-2-1.png" alt=""></span>--}}
    {{--<span class="shape shape__2 position-absolute"><img src="assets/images/shape/top-grade-shape-2-2.png" alt=""></span>--}}
    {{--<div class="container">--}}
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
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
