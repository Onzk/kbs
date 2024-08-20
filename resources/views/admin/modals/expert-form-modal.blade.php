<div class="modal fade text-left" id="addOrUpdateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg  " role="document">
        <div wire:loading.remove @class([
            'modal-content border-top rounded-lg',
            'border-success' => $current_id == "",
            'border-warning' => $current_id != "",
        ]) style="border-width: 8px !important">
            <div class="modal-header bg-white">
                <h4 class="modal-title text-dark" id="myModalLabel33">
                    {{ __(($model_form == [] or $current_id == "") ? 'Formulaire de création' : 'Formulaire de mise à jour') }}
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit="addOrUpdateExpert">
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
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="lastname">
                                    {{ __('Nom') }}
                                </label>
                                <input id="lastname" type="text" required min="2"
                                    wire:model="model_form.lastname" placeholder="{{ __('Nom') }}" required
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="firstname">
                                    {{ __('Prénoms') }}
                                </label>
                                <input id="firstname" type="text" required min="2"
                                    wire:model="model_form.firstname" placeholder="{{ __('Prénoms') }}" required
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="speciality">
                                    {{ __('Spécialité') }}
                                </label>
                                <input id="speciality" type="text" required min="2"
                                    wire:model="model_form.speciality" placeholder="{{ __('Spécialité') }}" required
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="facebook">
                                    {{ __('Facebook') }}
                                </label>
                                <input id="facebook" type="url" min="2"
                                    pattern="(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?"
                                    wire:model="model_form.facebook" placeholder="{{ __('Facebook') }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="linkedin">
                                    {{ __('Linkedin') }}
                                </label>
                                <input id="linkedin" type="url" min="2"
                                    pattern="https://[a-z]{2,3}\.linkedin\.com\/.*" wire:model="model_form.linkedin"
                                    placeholder="{{ __('Linkedin') }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="twitter">
                                    {{ __('Tweeter') }}
                                </label>
                                <input id="twitter" type="url" min="2"
                                    pattern="http(?:s)?:\/\/(?:www\.)?twitter\.com\/([a-zA-Z0-9_]+)"
                                    wire:model="model_form.twitter" placeholder="{{ __('Tweeter') }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div wire:loading wire:target="addOrUpdateExpert" class="btn" disabled
                        style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                    </div>
                    <div wire:loading.remove wire:target="addOrUpdateExpert">
                        @if ($model_form == [] or $current_id == "")
                            <button type="submit" class="btn btn-success ml-1">
                                <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                                <span class="d-none d-sm-block">Créer</span>
                            </button>
                        @else
                            <button type="submit" wire:click="addOrUpdateExpert" class="btn btn-warning ml-1"
                                data-dismiss="modal">
                                <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                                <span class="d-none d-sm-block">Modifier</span>
                            </button>
                        @endif
                        <button type="reset" class="btn btn-light-secondary">
                            <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Effacer</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div wire:loading @class(['modal-content border-top rounded-lg border-primary']) style="border-width: 8px !important">
            <div class="border-0 rounded text-center py-4" style="height: 150px">
                <div class="spinner-border spinner-border-sm text-primary" style="margin-top:50px">
                </div>
            </div>
        </div>
    </div>
</div>
