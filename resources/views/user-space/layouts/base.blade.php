<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('user-space.base.title') - Espace Utilisateur - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/custom.css') }}">
    <link href="{{ asset('assets/public/img/logo.png') }}" rel="icon">
</head>

<body>
    <div id="app">
        @if ($isExecutive)
            @include('user-space.executives.partials.sidebar')
        @else
            @include('user-space.entreprises.partials.sidebar')
        @endif
        <div id="main">
            @include('user-space.partials.navbar')
            <div class="main-content container-fluid">
                @yield('user-space.base.body')
            </div>
            @include('user-space.partials.footer')
        </div>
    </div>
    <script src="{{ asset('assets/user-space/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/user-space/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/app.js') }}"></script>
    <script src="{{ asset('assets/user-space/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/user-space/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/main.js') }}"></script>
</body>

</html>
