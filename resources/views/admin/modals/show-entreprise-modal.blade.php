<div class="modal fade text-left" id="showEntreprise" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-full" role="document">
        @if ($entreprise = \App\Models\Entreprise::withTrashed()->find($current_id))
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
                                                Profil de : <span class="fw-bold">{{ $entreprise->fullname() }}</span>
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
                                            {{ __("Informations de l'entreprise") }}
                                        </span>
                                    </span>
                                </div>
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p class="w-100">
                                                    <img src="{{ asset($entreprise->photo) }}"
                                                        class="border w-100 rounded-lg"
                                                        style="object-fit: cover; height:25vh" alt=""
                                                        srcset="">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __("Nom de l'entreprise") }}</label>
                                                        <p class="form-control">
                                                            {{ $entreprise->name }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('Adresse du Siège Social') }}</label>
                                                        <p class="form-control">
                                                            {{ $entreprise->hq_address }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __("Secteur d'Activité") }}</label>
                                                        <p class="form-control">
                                                            {{ $entreprise->sector }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('Site Web') }}</label>
                                                        <p class="form-control">
                                                            {{ $entreprise->website ?? '-' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('Adresse mail') }}</label>
                                                        <p class="form-control">
                                                            {{ $entreprise->email ?? '-' }}
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
                                                        {{ $entreprise->description ?? '-' }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __("Politique de diversité et d'Inclusion") }}</label>
                                                    <p class="form-control" style="min-height: 185px">
                                                        {{ $entreprise->diversity_policy ?? '-' }}
                                                    </p>
                                                </div>
                                            </div>
                                            @if ($entreprise->presentation_movie)
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>{{ __('Vidéo de Présentation') }}</label>
                                                        <video
                                                            src="{{ asset($entreprise->presentation_movie) . '?' . rand() }}"
                                                            class="p-1 form-control"
                                                            style="object-fit: cover; height: 350px; width: 100%;"
                                                            alt="" controls></video>
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
                                                    style="width: 25px" fill="currentColor" class="text-primary mr-2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                                </svg>
                                                {{ __('Réseaux Sociaux') }}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="card-body pb-2">
                                        <div class="row">
                                            @php($links = $entreprise->get_links())
                                            @if (count($links) == 0)
                                                <div class="col-lg-12 text-center mb-4">
                                                    <span class="fw-bold">
                                                        Aucun lien vers un réseau social trouvé
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
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                                </svg>
                                                {{ __('Profils Recherchés') }}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        @php($prositions = $entreprise->positions)
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
                                                        @include('admin.modules.position')
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-header m-2 p-2 bg-primary rounded-lg">
                                    <div class="d-lg-flex justify-content-between align-items-center">
                                        <div class="p-2">
                                            <span class="text-sm p-2 mt-0 text-white">
                                                Profil de : <span class="fw-bold">{{ $entreprise->fullname() }}</span>
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
