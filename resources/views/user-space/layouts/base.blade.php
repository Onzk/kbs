<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user_space_title }} - Espace Utilisateur - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/vendors/simple-datatables/style.css') }}">
    <link href="{{ asset('assets/public/img/logo.png') }}" rel="icon">
    @livewireStyles
</head>

<body>
    <div id="app">
        @if ($is_executive)
            @include('user-space.candidates.partials.sidebar')
            <div id="main">
                @include('user-space.candidates.partials.navbar')
                <div class="main-content container-fluid">
                    @yield('user-space.base.body')
                </div>
                @include('user-space.partials.footer')
            </div>
        @else
            @include('user-space.entreprises.partials.sidebar')
            <div id="main">
                @include('user-space.entreprises.partials.navbar')
                <div class="main-content container-fluid">
                    @yield('user-space.base.body')
                </div>
                @include('user-space.partials.footer')
            </div>
        @endif
    </div>
    @livewireScripts
    <script src="{{ asset('assets/user-space/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/user-space/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/app.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/main.js') }}"></script>
    <script src="{{ asset('assets/user-space/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/vendors.js') }}"></script>
</body>

</html>
