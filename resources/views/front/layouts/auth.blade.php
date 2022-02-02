<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{ </title>

    <link rel="stylesheet" href="{{asset('assets/templates/basic/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/templates/basic/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/templates/basic/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/templates/basic/frontend/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/templates/basic/frontend/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/templates/basic/frontend/css/main.css')}}">
    <link rel="shortcut icon" href=" " type="@lang('image/x-icon')">
    <link href="{{ asset('templates/basic/css/color.php') }}?color= " rel="stylesheet"/>
    @stack('style-lib')
    @stack('style')
</head>

<body>
    @stack('fbComment')
    {{--<main class="main-body">--}}
        {{--<div class="overlay"></div>--}}
        {{--<a href="#" class="scrollToTop"><i class="las la-angle-up"></i></a>--}}
        {{--<div class="preloader" id="preloader">--}}
            {{--<div class="logo">--}}
            {{--</div>--}}
            {{--<div class="loader-frame">--}}
                {{--<div class="loader1" id="loader1">--}}
                {{--</div>--}}
                {{--<div class="circle"></div>--}}
                {{--<h4 class="hello">@lang('Hello')</h4>--}}
                {{--<h6 class="wellcome">@lang('Wellcome to') <span> </span></h6>--}}
            {{--</div>--}}
        {{--</div>--}}
        @yield('content')
    </main>
    @include($activeTemplate . 'partials.footer')
    <script src="{{asset('assets/global/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/templates/basic/frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/templates/basic/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/templates/basic/frontend/js/rafcounter.min.js')}}"></script>
    <script src="{{asset('assets/templates/basic/frontend/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/templates/basic/frontend/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/templates/basic/frontend/js/owl.min.js')}}"></script>
    <script src="{{asset('assets/templates/basic/frontend/js/main.js')}}"></script>
    @stack('script-lib')
    @stack('script')
    @include('partials.plugins')
    @include('partials.notify')

    <script>
        (function ($) {
        "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{route('home')}}/change/"+$(this).val() ;
            });
            @if(@$cookie->data_values->status && !session('cookie_accepted'))
                $('#cookieModal').modal('show');
            @endif
        })(jQuery);
    </script>
</body>
</html>