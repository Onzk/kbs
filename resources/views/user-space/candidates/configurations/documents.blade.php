@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid" wire:polls>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Documents & Références</h3>
                <p class="text-subtitle text-muted">
                    Enregistrez votre cv, d'éventuelles références ou recommandations.
                </p>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a @class(['nav-link', 'active' => $tab == 0]) wire:click.prevent="$set('tab', 0)" id="cv-tab" data-toggle="tab"
                href="#cv" role="tab" aria-controls="cv" aria-selected="false">
                CV
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a @class(['nav-link', 'active' => $tab == 1]) wire:click.prevent="$set('tab', 1)" id="ref-tab" data-toggle="tab"
                href="#ref" role="tab" aria-controls="ref" aria-selected="false">
                Références
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a @class(['nav-link', 'active' => $tab == 2]) wire:click.prevent="$set('tab', 2)" id="real-tab" data-toggle="tab"
                href="#real" role="tab" aria-controls="real" aria-selected="false">
                Réalisations
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a @class(['nav-link', 'active' => $tab == 3]) wire:click.prevent="$set('tab', 3)" id="links-tab" data-toggle="tab"
                href="#links" role="tab" aria-controls="links" aria-selected="false">
                Liens
            </a>
        </li>
    </ul>
    <br>
    <div class="tab-content" id="myTabContent">
        <div @class(['tab-pane fade', 'show active' => $tab == 0]) id="cv" role="tabpanel" aria-labelledby="cv-tab">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header px-2 py-1 w-100 text-right bg-primary">
                        <div class="row p-0 justify-content-between align-items-center">
                            <div class="col-md-6 text-left">
                                <span class="text-sm px-2 text-white">Curriculum Vitæ</span>
                            </div>
                            <div wire:loading wire:target="cv" class="col-md-2">
                                <button class="btn btn-success" disabled style="pointer-events: none">
                                    <div class="spinner-border spinner-border-sm text-white" role="status"></div>
                                </button>
                            </div>
                            @php($_cv = $_user->get_cv())
                            <div class="col-md-4 text-right" wire:loading.remove wire:target="cv">
                                <label for="cvinput" style="cursor: pointer"
                                    class="btn py-1 my-0 icon btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 20px"
                                        viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="mb-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                    {{ $_cv ? 'Modifier' : 'Charger' }}
                                </label>
                                <input type="file" accept=".pdf;.PDF;.Pdf" hidden wire:model.live="cv"
                                    id="cvinput">
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        @if ($_cv)
                            <embed src="{{ asset($_cv) . '?' . rand() }}"
                                title="{{ trim($_user->fullname()) . '_CV.pdf' }}" style="width: 100%; height: 100vh" />
                        @else
                            <div
                                class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4 my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    style="width: 60px" stroke-width="1.5" stroke="currentColor" class="mx-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <br><br>
                                {{ __('Pas de CV configurer') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div @class(['tab-pane fade', 'show active' => $tab == 1]) id="ref" role="tabpanel" aria-labelledby="ref-tab">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header p-2 mb-4 w-100 bg-primary">
                        <span class="text-sm text-white px-2">Références</span>
                    </div>
                    <div class="card-body">
                        @php($refs = $_user->get_references())
                        <div class="row">
                            @for ($i = 1; $i <= ((int) \App\Models\Config::retreive('max_references_upload', 6)); $i++)
                                @php($file = isset($refs[$i - 1]) ? $refs[$i - 1] : null)
                                <div class="col-md-6">
                                    <div class="mb-2 col-12 text-center" wire:loading
                                        wire:target="refdocs.{{ $i - 1 }}">
                                        <div class="spinner-border spinner-border-sm text-primary mt-2"
                                            role="status"></div>
                                    </div>
                                    <div class="input-group mb-3" wire:loading.remove
                                        wire:target="refdocs.{{ $i - 1 }}">
                                        @if ($file)
                                            <a href="{{ asset($file) }}" target="_blank"
                                                class="input-group-text bg-primary "
                                                id="inputGroupFileAddon{{ $i }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" style="width: 20px"
                                                    stroke="currentColor" class="text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </a>
                                        @else
                                            <span class="input-group-text"
                                                id="inputGroupFileAddon{{ $i }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" style="width: 20px"
                                                    stroke="currentColor" class="text-dark">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                                </svg>
                                            </span>
                                        @endif
                                        <div class="form-file" wire:click="$set('refdoc_id', {{ $i - 1 }})">
                                            <input type="file" wire:model.live="refdocs.{{ $i - 1 }}"
                                                accept=".pdf;.PDF;.Pdf" class="form-file-input"
                                                id="inputGroupFile{{ $i }}"
                                                aria-describedby="inputGroupFileAddon{{ $i }}">
                                            <label class="form-file-label" for="inputGroupFile{{ $i }}">
                                                @if ($file)
                                                    <span
                                                        class="form-file-text">{{ str_replace("storage/candidate/references/{$_user->id}/", '', $refs[$i - 1]) }}</span>
                                                    <span class="form-file-button rounded-none">Modifier</span>
                                                @else
                                                    <span class="form-file-text">
                                                        Références N° {{ $i }}...
                                                    </span>
                                                    <span class="form-file-button">Choisir</span>
                                                @endif
                                            </label>
                                        </div>
                                        @if ($file)
                                            <button wire:click="$set('refdoc_id', {{ $i - 1 }})"
                                                class="input-group-text btn icon btn-danger" data-toggle="modal"
                                                data-target="#confirmDeleteRef">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px"
                                                    viewBox="0 0 24 24" fill="currentColor" class="text-white">
                                                    <path fill-rule="evenodd"
                                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        @endif
                                    </div>
                                    @if ($file)
                                        <div class="col-12 mt-2 border">
                                            <embed src="{{ asset($file) }}" style="width: 100%; height: 20vh" />
                                        </div>
                                        <br>
                                        <div class="modal fade text-left" wire:ignore.self id="confirmDeleteRef"
                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xs modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
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
                                                    <div class="modal-body fw-bold text-dark">
                                                        {{ __('Voulez-vous supprimer ce document ?') }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div>
                                                            <button wire:click.prevent="deleteDoc('references', 'ref')"
                                                                data-dismiss="modal" aria-label="Close"
                                                                type="submit" class="btn btn-danger ml-1">
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
                                    @endif
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div @class(['tab-pane fade', 'show active' => $tab == 2]) id="real" role="tabpanel" aria-labelledby="real-tab">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header p-2 mb-4 w-100 bg-primary">
                        <span class="text-sm px-2 text-white">Réalisations</span>
                    </div>
                    <div class="card-body">
                        @php($reals = $_user->get_realisations())
                        <div class="row">
                            @for ($i = 1; $i <= ((int) \App\Models\Config::retreive('max_realisations_upload', 6)); $i++)
                                @php($file = isset($reals[$i - 1]) ? $reals[$i - 1] : null)
                                <div class="col-md-6">
                                    <div class="mb-2 col-12 text-center" wire:loading
                                        wire:target="realdocs.{{ $i - 1 }}">
                                        <div class="spinner-border spinner-border-sm text-primary mt-2"
                                            role="status"></div>
                                    </div>
                                    <div class="input-group mb-3" wire:loading.remove
                                        wire:target="realdocs.{{ $i - 1 }}">
                                        @if ($file)
                                            <a href="{{ asset($file) }}" target="_blank"
                                                class="input-group-text bg-primary "
                                                id="inputGroupFileAddonReal{{ $i }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" style="width: 20px"
                                                    stroke="currentColor" class="text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </a>
                                        @else
                                            <span class="input-group-text"
                                                id="inputGroupFileAddonReal{{ $i }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" style="width: 20px"
                                                    stroke="currentColor" class="text-dark">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                                </svg>
                                            </span>
                                        @endif
                                        <div class="form-file" wire:click="$set('realdoc_id', {{ $i - 1 }})">
                                            <input type="file" wire:model.live="realdocs.{{ $i - 1 }}"
                                                accept=".pdf;.PDF;.Pdf" class="form-file-input"
                                                id="inputGroupFile{{ $i }}"
                                                aria-describedby="inputGroupFileAddon{{ $i }}">
                                            <label class="form-file-label" for="inputGroupFile{{ $i }}">
                                                @if ($file)
                                                    <span
                                                        class="form-file-text">{{ str_replace("storage/candidate/realisations/{$_user->id}/", '', $reals[$i - 1]) }}</span>
                                                    <span class="form-file-button rounded-none">Modifier</span>
                                                @else
                                                    <span class="form-file-text">
                                                        Réalisations N° {{ $i }}...
                                                    </span>
                                                    <span class="form-file-button">Choisir</span>
                                                @endif
                                            </label>
                                        </div>
                                        @if ($file)
                                            <button wire:click="$set('realdoc_id', {{ $i - 1 }})"
                                                class="input-group-text btn icon btn-danger" data-toggle="modal"
                                                data-target="#confirmDeleteReal">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px"
                                                    viewBox="0 0 24 24" fill="currentColor" class="text-white">
                                                    <path fill-rule="evenodd"
                                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        @endif
                                    </div>
                                    @if ($file)
                                        <div class="col-12 mt-2 border">
                                            <embed src="{{ asset($file) }}" style="width: 100%; height: 20vh" />
                                        </div>
                                        <br>
                                        <div class="modal fade text-left" wire:ignore.self id="confirmDeleteReal"
                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xs modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
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
                                                    <div class="modal-body fw-bold text-dark">
                                                        {{ __('Voulez-vous supprimer ce document ?') }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div>
                                                            <button
                                                                wire:click.prevent="deleteDoc('realisations', 'real')"
                                                                data-dismiss="modal" aria-label="Close"
                                                                type="submit" class="btn btn-danger ml-1">
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
                                    @endif
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div @class(['tab-pane fade', 'show active' => $tab == 3]) id="links" role="tabpanel" aria-labelledby="links-tab">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-header px-2 py-1 mb-4 w-100 text-right bg-primary">
                        <div class="row p-0 justify-content-between align-items-center">
                            <div class="col-md-6 text-left">
                                <span class="text-sm px-2 text-white">
                                    {{ __('Liens vers des articles, publications etc . . . ') }}
                                </span>
                            </div>
                            <div class="col-md-4 text-right">
                                <button type="btn" data-toggle="modal" data-target="#addlink"
                                    class="btn icon py-1 icon-left btn-success">
                                    <span wire:ignore>
                                        <i data-feather="plus" width="20" class="mb-1"></i>
                                    </span>
                                    Ajouter
                                </button>
                                @include('user-space.candidates.modals.add-link-modal')
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (count($links = $_user->get_links()))
                            <form wire:submit="updateLink" class="row">
                                @for ($i = 0; $i < count($links); $i++)
                                    <div class="col-md-6 col-12">
                                        @php($to_remove = str_contains($doc_state['link_remove'], $i))
                                        <div class="border w-100 rounded shadow-md p-3 pt-4 mb-3" @style(['position: relative', 'background:#FAFAFA !important' => $to_remove])>
                                            <label for="trashlink{{ $i }}"
                                                wire:click.prevent="toggleDelete('{{ $i }}', 'doc_state', 'link_remove')"
                                                style="position: absolute; top: 0px; right: 0px;"
                                                @class([
                                                    'btn m-1 mt-2 d-flex justify-content-center align-items-center float-right fw-bold border-0 btn-sm icon',
                                                    'btn-danger' => $to_remove,
                                                ])>
                                                <input type="checkbox" id="trashlink{{ $i }}"
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
                                                <div class="col-12">
                                                    <div class="form-group w-100">
                                                        <label>
                                                            {{ __('Lien') }}
                                                        </label>
                                                        <input @disabled($to_remove) type="text"
                                                            wire:model="doc_state.link.{{ $i }}.link"
                                                            placeholder="{{ __('Lien') }}" required
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </form>
                            <div class="col-12">
                                <div wire:loading wire:target="updateLink,saveLink,reload"
                                    class="btn" disabled style="pointer-events: none">
                                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                                    </div>
                                </div>
                                <div class="mt-2" wire:loading.remove
                                    wire:target="updateLink,saveLink,reload">
                                    <a data-toggle="modal" data-target="#confirmLinksUpdate"
                                        class="btn col-md-3 icon icon-left btn-primary">
                                        Sauvegarder
                                    </a>
                                    <div class="modal fade text-left" wire:ignore.self id="confirmLinksUpdate"
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
                                                        <button wire:click.prevent="updateLink"
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 60px" class="mx-2">
                                    <path fill-rule="evenodd" d="M19.902 4.098a3.75 3.75 0 0 0-5.304 0l-4.5 4.5a3.75 3.75 0 0 0 1.035 6.037.75.75 0 0 1-.646 1.353 5.25 5.25 0 0 1-1.449-8.45l4.5-4.5a5.25 5.25 0 1 1 7.424 7.424l-1.757 1.757a.75.75 0 1 1-1.06-1.06l1.757-1.757a3.75 3.75 0 0 0 0-5.304Zm-7.389 4.267a.75.75 0 0 1 1-.353 5.25 5.25 0 0 1 1.449 8.45l-4.5 4.5a5.25 5.25 0 1 1-7.424-7.424l1.757-1.757a.75.75 0 1 1 1.06 1.06l-1.757 1.757a3.75 3.75 0 1 0 5.304 5.304l4.5-4.5a3.75 3.75 0 0 0-1.035-6.037.75.75 0 0 1-.354-1Z" clip-rule="evenodd" />
                                  </svg>

                                <br><br>
                                {{ __('Aucun lien trouvé') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.alert')
</div>
