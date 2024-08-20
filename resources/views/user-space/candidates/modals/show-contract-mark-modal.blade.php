<div class="modal fade text-left" id="setMr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg  " role="document">
        <div wire:loading.remove wire:target="current_id" @class(['modal-content border-top rounded-lg border-warning'])
            style="border-width: 8px !important">
            <div class="modal-header bg-white">
                <h4 class="modal-title text-dark" id="myModalLabel33">
                    {{ __('Note & Avis') }}
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div>
                <div class="modal-body">
                    <div class="form-group col-12 text-center">
                        <label class="text-start w-100">Note</label>
                        @php($rate = $state['rate'] ?? 1)
                        @include('user-space.components.stars', [
                            'default' => 'white',
                            'size' => 30,
                            'stars' => $rate,
                        ])
                    </div>
                    <div class="form-group">
                        <label>Commentaire</label>
                        <div class="form-control">
                            {{ $state["comment"] ?? "" }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-light-secondary">
                        <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                        <span class="d-none d-sm-block">Fermer</span>
                    </button>
                </div>
                </form>
            </div>
            <div wire:loading wire:target="current_id" @class(['modal-content border-top rounded-lg border-warning'])
                style="border-width: 8px !important">
                <div class="border-0 rounded text-center py-4" style="height: 150px">
                    <div class="spinner-border spinner-border-sm text-primary" style="margin-top:50px">
                    </div>
                </div>
            </div>
        </div>
    </div>
