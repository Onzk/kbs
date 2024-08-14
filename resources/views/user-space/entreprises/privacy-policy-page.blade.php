@extends('user-space.layouts.base', ['user_space_title' => 'Politique de confidentialité'])

@section('user-space.base.body')
    @php($_user = Auth::guard('candidates')->user())
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3 class="text-primary">Politique de confidentailité</h3>
            <p class="text-subtitle text-muted">Voici notre politique de confidentialité.</p>
        </div>
        <div class="col-12">
            <div class="card h-100">
                <div class="card-header p-2 mb-2 bg-primary">
                    <span class="text-sm px-2 text-white">{{ config('app.name') }} - Politique de Confidentialité</span>
                </div>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <div class="form-control" style="font-size: 18px">
                            @php($text = \App\Models\Config::retreive('entreprise_privacy_policy'))
                            @if ($text)
                                <img src="{{ asset('assets/user-space/images/logo.png') }}"
                                    class="border rounded-lg float-left mr-2"
                                    style="object-fit: cover; width:150px; height: 150px" alt="" srcset="">
                                <p>
                                    {!! $text !!}
                                </p>
                            @else
                                <div
                                    class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4 my-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 60px" viewBox="0 0 24 24"
                                        fill="currentColor" class="mx-2">
                                        <path fill-rule="evenodd"
                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                    </svg>
                                    <br><br>
                                    {{ __('Document en cours de rédaction . . .') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
