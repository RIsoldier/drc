<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Dr. Conduriotis @show</title>
    @section('meta_keywords')
        <meta name="keywords" content=""/>
    @show @section('meta_author')
        <meta name="author" content=""/>
    @show @section('meta_description')
        <meta name="description"
              content=""/>
    @show

		<!-- <link href="{{ asset('css/site.css') }}" rel="stylesheet">
        <script src="{{ asset('js/site.js') }}"></script> -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Css -->
        <link href="{{ asset('css/ripples.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/material.min.css') }}" rel="stylesheet">
        <!-- Style Css -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Slider Css -->
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
        <!-- Carousel Css -->
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
        <!-- Google Font Css -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{!! asset('images/favicon.png')  !!} ">
</head>
<body>
@include('partials.topbar')
@include('partials.header')
@include('partials.nav')

@yield('content')

@include('partials.footer')

<!-- Scripts -->
@yield('scripts')
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <!-- slider script --> 
    <script src="{{ asset('js/flex.js') }}"></script> 
    <!-- owl carousel script -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script> 
    <script src="{{ asset('js/owl-script.js') }}"></script> 
    <!-- Material Design script -->
    <script src="{{ asset('js/ripples.min.js') }}"></script> 
    <script src="{{ asset('js/material.min.js') }}"></script> 
    <script>
      $(document).ready(function() {
        "use strict";
        $.material.init();
        }); 
    </script>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.540, lng: -78.546},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyBvcPqjYVKy9-t6hsCmMp8disrxmm3Iatc" async defer></script>
</body>
</html>
