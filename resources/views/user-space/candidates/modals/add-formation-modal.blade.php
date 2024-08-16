<div class="modal fade text-left" id="addAv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
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
            <form wire:submit="saveEducation">
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
                        <label for="level">
                            {{ __('Niveau') }}
                        </label>
                        <input id="level" type="text" required min="2"
                            wire:model="education_state.education_form.level" placeholder="{{ __('Niveau') }}" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="domain">
                            {{ __('Domaine') }}
                        </label>
                        <input id="domain" type="text" required min="2"
                            wire:model="education_state.education_form.domain" placeholder="{{ __('Domaine') }}"
                            required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="intitute">{{ __('Institut') }}</label>
                        <input id="intitute" type="text" required min="2"
                            wire:model="education_state.education_form.institute" placeholder="{{ __('Institut') }}"
                            required class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="year">{{ __("Année d'Optention") }}</label>
                            <input required id="year" type="number"
                                wire:model="education_state.education_form.year" min="1900"
                                max="{{ \Carbon\Carbon::now()->year }}"
                                placeholder="{{ __("Année d'Optention") }}" required class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="country">{{ __('Pays') }}</label>
                            <select id="country" name="country" class="form-control"
                                wire:model="education_state.education_form.country">
                                @include('user-space.candidates.others.country-select')
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div wire:loading wire:target="saveEducation" class="btn" disabled style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                    </div>
                    <div wire:loading.remove wire:target="saveEducation">
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
