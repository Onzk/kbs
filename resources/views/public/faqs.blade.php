@extends('public.layout.base')

@section('public.base.title', 'FAQs')

@section('public.base.body')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown text-white">Foire Aux Questions</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-white"
                                    href="{{ route('public.home.index') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid sideImage" src="{{ asset('assets/public/img/faqs.png') }}" alt="">
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
                <p class="text-primary fs-5 mb-5">Questions Fréquemment Posées</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion text-center" id="faqAccordion">
                        @php($i = 0)
                        @forelse (\App\Models\Faq::allValids() as $model)
                            @php($i += 1)
                            <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $i / 10 }}s">
                                <h2 class="accordion-header" id="heading{{ $i }}">
                                    <button @class(['accordion-button j-text', 'collapsed' => $i > 1]) type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $i }}"
                                        aria-expanded="{{ $i == 1 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $i }}">
                                        {{ $model->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $i }}" @class(['accordion-collapse collapse', 'show' => $i == 1])
                                    aria-labelledby="heading{{ $i }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body j-text text-dark fw-bold px-4 pb-4 border shadow-lg">
                                        {{ $model->answer }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <span class="text-center fw-bold text-dark my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height: 50px;"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                <br><br>
                                {{ __('Aucun FAQ pour le moment.') }}
                            </span>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->
@endsection
