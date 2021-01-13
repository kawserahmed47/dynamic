<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8" />
    <title>Dynamic Printing Solutions - Home</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/frontend')}}/img/dynamic/64-x-64-02.jpg">
    <link rel="manifest" href="{{asset('public/frontend')}}/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">




    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/responsive.css">



</head>
<body class="active-preloader-ovh">

<div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->

{{-- Header --}}
@include('frontend.layouts.header')



@yield('content')



{{-- Footer --}}
@include('frontend.layouts.footer')




<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fas fa-angle-up"></i></div> 





<script src="{{asset('public/frontend')}}/js/jquery.js"></script>

<script src="{{asset('public/frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('public/frontend')}}/js/bootstrap-select.min.js"></script>
<script src="{{asset('public/frontend')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('public/frontend')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('public/frontend')}}/js/isotope.js"></script>
<script src="{{asset('public/frontend')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('public/frontend')}}/js/waypoints.min.js"></script>
<script src="{{asset('public/frontend')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('public/frontend')}}/js/wow.min.js"></script>
<script src="{{asset('public/frontend')}}/js/jquery.easing.min.js"></script>
<script src="{{asset('public/frontend')}}/js/circle-progress.js"></script>
<script src="{{asset('public/frontend')}}/js/waypoints.min.js"></script>
<script src="{{asset('public/frontend')}}/js/custom.js"></script>

</body>
</html>