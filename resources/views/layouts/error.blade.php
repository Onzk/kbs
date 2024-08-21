<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-dark">

<head>
    <meta charset="UTF-8">
    <title>Erreur {{ $exception->getStatusCode() }} - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user-space/css/app.css') }}">

    <link href="{{ asset('assets/public/img/logo.png') }}" rel="icon">
</head>

<body>
    <div id="error" class="bg-dark pt-16">
        <div class="container text-center pt-32 ">
            <h1 class='error-title text-white'>{{ $exception->getStatusCode() }}</h1>
            <p class="h3 text-white my-4">{{ __($message) }}</p>
            <a href="{{ url()->previous() }}" class='btn shadow btn-primary btn-lg my-4'>
                {{ __('Retour en arrière') }}
            </a>
        </div>
        <div class="footer pt-32">
            <div class="col-md-12 text-center text-white mb-3 mb-md-0">
                {{ \Carbon\Carbon::now()->year }}
                &copy; <a href="{{ route('public.home.index') }}"
                    class="text-white fw-bold" style="font-weight: bold">{{ config('app.name') }}</a>,
                Tout droit réservé.
            </div>
        </div>
    </div>
</body>

</html>
