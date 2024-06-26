@extends('public.layout.base')

@section('public.base.title', 'Mission - Vision - Valeurs')

@section('public.base.body')
{{--
NOS VALEURS

Intégrité  Nous faisons ce que nous avons dit.  Nous tenons nos engagements

Engagement & Partenariat Nous sommes passionnés par votre succès,  Nous serons donc toujours Ià pour vous  accompagner vers le résultat

Courage Parce que nous acceptons d'être jugés sur nos  résultats, nous assumons nos démarches et  nos recommandations

Compassion  Nous reconnaissons que souvent le  changement peut être difficile, pour  certains. Et c'est notre rôle d 'être à  leurs côtés

Responsabilité  Nous nous engageons sur ce que nous  pouvons faire pour délivrer vos attentes.

Notre mission: Nous contribuons au développement à long terme de nos clients, en leur apportant des talents d'exception avec un leadership stratégique pour leur conseils d'administration.

Notre vision: Incarner la référence incontournable  sous-régionale  en matière de placement d'Administrateurs haut de gamme, capable d'insuffler une dynamique de croissance pérenne aux organisations que nous accompagnons

--}}
    <div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown text-white">Missions - Vision - Valeurs</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('public.home.index') }}">A
                                    Propos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mission Visison Valeurs</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid sideImage" src="{{ asset('assets/public/img/mvv.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid inImage" src="{{ asset('assets/public/img/key.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Missions</h1>
                        <p class="text-primary fs-5 mb-4">Plateforme de recrutement d'administrateurs indépendants</p>
                        <p>
                            Notre plateforme de recrutement spécialisée dans les membres de conseil d'administration
                            est conçue pour vous aider à identifier, évaluer et attirer les leaders stratégiques
                            dont votre entreprise a besoin pour prospérer dans un environnement professionnel compétitif.
                        </p>
                        <p class="mb-4">
                            Confiez-nous votre recherche de vos futurs membres de conseil d'administration,
                            nous vous trouverons les talents les plus brillants du marché.
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
    <!-- Mission End -->

    <!-- Vision Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Vision</h1>
                        <p class="text-primary fs-5 mb-4">Plateforme de recrutement d'administrateurs indépendants</p>
                        <p>
                            Notre plateforme de recrutement spécialisée dans les membres de conseil d'administration
                            est conçue pour vous aider à identifier, évaluer et attirer les leaders stratégiques
                            dont votre entreprise a besoin pour prospérer dans un environnement professionnel compétitif.
                        </p>
                        <p class="mb-4">
                            Confiez-nous votre recherche de vos futurs membres de conseil d'administration,
                            nous vous trouverons les talents les plus brillants du marché.
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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid inImage" src="{{ asset('assets/public/img/present.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vision End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid inImage" src="{{ asset('assets/public/img/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Valeurs</h1>
                        <p class="text-primary fs-5 mb-4">Plateforme de recrutement d'administrateurs indépendants</p>
                        <p>
                            Notre plateforme de recrutement spécialisée dans les membres de conseil d'administration
                            est conçue pour vous aider à identifier, évaluer et attirer les leaders stratégiques
                            dont votre entreprise a besoin pour prospérer dans un environnement professionnel compétitif.
                        </p>
                        <p class="mb-4">
                            Confiez-nous votre recherche de vos futurs membres de conseil d'administration,
                            nous vous trouverons les talents les plus brillants du marché.
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
    <!-- About End -->

    <!-- Contact Start -->
    @include('public.sections.kapi-contact')
    <!-- Contact End -->
@endsection
