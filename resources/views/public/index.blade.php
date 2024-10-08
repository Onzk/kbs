@extends('public.layout.base')

@section('public.base.title', 'Accueil')

@section('public.base.body')
    <!-- Header Start -->
    <div class="container-fluid hero-header mb-5 px-0"
        style="background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('{{ asset('assets/public/img/hero-1.png') }}')">
        <div class="py-5 col" style="background-color: rgba(0, 0, 0, 0.70)">
            <div class="container py-5 col d-flex align-items-center justify-content-center" style="min-height: 90vh;">
                <div class="col-md-12 col-lg-8 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown text-white fw-bold">
                        Améliorez le potentiel de votre conseil d'administration
                    </h1>
                    <p class="animated slideInDown text-white mb-4" style="font-size: 18px">
                        Transformer la façon dont les entreprises et les dirigeants interagissent en tirant parti des
                        technologies avancées et en favorisant des relations humaines significatives.
                    </p>
                    <hr>
                    <div class="row justify-content-between text-white">
                        <p class="col-md-5 animated slideInDown" style="font-size: 14px">
                            Organisations à la recherche de membres de conseil d'administration ou de conseillers ?
                            <br>
                            <a href="{{ route('public.home.entreprises') }}"
                                class="btn btn-primary py-3 px-4 m-2 animated slideInDown">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="pb-1 mx-1" style="width:20px">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                </svg>
                                Entreprise
                            </a>
                        </p>
                        <p class="col-md-5 animated slideInDown" style="font-size: 14px">
                            Des dirigeants à la recherche de postes au sein d'un conseil d'administration ?
                            <br>
                            <a href="{{ route('public.home.candidates') }}"
                                class="btn btn-primary py-3 px-4 m-2 animated slideInDown">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="pb-1 mx-1" style="width:20px">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                </svg>
                                Candidat
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    @include('public.sections.about')
    <!-- About End -->

    <!-- Facts Start -->
    @include('public.sections.facts')
    <!-- Facts End -->

    @if (count($experts = \App\Models\Expert::all()))
        <!-- Team Start -->
        <div class="section md-padding">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">Experts</h1>
                    <p class="text-primary fs-5 mb-5">Nos Experts De Chez KAPI Consult</p>
                </div>
                <div class="row justify-content-center mx-4">
                    @foreach ($experts as $model)
                        @include('public.components.team')
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->
    @endif

    <!-- Service Start -->
    @include('public.sections.kbs-services')
    <!-- Service End -->

    <!-- Why Us Start -->
    @include('public.sections.kbs-why-us')
    <!-- Why Us End -->

    @if (count($faqs = \App\Models\Faq::allValids()))
        <!-- FAQs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">FAQs</h1>
                    <p class="text-primary fs-5 mb-5">Questions Fréquemment Posées</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="faqAccordion">
                            @php($i = 0)
                            @foreach ($faqs as $model)
                                @php($i += 1)
                                <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $i / 10 }}s">
                                    <h2 class="accordion-header" id="heading{{ $i }}">
                                        <button @class(["accordion-button" , "collapsed" => $i > 1]) type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $i }}" aria-expanded="{{ $i == 1 ? "true" : "false" }}"
                                            aria-controls="collapse{{ $i }}">
                                            {{ $model->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" @class(["accordion-collapse collapse", "show" => $i == 1])
                                    aria-labelledby="heading{{ $i }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-dark fw-bold px-4 pb-4 border shadow-lg">
                                            {{ $model->answer }}
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
    @endif

    <!-- Contact Start -->
    @include('public.sections.kapi-contact')
    <!-- Contact End -->
@endsection
