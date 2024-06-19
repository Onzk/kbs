@extends('user-space.layouts.auth')

@section('user-space.auth.title', 'Se connecter')
@section('user-space.auth.subtitle', 'Renseignez vos informations de connexion.')

@section('user-space.auth.body')
    <form action="index.html">
        <div class="form-group position-relative has-icon-left">
            <label for="email">Courriel</label>
            <div class="position-relative">
                <input type="email" class="form-control" placeholder="Courriel" id="email">
                <div class="form-control-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left">
            <div class="clearfix">
                <label for="password">Mot de passe</label>
                <a href="{{ route('user-space.forgot_password') }}" class='float-right text-primary fw-bold'>
                    <small style="font-weight: bold">Mot de passe oublié ?</small>
                </a>
            </div>
            <div class="position-relative">
                <input type="password" class="form-control" placeholder="Mot de passe" id="password">
                <div class="form-control-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-lock">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="clearfix mt-4">
            <button class="btn btn-primary w-100">Se connecter</button>
        </div>
    </form>
@endsection
