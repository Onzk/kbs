<form wire:submit="submition">
    <div class="row g-3">
        @if ($step == 0)
            <div class="col-md-6">
                <div class="form-floating">
                    <input required wire:model="state.name" type="text" class="form-control text-dark" id="name"
                        placeholder="Nom de l'entreprise">
                    <label for="name">Nom de l'entreprise <span class="text-primary">*</span></label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input required wire:model="state.size" type="number" min="1" class="form-control text-dark"
                        id="name" placeholder="Nombre d'employés">
                    <label for="name">Taille <span class="text-primary">*</span></label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <select required id="sector" wire:model.live="state.sector" name="sector"
                        class="form-control pb-1 text-dark input-select bg-white">
                        @include('user-space.candidates.others.activity-select')
                    </select>
                    <label for="sector">Secteur d'Activité <span class="text-primary">*</span></label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input required wire:model="state.hq_address" type="text" class="form-control text-dark"
                        id="address" placeholder="Adresse du siège">
                    <label for="address">Adresse du siège <span class="text-primary">*</span></label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input wire:model="state.website" type="url" class="form-control text-dark" id="website"
                        placeholder="Site web">
                    <label for="website">Site web </label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input required wire:model="state.email" type="email" class="form-control text-dark"
                        id="email" placeholder="Adresse mail">
                    <label for="email">Adresse mail<span class="text-primary">*</span></label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea required wire:model="state.description" class="form-control text-dark"
                        placeholder="Activité, Missions, Visions, Valeurs, etc..." id="message" style="height: 100px"></textarea>
                    <label for="description">Activité, Missions, Visions, Valeurs, etc... <span
                            class="text-primary">*</span></label>
                </div>
            </div>
        @elseif ($step == 1)
            <div class="col-12 ">
                <div
                    class="rounded bg-primary shadow-lg text-center d-block justify-content-center align-items-center fw-bold text-white py-4 mb-4">
                    <svg style="width: 60px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="mx-2">
                        <path fill-rule="evenodd"
                            d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <br><br>
                    <span class="">
                        {{ __('Mot de passe') }}
                    </span>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <input required type="password" wire:model="state.password" class="form-control text-dark text-dark"
                        id="password">
                    <label for="password">{{ __('Mot de passe') }} <span class="text-primary">*</span></label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <input required type="password" wire:model="state.password_confirmation"
                        class="form-control text-dark text-dark" id="password_confirmation">
                    <label for="password_confirmation">{{ __('Confirmer le mot de passe') }} <span
                            class="text-primary">*</span></label>
                </div>
            </div>
        @elseif($step == 2)
            <div class="col-12">
                <div
                    class="rounded bg-primary shadow-lg text-center d-block justify-content-center align-items-center fw-bold text-white py-4 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 60px" viewBox="0 0 24 24" fill="currentColor"
                        class="mx-2">
                        <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                        <path fill-rule="evenodd"
                            d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                            clip-rule="evenodd" />
                        <path
                            d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                    </svg>

                    <br><br>
                    <span class="">
                        {{ __('Paiement') }}
                    </span>
                </div>
            </div>
            <div class="col-12">
                <div class="alert alert-success text-success fw-bold">
                    &check;
                    {{ __("Procédez au paiement pour terminer la création de votre compte. Les frais d'inscription s'élèvent à :price FCFA.", ['price' => \App\Models\Config::retreive('entreprise_autious', 30000)]) }}
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
            <button class="btn btn-primary py-3 px-4 col-12" wire:loading.disabled wire:target="submition"
                type="submit">
                <div class="spinner-border spinner-border-sm text-white" wire:loading wire:target="submition"
                    role="status"></div>
                <span wire:loading.remove wire:target="submition">
                    @if ($step == 0)
                        {{ __('Créer mon compte') }}
                    @elseif ($step == 1)
                        {{ __('Définir mon mot de passe') }}
                    @else
                        {{ __('Continuer') }}
                    @endif
                </span>
            </button>
        </div>
    </div>
</form>
