@php($_user = Auth::guard('entreprises')->user())
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
    <div class="col-12">
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
                        {{ __('Informations') }}
                    </span>
                    <a href="{{ route('entreprise-space.configurations', ['config' => 'a-propos']) }}"
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="w-100">
                                <img src="{{ asset($_user->photo) }}" class="border w-100 rounded-lg"
                                    style="object-fit: cover; height:25vh" alt="" srcset="">
                            </p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __("Nom de l'entreprise") }}</label>
                                    <p class="form-control">
                                        {{ $_user->name }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __('Adresse du Siège Social') }}</label>
                                    <p class="form-control">
                                        {{ $_user->hq_address }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __("Secteur d'Activité") }}</label>
                                    <p class="form-control">
                                        {{ $_user->sector }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __('Site Web') }}</label>
                                    <p class="form-control">
                                        {{ $_user->website ?? '-' }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>{{ __('Adresse mail') }}</label>
                                    <p class="form-control">
                                        {{ $_user->email ?? '-' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('A Propos') }}</label>
                                <p class="form-control" style="min-height: 185px">
                                    {{ $_user->description ?? '-' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __("Politique de diversité et d'Inclusion") }}</label>
                                <p class="form-control" style="min-height: 185px">
                                    {{ $_user->diversity_policy ?? '-' }}
                                </p>
                            </div>
                        </div>
                        @if ($_user->presentation_movie)
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>{{ __('Vidéo de Présentation') }}</label>
                                    <video src="{{ asset($_user->presentation_movie) . '?' . rand() }}"
                                        class="p-1 form-control" style="object-fit: cover; height: 350px; width: 100%;"
                                        alt="" controls></video>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Personnal Informations end -->

    <!-- Links start -->
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
                        {{ __('Réseaux Sociaux') }}
                    </span>
                    <a href="{{ route('entreprise-space.configurations', ['config' => 'a-propos']) }}"
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
                    @php($links = $_user->get_links())
                    @if (count($links) == 0)
                        <div class="col-lg-12 text-center mb-4">
                            <span class="fw-bold">
                                Aucun lien vers un réseau social trouvée
                            </span>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{ __('Liens vers les réseaux sociaux') }}</label>
                                <div class="row">
                                    @foreach ($links as $link)
                                        <div class="col-md-6">
                                            <div class="form-control p-2 pb-0">
                                                @include('user-space.entreprises.modules.link')
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Links end -->

    <!-- Profiles start -->
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
                        {{ __('Profils Recherchés') }}
                    </span>
                    <a href="{{ route('entreprise-space.configurations', ['config' => 'profils-recherchés']) }}"
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
                @php($prositions = $_user->positions)
                @if (count($prositions) == 0)
                    <div class="col-lg-12 text-center mb-4">
                        <span class="fw-bold">
                            Aucun profil recherché trouvée
                        </span>
                    </div>
                @else
                    <div class="row w-100">
                        @foreach ($prositions as $position)
                            <div class="col-md-4 col-12">
                                @include('user-space.entreprises.modules.position', [
                                    'out' => true,
                                    'selected' => false,
                                ])
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Profiles end -->
</div>
