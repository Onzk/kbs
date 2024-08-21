@php($_user = Auth::guard('web')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <h3 class="text-primary">Tableau de Bord</h3>
        <p class="text-subtitle text-muted">Bon retour sur l'espace administrateur de {{ config('app.name') }}.</p>
    </div>
    <section class="section">
        <div class="page-title mt-4">
            <p class="text-muted fw-bold">Statistiques principales</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    Candidats
                                </h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{ count(\App\Models\Candidate::all()) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-bar-chart-2">
                                        <line x1="18" y1="20" x2="18" y2="10"></line>
                                        <line x1="12" y1="20" x2="12" y2="4"></line>
                                        <line x1="6" y1="20" x2="6" y2="14"></line>
                                    </svg>
                                    Entreprises
                                </h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{ count(\App\Models\Entreprise::all()) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    Contrats
                                </h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{ count(\App\Models\Contract::all()) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title mt-0">
            <p class="text-muted fw-bold">Statistiques du site</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-airplay">
                                        <path
                                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                        </path>
                                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                    </svg>
                                    Webinaires
                                </h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{ count(\App\Models\Webinary::all()) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user-check">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <polyline points="17 11 19 13 23 9"></polyline>
                                    </svg>
                                    Experts KAPI
                                </h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{ count(\App\Models\Expert::all()) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    </svg>
                                    Questions
                                </h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{ count(\App\Models\Question::all()) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash">
                                        <line x1="4" y1="9" x2="20" y2="9"></line>
                                        <line x1="4" y1="15" x2="20" y2="15"></line>
                                        <line x1="10" y1="3" x2="8" y2="21"></line>
                                        <line x1="16" y1="3" x2="14" y2="21"></line>
                                    </svg>
                                    Blog
                                </h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{ count(\App\Models\Question::all()) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title mt-0">
            <p class="text-muted fw-bold">Articles récents</p>
        </div>
        <div class="col-12">
            <div class="card w-100">
                <div class="card-header px-2 py-1 mb-4 w-100 text-right bg-primary">
                    <div class="row p-0 justify-content-between align-items-center">
                        <div class="col-md-6 text-left">
                            <span class="text-sm px-2 text-white">Webinaires récents</span>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{ route('admin-space.configurations', ['config' => 'webinaires']) }}"
                                class="btn py-1 icon icon-left btn-success">
                                Gérer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (count($webinaries = \App\Models\Webinary::latest()->take(10)->get()))
                        <div class="row m-1">
                            @foreach ($webinaries as $model)
                                @include('public.components.webinary')
                            @endforeach
                        </div>
                    @else
                        <div
                            class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height: 50px"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <br><br>
                            {{ __('Aucun webinaire trouvé') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card w-100">
                <div class="card-header px-2 py-1 mb-4 w-100 text-right bg-primary">
                    <div class="row p-0 justify-content-between align-items-center">
                        <div class="col-md-6 text-left">
                            <span class="text-sm px-2 text-white">Posts récents</span>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{ route('admin-space.configurations', ['config' => 'blog']) }}"
                                class="btn py-1 icon icon-left btn-success">
                                Gérer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (count($posts = \App\Models\Post::latest()->take(10)->get()))
                        <div class="row m-1">
                            @foreach ($posts as $model)
                                <div class="col-md-6 col-12">
                                    @include('public.components.post')
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div
                            class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height: 50px"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash">
                                <line x1="4" y1="9" x2="20" y2="9"></line>
                                <line x1="4" y1="15" x2="20" y2="15"></line>
                                <line x1="10" y1="3" x2="8" y2="21"></line>
                                <line x1="16" y1="3" x2="14" y2="21"></line>
                            </svg>
                            <br><br>
                            {{ __('Aucun post trouvé') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
