@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Langues</h3>
                <p class="text-subtitle text-muted">
                    Spécifiez les langues avec lesquelles vous êtes familier.
                </p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card w-100">
            <div class="card-header px-2 py-1 mb-4 w-100 text-right bg-primary">
                <div class="row p-0 justify-content-between align-items-center">
                    <div class="col-md-6 text-left">
                        <span class="text-sm px-2 text-white">Langues</span>
                    </div>
                    <div class="col-md-4 text-right">
                        <button type="btn" data-toggle="modal" data-target="#addlang"
                            class="btn py-1 icon icon-left btn-success">
                            <span wire:ignore>
                                <i data-feather="plus" width="20" class="mb-1"></i>
                            </span>
                            Ajouter
                        </button>
                        @include('user-space.candidates.modals.add-lang-modal')
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (count($langs = $_user->languages))
                    <form wire:submit="updateLang" class="row m-1">
                        @for ($i = 0; $i < count($langs); $i++)
                            <div class="col-md-6 col-12">
                                @php($to_remove = str_contains($lang_state['lang_remove'], $langs[$i]->id))
                                <div class="border rounded shadow-md p-3 pt-4 mb-3" @style(['position: relative', 'background:#FAFAFA !important' => $to_remove])>
                                    <label for="trashlang{{ $i }}"
                                        wire:click.prevent="toggleDelete('{{ $langs[$i]->id }}', 'lang_state', 'lang_remove')"
                                        style="position: absolute; top: 0px; right: 0px;" @class([
                                            'btn m-1 mt-2 d-flex justify-content-center align-items-center float-right fw-bold border-0 btn-sm icon',
                                            'btn-danger' => $to_remove,
                                        ])>
                                        <input type="checkbox" id="trashlang{{ $i }}"
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
                                            <label for="title">
                                                {{ __('Langue') }}
                                            </label>
                                            <select @disabled($to_remove) wire:model="lang_state.lang.{{ $i }}.title" id="title" name="title" class="form-control input-select bg-white">
                                               @include("user-space.candidates.others.language-select")
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="speaking">
                                                        {{ __('Parler') }}
                                                    </label>
                                                    <select @disabled($to_remove) wire:model="lang_state.lang.{{ $i }}.speaking" id="speaking" name="speaking" class="form-control input-select bg-white">
                                                        <option value="1">
                                                            {{ __('DEBUTANT') }}
                                                        </option>
                                                        <option value="2">
                                                            {{ __('INTERMEDIAIRE') }}
                                                        </option>
                                                        <option value="3" selected>
                                                            {{ __('AVANCE') }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="reading">
                                                        {{ __('Lire') }}
                                                    </label>
                                                    <select @disabled($to_remove) wire:model="lang_state.lang.{{ $i }}.reading" id="reading" name="reading" class="form-control input-select bg-white">
                                                        <option value="1">
                                                            {{ __('DEBUTANT') }}
                                                        </option>
                                                        <option value="2">
                                                            {{ __('INTERMEDIAIRE') }}
                                                        </option>
                                                        <option value="3" selected>
                                                            {{ __('AVANCE') }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="writing">
                                                        {{ __('Ecrire') }}
                                                    </label>
                                                    <select @disabled($to_remove) wire:model="lang_state.lang.{{ $i }}.writing" id="writing" name="writing" class="form-control input-select bg-white">
                                                        <option value="1">
                                                            {{ __('DEBUTANT') }}
                                                        </option>
                                                        <option value="2">
                                                            {{ __('INTERMEDIAIRE') }}
                                                        </option>
                                                        <option value="3" selected>
                                                            {{ __('AVANCE') }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </form>
                    <div class="col-12">
                        <div wire:loading wire:target="updateLang,saveLang,reload" class="btn"
                            disabled style="pointer-events: none">
                            <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                        </div>
                        <div class="mt-2" wire:loading.remove
                            wire:target="updateLang,saveLang,reload">
                            <a data-toggle="modal" data-target="#confirmUpdateLang"
                                class="btn col-md-3 icon icon-left btn-primary">
                                Sauvegarder
                            </a>
                            <div class="modal fade text-left" wire:ignore.self id="confirmUpdateLang" tabindex="-1"
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
                                                <button wire:click.prevent="updateLang" data-dismiss="modal"
                                                    aria-label="Close" type="submit" class="btn btn-primary ml-1">
                                                    <span wire:ignore><i
                                                            class="bx bx-check d-block d-sm-none"></i></span>
                                                    <span class="d-none d-sm-block">Confirmer</span>
                                                </button>
                                                <button data-dismiss="modal" aria-label="Close"
                                                    class="btn btn-light-secondary">
                                                    <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            style="width: 60px" class="mx-2">
                            <path
                                d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                        </svg>
                        <br><br>
                        {{ __('Aucune langue trouvée') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('components.alert')
</div>
