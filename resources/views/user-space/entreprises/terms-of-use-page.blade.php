@extends('user-space.layouts.base', ['is_executive' => true, 'user_space_title' => 'Politique de confidentialité'])

@section('user-space.base.body')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3 class="text-primary">Conditions d'utilisation</h3>
            <p class="text-subtitle text-muted">Voici nos conditions pour l'utilisation de KBS.</p>
        </div>
        <div class="col-12">
            <div class="card h-100">
                <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                    <h4 class="card-title text-white">{{ config('app.name') }} - Conditions d'utilisation</h4>
                </div>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <div class="form-control" id="firstname" style="font-size: 18px">
                            <img src="{{ asset('assets/user-space/images/logo.png') }}"
                            class="border rounded-lg float-left mr-2" style="object-fit: cover; width:150px; height: 150px" alt=""
                            srcset="">
                            @for ($i = 0; $i < 8; $i++)
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                            </p>
                            @endfor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
