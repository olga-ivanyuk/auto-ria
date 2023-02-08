<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Description -->
    <meta name="description" content="">
    <meta name="author" content="Themeland">

    <!-- Title  -->
    <title>Digimax - SEO & Digital Marketing Agency HTML Template | Homepage-4</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

</head>

<body class="homepage-4">

<x-preloader/>

<x-scroll-up/>

{{ $slot }}
<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="{{ asset('assets/js/jquery/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- Plugins js -->
<script src="{{ asset('assets/js/plugins/plugins.min.js')}}"></script>

<!-- Active js -->
<script src="{{ asset('assets/js/active.js')}}"></script>
</body>

</html>

