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
            <div class="row justify-content-center mx-4">
                @forelse (\App\Models\Expert::all() as $model)
                    @include('public.components.team')
                @empty
                    <span class="text-center fw-bold text-dark my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height: 50px;" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-check">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <polyline points="17 11 19 13 23 9"></polyline>
                        </svg>
                        <br><br>
                        {{ __('Aucun Expert enregistré pour le moment.') }}
                    </span>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
