@extends('public.layout.base')

@section('public.base.title', 'Présentation de KBS')

@section('public.base.body')

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">
                        Optimisez vos process de recrutement !
                    </h1>
                    <p class="animated slideInDown">
                        Bienvenue sur la plateforme de recrutement des cadres d'entreprises et des membres de conseil
                        d'administration.
                        Commencez en tant que
                    </p>
                    <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Cadre</a>
                    <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Entreprise</a>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 10s;"
                        src="{{ asset('assets/public/img/hero-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('assets/public/img/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">A Propos de nous</h1>
                        <p class="text-primary fs-5 mb-4">Plateforme de recrutement de cadres & hauts cadres</p>
                        <p>
                            Notre plateforme de recrutement spécialisée dans les cadres et hauts cadres est conçue pour vous
                            aider à identifier, évaluer et attirer les leaders stratégiques dont votre entreprise a besoin
                            pour prospérer dans un environnement professionnel compétitif.
                        </p>
                        <p class="mb-4">
                            Confiez-nous votre recherche de cadres et hauts cadres, nous vous trouverons les talents les
                            plus brillants du marché.
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

    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                    <h1 class="display-4" data-toggle="counter-up">300</h1>
                    <p class="fs-5 text-primary mb-0">Cadres & Hauts Cadres</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4" src="img/icon-10.png" alt="">
                    <h1 class="display-4" data-toggle="counter-up">26</h1>
                    <p class="fs-5 text-primary mb-0">Entreprises</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                    <h1 class="display-4" data-toggle="counter-up">80</h1>
                    <p class="fs-5 text-primary mb-0">Agents KAPI</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Pourquoi nous ?</h1>
                <p class="text-primary fs-5 mb-5">Recrutez des cadres exceptionnels</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Expertise Professionnelle</h5>
                            <span>
                                Notre plateforme offre une expertise professionnelle dans le recrutement de cadres et hauts
                                cadres, avec une compréhension approfondie des attentes et des enjeux spécifiques à chaque
                                poste. Les membres de notre équipe ont reçu des formations spécialisées dans ce domaine, ce
                                qui leur permet de comprendre vos besoins et de mener des recherches efficaces pour trouver
                                les candidats idéaux.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-6.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Accès à un Réseau Exclusif</h5>
                            <span>
                                En recourant à notre plateforme, vous bénéficiez d'un accès à un réseau exclusif de talents,
                                vous permettant de trouver des profils de haut niveau pour des postes stratégiques au sein
                                de votre organisation.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-5.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Gain de Temps et d'Effort </h5>
                            <span>
                                Ne perdez pas de temps à chercher un nouveau candidat. En utilisant notre plateforme, vous
                                pouvez vous concentrer sur le développement de votre entreprise, tandis que nous nous
                                chargeons de trouver les bons candidats pour vous.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-4.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Processus de Recrutement Amélioré</h5>
                            <span>
                                Notre approche personnalisée et nos méthodes de recrutement efficaces garantissent que vous
                                trouverez des candidats qui non seulement répondent à vos exigences professionnelles, mais
                                qui incarnent également la culture et les valeurs de votre entreprise.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-3.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Accompagnement et Suivi</h5>
                            <span>
                                Les candidats bénéficient d'un accompagnement tout au long du processus de recrutement,
                                ainsi qu'un suivi durant leurs premiers mois dans l'entreprise, ce qui renforce leur
                                engagement et fidélité envers votre organisation.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-8.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Adaptabilité aux Nouveaux Modes de Travail</h5>
                            <span>
                                Nous comprenons l'importance pour les entreprises de prouver leur adaptabilité aux besoins
                                et aux nouveaux modes de travail, en proposant par exemple du télétravail et des horaires
                                flexibles, ce qui est essentiel pour attirer les meilleurs talents sur le marché actuel.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    @include('public.sections.kbs-services')
    <!-- Service End -->
@endsection
