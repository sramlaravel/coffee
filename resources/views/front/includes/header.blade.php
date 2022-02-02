<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="Mo" class="letters-loading">
                    Mo
                </span>
                <span data-text-preloader="ka" class="letters-loading">
                    ka
                </span>
                <span data-text-preloader="Auction" class="letters-loading">
                   Auction
                </span>


            </div>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- header start -->
<header class="site-header">
    <div class="header-top header-top__2">
        <div class="container-fluid custom-width">
            <div class="row">
                <div class="col-xl-6 col-lg-12 align-self-center">
                    <div class="header-top__left d-flex align-items-center">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="{{asset('assets/images/logo/logo-black.png')}}" alt="img">
                            </a>
                        </div>
                        <ul class="header-top__infos pl-75 list-unstyled d-flex align-items-center mb-0">
                            <li><a href="tel:91800458568"><i class="fas fa-phone-square"></i> 91 800 458 568</a></li>
                            <li><i class="fa fa-map-marker-alt"></i>  </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12  align-self-center">
                    <div class="header-top__right header-top__right--2 d-flex justify-content-xl-end justify-content-center align-items-center">
                        <div class="social-links social-links__2 d-flex align-items-center justify-content-md-start justify-content-center">
                            <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        @guest
                        <li>


                            <ul class="site-btn">
                                <li>
                                    <a href="{{route('user.login')}}">@lang('Sign In')</a>
                                </li>
                                <li>
                                    <a href="{{route('user.register')}}">@lang('Sign Up')</a>
                                </li>
                            </ul>
                        </li>
                        @endguest
                        @auth
                        <li>
                            <a href="{{route('user.logout')}}"><i class="las la-sign-out-alt"></i>@lang('Logout')</a>
                        </li>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area menu-area-2 custom-padding">
        <div class="container-fluid custom-width">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-6">
                    <div class="logo mm-only d-md-block d-lg-none">
                        <a href="index-2.html">
                            <img src="assets/images/logo/logo-black.png" alt="img">
                        </a>
                    </div>
                    <div class="main-menu main-menu__2">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                {{--  <li><a href="{{route('about')}}">About</a></li>  --}}
                                <li><a href="{{route('forbuyer')}}">FOR BUYERS </a></li>
                                <li><a href="{{route('forproducer')}}">FOR PRODUCERS</a></li>
                                <li><a href="{{route('forproducer')}}">UPCOMING AUCTIONS</a></li>
                                <li><a href="{{route('forproducer')}}">AUCTION RESULTS</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                 {{--  <li><a href="#0">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="chefs.html">Chefs</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="story.html">Story</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </li>  --}}
                                {{--  <li><a href="shop.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="product-details.html">Shop Details</a></li>
                                        <li><a href="cart.html">Shop Cart</a></li>
                                        <li><a href="checkout.html">Shop Checkout</a></li>
                                    </ul>
                                </li>  --}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-6 align-self-center">
                    <div class="menu-area__right menu-area__right--2 d-flex justify-content-end align-items-center">
                        <div class="search">
                            <div class="search__trigger item">
                                <span class="open"><i class="far fa-search"></i></span>
                                <span class="close"><i class="fal fa-times"></i></span>
                            </div>
                            <div class="search__form">
                                <form role="search" method="get" action="https://xpressrow.com/html/cafena/cafena/index.html">
                                    <input type="search" name="s" value="" placeholder="Search Keywords">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="hamburger-trigger item">
                            <i class="far fa-bars"></i>
                        </div>
                        <div class="cart cart-trigger item position-relative">
                            <i class="fa fa-shopping-basket"></i>
                            <span class="cart__count">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
