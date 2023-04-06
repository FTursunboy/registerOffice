<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{asset('dist/assets/img/gerb.png')}}" rel="icon">
    <link href="{{asset('dist/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="{{asset('dist/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('dist/assets/vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{asset('dist/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('dist/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('dist/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/dist/css/adminlte.min.css')}}">
    <link href="{{asset('dist/assets/css/style.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('dist/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

</head>

<body data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="0">
<div class="wrapper">


@yield('content')

</div>



<script src="{{asset('dist/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('dist/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('dist/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('dist/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('dist/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('dist/assets/js/main.js')}}"></script>

</body>
</html>
