<div class="modal fade text-left" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg  " role="document">
        <div wire:loading.remove @class([
            'modal-content border-top rounded-lg',
            'border-success' => $current_id == '',
            'border-warning' => $current_id != '',
        ]) style="border-width: 8px !important">
            <div class="modal-header bg-white">
                <h4 class="modal-title text-dark" id="myModalLabel33">
                    {{ __('Formulaire de mise à jour') }}
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit="updateCandidate">
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
                    <div class="row">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="lastname">
                                        {{ __('Nom') }}
                                    </label>
                                    <input placeholder="{{ __('Nom') }}" type="text" wire:model="state.lastname"
                                        required class="form-control" id="lastname" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="firstname">
                                        {{ __('Prénoms') }}
                                    </label>
                                    <input placeholder="{{ __('Prénoms') }}" type="text" wire:model="state.firstname"
                                        required class="form-control" id="firstname" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email">
                                        {{ __('Courriel') }}
                                    </label>
                                    <input placeholder="{{ __('Courriel') }}" type="email" wire:model="state.email"
                                        required class="form-control" id="email" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="tel">
                                        {{ __('Numéro de Téléphone') }}
                                    </label>
                                    <input placeholder="{{ __('Numéro de Téléphone') }}" type="tel"
                                        wire:model="state.tel" required class="form-control" id="tel" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="domain">
                                        {{ __("Domaine d'Expertise") }}
                                    </label>
                                    <select id="domain" wire:model="state.domain" name="domain"
                                        class="form-control text-dark input-select bg-white">
                                        <option value="Administration" selected>{{ __('Administration') }}</option>
                                        <option value="Energie et Ressources naturelles">
                                            {{ __('Energie et Ressources naturelles') }}
                                        </option>
                                        <option value="Mine">{{ __('Mine') }}</option>
                                        <option value="Industries">{{ __('Industries') }}</option>
                                        <option value="Services">{{ __('Services') }}</option>
                                        <option value="Agriculture">{{ __('Agriculture') }}</option>
                                        <option value="Construction et Immobilier">
                                            {{ __('Construction et Immobilier') }}</option>
                                        <option value="Secteur Public">{{ __('Secteur Public') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country">
                                        {{ __('Pays de Naissance') }}
                                    </label>
                                    <select id="country" wire:model="state.country" name="country"
                                        class="form-control text-dark input-select bg-white">
                                        @include('user-space.candidates.others.country-select')
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div wire:loading wire:target="updateCandidate" class="btn" disabled
                        style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                    </div>
                    <div wire:loading.remove wire:target="updateCandidate">
                        <button type="submit" wire:click="updateCandidate" class="btn btn-warning ml-1"
                            data-dismiss="modal">
                            <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Modifier</span>
                        </button>
                        <button type="button" data-dismiss="modal" aria-label="Close"
                            class="btn btn-light-secondary">
                            <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Annuler</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div wire:loading @class(['modal-content border-top rounded-lg border-warning']) style="border-width: 8px !important">
            <div class="border-0 rounded text-center py-4" style="height: 150px">
                <div class="spinner-border spinner-border-sm text-primary" style="margin-top:50px">
                </div>
            </div>
        </div>
    </div>
</div>
