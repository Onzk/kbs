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
            <div class="row justify-content-center mx-4">
                <div class="card-group">
                    @forelse (\App\Models\Webinary::all() as $model)
                        @include('public.components.webinary')
                    @empty
                        <span class="text-center fw-bold text-dark my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height: 50px;" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-video">
                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                            </svg>
                            <br><br>
                            {{ __('Aucun Webinaire enregistré pour le moment.') }}
                        </span>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Webinaire End -->
@endsection
