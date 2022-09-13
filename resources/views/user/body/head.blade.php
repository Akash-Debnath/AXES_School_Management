<!doctype html>
<html lang="en">
<marquee class="w3-text-white" width="100%" direction="left">
    <h4 style="color:orange;">
    {{ Websiteinfo()->marqmessage }}</h4>
    </marquee> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/upload/website/',Websiteinfo()->icon) }}">
    <title>{{ Websiteinfo()->name }}</title>

    <!-- CSS -->
    <link href="{{ asset('public/themefronted/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/magnific-popup/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/iconmoon/css/iconmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/assets/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/themefronted/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>
<body>

