@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-8 order-md-1 order-last">
                <h3 class="text-primary">Diplômes & Certifications</h3>
                <p class="text-subtitle text-muted">
                    {{ __('Renseignez tout votre parcours scolaire et universitaire ainsi que vos diplômes, formations et certifications') }}.
                </p>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a @class(['nav-link', 'active' => $tab == 0]) wire:click.prevent="$set('tab', 0)" id="agreement-tab" data-toggle="tab"
                href="#agreement" role="tab" aria-controls="agreement" aria-selected="false">
                Diplômes & Formations
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a @class(['nav-link', 'active' => $tab == 1]) wire:click.prevent="$set('tab', 1)" id="certification-tab" data-toggle="tab"
                href="#certification" role="tab" aria-controls="certification" aria-selected="false">
                Certifications & Autres
            </a>
        </li>
    </ul>
    <br>
    <div class="tab-content" id="myTabContent">
        <div @class(['tab-pane fade', 'show active' => $tab == 0]) id="agreement" role="tabpanel" aria-labelledby="agreement-tab">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header px-2 py-1 mb-4 w-100 text-right bg-primary">
                        <div class="row p-0 justify-content-between align-items-center">
                            <div class="col-md-6 text-left">
                                <span class="text-sm px-2 text-white">Diplômes obtenus & Formations</span>
                            </div>
                            <div class="col-md-4 text-right">
                                <button type="btn" data-toggle="modal" data-target="#addAv"
                                    class="btn pt-2 icon icon-left btn-success">
                                    <span wire:ignore>
                                        <i data-feather="plus" class="text-white" width="20" class="mb-1"></i>
                                    </span>
                                    Ajouter
                                </button>
                                @include('user-space.candidates.modals.add-formation-modal')
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (count($educations = $_user->educations))
                            <form wire:submit="updateEducation" class="row m-1">
                                @for ($i = 0; $i < count($educations); $i++)
                                    <div class="col-md-6 col-12">
                                        @php($to_remove = str_contains($education_state['education_remove'], $educations[$i]->id))
                                        <div class="border rounded shadow-md p-3 pt-4 mb-3" @style(['position: relative', 'background:#FAFAFA !important' => $to_remove])>
                                            <label for="trasheducation{{ $i }}"
                                                wire:click.prevent="toggleDelete('{{ $educations[$i]->id }}', 'education_state', 'education_remove')"
                                                style="position: absolute; top: 0px; right: 0px;"
                                                @class([
                                                    'btn m-1 mt-2 d-flex justify-content-center align-items-center float-right fw-bold border-0 btn-sm icon',
                                                    'btn-danger' => $to_remove,
                                                ])>
                                                <input type="checkbox" id="trasheducation{{ $i }}"
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
                                                <div class="form-group pt-4">
                                                    <label class="">
                                                        {{ __('Niveau') }}
                                                    </label>
                                                    <input @disabled($to_remove) type="text"
                                                        wire:model="education_state.education.{{ $i }}.level"
                                                        placeholder="{{ __('Niveau') }}" required class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">
                                                        {{ __('Domain') }}
                                                    </label>
                                                    <input @disabled($to_remove) type="text"
                                                        wire:model="education_state.education.{{ $i }}.domain"
                                                        placeholder="{{ __('Domain') }}" required class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>{{ __('Institut') }}</label>
                                                    <input
                                                        wire:model="education_state.education.{{ $i }}.institute"
                                                        @disabled($to_remove) type="text"
                                                        placeholder="{{ __('Institut') }}" required
                                                        class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label>{{ __("Année d'Optention") }}</label>
                                                        <input
                                                            wire:model="education_state.education.{{ $i }}.year"
                                                            @disabled($to_remove) type="number" min="1900"
                                                            max="{{ \Carbon\Carbon::now()->year + 1 }}"
                                                            placeholder="{{ __("Année d'Optention") }}" required
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>{{ __('Pays') }}</label>
                                                        <select @disabled($to_remove) required name="country"
                                                            class="form-control"
                                                            wire:model="education_state.education.{{ $i }}.country">
                                                            @include('user-space.candidates.others.country-select')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                                <div class="col-12">
                                    <div wire:loading wire:target="updateEducation,saveEducation,reload" class="btn"
                                        disabled style="pointer-events: none">
                                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                                    </div>
                                    <div class="mt-2" wire:loading.remove
                                        wire:target="updateEducation,saveEducation,reload">
                                        <a data-toggle="modal" data-target="#confirmUpdate"
                                            class="btn col-md-3 icon icon-left btn-primary">
                                            Sauvegarder
                                        </a>
                                        <div class="modal fade text-left" wire:ignore.self id="confirmUpdate"
                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xs modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-dark">
                                                        <h4 class="modal-title text-white" id="myModalLabel33">
                                                            Confirmation
                                                        </h4>
                                                        <button type="button" class="btn bg-white"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" class="text-dark">
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
                                                            <button wire:click.prevent="updateEducation"
                                                                data-dismiss="modal" aria-label="Close"
                                                                type="submit" class="btn btn-primary ml-1">
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 50px"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                                <br><br>
                                {{ __('Aucune formation ni diplôme trouvé') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div @class(['tab-pane fade', 'show active' => $tab == 1]) id="certification" role="tabpanel" aria-labelledby="certification-tab">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-header px-2 py-1 mb-4 w-100 text-right bg-primary">
                        <div class="row p-0 justify-content-between align-items-center">
                            <div class="col-md-6 text-left">
                                <span class="text-sm px-2 text-white">Certifications & Autres</span>
                            </div>
                            <div class="col-md-4 text-right">
                                <button type="btn" data-toggle="modal" data-target="#addAvOther"
                                    class="btn py-1 icon icon-left btn-success">
                                    <span wire:ignore>
                                        <i data-feather="plus" width="20" class="mb-1"></i>
                                    </span>
                                    Ajouter
                                </button>
                                @include('user-space.candidates.modals.add-other-formation-modal')
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (count($educations = $_user->other_educations))
                            <form wire:submit="updateOtherEducation" class="row m-1">
                                @for ($i = 0; $i < count($educations); $i++)
                                    <div class="col-md-6 col-12">
                                        @php($to_remove = str_contains($education_state['other_remove'], $educations[$i]->id))
                                        <div class="border rounded shadow-md p-3 pt-4 mb-3" @style(['position: relative', 'background:#FAFAFA !important' => $to_remove])>
                                            <label for="trashother{{ $i }}"
                                                wire:click.prevent="toggleDelete('{{ $educations[$i]->id }}', 'education_state', 'other_remove')"
                                                style="position: absolute; top: 0px; right: 0px;"
                                                @class([
                                                    'btn m-1 mt-2 d-flex justify-content-center align-items-center float-right fw-bold border-0 btn-sm icon',
                                                    'btn-danger' => $to_remove,
                                                ])>
                                                <input type="checkbox" id="trashother{{ $i }}"
                                                    style="pointer-events: none" @class([
                                                        'form-check-input form-check-sm form-check-danger mr-1',
                                                        'bg-danger border-0' => $to_remove,
                                                    ])
                                                    @checked($to_remove)>
                                                <span>
                                                    supprimer
                                                </span>
                                            </label>
                                            <div class="py-3 px-2 pt-4">
                                                <div class="form-group">
                                                    <label class="">
                                                        {{ __('Type') }}
                                                    </label>
                                                    <select name="type" @disabled($to_remove)
                                                        wire:model="education_state.other.{{ $i }}.type"
                                                        class="form-control input-select bg-white">
                                                        <option value="certification" selected>
                                                            {{ __('CERTIFICATION') }}
                                                        </option>
                                                        <option value="ongoing_training">
                                                            {{ __('FORMATION CONTINUE') }}
                                                        </option>
                                                        <option value="accredidation">
                                                            {{ __('ACCREDITATION') }}
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>
                                                        {{ __('Titre') }}
                                                    </label>
                                                    <input @disabled($to_remove) type="text"
                                                        wire:model="education_state.other.{{ $i }}.title"
                                                        placeholder="{{ __('Titre') }}" required
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>{{ __('Description') }}</label>
                                                    <textarea @disabled($to_remove) type="text"
                                                        wire:model="education_state.other.{{ $i }}.description" rows="6" required class="form-control"
                                                        placeholder="{{ __('Entrez une description') }}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </form>
                            <div class="col-12">
                                <div wire:loading wire:target="updateOtherEducation,saveOtherEducation,reload"
                                    class="btn" disabled style="pointer-events: none">
                                    <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                                </div>
                                <div class="mt-2" wire:loading.remove
                                    wire:target="updateOtherEducation,saveOtherEducation,reload">
                                    <a data-toggle="modal" data-target="#confirmUpdateOther"
                                        class="btn col-md-3 icon icon-left btn-primary">
                                        Sauvegarder
                                    </a>
                                    <div class="modal fade text-left" wire:ignore.self id="confirmUpdateOther"
                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-xs modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark">
                                                    <h4 class="modal-title text-white" id="myModalLabel33">
                                                        Confirmation
                                                    </h4>
                                                    <button type="button" class="btn bg-white" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" class="text-dark">
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
                                                        <button wire:click.prevent="updateOtherEducation"
                                                            data-dismiss="modal" aria-label="Close" type="submit"
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
                        @else
                            <div
                                class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    style="width: 60px" stroke-width="1.5" stroke="currentColor" class="mx-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>
                                <br><br>
                                {{ __('Aucune certification, formation continue ou accrédidation trouvée') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.alert')
</div>
