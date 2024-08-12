<div>
    @php($_user = Auth::guard('candidates')->user())
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3 class="text-primary">Expériences Professionnelles</h3>
                    <p class="text-subtitle text-muted">
                        {{ __("Listez vos expériences professionnelles, vos compétences clés et vos domaines d'expertise.") }}.
                    </p>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a @class(['nav-link', 'active' => $tab == 0]) wire:click.prevent="$set('tab', 0)" id="exp-tab" data-toggle="tab"
                    href="#exp" role="tab" aria-controls="exp" aria-selected="false">
                    Expériences
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a @class(['nav-link', 'active' => $tab == 1]) wire:click.prevent="$set('tab', 1)" id="skills-tab" data-toggle="tab"
                    href="#skills" role="tab" aria-controls="skills" aria-selected="false">
                    Compétences
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a @class(['nav-link', 'active' => $tab == 2]) wire:click.prevent="$set('tab', 2)" id="domains-tab" data-toggle="tab"
                    href="#domains" role="tab" aria-controls="domains" aria-selected="false">
                    Domaines
                </a>
            </li>
        </ul>
        <br>
        <div class="tab-content" id="myTabContent">
            <div @class(['tab-pane fade', 'show active' => $tab == 0]) id="exp" role="tabpanel" aria-labelledby="exp-tab">
                <div class="col-md-12">
                    <div class="card w-100">
                        <div class="card-header p-2 mb-4 w-100 bg-dark">
                            <h4 class="card-title pt-1 text-white px-2">Expériences</h4>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="updateExp">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="actual_position">{{ __('Poste actuel') }}</label>
                                            <input id="actual_position" wire:model="exp_state.actual_position"
                                                type="text" max="255"
                                                placeholder="{{ __('Poste actuellement occupé') }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="actual_entreprise">{{ __('Entreprise actuelle') }}</label>
                                            <input type="text" max="255"
                                                wire:model="exp_state.actual_entreprise" class="form-control"
                                                id="actual_entreprise" placeholder="Entreprise actuelle" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label
                                        class="alert alert-dark bg-primary text-white text-center fw-bold w-100 mb-0 rounded-none"
                                        for="full">{{ __('Descriptif des principales responsabilités et réalisations dans les postes précédents') }}
                                        <span class="text-white">*</span>
                                    </label>
                                    <div wire:ignore>
                                        <div id="full"></div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" wire:loading.disabled wire:target="updateExp"
                                        wire:click="$set('exp_state.description', editor.getLength() === 1 ? null : editor.container.querySelectorAll('.ql-editor > p')[0].innerHTML)"
                                        class="btn col-md-3 icon icon-left btn-primary">
                                        <div class="spinner-border spinner-border-sm text-white" wire:loading
                                            wire:target="updateExp" role="status"></div>
                                        <span wire:loading.remove wire:target="updateExp">
                                            Confirmer
                                        </span>
                                    </button>
                                    <button type="reset" wire:click.prevent="reload" wire:loading.disabled
                                        wire:target="updateExp" class="btn icon icon-left btn-light">
                                        Annuler
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div @class(['tab-pane fade', 'show active' => $tab == 1]) id="skills" role="tabpanel" aria-labelledby="skills-tab">
                <div class="col-12">
                    <div class="card w-100">
                        <div class="card-header p-2 mb-4 w-100 text-right bg-dark">
                            <div class="row p-0 justify-content-between align-items-center">
                                <div class="col-md-6 ml-3 text-left">
                                    <h4 class="card-title pt-1 text-white">Compétences Clés</h4>
                                </div>
                                <div class="col-md-4 text-right">
                                    <button type="btn" data-toggle="modal" data-target="#addskills"
                                        class="btn mx-1 pt-2 icon icon-left btn-success">
                                        <span wire:ignore>
                                            <i data-feather="plus" width="20" class="mb-1"></i>
                                        </span>
                                        Ajouter
                                    </button>
                                    @include('user-space.candidates.modals.add-skill-domain-modal', [
                                        'type' => 'skills',
                                        'label' => 'Compétence',
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (count($skills = $_user->skills()))
                                <form wire:submit="updateSkillOrDomain('skills')" class="row">
                                    @for ($i = 0; $i < count($skills); $i++)
                                        <div class="col-md-6 col-12">
                                            @php($to_remove = str_contains($exp_state['skills_remove'], $i))
                                           <div class="border w-100 rounded shadow-md p-3 pt-4 mb-3"
                                                @style(['position: relative', 'cursor:pointer', 'background:#FAFAFA !important' => $to_remove])>
                                                <label for="trashskills{{ $i }}"
                                                    wire:click.prevent="toggleDelete('{{ $i }}', 'exp_state', 'skills_remove')"
                                                    style="position: absolute; top: 0px; right: 0px;"
                                                    @class([
                                                        'btn m-1 mt-2 d-flex justify-content-center align-items-center float-right fw-bold border-0 btn-sm icon',
                                                        'btn-danger' => $to_remove,
                                                    ])>
                                                    <input type="checkbox" id="trashskills{{ $i }}"
                                                        style="pointer-events: none" @class([
                                                            'form-check-input form-check-sm form-check-danger mr-1',
                                                            'bg-danger border-0' => $to_remove,
                                                        ])
                                                        @checked($to_remove)>
                                                    <span>
                                                        supprimer
                                                    </span>
                                                </label>
                                                <div class="px-2 w-100 pt-4 row">
                                                    <div class="col-lg-9 col-md-9 col-12">
                                                        <div class="form-group w-100">
                                                            <label>
                                                                {{ __('Titre') }}
                                                            </label>
                                                            <input @disabled($to_remove) type="text"
                                                                wire:model="exp_state.skills.{{ $i }}.label"
                                                                placeholder="{{ __('Titre') }}" required
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-12">
                                                        <div class="form-group w-100">
                                                            <label for="percentage">
                                                                {{ __('Maîtrise') }}
                                                            </label>
                                                            <div class="input-group">
                                                                <input @disabled($to_remove)
                                                                    type="number"wire:model="exp_state.skills.{{ $i }}.percentage"
                                                                    value="50" required min="1"
                                                                    step="1" max="100"
                                                                    class="form-control" />
                                                                <div class="input-group-prepend">
                                                                    <span
                                                                        class="input-group-text bg-dark text-white">%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </form>
                                <div class="col-12">
                                    <div wire:loading
                                        wire:target="updateSkillOrDomain('skills'),saveSkillOrDomain,reload"
                                        class="btn" disabled style="pointer-events: none">
                                        <div class="spinner-border spinner-border-sm text-primary" role="status">
                                        </div>
                                    </div>
                                    <div class="mt-2" wire:loading.remove
                                        wire:target="updateSkillOrDomain('skills'),saveSkillOrDomain,reload">
                                        <a data-toggle="modal" data-target="#confirmSkillsUpdate"
                                            class="btn col-md-3 icon icon-left btn-primary">
                                            Sauvegarder
                                        </a>
                                        <div class="modal fade text-left" wire:ignore.self id="confirmSkillsUpdate"
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
                                                        {{ __('Voulez-vous enregistrer vos modifications et vos suppriessions ?') }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div>
                                                            <button wire:click.prevent="updateSkillOrDomain('skills')"
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
                            @else
                                <div
                                    class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        style="width: 60px" stroke-width="1.5" stroke="currentColor" class="mx-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                    </svg>
                                    <br><br>
                                    {{ __('Aucune compétence clé trouvée') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div @class(['tab-pane fade', 'show active' => $tab == 2]) id="domains" role="tabpanel" aria-labelledby="domains-tab">
                <div class="col-12">
                    <div class="card w-100">
                        <div class="card-header p-2 mb-4 w-100 text-right bg-dark">
                            <div class="row p-0 justify-content-between align-items-center">
                                <div class="col-md-6 ml-3 text-left">
                                    <h4 class="card-title pt-1 text-white">Domaines d'Expertise</h4>
                                </div>
                                <div class="col-md-4 text-right">
                                    <button type="btn" data-toggle="modal" data-target="#adddomains"
                                        class="btn mx-1 pt-2 icon icon-left btn-success">
                                        <span wire:ignore>
                                            <i data-feather="plus" width="20" class="mb-1"></i>
                                        </span>
                                        Ajouter
                                    </button>
                                    @include('user-space.candidates.modals.add-skill-domain-modal', [
                                        'type' => 'domains',
                                        'label' => 'Domaine',
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (count($domains = $_user->domains()))
                                <form wire:submit="updateSkillOrDomain('domains')" class="row">
                                    @for ($i = 0; $i < count($domains); $i++)
                                        <div class="col-md-6 col-12">
                                            @php($to_remove = str_contains($exp_state['domains_remove'], $i))
                                            <div class="border w-100 rounded shadow-md p-3 pt-4 mb-3"
                                                @style(['position: relative', 'background:#FAFAFA !important' => $to_remove])>
                                                <label for="trashdomains{{ $i }}"
                                                    wire:click.prevent="toggleDelete('{{ $i }}', 'exp_state', 'domains_remove')"
                                                    style="position: absolute; top: 0px; right: 0px;"
                                                    @class([
                                                        'btn m-1 mt-2 d-flex justify-content-center align-items-center float-right fw-bold border-0 btn-sm icon',
                                                        'btn-danger' => $to_remove,
                                                    ])>
                                                    <input type="checkbox" id="trashdomains{{ $i }}"
                                                        style="pointer-events: none" @class([
                                                            'form-check-input form-check-sm form-check-danger mr-1',
                                                            'bg-danger border-0' => $to_remove,
                                                        ])
                                                        @checked($to_remove)>
                                                    <span>
                                                        supprimer
                                                    </span>
                                                </label>
                                                <div class="px-2 w-100 pt-4 row">
                                                    <div class="col-lg-9 col-md-9 col-12">
                                                        <div class="form-group w-100">
                                                            <label>
                                                                {{ __('Titre') }}
                                                            </label>
                                                            <input @disabled($to_remove) type="text"
                                                                wire:model="exp_state.domains.{{ $i }}.label"
                                                                placeholder="{{ __('Titre') }}" required
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-12">
                                                        <div class="form-group w-100">
                                                            <label for="percentage">
                                                                {{ __('Maîtrise') }}
                                                            </label>
                                                            <div class="input-group">
                                                                <input @disabled($to_remove)
                                                                    type="number"wire:model="exp_state.domains.{{ $i }}.percentage"
                                                                    value="50" required min="1"
                                                                    step="1" max="100"
                                                                    class="form-control" />
                                                                <div class="input-group-prepend">
                                                                    <span
                                                                        class="input-group-text bg-dark text-white">%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </form>
                                <div class="col-12">
                                    <div wire:loading
                                        wire:target="updateSkillOrDomain('domains'),saveSkillOrDomain,reload"
                                        class="btn" disabled style="pointer-events: none">
                                        <div class="spinner-border spinner-border-sm text-primary" role="status">
                                        </div>
                                    </div>
                                    <div class="mt-2" wire:loading.remove
                                        wire:target="updateSkillOrDomain('domains'),saveSkillOrDomain,reload">
                                        <a data-toggle="modal" data-target="#confirmDomainsUpdate"
                                            class="btn col-md-3 icon icon-left btn-primary">
                                            Sauvegarder
                                        </a>
                                        <div class="modal fade text-left" wire:ignore.self id="confirmDomainsUpdate"
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
                                                        {{ __('Voulez-vous enregistrer vos modifications et vos suppriessions ?') }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div>
                                                            <button wire:click.prevent="updateSkillOrDomain('domains')"
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
                            @else
                                <div
                                    class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        style="width: 60px" stroke-width="1.5" stroke="currentColor"class="mx-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                    </svg>
                                    <br><br>
                                    {{ __("Aucun domaine d'expertise trouvé") }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/user-space/vendors/quill/quill.min.js') }}"></script>
        <script src="{{ asset('assets/user-space/js/pages/form-editor.js') }}"></script>
        @include('components.alert')
    </div>
</div>
