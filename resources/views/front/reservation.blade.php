   @extends('layouts.site')

@section('content')

    <!-- side info for mobile view -->
    <aside class="side-info-wrapper mm-only">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab"
                    href="#menu-tab-1" role="tab" aria-controls="menu-tab-1"
                    aria-selected="true">Menu</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2"
                    role="tab" aria-controls="menu-tab-2" aria-selected="false">Info</a>
            </div>
        </nav>
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index-2.html">
                    <img src="{{asset('assets/images/logo/logo-black.png')}}" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel"
                aria-labelledby="menu-tab-1-tab">
                <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel"
                aria-labelledby="menu-tab-2-tab">
                <div class="side-info">
                    <div class="side-info__content mb-35">
                        <h4 class="title mb-5">About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="site-btn mt-20" href="contact.html">Contact us</a>
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title mb-10">Contact us</h4>
                        <ul class="contact__info list-unstyled">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Bowery St., New York, NY 10013, USA</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+1255-568-6523</p>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>information@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                        <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- side info for desktop view -->
    <aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index-2.html">
                    <img src="{{asset('assets/images/logo/logo-black.png')}}" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="title mb-5">About us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat.</p>
                <a class="site-btn mt-20" href="contact.html">Contact us</a>
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-10">Contact us</h4>
                <ul class="contact__info list-unstyled">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Bowery St., New York, NY 10013, USA</p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+1255-568-6523</p>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>information@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </aside>

    <!-- cart list -->
    <aside class="cart-bar-wrapper">
        <div class="cart-bar__close">
            <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
        <div class="cart-bar">
            <h4 class="cart-bar__title">Cart Items - <span>4</span></h4>
            <div class="cart-bar__lists">
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="{{asset('assets/images/top-grade/tg-1.png')}}" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$19.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="{{asset('assets/images/top-grade/tg-2.png')}}" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$36.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="{{asset('assets/images/top-grade/tg-3.png')}}" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="{{asset('assets/images/top-grade/tg-4.png')}}" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
                <span>Sub Total:</span>
                <span>$87.00</span>
            </div>
            <div class="btns d-flex align-items-center justify-content-center">
                <a href="cart.html" class="site-btn">View Cart</a>
                <a href="checkout.html" class="site-btn site-btn__borderd">Checkout</a>
            </div>
        </div>
    </aside>
    <div class="overlay"></div>

    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="{{asset('assets/images/bg/breadcrumb-bg-1.jpeg')}}" data-overlay="dark" data-opacity="5">
            <div class="shape shape__1"><img src="{{asset('assets/images/shape/breadcrumb-shape-1.png')}}" alt=""></div>
            <div class="shape shape__2"><img src="{{asset('assets/images/shape/breadcrumb-shape-2.png')}}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">Sign Up For A 14-Day Free Trial</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                   
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>menu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- reservation area start -->
        <section class="reservation__area reservation__area--2 position-relative pt-120 pb-120">
            <span class="shape shape__1 position-absolute"><img src="{{asset('assets/images/shape/hero-shape-2-1.png')}}" alt=""></span>
            <span class="shape shape__2 position-absolute"><img src="{{asset('assets/images/shape/hero-shape-2-2.png')}}" alt=""></span>
            <div class="container">
            <div class="section-heading section-heading__black">
                                <span class="title">Sign Up For A 14-Day Free Trial</span>
                                <h2 class="title mb-25">Here's how it works</h2>
                                
                              <ul>
                              <li><span >No obligation, 14-Day unlimited use free trial </span></li>
                              <li><span>No credit card required, just fill out the form below and we will get things set up for you</span></li>
                              <li><span>We will set the site up within 1 working day</span></li>
                              <li><span>We will send over the login details to the email address you provide below once the platform has been set up.</span></li>
                              <li><span>We won't give you any hard sell once your trial has finished, but we may get in touch to see what you thought of it and to answer any questions you might have.</span></li>
                              </ul>
             </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="reservation__wrapper reservation__wrapper--2">
                            <div class="section-heading section-heading__black text-center mb-35">
                                <h2 class="title">Reservation form</h2>
                            </div>
                            <div class="reservation__form reservation__form--2 mt-none-30 text-center">
                                @include('taha.includes.alerts.success')
                                @include('taha.includes.alerts.errors')
                                <form action=""   id="offerdata" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="from-group mt-30">
                                                <input type="text" name="f_name" id="f_name" value="{{ old('f_name')}}"   placeholder="Enter your frist name">
                                                @error("f_name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="from-group mt-30">
                                                <input type="text" name="l_name" id="l_name"   placeholder="Enter your last name" value="{{old('l_name')}} " >
                                                @error("l_name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="from-group mt-30">
                                                <input type="text" name="company_name" id="company_name"  placeholder="Enter your company"  value="{{ old('company_name')}}">
                                                @error("company_name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="from-group mt-30">
                                                <input type="tel" name="phone" id="phone"    placeholder="Enter your number" value="{{ old('phone')}} ">
                                                @error("phone")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="from-group mt-30">
                                                <select name="Industry_id" id="Industry_id">
                                                    <optgroup label="Industry">
                                                        @if($Industry  -> count() > 0)
                                                            @foreach($Industry as $category)
                                                                <option
                                                                        value="{{$category -> id }}"

                                                                >{{$category -> industry}}</option>
                                                            @endforeach
                                                        @endif
                                                    </optgroup>
                                                </select>
                                                @error("Industry_id")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{--<div class="col-xl-6 col-lg-6">--}}
                                            {{--<div class="from-group mt-30">--}}
                                                {{--<input type="date" id="date" name="date">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xl-6 col-lg-6">--}}
                                            {{--<div class="from-group mt-30">--}}
                                                {{--<input type="time" id="time" name="time">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="from-group mt-30">
                                                <input type="email" id="email" name="email"   placeholder="Enter your mail"  value="{{ old('email')}}">
                                            </div>
                                            @error("email")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                          <textarea  style="text-align: left" cols="30" rows="6"  class="form-control m-input" name="message" id="message"
                                                     placeholder=" *{{__('messages.messages')}} "></textarea>
                                            @error("message")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror

                                        </div>
                                        <div class="col-xl-12 text-center">
                                            <button id="save_data"   class="site-btn mt-30">Submit you request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- reservation area end -->

    </main>

       <script>
           $(document).on('click', '#save_data',function(e){
               e.preventDefault();
               var formData=new FormData($('#offerdata')[0]);

               var url = "{{ url('/reservation/') }}";
               $.ajax({

                   type: 'post',
                   enctype:'multipart/form-data',
                   url: url,
                   data:formData,
                   processData: false,
                   contentType: false,
                   cache: false,
                   success: function(data){
                       if(data.status==true)
                       {

                           console.log(formData);
                           //  alert(data.msg);
                          alert(response.message) //Message come from controller
//                      $('#success_msg').show();
//                       }
//                       else{
//                           alert(data.msg);
//                       }
                   },
                   error: function(reject){}
               });
           });

       </script>

    {{--<script type="text/javascript">--}}


        {{--$.ajaxSetup({--}}
            {{--headers: {--}}
                {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--}--}}
        {{--});--}}

        {{--$(".btn-submit").click(function(e){--}}

            {{--e.preventDefault();--}}

            {{--var data = $(this).serialize();--}}
            {{--console.log(data);--}}


                        {{--$.ajax({--}}
                {{--url:"{{ route('reservation.create') }}",--}}
                {{--method:'POST',--}}
                {{--data:data,--}}
                {{--success:function(response){--}}
                    {{--if(response.success){--}}
                        {{--alert(response.message) //Message come from controller--}}
                    {{--}else{--}}
                        {{--alert("Error")--}}
                    {{--}--}}
                {{--},--}}
                {{--error:function(error){--}}
                    {{--console.log(error)--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}
  @stop