@extends('public.layout.base')

@section('public.base.title', 'Administrateurs Indépendants')

@section('public.base.body')
    <!-- Header Start -->
    <div class="container-fluid hero-header mb-5 px-0"
        style="background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('assets/public/img/executives.png') }}');">
        <div class="py-5 col" style="background-color: rgba(0, 0, 0, 0.50)">
            <div class="container py-5 col d-flex align-items-center justify-content-center" style="min-height: 700px;">
                <div class="col-md-12 col-lg-8 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown text-white fw-bold">
                        Informez le monde de vos compétences !
                    </h1>
                    <p class="animated slideInDown">
                        Bienvenue sur la plateforme de recrutement d'administrateurs indépendants
                        et membres de conseil d'administration d'entreprises.
                    </p>
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
                        <a class="btn btn-primary py-3 px-4" href="{{ route('public.home.kapi-presentation') }}">Lire
                            plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    @include('public.sections.kbs-why-us')
    <!-- Features End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <h1 class="display-6">Enregistrez-vous dès maintenant !</h1>
                    <p class="text-primary fs-5 mb-0">
                        Remplissez le formulaire pour être visible aux yeux de toutes les entreprises qui nous font
                        confiance !
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/public/img/handshake.png') }}" class="col-lg-12 h-100 col-md-6 col-12 wow" style="object-fit: cover" alt="">
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with
                        Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a
                            href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Features Start -->
    @include('public.sections.facts')
    <!-- Features End -->
@endsection
