@extends('public.layout.base')

@section('public.base.title', 'Equipes')

@section('public.base.body')
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Equipe</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('public.home.index') }}">A Propos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Equipes</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 10s;"
                        src="{{ asset('assets/public/img/team.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Team Start -->
    <div  class="section md-padding">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Experts</h1>
                <p class="text-primary fs-5 mb-5">Nos Experts De Chez KAPI Consult</p>
            </div>
            <div class="row mx-4">
                @for ($i = 0; $i < 8; $i++)
                    <div class=" col-md-4 col-12 wow fadeInUp mb-4" data-wow-delay="0.2s">
                        <div class="card border-light shadow-md hover-scale" style="border-radius: 0px;">
                            <img src="{{ asset('assets/public/img/about-1.png') }}" class="card-img-top"
                                style="height: 250px; object-fit: cover" alt="team">
                            <div class="card-body">
                                <h5 class="card-title text-center mt-4">
                                    <span class="fw-bold text-primary">DEGBE</span>
                                    Frédéric Junior
                                </h5>
                                <p class="card-text text-center">Ingénieur Système Réseau</p>
                            </div>
                            <div class="card-body d-inline-flex align-items-center justify-content-center">
                                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
