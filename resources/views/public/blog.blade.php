@extends('public.layout.base')

@section('public.base.title', 'Blog')

@section('public.base.body')
    <div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown text-white">Blog</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('public.home.index') }}">Médias &
                                    Nouvelles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Blog
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid sideImage" src="{{ asset('assets/public/img/blog.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="webinaire" class="section md-padding">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Blog</h1>
                <p class="text-primary fs-5 mb-5">Nos Articles Les Plus Récents</p>
            </div>
            <div class="row col-md-8 mx-auto">
                @forelse (\App\Models\Post::all()->reverse() as $model)
                    @include('public.components.post')
                @empty
                    <span class="text-center fw-bold text-dark my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height: 50px;" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-hash">
                            <line x1="4" y1="9" x2="20" y2="9"></line>
                            <line x1="4" y1="15" x2="20" y2="15"></line>
                            <line x1="10" y1="3" x2="8" y2="21"></line>
                            <line x1="16" y1="3" x2="14" y2="21"></line>
                        </svg>
                        <br><br>
                        {{ __('Aucun article enregistré pour le moment.') }}
                    </span>
                @endforelse
            </div>
        </div>
    </div>
@endsection
