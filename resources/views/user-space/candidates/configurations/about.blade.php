<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">A propos</h3>
                <p class="text-subtitle text-muted">
                    Configurez ici les informations personnelles vous concernant.
                </p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                        <h4 class="card-title text-white">Informations personnelles</h4>
                    </div>
                    <div class="card-body pt-3">
                        <form>
                            <div class="form-group">
                                <div class="w-100 mb-2">
                                    <img src="{{ asset('assets/public/img/avatar.png') }}"
                                        class="border w-25 rounded-lg h-25" style="object-fit: cover;" alt=""
                                        srcset="">
                                </div>
                                <a href="#" class="btn w-25 icon icon-left btn-primary">
                                    <i data-feather="camera" width="20" class="mb-1"></i>
                                    Modifier
                                </a>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="lastname">
                                    Nom
                                    <span class="text-primary label-indic">
                                        (modification impossible)
                                    </span>
                                </label>
                                <p class="form-control" id="lastname">
                                    GADJI
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="firstname">
                                    Prénoms
                                    <span class="text-primary label-indic">
                                        (modification impossible)
                                    </span>
                                </label>
                                <p class="form-control" id="firstname">
                                    Maturin A.
                                </p>
                            </div>
                            <div class="form-group mb-4">
                                <label for="about">A Propos</label>
                                <textarea class="form-control" id="about" rows="6" placeholder="Donnez une brève description de vous."></textarea>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn col-md-3 icon icon-left btn-primary">
                                    Confirmer
                                </button>
                                <button type="reset" class="btn icon icon-left btn-light">
                                    Annuler
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
