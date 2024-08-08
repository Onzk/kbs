<form wire:submit="submition">
    <div class="row g-3">
        @if($this->step == 0)
        <div class="col-md-6">
            <div class="form-floating">
                <input required type="text" wire:model="state.lastname" class="form-control" id="name">
                <label for="name">{{ __('Nom') }} <span class="text-primary">*</span> </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input required type="text" wire:model="state.firstname" class="form-control" id="name">
                <label for="name">{{ __('Prénoms') }} <span class="text-primary">*</span> </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input required type="email" wire:model="state.email" class="form-control" id="email">
                <label for="email">{{ __('Courriel') }} <span class="text-primary">*</span> </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input required type="tel" wire:model="state.tel" class="form-control" id="tel">
                <label for="tel">{{ __('Numéro de téléphone') }} <span class="text-primary">*</span> </label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-floating">
                <input required type="text" wire:model="state.country" class="form-control" id="country">
                <label for="country">{{ __('Nationnalité') }} <span class="text-primary">*</span></label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-floating">
                <input required type="url" wire:model="state.linkedin" class="form-control" id="linkedin">
                <label for="linkedin">{{ __('Linkedin') }}</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select id="domain" wire:model.live="state.domain" name="domain"
                    class="form-control input-select bg-white">
                    <option value="Administration" selected>{{ __('Administration') }}</option>
                    <option value="Energie et Ressources naturelles">
                        {{ __('Energie et Ressources naturelles') }}
                    </option>
                    <option value="Mine">{{ __('Mine') }}</option>
                    <option value="Industries">{{ __('Industries') }}</option>
                    <option value="Services">{{ __('Services') }}</option>
                    <option value="Agriculture">{{ __('Agriculture') }}</option>
                    <option value="Construction et Immobilier">{{ __('Construction et Immobilier') }}</option>
                    <option value="Secteur Public">{{ __('Secteur Public') }}</option>
                </select>
                <label for="subject">{{ __("Domaine d'expertise") }} <span class="text-primary">*</span></label>
            </div>
        </div>
        @elseif ($this->step == 1)
        <div class="col-6">
            <div class="form-floating">
                <input required type="password" wire:model="state.password" class="form-control" id="password">
                <label for="password">{{ __('Mot de passe') }} <span class="text-primary">*</span></label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-floating">
                <input required type="password" wire:model="state.password_confirmation" class="form-control" id="password_confirmation">
                <label for="password_confirmation">{{ __('Confirmer le mot de passe') }} <span class="text-primary">*</span></label>
            </div>
        </div>
        @elseif($this->step == 2)
        <div class="col-12">
            <div class="alert alert-success text-success fw-bold">
                &check; {{ __("Procédez au paiement pour terminer la création de votre compte. Les frais d'inscription s'élèvent à :price FCFA.", ["price"=> \App\Models\Config::first()?->candidate_autious ?? 30000]) }}
            </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="col-12" wire:loading.remove>
                <div class="alert alert-danger pb-0">
                    <ul class="text-danger fw-bold">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="col-12">
            <button class="btn btn-primary py-3 px-4 col-12" wire:loading.disaled type="submit">
                <div class="spinner-border spinner-border-sm text-white" wire:loading role="status"></div>
                <span wire:loading.remove>
                    @if ($this->step == 0)
                        {{ __('Créer mon compte') }}
                    @elseif ($this->step == 1)
                        {{ __('Définir mon mot de passe') }}
                    @else
                        {{ __('Continuer') }}
                    @endif
                </span>
            </button>
        </div>
    </div>
</form>
