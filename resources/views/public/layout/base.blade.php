<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('public.base.title') - {{ config('app.name') }}</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{ asset('assets/public/img/logo.png') }}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/public/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/public/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/public/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/public/css/custom.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('public.partials.navbar')
    <!-- Navbar End -->

    <!-- Page body Start -->
    @yield('public.base.body')
    <!-- Page body end -->

    <!-- Footer Start -->
    @include('public.partials.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    @livewireScripts
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/public/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/public/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/public/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/public/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/public/lib/counterup/counterup.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/public/js/main.js') }}"></script>
</body>

</html>
