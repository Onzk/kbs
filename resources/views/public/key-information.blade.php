@extends('public.layout.base')

@section('public.base.title', 'Informations clés')

@section('public.base.body')
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Informations clés</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('public.home.index') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Informations clés
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 10s;"
                        src="{{ asset('assets/public/img/key.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="text-center pb-4">
            <h1 class="display-6 text-center">Nous connaître</h1>
            <p class="text-primary fs-5 mb-4">Cabinet d'études et de conseils</p>
        </div>
        <br>
        <div class="row g-5 align-items-start">
            <div class="col-lg-3 wow fadeInUp my-4" data-wow-delay="0.1s">
                <img class="img-fluid" style="height: 300px; object-fit: cover"
                    src="{{ asset('assets/public/img/about-1.png') }}" alt="">
            </div>
            <div class="col-lg-3 wow fadeInUp my-3" data-wow-delay="0.1s">
                <div class="h-100">
                    <p class="text-primary fs-5">Présentation</p>
                    <p>
                        KAPI CONSULT est un cabinet d'études et de conseil en management, organisation et compétitivité
                        orienté dans les métiers de productions et d'infrastructures.
                        A notre actif, sont des centaines d'études réalisées - Des centaines de projets évalués - Plus de
                        200 milliards FCFA
                        mobilisées - Des centaines de postes recrutés - Une vingtaine de séminaires et formations
                        organisées.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp my-4" data-wow-delay="0.1s">
                <img class="img-fluid" style="height: 300px; object-fit: cover"
                    src="{{ asset('assets/public/img/about-2.png') }}" alt="">
            </div>
            <div class="col-lg-3 wow fadeInUp my-3" data-wow-delay="0.1s">
                <div class="h-100">
                    <p class="text-primary fs-5">Domaines d'activités</p>
                    <p>
                        Sans être limitatifs, nos domaines de compétences couvrent les secteurs productifs et
                        technologiques : Analyse & Compétitivité - Infrastructures & Développement - Management &
                        Organisation - Formation & développement humain - Etudes de faisabilité et Evaluation de projets
                        - Partenariat Public Privé - Architecture, Expertise Immobilière et Valorisation - Recherche de
                        Financement.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp my-4" data-wow-delay="0.1s">
                <img class="img-fluid" style="height: 300px; object-fit: cover"
                    src="{{ asset('assets/public/img/about-3.png') }}" alt="">
            </div>
            <div class="col-lg-3 wow fadeInUp my-3" data-wow-delay="0.1s">
                <div class="h-100">
                    <p class="text-primary fs-5">Notre Processus d'intervention</p>
                    <p>
                        Basée sur un ensemble de cinq valeurs et une charte pour le développement durable et la diversité,
                        notre approche dans toutes nos activités suit un cycle en sept étapes qui permet à nos RESULTANTS de
                        circonscrire entièrement l'objet et l'objectif de nos missions pour une solution optimale.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp my-4" data-wow-delay="0.1s">
                <img class="img-fluid" style="height: 300px; object-fit: cover"
                    src="{{ asset('assets/public/img/about-4.png') }}" alt="">
            </div>
            <div class="col-lg-3 wow fadeInUp my-3" data-wow-delay="0.1s">
                <div class="h-100">
                    <p class="text-primary fs-5">Nos valeurs</p>
                    <p>
                        Nous nous engageons à prendre des actions pour contribuer au Développement Soutenu et Durable de nos
                        Clients et des Communautés dans lesquelles se déroulent nos missions.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Que faisons-nous ?</h1>
                <p class="text-primary fs-5 mb-5">
                    Nous développons vos métiers
                </p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Conseils en Investissement.</h5>
                            <span>
                                Nous accompagnons nos partenaires pour leur décision d'investissement à travers des analyses
                                sectorielles et benchmarking, des enquêtes et sondages, des études d'opportunités, des
                                simulations financières afin d'optimiser leurs rendements pérenniser leur activités.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-6.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Management et Compétivité</h5>
                            <span>
                                Nous analysons ensemble votre organisation, diagnostiquons et proposons en collaboration
                                avec vos équipes des recommandations pertinentes pour améliorer la performance de votre
                                structure.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-5.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Audit et Gouvernance</h5>
                            <span>
                                Bénéficiez de l'expertise de nos équipes pour l'évaluation du système de gouvernance et de
                                contrôle de votre société, des procédures, et réglementations qui affectent l'évolution de
                                votre entreprise afin de détecter ses dysfonctionnements et l'optimiser.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-4.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Recrutement et developpement du capital humain</h5>
                            <span>
                                Parce que les Hommes constituent la première ressource de votre entreprise, nous mettons à
                                votre disposition des outils adéquats pour améliorer les compétences et les performances de
                                votre équipe et faciliter l'atteinte de vos objectifs.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-3.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Amélioration du process de recutement</h5>
                            <span>
                                En tant que cabinet d'étude spécialisé dans divers domaines, dont le recrutement, KAPI
                                Consult se fait un devoir de proposer des prestations de qualité à des clients de plus en
                                plus exigeants C'est dans cet ordre d'idées que le projet KAPI Board Select (KBS) naît dans
                                le seul but d'optimiser les process de
                                recrutement pour des prestations de qualité optimale.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-8.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">En général</h5>
                            <span>
                                Nous contribuons au développement de nos clients en leur apportant des services
                                d'optimisation stratégique, technologique, industrielle et financière pour favoriser leur
                                pérennité et leur succès.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
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
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Nos Services</h1>
                <p class="text-primary fs-5 mb-5">Ce Que KBS Offre Comme Service</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5 h-100">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                        <h5 class="mb-3">Recrutement ciblét</h5>
                        <p>
                            Trouvez des talents exceptionnels pour des postes stratégiques grâce à notre approche de
                            recrutement ciblé, conçue pour répondre à vos besoins spécifiques en matière de recrutement de
                            cadres et hauts cadres.
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5 h-100">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                        <h5 class="mb-3">Analyse des besoins</h5>
                        <p>
                            Notre équipe expérimentée réalisera une analyse approfondie de vos besoins en recrutement, afin
                            de vous présenter des profils correspondant parfaitement à vos attentes et à la culture de votre
                            entreprise.
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5 h-100">
                        <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                        <h5 class="mb-3">Accès au réseau</h5>
                        <p>
                            Bénéficiez d'un accès exclusif à notre vaste réseau de professionnels qualifiés, vous permettant
                            de trouver rapidement et efficacement les candidats les mieux adaptés à vos besoins en
                            recrutement.
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5 h-100">
                        <img class="img-fluid mb-4" src="img/icon-5.png" alt="">
                        <h5 class="mb-3">Suivi personnalisé</h5>
                        <p>
                            Chaque entreprise bénéficie d'un suivi personnalisé tout au long du processus de recrutement,
                            garantissant une expérience fluide et une intégration réussie des nouveaux cadres au sein de
                            votre organisation.
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5 h-100">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                        <h5 class="mb-3">Expertise spécialisée</h5>
                        <p>
                            Profitez de l'expertise spécialisée de notre équipe de recrutement, qui possède une connaissance
                            approfondie du marché des cadres et hauts cadres, vous garantissant des résultats de qualité et
                            pertinents.
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5 h-100">
                        <img class="img-fluid mb-4" src="img/icon-8.png" alt="">
                        <h5 class="mb-3">Évaluation approfondie</h5>
                        <p>
                            Nous réalisons des évaluations approfondies des candidats potentiels, en nous assurant qu'ils
                            possèdent les compétences, l'expérience et la vision nécessaires pour répondre à vos exigences
                            en matière de recrutement.
                        </p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
