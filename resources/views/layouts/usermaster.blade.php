<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | WMS</title>
    {{--<!--Favicon-->--}}
    {{--<link rel="shortcut icon" type="image/x-icon"  href="{{asset('public/userassets/images/favicon.png')}}">--}}
    {{--<!-- Google font -->--}}
    <link rel="stylesheet" href="{{asset('public/userassets/css/fontawesome-all.min.css')}}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('public/userassets/css/owl.carousel.min.css')}}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('public/userassets/css/magnific-popup.css')}}" />
    <!-- Bar Filler -->
    <link rel="stylesheet" href="{{asset('public/userassets/css/barfiller.css')}}" />
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('public/userassets/css/animate.min.css')}}" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('public/userassets/css/bootstrap.min.css')}}" />
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{asset('public/userassets/css/bicon.min.css')}}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('public/userassets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/userassets/css/responsive.css')}}" media="all" />
    @yield('style')
</head>
<body>
<!-- Start Header Menu Area -->
    @include('shared.userheader')
<!-- End Header Menu Area -->

<!--Content area -->
    <div class="content">

    @yield('content')

<!-- Basic modal -->
    @yield('box')
<!-- /basic modal -->

<!-- Footer -->
    @include('shared.userfooter')
<!-- /footer -->
    </div>
    <!-- /Content area -->

<!-- LinkUp Js -->
<script type="text/javascript" src="{{asset('public/userassets/js/jquery-1.12.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/jquery.barfiller.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/owl.carousel2.thumbs.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/onepagenav.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/userassets/js/active.js')}}"></script>
@yield('script')
</body>
</html>