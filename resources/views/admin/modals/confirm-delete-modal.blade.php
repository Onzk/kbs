<div class="modal fade text-left" wire:ignore.self id="confirmDelete" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xs  " role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title text-white" id="myModalLabel33">
                    Confirmation
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                {{ __($message) }}
            </div>
            <div class="modal-footer">
                <div>
                    <button wire:click="confirmDelete('{{ $model }}')" data-dismiss="modal" aria-label="Close" type="submit"
                        class="btn btn-danger ml-1">
                        <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                        <span class="d-none d-sm-block">Confirmer</span>
                    </button>
                    <button data-dismiss="modal" aria-label="Close" class="btn btn-light-secondary">
                        <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                        <span class="d-none d-sm-block">Annuler</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
