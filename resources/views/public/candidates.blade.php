@extends('public.layout.base')

@use('\App\Models\Config')

@section('public.base.title', 'Candidats')

@section('public.base.body')
    <!-- Header Start -->
    <div class="container-fluid hero-header mb-5 px-0"
        style="background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('assets/public/img/candidates.png') }}');">
        <div class="py-5 col" style="background-color: rgba(0, 0, 0, 0.50)">
            <div class="container py-5 col d-flex align-items-center justify-content-center" style="min-height: 90vh;">
                <div class="col-md-12 col-lg-8 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown text-white fw-bold">
                        Informez le monde de vos compétences !
                    </h1>
                    <p class="animated slideInDown text-white col-md-8 mx-auto" style="font-size: 18px">
                        Bienvenue sur la plateforme de recrutement d'administrateurs indépendants
                        et membres de conseil d'administration d'entreprises.
                    </p>
                    @if (Auth::guard('candidates')->check())
                        <a href="{{ route('candidate-space.home') }}"
                            class="btn btn-primary py-3 px-4 m-2 animated slideInDown">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="pb-1 mx-1" style="width:20px">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            Espace Utilisateur
                        </a>
                    @else
                        <a href="#creer-un-compte" class="btn btn-primary py-3 px-4 m-2 animated slideInDown">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="pb-1 mx-1" style="width:20px">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            S'enregistrer maintenant !
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    @if (!Auth::guard('candidates')->check())
        <!-- Contact Start -->
        <div class="container-xxl py-5" id="creer-un-compte">
            <div class="container">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-12">
                        <h1 class="display-6">Enregistrez-vous dès maintenant !</h1>
                        <p class="text-primary fs-5 mb-0">
                            Remplissez le formulaire pour être visible aux yeux de toutes les entreprises qui nous font
                            confiance !
                        </p>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-12 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('assets/public/img/handshake.png') }}"
                            class="col-lg-12 h-100 col-md-6 col-12 wow inImage" style="min-height: 502px" alt="">
                    </div>
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-4 j-text">
                            <span class="text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" width="25px">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>
                            </span>
                            Le nombre d'années d'expérience mimimum requis est de <span class="fw-bold text-danger">
                                {{ Config::retreive('min_year') ?? '15' }} ans</span>.
                            Toute candidature est automatiquement refusée si ce n'est pas le cas.
                        </p>
                        @livewire('public.candidate-register')
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- About Start -->
    @include('public.sections.about')
    <!-- About End -->

    <!-- Features Start -->
    @include('public.sections.kbs-why-us')
    <!-- Features End -->

    <!-- Features Start -->
    @include('public.sections.facts')
    <!-- Features End -->
@endsection
