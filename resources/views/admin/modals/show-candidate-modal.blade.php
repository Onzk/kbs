<div class="modal fade text-left" id="showCandidate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-full" role="document">
        @if ($candidate = \App\Models\Candidate::withTrashed()->find($current_id))
            <div wire:loading.remove @class(['modal-content border-top rounded-lg border-primary']) style="border-width: 8px !important">
                <div class="modal-header bg-white">
                    <h4 class="modal-title text-dark" id="myModalLabel33">
                        {{ __('Détails') }}
                    </h4>
                    <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="text-dark">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="card h-100 border w-100">
                                <div class="card-header m-2 p-2 bg-primary rounded-lg">
                                    <div
                                        class="d-lg-flex justify-content-between justify-content-center align-items-center">
                                        <div class="p-2">
                                            <span class="text-sm p-2 mt-0 text-white">
                                                Profil de : <span class="fw-bold">{{ $candidate->fullname() }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <span
                                        class="alert mb-1 alert-dark bg-white border-bottom border-2 text-dark d-flex justify-content-between align-items-center">
                                        <span class="fw-bold text-sm d-flex justify-content-between align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                style="width: 25px" fill="currentColor" class="text-primary mr-2">
                                                <path fill-rule="evenodd"
                                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{ __('Informations du candidat') }}
                                        </span>
                                    </span>
                                </div>
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-3 col-md-12">
                                            <div class="form-group">
                                                <p class="w-100">
                                                    <img src="{{ asset($candidate->photo) }}"
                                                        class="border w-100 rounded-lg"
                                                        style="object-fit: cover; height:25vh" alt=""
                                                            srcset="">
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <span class="badge bg-primary rounded p-2 w-100">
                                                    <span class="text-warning mr-2">
                                                        {{ $candidate->rate() }}
                                                    </span>
                                                    @include('user-space.components.stars', [
                                                        'default' => 'white',
                                                        'size' => 15,
                                                        'stars' => $candidate->stars(),
                                                    ])
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-9 col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label>{{ __('Nom') }}</label>
                                                            <p class="form-control">
                                                                {{ $candidate->lastname }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label>{{ __('Prénoms') }}</label>
                                                            <p class="form-control">
                                                                {{ $candidate->firstname }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label>{{ __("Domaine d'Expertise") }}</label>
                                                            <p class="form-control">
                                                                {{ $candidate->domain }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __("Nombre d'années d'expérience") }}</label>
                                                                <p class="form-control">
                                                                    {{ $candidate->nbyear }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __("Pays d'Origine") }}</label>
                                                                <p class="form-control">
                                                                    {{ $candidate->country }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('A Propos') }}</label>
                                                        <p class="form-control" style="min-height: 260px">
                                                            {{ $candidate->about ?? '-' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col">
                                                        <div class="form-group">
                                                            <label>{{ __('Courriel') }}</label>
                                                            <p type="text" class="form-control">
                                                                {{ $candidate->email }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col">
                                                        <div class="form-group">
                                                            <label>{{ __('Téléphone') }}</label>
                                                            <p type="text" class="form-control">
                                                                {{ $candidate->tel }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col">
                                                        <div class="form-group">
                                                            <label>{{ __('Linkedin') }}</label>
                                                            <p type="text" class="form-control">
                                                                {{ $candidate->linkedin }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="divider" />
                                <div>
                                    <div class="card-header">
                                        <span
                                            class="alert mb-1 alert-dark bg-white border-bottom border-2 text-dark d-flex justify-content-between align-items-center">
                                            <span
                                                class="fw-bold text-sm d-flex justify-content-between align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    style="width: 25px" fill="currentColor" class="text-primary mr-2">
                                                    <path
                                                        d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                                    <path
                                                        d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                                    <path
                                                        d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                                                </svg>
                                                {{ __('Diplômes & Formations') }}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="card-body pb-2">
                                        <div class="row">
                                            @if (count($candidate->educations) == 0 and count($candidate->other_educations) == 0)
                                                <div class="col-lg-12 text-center mb-4">
                                                    <span class="fw-bold">
                                                        Aucun diplôme ou formation trouvé
                                                    </span>
                                                </div>
                                            @else
                                                @foreach ($candidate->educations as $model)
                                                    @include('user-space.candidates.modules.agreement')
                                                @endforeach
                                                @foreach ($candidate->other_educations as $model)
                                                    @include('user-space.candidates.modules.other_agreement')
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="divider" />
                                <div>
                                    <div class="card-header">
                                        <span
                                            class="alert mb-1 alert-dark bg-white border-bottom border-2 text-dark d-flex justify-content-between align-items-center">
                                            <span
                                                class="fw-bold text-sm d-flex justify-content-between align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    style="width: 25px" fill="currentColor" class="text-primary mr-2">
                                                    <path fill-rule="evenodd"
                                                        d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                                        clip-rule="evenodd" />
                                                    <path
                                                        d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                                                </svg>
                                                {{ __('Expériences professionnelles') }}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @if ($candidate->experience() == null)
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
                                                            {{ $candidate->experience()?->actual_position ?? '-' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('Entreprise Actuel') }}</label>
                                                        <p class="form-control">
                                                            {{ $candidate->experience()?->actual_entreprise ?? '-' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __("Années d'expérience totales") }}</label>
                                                        <p class="form-control">
                                                            {{ $candidate->nbyear ?? '-' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label
                                                            class="alert alert-dark bg-dark text-white text-center fw-bold w-100 mb-0 rounded-none"
                                                            for="full">{{ __('Descriptif des principales responsabilités et réalisations dans les postes précédents') }}
                                                        </label>
                                                        <p id="desc" class="form-control">
                                                            {!! $candidate->experience()?->description ?? '-' !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <label
                                                    class="mb-1">{{ __("Compétences clés et domaines d'expertise") }}</label>
                                                @if ($candidate->skills() == [] and $candidate->domains() == [])
                                                    <span class="fw-bold">
                                                        {{ __("Aucune compéntence ni domaine d'expertise trouvé") }}
                                                    </span>
                                                @endif
                                                @foreach ($candidate->skills() as $model)
                                                    @include('user-space.candidates.modules.skill_domain')
                                                @endforeach
                                                @foreach ($candidate->domains() as $model)
                                                    @include('user-space.candidates.modules.skill_domain')
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="divider" />
                                <div>
                                    <div class="card-header">
                                        <span
                                            class="alert mb-1 alert-dark bg-white border-bottom border-2 text-dark d-flex justify-content-between align-items-center">
                                            <span
                                                class="fw-bold text-sm d-flex justify-content-between align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    style="width: 25px" fill="currentColor"
                                                    class="text-primary mr-2">
                                                    <path
                                                        d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z" />
                                                    <path
                                                        d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z" />
                                                    <path
                                                        d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z" />
                                                </svg>
                                                {{ __('Expériences en matière de gouvernance') }}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @if ($candidate->experience()?->governance_experience == null and $candidate->experience()?->motivation == null)
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
                                                        <p class="form-control">
                                                            {!! $candidate->experience()?->governance_experience ?? '-' !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label
                                                            class="alert alert-dark bg-dark text-white text-center fw-bold w-100 mb-0 rounded-none"
                                                            for="full">{{ __("Comment votre expérience et vos compétences vous permettraient-elles de contribuer au succès de l'entreprise ?") }}
                                                        </label>
                                                        <p class="form-control">
                                                            {!! $candidate->experience()?->motivation ?? '-' !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="divider" />
                                <div>
                                    <div class="card-header">
                                        <span
                                            class="alert mb-1 alert-dark bg-white border-bottom border-2 text-dark d-flex justify-content-between align-items-center">
                                            <span
                                                class="fw-bold text-sm d-flex justify-content-between align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    style="width: 25px" fill="currentColor"
                                                    class="text-primary mr-2">
                                                    <path
                                                        d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                                    <path
                                                        d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                                </svg>
                                                {{ __('Pièces Jointes & Références') }}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @if ($candidate->document == null)
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
                                                            @include(
                                                                'user-space.candidates.modules.document',
                                                                [
                                                                    'title' => 'CV',
                                                                    'url' => $candidate->document->cv,
                                                                ]
                                                            )
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex align-items-stretch">
                                                    <div class="form-group w-100">
                                                        <label>{{ __('Éventuelles références ou recommandations') }}</label>
                                                        <div class="form-control p-2 pb-0 d-flex align-items-stretch">
                                                            @forelse ($candidate->get_references() as $path)
                                                                @include(
                                                                    'user-space.candidates.modules.document',
                                                                    [
                                                                        'title' => str_replace(
                                                                            "storage/candidate/references/{$candidate->id}/",
                                                                            '',
                                                                            $path),
                                                                        'url' => $path,
                                                                    ]
                                                                )
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
                                                            @forelse ($candidate->get_realisations() as $path)
                                                                @include(
                                                                    'user-space.candidates.modules.document',
                                                                    [
                                                                        'title' => str_replace(
                                                                            "storage/candidate/realisations/{$candidate->id}/",
                                                                            '',
                                                                            $path),
                                                                        'url' => $path,
                                                                    ]
                                                                )
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
                                                            @forelse ($candidate->get_links() as $link)
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
                                <hr class="divider" />
                                <div>
                                    <div class="card-header">
                                        <span
                                            class="alert mb-1 alert-dark bg-white border-bottom border-2 text-dark d-flex justify-content-between align-items-center">
                                            <span
                                                class="fw-bold text-sm d-flex justify-content-between align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    style="width: 25px" fill="currentColor"
                                                    class="text-primary mr-2">
                                                    <path
                                                        d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                                                </svg>
                                                {{ __('Langues') }}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mt-2">
                                            @forelse($candidate->languages as $model)
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
                                <hr class="divider" />
                                <div>
                                    @php($contracts = $candidate->marked_contracts())
                                    <div class="card-header">
                                        <span
                                            class="alert mb-1 alert-dark bg-white border-bottom border-2 text-dark d-flex justify-content-between align-items-center">
                                            <span
                                                class="fw-bold text-sm d-flex justify-content-between align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    style="width: 25px" fill="currentColor"
                                                    class="text-primary mr-2">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                {{ __('Notes & Avis') }}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="card-body pt-3 pb-0">
                                        <div class="row">
                                            @forelse ($contracts as $model)
                                                @include('user-space.candidates.modules.review')
                                            @empty
                                                <div
                                                    class="col-12 pb-4 text-center d-block justify-content-center align-items-center">
                                                    <span
                                                        class="fw-bold">{{ __('Aucune note ni avis pour le moment') }}</span>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header m-2 p-2 bg-primary rounded-lg">
                                    <div class="d-lg-flex justify-content-between align-items-center">
                                        <div class="p-2">
                                            <span class="text-sm p-2 mt-0 text-white">
                                                Profil de : <span class="fw-bold">{{ $candidate->fullname() }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" aria-label="Close"
                            class="btn btn-light-secondary">
                            <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Femer</span>
                        </button>
                    </div>
                </div>
            </div>
            <div wire:loading @class(['modal-content border-top rounded-lg border-primary']) style="border-width: 8px !important">
                <div class="border-0 rounded text-center py-4" style="height: 150px">
                    <div class="spinner-border spinner-border-sm text-primary" style="margin-top:50px">
                    </div>
                </div>
            </div>
        @else
            <div wire:loading @class(['modal-content border-top rounded-lg border-primary']) style="border-width: 8px !important">
                <div class="border-0 rounded text-center py-4" style="height: 150px">
                    <div class="spinner-border spinner-border-sm text-primary" style="margin-top:50px">
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
