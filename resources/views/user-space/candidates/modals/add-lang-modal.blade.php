<div class="modal fade text-left" id="addlang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg  " role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-white" id="myModalLabel33">
                    Ajouter
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit="saveLang">
                <div class="modal-body">
                    <div class="col-12" wire:loading.remove>
                        @if ($errors->any())
                            <div class="alert alert-danger pb-0">
                                <ul class="text-white fw-bold pb-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div wire:loading.remove class="alert alert-danger fw-bold text-white">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div wire:loading.remove class="alert alert-success fw-bold text-white">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">
                            {{ __('Langue') }}
                        </label>
                        <select wire:model="lang_state.lang_form.title" id="title" name="title" class="form-control input-select bg-white">
                           @include("user-space.candidates.others.language-select")
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="speaking">
                            {{ __('Parler') }}
                        </label>
                        <select wire:model="lang_state.lang_form.speaking" id="speaking" name="speaking" class="form-control input-select bg-white">
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
                    <div class="form-group">
                        <label for="reading">
                            {{ __('Lire') }}
                        </label>
                        <select wire:model="lang_state.lang_form.reading" id="reading" name="reading" class="form-control input-select bg-white">
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
                    <div class="form-group">
                        <label for="writing">
                            {{ __('Ecrire') }}
                        </label>
                        <select wire:model="lang_state.lang_form.writing" id="writing" name="writing" class="form-control input-select bg-white">
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
                <div class="modal-footer">
                    <div wire:loading wire:target="saveLang" class="btn" disabled style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                    </div>
                    <div wire:loading.remove wire:target="saveLang">
                        <button type="submit" class="btn btn-primary ml-1">
                            <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Confirmer</span>
                        </button>
                        <button type="reset" class="btn btn-light-secondary">
                            <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Effacer</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
