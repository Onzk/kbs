<div class="modal fade text-left" id="addAv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg  " role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-white" id="myModalLabel33">
                    Notez et Commentez
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
                    <div class="form-group col-12">
                        <label>Note</label>
                        <div class=" border rounded px-2 py-0 star-rating" required>
                            <input type="radio" id="5-stars" name="rating" value="5" />
                            <label for="5-stars" style="font-size: 24px" class="star mr-2">
                                &#9733;
                            </label>
                            <input type="radio" id="4-stars" name="rating" value="4" />
                            <label for="4-stars" style="font-size: 24px" class="star mr-2">
                                &#9733;
                            </label>
                            <input type="radio" id="3-stars" name="rating" value="3" />
                            <label for="3-stars" style="font-size: 24px" class="star mr-2">
                                &#9733;
                            </label>
                            <input type="radio" id="2-stars" name="rating" value="2" />
                            <label for="2-stars" style="font-size: 24px" class="star mr-2">
                                &#9733;
                            </label>
                            <input type="radio" id="1-star" name="rating" checked value="1" />
                            <label for="1-star" style="font-size: 24px" class="star mr-2">
                                &#9733;
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Commentaire</label>
                        <textarea type="text" rows="6" required class="form-control" placeholder="Ajouter une description du projet"></textarea>
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
