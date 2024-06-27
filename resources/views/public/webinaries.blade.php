@extends('public.layout.base')

@section('public.base.title', 'Webinaires')

@section('public.base.body')
    <div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown text-white">Webinaires</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('public.home.index') }}">Médias &
                                    Nouvelles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Webinaires</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid sideImage" src="{{ asset('assets/public/img/webinaires.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Webinaire Start -->
    <div id="webinaire" class="section md-padding">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Webinaires</h1>
                <p class="text-primary fs-5 mb-5">Nos Webinaires Les Plus Récents</p>
            </div>
            <div class="row mx-4">
                <div class="card-group">
                    @for ($i = 0; $i < 3; $i++)
                        @include('public.components.webinary')
                    @endfor
                </div>
                <div class="card-group">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="card hover-scale wow fadeInUp mb-4" data-wow-delay="0.2s">
                            <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/1La4QzGeaaQ" width="100%" height="300px"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Présentation de KBS - <span class="fw-bold text-primary"
                                        style="font-size: 16px">24 Juin 2024 11H00</span></h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer...</p>
                                <p class="card-text text-primary link">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="text-primary"
                                            style="width: 20px">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                        </svg>
                                        S'inscrire
                                    </a>
                                </p>
                            </div>
                            <div class="card-footer bg-primary">
                                <small class="text-white">Il y a 10min</small>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <!-- Webinaire End -->
@endsection
