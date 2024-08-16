@php($_user = Auth::guard('entreprises')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-8 order-md-1 order-last">
                <h3 class="text-primary">Profils Recherchés</h3>
                <p class="text-subtitle text-muted">
                    {{ __('Renseignez des informations sur les profils d’administrateurs recherché.') }}.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card w-100">
            <div class="card-header px-2 py-1 mb-4 w-100 text-right bg-primary">
                <div class="row p-0 justify-content-between align-items-center">
                    <div class="col-md-6 text-left">
                        <span class="text-sm px-2 text-white">Profils Recherchés</span>
                    </div>
                    <div class="col-md-4 text-right">
                        <button type="btn" data-toggle="modal" data-target="#addAv"
                            class="btn pt-2 icon icon-left btn-success">
                            <span wire:ignore>
                                <i data-feather="plus" class="text-white" width="20" class="mb-1"></i>
                            </span>
                            Ajouter
                        </button>
                        @include('user-space.entreprises.modals.add-profil-modal')
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (count($profils = $_user->positions ?? []))
                    <form wire:submit="updateProfil" class="row m-1">
                        @for ($i = 0; $i < count($profils); $i++)
                            <div class="col-md-6 col-12">
                                @php($to_remove = str_contains($profil_state['profil_remove'], $profils[$i]->id))
                                <div class="border rounded shadow-md p-3 pt-4 mb-3" @style(['position: relative', 'background:#FAFAFA !important' => $to_remove])>
                                    <label for="trashprofil{{ $i }}"
                                        wire:click.prevent="toggleDelete('{{ $profils[$i]->id }}', 'profil_state', 'profil_remove')"
                                        style="position: absolute; top: 0px; right: 0px;" @class([
                                            'btn m-1 mt-2 d-flex justify-content-center align-items-center float-right fw-bold border-0 btn-sm icon',
                                            'btn-danger' => $to_remove,
                                        ])>
                                        <input type="checkbox" id="trashprofil{{ $i }}"
                                            style="pointer-events: none" @class([
                                                'form-check-input form-check-sm form-check-danger mr-1',
                                                'bg-danger border-0' => $to_remove,
                                            ])
                                            @checked($to_remove)>
                                        <span>
                                            supprimer
                                        </span>
                                    </label>
                                    <div class="py-3 px-2">
                                        <div class="form-group">
                                            <label for="title">
                                                {{ __('Intitulé du Poste') }}
                                            </label>
                                            <input id="title" type="text" required min="2"
                                                wire:model="profil_state.profil.{{ $i }}.title" placeholder="{{ __('Intitulé du Poste') }}"
                                                required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">
                                                {{ __('Description du profil (missions, responsabilités, etc...)') }}
                                            </label>
                                            <textarea id="description" type="text" required min="4" rows="6"
                                                wire:model="profil_state.profil.{{ $i }}.description"
                                                placeholder="{{ __('Description du profil (missions, responsabilités, etc...)') }}" required class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="skills">
                                                {{ __('Description des compétences & expériences requises') }}
                                            </label>
                                            <textarea id="skills" type="text" required min="4" rows="6"
                                                wire:model="profil_state.profil.{{ $i }}.skills"
                                                placeholder="{{ __('Description des compétences & expériences requises') }}" required class="form-control"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="remuneration">{{ __('Type de rémunération') }}</label>
                                                <select class="form-control" wire:model="profil_state.profil.{{ $i }}.remuneration" required
                                                    name="salary_range" id="salary_range">
                                                    <option value="salary_range" selected>{{ __('Fourchette de salaire') }}</option>
                                                    <option value="package">{{ __('Package') }}</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="workplace">{{ __('Lieu de travail') }}</label>
                                                <input id="workplace" type="text" required min="2"
                                                    wire:model="profil_state.profil.{{ $i }}.workplace"
                                                    placeholder="{{ __('ville, région, possibilité de télétravail, etc...') }}" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        <div class="col-12">
                            <div wire:loading wire:target="updateProfil,saveProfil,reload" class="btn" disabled
                                style="pointer-events: none">
                                <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                            </div>
                            <div class="mt-2" wire:loading.remove wire:target="updateProfil,saveProfil,reload">
                                <a data-toggle="modal" data-target="#confirmUpdate"
                                    class="btn col-md-3 icon icon-left btn-primary">
                                    Sauvegarder
                                </a>
                                <div class="modal fade text-left" wire:ignore.self id="confirmUpdate" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xs  "
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <h4 class="modal-title text-white" id="myModalLabel33">
                                                    Confirmation
                                                </h4>
                                                <button type="button" class="btn bg-white" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="text-dark">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M6 18 18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{ __('Voulez-vous enregistrer vos modifications et vos suppressions ?') }}
                                            </div>
                                            <div class="modal-footer">
                                                <div>
                                                    <button wire:click.prevent="updateProfil" data-dismiss="modal"
                                                        aria-label="Close" type="submit"
                                                        class="btn btn-primary ml-1">
                                                        <span wire:ignore><i
                                                                class="bx bx-check d-block d-sm-none"></i></span>
                                                        <span class="d-none d-sm-block">Confirmer</span>
                                                    </button>
                                                    <button data-dismiss="modal" aria-label="Close"
                                                        class="btn btn-light-secondary">
                                                        <span wire:ignore><i
                                                                class="bx bx-x d-block d-sm-none"></i></span>
                                                        <span class="d-none d-sm-block">Annuler</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button wire:click.prevent="reload" class="btn icon icon-left btn-light">
                                    Annuler
                                </button>
                            </div>
                        </div>
                    </form>
                @else
                    <div
                        class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            style="width: 50px" class="mx-2">
                            <path fill-rule="evenodd"
                                d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                            <path
                                d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                        </svg>
                        <br><br>
                        {{ __('Aucun profil recherché trouvé') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('components.alert')
</div>
