@extends('public.layout.base')

@section('public.base.title', 'Mission - Vision - Valeurs')

@section('public.base.body')
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
                    <img class="img-fluid inImage2" src="{{ asset('assets/public/img/key.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Mission</h1>
                        <p class="text-primary fs-5 mb-4">
                            Nous contribuons au développement à long terme de nos clients, en leur apportant des talents
                            d'exception avec un leadership stratégique pour leur conseils d'administration.
                        </p>
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
                        <p class="text-primary fs-5 mb-4">
                            Incarner la référence incontournable sous-régionale en matière de placement d'Administrateurs
                            haut de gamme, capable d'insuffler une dynamique de croissance pérenne aux organisations que
                            nous accompagnons.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid inImage2" src="{{ asset('assets/public/img/present.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vision End -->

    <!-- Valeur Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid inImage2" src="{{ asset('assets/public/img/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Valeurs</h1>
                        @foreach ([
                            "Intégrité" => "Nous faisons ce que nous avons dit. Nous tenons nos engagements.",
                            "Engagement & Partenariat" => "Nous sommes passionnés par votre succès, Nous serons donc toujours là pour vous accompagner vers le résultat.",
                            "Courage" => "Parce que nous acceptons d'être jugés sur nos résultats, nous assumons nos démarches et nos recommandations.",
                            "Compassion" => "Nous reconnaissons que souvent le changement peut être difficile, pour certains. Et c'est notre rôle d'être à leurs côtés.",
                            "Responsabilité" => "Nous nous engageons sur ce que nous pouvons faire pour délivrer vos attentes."
                        ] as $title => $value)
                            <p class="d-flex justify-items-start align-items-start">
                                <i class="fa fa-check text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                                <span class="col">
                                    <span class="text-primary fw-bold">
                                        {{ $title }}
                                    </span>
                                    : {{ $value }}
                                </span>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Valeur End -->

    <!-- Contact Start -->
    @include('public.sections.kapi-contact')
    <!-- Contact End -->
@endsection
