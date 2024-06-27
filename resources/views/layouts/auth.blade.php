<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $auth_title ?? "" }} - {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/app.css') }}">
    <link href="{{ asset('assets/public/img/logo.png') }}" rel="icon">
    @livewireStyles
</head>

<body>
    <div id="auth" class="pt-0"
        style="background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="col d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.70); min-height: 100vh">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-4 col-sm-12 mx-auto">
                        <div class="card pt-4">
                            <div class="card-body">
                                <div class="text-center mb-5">
                                    <a href="{{ route('public.home.index') }}">
                                        <img src="{{ asset('assets/public/img/logo.png') }}" height="54" class='mb-4'>
                                        <h3 class="fw-bold text-primary">{{ config('app.name') }}</h3>
                                    </a>
                                    <p>{{ $auth_subtitle ?? "" }}</p>
                                </div>
                                @yield('auth.body')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/user-space/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/app.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
