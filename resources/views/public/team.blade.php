@extends('public.layout.base')

@section('public.base.title', 'Equipes')

@section('public.base.body')
    <div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown text-white">Equipe</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('public.home.index') }}">A
                                    Propos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Equipe</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid sideImage" src="{{ asset('assets/public/img/team.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="section md-padding">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Experts</h1>
                <p class="text-primary fs-5 mb-5">Nos Experts De Chez KAPI Consult</p>
            </div>
            <div class="row mx-4">
                @for ($i = 0; $i < 8; $i++)
                    @include('public.components.team')
                @endfor
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
