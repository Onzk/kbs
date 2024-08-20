@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Accueil</h3>
                <p class="text-subtitle text-muted">
                    Voici les détails professionnels vous concernant.
                </p>
            </div>
        </div>
    </div>
    @if (session()->has('success'))
        <div class="col-12">
            <div class="alert alert-success">
                <span class="fw-bold text-white">
                    <i data-feather="check" width="40"></i>
                    {{ __(session('success')) }}
                </span>
            </div>
        </div>
    @endif
    @if (session()->has('other-success'))
        <div class="col-12 mt-2">
            <div class="alert alert-success">
                <span class="fw-bold text-white">
                    <i data-feather="settings" width="40"></i>
                    {{ __(session('other-success')) }}
                </span>
            </div>
        </div>
    @endif
    <div class="col-12">
        @if ($_user->enabled)
            <span class="badge bg-success rounded text-xs fw-bold mb-3">
                COMPTE ACTIF
            </span>
        @else
            <span class="badge bg-danger rounded text-xs fw-bold mb-3">
                COMPTE INACTIF
            </span>
        @endif
    </div>

    <!-- Personnal Informations start -->
    <div class="col-12 mb-4">
        <div class="card border border-dark h-100">
            <div class="card-header">
                <h4
                    class="card-title alert alert-dark bg-primary border-bottom border-2 text-white d-flex justify-content-between align-items-center">
                    <span class="mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 30px" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        {{ __('Informations personnelles') }}
                    </span>
                    <a href="{{ route('candidate-space.configurations', ['config' => 'a-propos']) }}"
                        class="btn bg-white icon text-dark fw-bold d-flex justify-content-center align-items-center"
                        style="max-height: 38px">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>
                </h4>
            </div>
            <div class="card-body pb-2">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <p class="w-100">
                                <img src="{{ asset($_user->photo) }}" class="border w-100 rounded-lg"
                                    style="object-fit: cover; height:25vh" alt="" srcset="">
                            </p>
                        </div>
                        <div class="form-group">
                            <span class="badge bg-primary rounded p-2 w-100" wire:ignore>
                                @php($stars = $_user->stars())
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 1 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 1, 'p-0 m-0'])></i>
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 2 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 2, 'p-0 m-0'])></i>
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 3 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 3, 'p-0 m-0'])></i>
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 4 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 4, 'p-0 m-0'])></i>
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 5 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 5, 'p-0 m-0'])></i>
                            </span>
                            @if ($_user->default_comment)
                                <div style="max-height: 150px; overflow-y: auto"
                                    class="text-white hide-scrollbar bg-primary rounded p-2 my-2">
                                    <span class="fw-bold text-xs text-white">Avis de : {{ config('app.name') }}</span>
                                    <br>
                                    @include('user-space.components.stars', [
                                        'default' => 'white',
                                        'size' => 15,
                                        'stars' => $_user->default_rate,
                                    ])
                                    <br>
                                    {{ $_user->default_comment }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __('Nom') }}</label>
                                    <p class="form-control">
                                        {{ $_user->lastname }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __('Prénoms') }}</label>
                                    <p class="form-control">
                                        {{ $_user->firstname }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __("Domaine d'Expertise") }}</label>
                                    <p class="form-control">
                                        {{ $_user->domain }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __("Nombre d'années d'expérience") }}</label>
                                    <p class="form-control">
                                        {{ $_user->nbyear }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('A Propos') }}</label>
                            <p class="form-control" style="min-height: 185px">
                                {{ $_user->about ?? '-' }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col">
                            <div class="form-group">
                                <label>{{ __('Courriel') }}</label>
                                <p type="text" class="form-control">
                                    {{ $_user->email }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col">
                            <div class="form-group">
                                <label>{{ __('Téléphone') }}</label>
                                <p type="text" class="form-control">
                                    {{ $_user->tel }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col">
                            <div class="form-group">
                                <label>{{ __('Linkedin') }}</label>
                                <p type="text" class="form-control">
                                    {{ $_user->linkedin }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Personnal Informations end -->

    <!-- Education start -->
    <div class="col-12 mb-4">
        <div class="card border border-dark h-100">
            <div class="card-header">
                <h4
                    class="card-title alert alert-dark bg-primary border-bottom border-2 text-white d-flex justify-content-between align-items-center">
                    <span class="mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 30px"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        {{ __('Diplômes & Formations') }}
                    </span>
                    <a href="{{ route('candidate-space.configurations', ['config' => 'diplômes-et-certifications']) }}"
                        class="btn bg-white icon text-dark fw-bold d-flex justify-content-center align-items-center"
                        style="max-height: 38px">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>
                </h4>
            </div>
            <div class="card-body pb-2">
                <div class="row">
                    @if (count($_user->educations) == 0 and count($_user->other_educations) == 0)
                        <div class="col-lg-12 text-center mb-4">
                            <span class="fw-bold">
                                Aucun diplôme ou formation trouvé
                            </span>
                        </div>
                    @else
                        @foreach ($_user->educations as $model)
                            @include('user-space.candidates.modules.agreement')
                        @endforeach
                        @foreach ($_user->other_educations as $model)
                            @include('user-space.candidates.modules.other_agreement')
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Education end -->

    <!-- Professionnal experiences start -->
    <div class="col-12 mb-4">
        <div class="card border border-dark h-100">
            <div class="card-header">
                <h4
                    class="card-title alert alert-dark bg-primary border-bottom border-2 text-white d-flex justify-content-between align-items-center">
                    <span class="mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 30px"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        {{ __('Expériences professionnelles') }}
                    </span>
                    <a href="{{ route('candidate-space.configurations', ['config' => 'expériences-professionnelles']) }}"
                        class="btn bg-white icon text-dark fw-bold d-flex justify-content-center align-items-center"
                        style="max-height: 38px">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    @if ($_user->experience() == null)
                        <div class="col-lg-12 text-center mb-2">
                            <span class="fw-bold">
                                {{ __('Expériences professionnelles non renseignées') }}
                            </span>
                        </div>
                    @else
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>{{ __('Poste Actuel') }}</label>
                                <p class="form-control">
                                    {{ $_user->experience()?->actual_position ?? '-' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>{{ __('Entreprise Actuel') }}</label>
                                <p class="form-control">
                                    {{ $_user->experience()?->actual_entreprise ?? '-' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>{{ __("Années d'expérience totales") }}</label>
                                <p class="form-control">
                                    {{ $_user->nbyear ?? '-' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label
                                    class="alert alert-dark bg-dark text-white text-center fw-bold w-100 mb-0 rounded-none"
                                    for="full">{{ __('Descriptif des principales responsabilités et réalisations dans les postes précédents') }}
                                </label>
                                <div id="desc" class="form-control">
                                    {!! $_user->experience()?->description ?? '-' !!}
                                </div>
                            </div>
                        </div>
                        <label class="mb-1">{{ __("Compétences clés et domaines d'expertise") }}</label>
                        @if ($_user->skills() == [] and $_user->domains() == [])
                            <span class="fw-bold">
                                {{ __("Aucune compéntence ni domaine d'expertise trouvé") }}
                            </span>
                        @endif
                        @foreach ($_user->skills() as $model)
                            @include('user-space.candidates.modules.skill_domain')
                        @endforeach
                        @foreach ($_user->domains() as $model)
                            @include('user-space.candidates.modules.skill_domain')
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Professionnal experiences end -->

    <div class="col-12 mb-4">
        <div class="card border border-dark h-100">
            <div class="card-header">
                <h4
                    class="card-title alert alert-dark bg-primary border-bottom border-2 text-white d-flex justify-content-between align-items-center">
                    <span class="mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 30px"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        {{ __('Expériences en matière de gouvernance') }}
                    </span>
                    <a href="{{ route('candidate-space.configurations', ['config' => 'expériences-en-gouvernance']) }}"
                        class="btn bg-white icon text-dark fw-bold d-flex justify-content-center align-items-center"
                        style="max-height: 38px">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    @if ($_user->experience()?->governance_experience == null and $_user->experience()?->motivation == null)
                        <div class="col-lg-12 text-center mb-4">
                            <span class="fw-bold">
                                Aucune expérience en matière de gouvernance
                            </span>
                        </div>
                    @else
                        <div class="col-12">
                            <div class="form-group">
                                <label
                                    class="alert alert-dark bg-dark text-white text-center fw-bold w-100 mb-0 rounded-none"
                                    for="full">{{ __('Votre expérience en matière de gouvernance') }}
                                </label>
                                <div class="form-control">
                                    {!! $_user->experience()?->governance_experience ?? '-' !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label
                                    class="alert alert-dark bg-dark text-white text-center fw-bold w-100 mb-0 rounded-none"
                                    for="full">{{ __("Comment votre expérience et vos compétences vous permettraient-elles de contribuer au succès de l'entreprise ?") }}
                                </label>
                                <div class="form-control">
                                    {!! $_user->experience()?->motivation ?? '-' !!}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Documents start -->
    <div class="col-12 mb-4">
        <div class="card border border-dark h-100">
            <div class="card-header">
                <h4
                    class="card-title alert alert-dark bg-primary border-bottom border-2 text-white d-flex justify-content-between align-items-center">
                    <span class="mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 30px"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        {{ __('Pièces Jointes & Références') }}
                    </span>
                    <a href="{{ route('candidate-space.configurations', ['config' => 'documents-et-références']) }}"
                        class="btn bg-white icon text-dark fw-bold d-flex justify-content-center align-items-center"
                        style="max-height: 38px">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    @if ($_user->document == null)
                        <div class="col-lg-12 text-center mb-4">
                            <span class="fw-bold">
                                Aucune pièce jointe ni référence trouvée
                            </span>
                        </div>
                    @else
                        <div class="col-12">
                            <div class="form-group">
                                <label>{{ __('CV Détaillé') }}</label>
                                <div class="form-control p-2 pb-0">
                                    @include('user-space.candidates.modules.document', [
                                        'title' => 'CV',
                                        'url' => $_user->document->cv,
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex align-items-stretch">
                            <div class="form-group w-100">
                                <label>{{ __('Éventuelles références ou recommandations') }}</label>
                                <div class="form-control p-2 pb-0 d-flex align-items-stretch">
                                    @forelse ($_user->get_references() as $path)
                                        @include('user-space.candidates.modules.document', [
                                            'title' => str_replace(
                                                "storage/candidate/references/{$_user->id}/",
                                                '',
                                                $path),
                                            'url' => $path,
                                        ])
                                    @empty
                                        <span class="fw-bold py-2">
                                            Aucun document trouvé
                                        </span>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{ __('Des exemples de réalisations ou de projets passés') }}</label>
                                <div class="form-control p-2 pb-0">
                                    @forelse ($_user->get_realisations() as $path)
                                        @include('user-space.candidates.modules.document', [
                                            'title' => str_replace(
                                                "storage/candidate/realisations/{$_user->id}/",
                                                '',
                                                $path),
                                            'url' => $path,
                                        ])
                                    @empty
                                        <span class="fw-bold py-2">
                                            Aucun document trouvé
                                        </span>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{ __('Liens vers des articles, publications ou activités en ligne démontrant votre expertise') }}</label>
                                <div class="form-control p-2 pb-0">
                                    @forelse ($_user->get_links() as $link)
                                        @include('user-space.candidates.modules.link')
                                    @empty
                                        <span class="fw-bold py-2">
                                            Aucun lien trouvé
                                        </span>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Documents end -->


    <!-- Languages start -->
    <div class="col-12 mb-4">
        <div class="card border border-dark h-100">
            <div class="card-header">
                <h4
                    class="card-title alert alert-dark bg-primary border-bottom border-2 text-white d-flex justify-content-between align-items-center">
                    <span class="mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 30px"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        {{ __('Langues') }}
                    </span>
                    <a href="{{ route('candidate-space.configurations', ['config' => 'langues']) }}"
                        class="btn bg-white icon text-dark fw-bold d-flex justify-content-center align-items-center"
                        style="max-height: 38px">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>
                </h4>
            </div>
            <div class="card-body">
                <div class="row mt-2">
                    @forelse($_user->languages as $model)
                        @include('user-space.candidates.modules.language')
                    @empty
                        <div class="col-lg-12 text-center mb-4">
                            <span class="fw-bold">
                                Aucune langue trouvée
                            </span>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Languages end -->
</div>
