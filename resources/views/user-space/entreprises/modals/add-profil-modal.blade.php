<div class="modal fade text-left" id="addAv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
            <form wire:submit="saveProfil">
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
                            {{ __('Intitulé du Poste') }}
                        </label>
                        <input id="title" type="text" required min="2"
                            wire:model="profil_state.profil_form.title" placeholder="{{ __('Intitulé du Poste') }}"
                            required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">
                            {{ __('Description du profil (missions, responsabilités, etc...)') }}
                        </label>
                        <textarea id="description" type="text" required min="4" rows="6"
                            wire:model="profil_state.profil_form.description"
                            placeholder="{{ __('Description du profil (missions, responsabilités, etc...)') }}" required class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="skills">
                            {{ __('Description des compétences requises') }}
                        </label>
                        <textarea id="skills" type="text" required min="4" rows="6"
                            wire:model="profil_state.profil_form.skills"
                            placeholder="{{ __('Description des compétences requises') }}" required class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="experiences">
                            {{ __('Description des expériences requises') }}
                        </label>
                        <textarea id="experiences" type="text" required min="4" rows="6"
                            wire:model="profil_state.profil_form.experiences"
                            placeholder="{{ __('Description des expériences requises') }}" required class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="remuneration">{{ __('Type de rémunération') }}</label>
                            <select class="form-control" wire:model="profil_state.profil_form.remuneration" required
                                name="salary_range" id="salary_range">
                                <option value="salary_range" selected>{{ __('Fourchette de salaire') }}</option>
                                <option value="package">{{ __('Package') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="workplace">{{ __('Lieu de travail') }}</label>
                            <input id="workplace" type="text" required min="2"
                                wire:model="profil_state.profil_form.workplace"
                                placeholder="{{ __('ville, région, possibilité de télétravail, etc...') }}" required
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div wire:loading wire:target="saveProfil" class="btn" disabled style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                    </div>
                    <div wire:loading.remove wire:target="saveProfil">
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
