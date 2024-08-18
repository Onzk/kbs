@extends('public.layout.base')

@section('public.base.title', 'Blog')

@section('public.base.body')
    <style>
        .ql-size-huge {
            font-size: 2.5em !important;
        }

        .ql-size-large {
            font-size: 1.6em !important;
        }

        .ql-size-normal {
            font-size: 1.2em !important;
        }

        .ql-size-small {
            font-size: 1em !important;
        }
        #text {
            font-size: 1em !important;
        }
    </style>
    <div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown text-white">Blog</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a class="text-white" href="{{ route('public.home.index') }}">
                                    Médias & Nouvelles
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="text-white" href="{{ route('public.media-news.blog') }}">
                                    Blog
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $post->title }}
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
    <div class="section md-padding">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <p class="text-white shadow-lg bg-primary text-center fw-bold alert alert-primary fs-5 mt-5 "
                    style="font-size: 28px !important; border-radius: 16px;">
                    {{ $post->title }}
                </p>
                <div class="card text-start px-0 wow border-0 fadeInUp mb-4 rounded" style="overflow: hidden"
                    data-wow-delay="0.2s">
                    <img src="{{ asset($post->photo) . '?' . rand() }}" style="height: 550px; object-fit: cover"
                        class="card-img-top rounded sideImage" alt="">
                    <div class="card-body mt-4" style="line-height: 32px;">
                        {!! $post->description !!}
                    </div>
                    <div class="card-footer bg-primary text-white fw-bold">
                        {{ $post->created_at->diffForHumans() }}
                    </div>
                </div>
                @livewire("public.blog-comment", ["post" => $post])
            </div>
        </div>
    </div>
@endsection
