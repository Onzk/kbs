@extends('public.layout.base')

@section('public.base.title', 'Protection de données')

@section('public.base.body')
    <div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown text-white">Protection de données</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-white"
                                    href="{{ route('public.home.index') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Protection de données</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid sideImage" src="{{ asset('assets/public/img/data-protection.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid inImage" src="{{ asset('assets/public/img/key.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Vos données sont protégées !</h1>
                        <p class="text-primary fs-5 mb-4">Que ce soit vos données en tant qu'entreprises ou candidat
                            , vos données sont sécurisées.</p>
                        <p>
                            Notre plateforme de recrutement stocke uniquement les informations nécessaires à son
                            fonctionnement et dans l'atteinte de ses objectifs. De ce fait, nous ne gardons que l'essentiel
                            des informations vous concernant et ce, sur une durée limité.
                        </p>
                        <p class="mb-4">
                            Parce que, n'oubliez pas nos compétences !
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Fiablité</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Transparence</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Partialité</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Start -->
    @include('public.sections.kbs-why-us')
    <!-- Contact End -->

    <!-- Contact Start -->
    @include('public.sections.kapi-contact')
    <!-- Contact End -->

@endsection
