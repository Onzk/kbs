<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Avancées</h3>
                <p class="text-subtitle text-muted">
                    Configurations avancées du site vitrine.
                </p>
            </div>
        </div>
    </div>
    @php($models = $this->loadData())
    <section class="section">
        <div class="card pb-0  border-0">
            <div class="card-header px-2 py-3 w-100 bg-primary">
                <div class="col-md-6 text-left">
                    <span class="text-sm px-2 text-white">Configurations</span>
                </div>
            </div>
            <div class="card-body px-0 pb-0 pt-0 mb-0">
                <table class="table mb-0 border-bottom table-bordered shadow-md">
                    <thead class="bg-primary text-white pt-2 border border-dark text-center">
                        <tr>
                            <th class="">Configuration</th>
                            <th class="">Valeur</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold text-center">
                        <tr>
                            <td colspan="5" class="text-dark bg-grey">
                                -- SECTION CANDIDAT --
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __("Nombre d'Années d'Expériences Requis") }}
                            </td>
                            <td>
                                <input id="min_year" type="number" wire:model="config_form.min_year"
                                    placeholder="{{ __('Valeur') }}" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __("Frais d'Inscription (FCFA)") }}
                            </td>
                            <td>
                                <input id="cantidate_cautious" type="number" min="1"
                                    wire:model="config_form.cantidate_cautious" placeholder="{{ __('Valeur') }}"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __('Nombre Maximal de Documents de Références') }}
                            </td>
                            <td>
                                <input id="max_references_upload" type="number" required min="1"
                                    wire:model="config_form.max_references_upload" placeholder="{{ __('Valeur') }}"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __('Nombre Maximal de Documents de Réalisations') }}
                            </td>
                            <td>
                                <input id="max_realisations_upload" type="number" required min="1"
                                    wire:model="config_form.max_realisations_upload" placeholder="{{ __('Valeur') }}"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __("Nombre Maximal de Liens d'Articles") }}
                            </td>
                            <td>
                                <input id="max_links" type="number" required min="1"
                                    wire:model="config_form.max_links" placeholder="{{ __('Valeur') }}"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __('Politique de confidentialité') }}
                            </td>
                            <td>
                                <textarea rows="40" id="candidate_privacy_policy" wire:model="config_form.candidate_privacy_policy"
                                    placeholder="{{ __('Valeur') }}" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __("Conditions d'Utilisation") }}
                            </td>
                            <td>
                                <textarea rows="40" id="candidate_terms" wire:model="config_form.candidate_terms" placeholder="{{ __('Valeur') }}"
                                    class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-dark bg-grey">
                                -- SECTION ENTREPRISE --
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __("Frais d'Inscription (FCFA)") }}
                            </td>
                            <td>
                                <input id="entreprise_cautious" type="number" min="1"
                                    wire:model="config_form.entreprise_cautious" placeholder="{{ __('Valeur') }}"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __('Politique de confidentialité') }}
                            </td>
                            <td>
                                <textarea rows="40" id="entreprise_privacy_policy" wire:model="config_form.entreprise_privacy_policy"
                                    placeholder="{{ __('Valeur') }}" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __("Conditions d'Utilisation") }}
                            </td>
                            <td>
                                <textarea rows="40" id="entreprise_terms" wire:model="config_form.entreprise_terms"
                                    placeholder="{{ __('Valeur') }}" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-dark bg-grey">
                                -- AUTRES --
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __('Page Facebook') }}
                            </td>
                            <td>
                                <input id="facebook" type="url" min="2"
                                    pattern="(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?"
                                    wire:model="config_form.facebook" placeholder="{{ __('Valeur') }}"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __('Page Linkedin') }}
                            </td>
                            <td>
                                <input id="facebook" type="url" min="2"
                                    pattern="(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?"
                                    wire:model="config_form.facebook" placeholder="{{ __('Valeur') }}"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 350px" class="py-1">
                                {{ __('Lien Tweeter') }}
                            </td>
                            <td>
                                <input id="tweeter" type="url" min="2"
                                    pattern="http(?:s)?:\/\/(?:www\.)?twitter\.com\/([a-zA-Z0-9_]+)"
                                    wire:model="config_form.tweeter" placeholder="{{ __('Tweeter') }}"
                                    class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12 p-4">
                    <div wire:loading wire:target="saveConfig,reload" class="btn" disabled
                        style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status">
                        </div>
                    </div>
                    <div class="mt-2" wire:loading.remove wire:target="saveConfig,reload">
                        <a data-toggle="modal" data-target="#confirmSaveConfig"
                            class="btn col-md-3 icon icon-left btn-primary">
                            Sauvegarder
                        </a>
                        <div class="modal fade text-left" wire:ignore.self id="confirmSaveConfig" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xs  " role="document">
                                <form wire:submit="saveConfig" class="modal-content">
                                    <div class="modal-header bg-danger">
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
                                                <div wire:loading.remove
                                                    class="alert alert-success fw-bold text-white">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="text-center text-dark fw-bold w-100">
                                            {{ __('Voulez-vous enregistrer ces modifications ? Entrez votre mot de passe pour confirmer.') }}
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="password">
                                                {{ __('Mot de passe') }}
                                            </label>
                                            <input id="password" type="password" required wire:model="password"
                                                placeholder="{{ __('Mot de passe') }}" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div wire:loading wire:target="saveConfig" class="btn" disabled
                                            style="pointer-events: none">
                                            <div class="spinner-border spinner-border-sm text-primary" role="status">
                                            </div>
                                        </div>
                                        <div wire:loading.remove wire:target="saveConfig">
                                            <button type="submit" class="btn btn-danger ml-1">
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
                        <button wire:click.prevent="reload" class="btn icon icon-left btn-light">
                            Annuler
                        </button>
                    </div>
                </div>
                @include('components.alert')
            </div>
        </div>
    </section>
</div>
