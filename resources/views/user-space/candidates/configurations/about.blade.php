@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">{{ __('A propos') }}</h3>
                <p class="text-subtitle text-muted">
                    {{ __('Configurez ici les informations personnelles vous concernant.') }}
                </p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch" style="min-width: 200px">
                <div class="card border w-100">
                    <div class="card-header p-2 bg-primary mb-2">
                        <span class="text-sm px-2 text-white">{{ __('Photo de profil') }}</span>
                    </div>
                    <div class="card-body pt-3">
                        <form enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <div class="mb-2">
                                    <img src="{{ asset($_user->photo) . '?' . rand() }}" id="imgProfile"
                                        class="p-1 rounded-circle"
                                        style="object-fit: cover; height: 160px; width: 160px; border: black 4px dashed"
                                        alt="">
                                    <input class="form-control bg-white" wire:model.live="photo" type="file"
                                        id="profile" accept="image/*" hidden />
                                </div>
                                <br>
                                <div class="spinner-border spinner-border-sm m-2 text-primary" wire:loading
                                    wire:target="photo" role="status"></div>
                                <div wire:loading.remove wire:target="photo">
                                    <label for="profile" style="cursor: pointer;" class="btn icon btn-primary text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 30px;"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                        <span style="text-transform: none">
                                            Modifier
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                   <div class="card-header p-2 bg-primary mb-2">
                        <span class="text-sm px-2 text-white">{{ __('Informations personnelles & Contacts') }}</span>
                    </div>
                    <div class="card-body pt-3">
                        <form>
                            <div class="form-group">
                                <label for="lastname">
                                    {{ __('Nom') }}
                                    <span class="text-primary label-indic">
                                        ({{ __('modification impossible') }})
                                    </span>
                                </label>
                                <p class="form-control" id="lastname">
                                    {{ $_user->lastname }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="firstname">
                                    {{ __('Prénoms') }}
                                    <span class="text-primary label-indic">
                                        ({{ __('modification impossible') }})
                                    </span>
                                </label>
                                <p class="form-control" id="firstname">
                                    {{ $_user->firstname }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="lastname">
                                    {{ __('Courriel') }}
                                    <span class="text-primary label-indic">
                                        ({{ __('modification impossible') }})
                                    </span>
                                </label>
                                <p class="form-control" id="lastname">
                                    {{ $_user->email }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="lastname">
                                    {{ __('Numéro de Téléphone') }}
                                    <span class="text-primary label-indic">
                                        ({{ __('modification impossible') }})
                                    </span>
                                </label>
                                <p class="form-control" id="lastname">
                                    {{ $_user->tel }}
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header p-2 bg-primary mb-2">
                        <span class="text-sm px-2 text-white">{{ __('Contact Professionnel & Description') }}</span>
                    </div>
                    <div class="card-body pt-3">
                        <form wire:submit="saveAbout">
                            <div class="form-group">
                                <label>{{ __('Profil Linkedin') }}</label>
                                <input wire:model="about_state.linkedin" type="url"
                                    pattern="https://[a-z]{2,3}\.linkedin\.com\/.*"
                                    placeholder="{{ __('Lien vers votre profil linkedin') }}" required
                                    class="form-control">
                            </div>
                            <div class="form-group mb-4">
                                <label for="about">A Propos</label>
                                <textarea required minlength="8" wire:model="about_state.about" class="form-control" id="about" rows="6"
                                    placeholder="Donnez une brève description de vous."></textarea>
                            </div>
                            <div class="mt-4" type="submit">
                                <button type="submit" wire:loading.disabled wire:target="saveAbout"
                                    class="btn col-md-3 icon icon-left btn-primary">
                                    <div class="spinner-border spinner-border-sm text-white" wire:loading wire:target="saveAbout"
                                        role="status"></div>
                                    <span wire:loading.remove wire:target="saveAbout">
                                        Confirmer
                                    </span>
                                </button>
                                <button type="reset" wire:click.prevent="reload" wire:loading.disabled wire:target="saveAbout" class="btn icon icon-left btn-light">
                                    Annuler
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header p-2 bg-primary mb-2">
                        <span class="text-sm px-2 text-white">{{ __('Mot de passe') }}</span>
                    </div>
                    <div class="card-body pt-3">
                        <form wire:submit="savePassword">
                            <div class="form-group">
                                <label>{{ __('Nouveau mot de passe') }}</label>
                                <input wire:model="password" type="password"
                                    placeholder="{{ __('Nouveau mot de passe') }}" required
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>{{ __('Confirmer mot de passe') }}</label>
                                <input wire:model="password_confirmation" type="password"
                                    placeholder="{{ __('Confirmer nouveau mot de passe') }}" required
                                    class="form-control">
                            </div>
                            <div class="mt-4" type="submit">
                                <button type="submit" wire:loading.disabled wire:target="savePassword"
                                    class="btn icon icon-left btn-primary">
                                    <div class="spinner-border spinner-border-sm text-white" wire:loading wire:target="savePassword"
                                        role="status"></div>
                                    <span wire:loading.remove wire:target="savePassword">
                                        Confirmer
                                    </span>
                                </button>
                                <button type="reset" wire:loading.disabled wire:target="savePassword" class="btn icon icon-left btn-light">
                                    Annuler
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.alert')
</div>

@push('live.scripts')
    <script>
        document.getElementById("profile").onchange = function(event) {
            document.getElementById("imgProfile").src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush
