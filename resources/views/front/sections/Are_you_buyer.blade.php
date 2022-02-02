@php
    $Areyoubuyer = getContent('Are_you_buyer.content', true);
    $Areyoubuyers = getContent('Are_you_buyer.element', false, 6, true);
    $Areyouproduce = getContent('Are_you_producer.content', true);
    $Areyouproduces = getContent('Are_you_producer.element', false, 6, true);

@endphp
<!-- about area start -->
<section class="about__area about__area--2 position-relative pt-120 pb-105">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="wwa-wrapper">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about__right about__right--2 about__right--5 pl-45 pt-45">
                                <div class="section-heading section-heading__black">
                                    <span class="sub-title">who we are</span>
                                    <h2 class="title mb-25">{{__($Areyoubuyer->data_values->heading)}}</h2>
                                </div>
                                <ul class="about__list list-unstyled mt-25">
                                    @foreach($Areyoubuyers as $key=>  $value)
                                        <ul class="about__list list-unstyled mt-25">
                                            <li  style="font-size: 12px;"> <span class="icon"><i class="fal fa-check" ></i></span>{{__($value->data_values->title)}} {{__($value->data_values->sub_title)}}</li>
                                        </ul>
                                    @endforeach

                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="about__right about__right--2 about__right--5 pl-45 pt-45">
                                <div class="section-heading section-heading__black">
                                    <span class="sub-title">who we are</span>
                                    <h2 class="title mb-25">{{__($Areyouproduce->data_values->heading)}}</h2>
                                </div>
                                <ul class="about__list list-unstyled mt-25">
                                    @foreach($Areyouproduces as $key=>  $value)
                                        <ul class="about__list list-unstyled mt-25">
                                            <li  style="font-size: 14px;"> <span class="icon"><i class="fal fa-check" ></i></span>{{__($value->data_values->title)}} {{__($value->data_values->sub_title)}}</li>
                                        </ul>
                                    @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->

