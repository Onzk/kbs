<div class="modal fade text-left" id="addAv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-white" id="myModalLabel33">
                    Nouvelle compétence
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Compétence</label>
                        <input type="text" placeholder="Compétence" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Percentage</label>
                        <div class="input-group">
                            <input type="number" value="30" required min="1"
                                max="100" class="form-control"/>
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark text-white">%</span>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Annuler</span>
                    </button>
                    <button type="confirm" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Confirmer</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
