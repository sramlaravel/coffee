@extends('layouts.site')

@section('content')

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
                <img src="assets/images/logo/logo-black.png" alt="logo">
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
                <img src="assets/images/logo/logo-black.png" alt="logo">
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
                    <img src="assets/images/top-grade/tg-1.png" alt="image_not_found">
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
                    <img src="assets/images/top-grade/tg-2.png" alt="image_not_found">
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
                    <img src="assets/images/top-grade/tg-3.png" alt="image_not_found">
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
                    <img src="assets/images/top-grade/tg-4.png" alt="image_not_found">
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
    <!-- hero area end -->
@if($sections->secs != null)
    @foreach(json_decode($sections->secs) as $sec)
        @include($activeTemplate.'sections.'.$sec)
    @endforeach
@endif

<!-- contact area start -->
    <div class="contact__area position-relative pt-120 pb-120">
        <span class="shape shape__1 position-absolute"><img src="assets/images/shape/hero-shape-2-1.png" alt=""></span>
        <span class="shape shape__2 position-absolute"><img src="assets/images/shape/hero-shape-2-2.png" alt=""></span>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__wrapper">
                        <div class="row mt-none-30">
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="contact-info d-flex align-items-center justify-content-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <img src="assets/images/icons/ci-1.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Contact us</h3>
                                        <a href="mailto:Israfilsupol836@gmail.com">Israfilsupol836@gmail.com</a>
                                        <a href="tel:088-01869018907">088 - 01869018907</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="contact-info d-flex align-items-center justify-content-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <img src="assets/images/icons/ci-2.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Our Location</h3>
                                        <p>Hera Road 2344-78 Australia
                                            897- South Side Melbon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="contact-info d-flex align-items-center justify-content-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <img src="assets/images/icons/ci-3.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Opening HOurs</h3>
                                        <p>Mon - Sat (8:00 - 6:00)</p>
                                        <p>Sunday - Closed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact__form mt-20">
                                    <form action="#" method="get">
                                        <div class="row">
                                            <div class="col-xl-6 mt-30">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" placeholder="Your name :">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" placeholder="Your Mail :">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30">
                                                <div class="form-group">
                                                    <input type="text" name="subject" id="subject" placeholder="Enter Your Subject :">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30">
                                                <div class="form-group">
                                                    <textarea name="message" id="message" placeholder="Your Massage :"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-20 text-center">
                                                <button type="submit" class="site-btn">send massage</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->



</main>

@stop
