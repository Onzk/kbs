@extends('public.layout.base')

@section('public.base.title', 'FAQs')

@section('public.base.body')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Foire Aux Questions</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('public.home.index') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 10s;" src="{{ asset('assets/public/img/faqs.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- FAQs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">FAQs</h1>
                <p class="text-primary fs-5 mb-5">Foire Aux Questions</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="accordionExample">
                        @php($i = 0)
                        @foreach ([
            'Quand recruter des cadres ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Pourquoi recruter des cadres en Afrique ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Quel est notre taux de placement ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Quel est le temps d\'insertion par poste ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Combien d\'entreprises clientes KBS possède ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Quelles sont les références de KBS ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Y a t-il des profils publics ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Comment gérer les conflits d\'intérêts ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Quelle est la rémunération et la durée des positions sur la plateforme ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Comment se présente la plateforme ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Quels les délais ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Quelle est la durée de l\'accord ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
            'Quelle est l\'adresse de la société ?' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis cumque iste quam.',
        ] as $title => $body)
                            @php($i += 1)
                            <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $i / 10 }}s">
                                <h2 class="accordion-header" id="heading{{ $i }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $i }}" aria-expanded="false"
                                        aria-controls="collapse{{ $i }}">
                                        {{ $title }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $i }}" class="accordion-collapse collapse show"
                                    aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $body }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->
@endsection
