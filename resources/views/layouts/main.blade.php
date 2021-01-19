<!DOCTYPE html>
<html class="no-js" lang="fr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- META
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@section ('keywords')  @show"/>

    <meta name="language" content="fr"/>
    <meta name="copyright" content=""/>
    <meta name="author" content="Bedi Tshitsho"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#78AB4E"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:site_name" content=""/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:language" content="{{ app()->getLocale() }}"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="@section ('site.logo') @show"/>

    <!-- Schema.org meta pour Google+ -->
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@section ('site.logo') @show">

    <!-- Card meta pour Twitter -->
    <meta name="twitter:card" content="@section ('site.logo') @show">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <!-- Twitter summary card avec image large de 280x150px -->
    <meta name="twitter:image:src" content="@section('site.logo') @show">
    <title>@section('title') {{ config('app.name') }} @show</title>
@stack('css')
<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/vendor/muli-font.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!--
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
     -->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
</head>

<body>

<div id="page" class="section">
    <!-- Header Section Start -->
@include('partials.nav')
<!-- Header Section End -->

@yield('content')


@include('partials.footer')

<!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->
</div>

@include('partials.nav_mobile')



<!-- JS
============================================ -->

<!-- Vendors JS -->
<!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script> -->

<!-- Plugins JS -->
<!-- <script src="assets/js/plugins/parallax.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script> -->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
@stack('js')
<script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>

<!-- Main Activation JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
