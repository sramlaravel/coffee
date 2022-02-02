@php
    $Understand_process_to_producer= getContent('Understand_process_to_producers.content', true);
     $Understand_process_to_producers= getContent('Understand_process_to_producers.element', false, 6, true);
@endphp



<section class="topgrade__area dark-bg pt-115 position-relative">
    <span class="shape shape__1 position-absolute"><img src="assets/images/shape/top-grade-shape-1.png" alt=""></span>
    <span class="shape shape__2 position-absolute"><img src="assets/images/shape/top-grade-shape-2.png" alt=""></span>
    <div class="container">


        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="section-heading mb-70">
                    <h3 class="title"  style="text-align: center; color: white;"  >{{__($Understand_process_to_producer->data_values->heading)}}</h3>
                    <p   class="col-xl-12"  style="text-align: center; color: #white;" >
                        {{__($Understand_process_to_producer->data_values->sub_heading)}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-none-30">
            @foreach($Understand_process_to_producers as $key=>  $value)

            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                <div class="topgrade__item text-center">
                    <div class="thumb mb-25">
                        <img src="{{getImage('assets/images/frontend/Understand_process_to_producers/'.$value->data_values->image2,'300x400') }}" alt="">
                    </div>
                    <div class="content">
                        <h2 class="title mb-10">{{__($value->data_values->title)}}</h2>
                        <p style="color: white">{{__($value->data_values->sub_title)}}  </p>
                        <span class="count"  >@php echo $key+1 @endphp</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

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

