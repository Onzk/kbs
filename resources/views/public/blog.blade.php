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
                <p class="text-primary fs-5 mb-5">Nos Posts Les Plus Récents</p>
            </div>
            <div class="row col-md-8 mx-auto">
                @for ($i = 0; $i < 3; $i++)
                    <div class="card text-start px-0 wow fadeInUp mb-4" data-wow-delay="0.2s">
                        <div class="card-header bg-primary text-white fw-bold">Il y a 2 jours</div>
                        <img src="{{ asset('assets/public/img/blog.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Déploiement d'un nouveau service</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur id, odit doloremque, natus
                                pariatur voluptatum similique aperiam quibusdam possimus nobis a rerum dicta atque. Ipsum
                                molestiae rerum numquam esse maxime!
                            </p>
                            <a href="#" class="btn btn-primary">Lire</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 commentaires
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
