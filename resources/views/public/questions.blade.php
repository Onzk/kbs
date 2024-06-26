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

    <!-- Questions Start -->
    <div class="container py-5">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-6">Questions</h1>
                <p class="text-primary fs-5 mb-0">Des incompréhensions ou des inquiétudes, nous sommes à votre écoute.
                </p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-4" href="#poser-une-question-section">Poser une question</a>
            </div>
        </div>
        <div class="row mb-5 mx-1 wow fadeInUp">
            @for ($i = 0; $i < 8; $i++)
                @include('public.components.question')
            @endfor
        </div>
        <div id="poser-une-question-section"></div>
        <div class="accordion" id="poser-une-question">
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="accordion-header" id="headingQuestion">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseQuestion" aria-expanded="true" aria-controls="collapseQuestion">
                        Poser une question
                    </button>
                </h2>
                <div id="collapseQuestion" class="accordion-collapse collapse show" aria-labelledby="headingQuestion"
                    data-bs-parent="#poser-une-question">
                    <div class="accordion-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Votre nom et prénoms">
                                        <label for="name">Votre nom et prénoms</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Votre courriel">
                                        <label for="email">Votre courriel</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Résumé de la question">
                                        <label for="subject">Résumé de la question</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Détails supplémentaires" id="message" style="height: 100px"></textarea>
                                        <label for="message">Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-4" type="submit">Poster</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Questions End -->
@endsection
