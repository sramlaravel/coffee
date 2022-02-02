@php
    $Whatwedo = getContent('What_we_do.content', true);

    $Whatwedos = getContent('What_we_do.element', false, 4, true);
@endphp
<section class="testimonial__area pt-115 pb-110 position-relative bg_img" data-overlay="dark" data-opacity="5" data-background="assets/images/bg/testimonial-bg-2.jpg">
{{--<section class="about__area about__area--2 black-bg position-relative pt-120 pb-130">--}}
    <div class="container">
        <div class="section-heading mb-40">
            <h3 class="title"  style="text-align: center;"  >{{__($Whatwedo->data_values->heading)}}</h3>
            <p   class="quote mb-20"  style="text-align: center; color: white;" >
                {{__($Whatwedo->data_values->sub_heading)}}
            </p>
        </div>
    </div>
    {{--<span class="shape shape__1 position-absolute"><img src="assets/images/shape/menu-shape-4.png" alt=""></span>--}}
    <span class="shape shape__2 position-absolute"><img src="assets/images/shape/top-grade-shape-2-1.png" alt=""></span>
    <div class="feature__area feature__area--1 pb-115">
        <div class="row">
            <div class="col-xl-5 offset-xl-1">
                <div class="about__right about__right--2 pl-45 pt-45">
                    @foreach($Whatwedos as $key=>  $value)
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-50">
                            <div class="feature__item feature__item ">
                                <span class="year" style="background-color: yellow;width: 20px;">  @php echo $key+1 @endphp</span>
                            </div>
                            <div class="content mt-20">
                                <h2 class="title" style="color: white;">{{__($value->data_values->title)}}</h2>

                                <p  style="color: white;">          {{__($value->data_values->description)}}     </p>
                            </div>

                        </div>
                    @endforeach
                </div>


            </div>
            <div class="col-xl-5 offset-xl-1">

                <div class="about__left about__left--2 position-relative">
                    <img class="big" src=" {{getImage('assets/images/frontend/What_we_do/'.$Whatwedo->data_values->image1,'300x400') }}  " alt="img">
                    <img class="small position-absolute" src="{{getImage('assets/images/frontend/What_we_do/'. $Whatwedo->data_values->image2,'300x300') }}" alt="img">
                </div>

            </div>


            {{--<div class="col-xl-6 offset-xl-1">--}}
                {{--<div class="about__right about__right--2 pl-45 pt-45">--}}
                    {{----}}
                    {{--<div class="section-heading section-heading__black">--}}
                        {{--<span class="sub-title">about us</span>--}}
                        {{--<h2 class="title mb-25">one of the best coffee house--}}
                            {{--in your home town</h2>--}}
                        {{--<p>Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit ligula volutpat, a feugiat urna maximus. Cras massa nibhtincidunt.</p>--}}
                        {{--<p>Donec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>