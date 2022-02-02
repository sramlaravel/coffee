@php
    $OUR_CUSTOMER_REVIEW = getContent('OUR_CUSTOMER_REVIEW.content', true);
    $OUR_CUSTOMER_REVIEWS = getContent('OUR_CUSTOMER_REVIEW.element', false, 4, true);
@endphp

<!-- testimonail area start -->
<section class="testimonial__area pt-115 pb-110 position-relative bg_img" data-overlay="dark" data-opacity="5" data-background="assets/images/bg/testimonial-bg-2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="section-heading mb-40">
                    <span class="sub-title">{{__($OUR_CUSTOMER_REVIEW->data_values->heading)}}</span>
                    <h2 class="title">{{__($OUR_CUSTOMER_REVIEW->data_values->sub_heading)}}</h2>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-xl-12">
                <div class="testimonial__active owl-carousel slider-nav">
                    @foreach($OUR_CUSTOMER_REVIEWS as $key=>  $value)
                    <div class="testimonial__item text-center">

                        <div class="row g-0 justify-content-center">
                            <div class="col-xl-8">

                                <div class="author-info mt-35">
                                    <div class="thumb mb-25">
                                        <img src="{{getImage('assets/images/frontend/OUR_CUSTOMER_REVIEW/'. $value->data_values->image,'300x300') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4 class="name">{{__($value->data_values->title)}}</h4>

                                    </div>
                                </div>
                                <span class="quote mb-20">
                                            <img src="assets/images/icons/t-quote.png" alt="">
                                        </span>
                                <p>{{__($value->data_values->sub_title)}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<!-- testimonail area end -->
