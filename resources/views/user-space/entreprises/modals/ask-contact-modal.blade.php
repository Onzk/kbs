<div class="modal fade text-left" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg  " role="document">
        <div class="modal-content border-top border-success rounded-lg" style="border-width: 8px !important">
            <div class="modal-header bg-white">
                <h4 class="modal-title text-dark" id="myModalLabel33">
                    Formulaire
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit="askContact">
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
                        <label for="candidate">
                            {{ __('Candidat') }}
                        </label>
                        <input id="candidate" type="text" required min="2" disabled
                            value="{{ $candidate->fullname() }}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="domain">
                            {{ __('Poste') }}
                        </label>
                        <input id="domain" type="text" disabled required min="2" value="{{ $profil->title }}"
                            placeholder="{{ __('Poste') }}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description de la demande') }}</label>
                        <textarea id="description" type="text" min="2" rows="6" wire:model="description"
                            placeholder="{{ __('Description de la demande') }}" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div wire:loading wire:target="askContact" class="btn" disabled style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                    </div>
                    <div wire:loading.remove wire:target="askContact">
                        <button type="submit" class="btn btn-primary ml-1">
                            <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Envoyer</span>
                        </button>
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal" aria-label="Close">
                            <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Annuler</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
