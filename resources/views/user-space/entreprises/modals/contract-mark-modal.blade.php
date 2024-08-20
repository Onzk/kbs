<div class="modal fade text-left" id="setMr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg  " role="document">
        <div wire:loading.remove wire:target="current_id" @class([
            'modal-content border-top rounded-lg',
            'border-success' => $current_id == '',
            'border-warning' => $current_id != '',
        ])
            style="border-width: 8px !important">
            <div class="modal-header bg-white">
                <h4 class="modal-title text-dark" id="myModalLabel33">
                    {{ __('Formulaire de notation') }}
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit="setMarkReview">
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
                    <div class="form-group col-12 text-center">
                        <label class="text-start w-100">Note</label>
                        @php($rate = $state['rate'] ?? 1)
                        <div class="d-flex justify-content-center align-items-center w-100 border rounded px-2 py-0 star-rating text-center"
                            required>
                            <input type="radio" id="5-stars" wire:model.live="state.rate" value="5" />
                            <label for="5-stars" style="font-size: 32px" @class(['star mr-2', 'text-warning' => $rate >= 5])>
                                &#9733;
                            </label>
                            <input type="radio" id="4-stars" wire:model.live="state.rate" value="4" />
                            <label for="4-stars" style="font-size: 32px" @class(['star mr-2', 'text-warning' => $rate >= 4])>
                                &#9733;
                            </label>
                            <input type="radio" id="3-stars" wire:model.live="state.rate" value="3" />
                            <label for="3-stars" style="font-size: 32px" @class(['star mr-2', 'text-warning' => $rate >= 3])>
                                &#9733;
                            </label>
                            <input type="radio" id="2-stars" wire:model.live="state.rate" value="2" />
                            <label for="2-stars" style="font-size: 32px" @class(['star mr-2', 'text-warning' => $rate >= 2])>
                                &#9733;
                            </label>
                            <input type="radio" id="1-star" wire:model.live="state.rate" value="1" />
                            <label for="1-star" style="font-size: 32px" @class(['star mr-2', 'text-warning' => $rate <= 5])>
                                &#9733;
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Commentaire</label>
                        <textarea type="text" rows="6" minlength="8" maxlength="255" required class="form-control"
                            wire:model="state.comment" placeholder="{{ __('Donnez votre avis sur la qualité du candidat . . .') }}"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="status">
                                {{ __('Status') }}
                            </label>
                            <select class="form-control" wire:model="state.status" required id="status">
                                <option value="ongoing">{{ __('EN COURS') }}</option>
                                <option value="finished">{{ __('TERMINE') }}</option>
                                <option value="aborted">{{ __('ANNULE') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div wire:loading wire:target="setMarkReview" class="btn" disabled style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                    </div>
                    <div wire:loading.remove wire:target="setMarkReview">
                        <button type="submit" wire:click="setMarkReview" class="btn btn-warning ml-1"
                            data-dismiss="modal">
                            <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Confirmer</span>
                        </button>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-light-secondary">
                            <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                            <span class="d-none d-sm-block">Annuler</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div wire:loading wire:target="current_id" @class(['modal-content border-top rounded-lg border-warning']) style="border-width: 8px !important">
            <div class="border-0 rounded text-center py-4" style="height: 150px">
                <div class="spinner-border spinner-border-sm text-primary" style="margin-top:50px">
                </div>
            </div>
        </div>
    </div>
</div>
