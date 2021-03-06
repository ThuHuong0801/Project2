<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Quan ly ban ve xem phim</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets1') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets1') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets1') }}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets1') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets1') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets1') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets1') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets1') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets1') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets1') }}/css/style.css" rel="stylesheet">

    <!-- css/users -->
</head>
<body>
    @include('layouts\user.sidebar')
    @include('layouts\user.navbar')
    <div>
        @yield('content')
    </div>
    @include('layouts\user.footer')

<!-- Vendor JS Files -->
<script src="{{ asset('assets1') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets1') }}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('assets1') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('assets1') }}/vendor/php-email-form/validate.js"></script>
<script src="{{ asset('assets1') }}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('assets1') }}/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets1') }}/js/main.js"></script> 

</body>
</html>