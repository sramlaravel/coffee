@php
    $Understand_process_to_buyer = getContent('Understand_process_to_buyers.content', true);
     $Understand_process_to_buyers= getContent('Understand_process_to_buyers.element', false, 6, true);
@endphp

<section class="topgrade__area topgrade__area--2 grey-bg pt-115 pb-115 position-relative">

    <span class="shape shape__1 position-absolute"><img src="assets/images/shape/top-grade-shape-2-1.png" alt=""></span>
    <span class="shape shape__2 position-absolute"><img src="assets/images/shape/top-grade-shape-2-2.png" alt=""></span>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="section-heading section-heading__black mb-55">
                    <h3 class="title"  style="text-align: center; color: #0a0e26;"  >{{__($Understand_process_to_buyer->data_values->heading)}}</h3>
                    <p   class="col-xl-12"  style="text-align: center; color: #0a0e26;" >
                        {{__($Understand_process_to_buyer->data_values->sub_heading)}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="feature__area dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="feature__slider owl-carousel slider-nav">


                            @foreach($Understand_process_to_buyers as $key=>  $value)

                                    <div class="feature__item">
                                        <span class="count" style="color: white;">@php echo $key+1 @endphp</span>
                                        <div class="icon position-relative">
                                            <img src="{{getImage('assets/images/frontend/Understand_process_to_buyers/'.$value->data_values->image2,'300x400') }}" alt="">
                                        </div>

                                        <div class="content mt-20">
                                            <h2 class="title">{{__($value->data_values->title)}}</h2>
                                            <p style="color: white;"> {{__($value->data_values->sub_title)}}  </p>
                                        </div>
                                    </div>
                            @endforeach

                        </div>
                            </div>
                </div>
    </div>
</div>
            {{--<div class="col-xl-3 col-lg-6 col-md-6 mt-30">--}}
                {{--<div class="topgrade__item topgrade__item--2 text-center">--}}
                    {{--<div class="thumb">--}}
                        {{--<img src="{{getImage('assets/images/frontend/Understand_process_to_buyers/'.$value->data_values->image2,'300x400') }}" alt="">--}}
                        {{--<span class="count">@php echo $key+1 @endphp</span>--}}
                    {{--</div>--}}
                    {{--<div class="content mt-20">--}}
                        {{--<h2 class="title">{{__($value->data_values->title)}}</h2>--}}
                        {{--<p> {{__($value->data_values->sub_title)}}  </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


