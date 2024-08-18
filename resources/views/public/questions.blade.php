@extends('public.layout.base')

@section('public.base.title', 'Questions Réponses')

@section('public.base.body')
    <div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown text-white">Questions & Réponses</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('public.home.index') }}">Médias &
                                    Nouvelles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Questions & Réponses</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid sideImage" src="{{ asset('assets/public/img/questions.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    @livewire('public.question-answer')
@endsection
