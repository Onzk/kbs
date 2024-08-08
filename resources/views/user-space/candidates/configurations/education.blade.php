<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Formation</h3>
                <p class="text-subtitle text-muted">
                    Renseignez tout votre parcours scolaire et universitaire ainsi que vos diplômes et formations.
                </p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-0 mb-4 w-100 text-right bg-dark">
                        <div class="row p-0 justify-content-between align-items-center">
                            <div class="col-md-5 pl-4 ml-3 py-1 text-left">
                                <h4 class="card-title pt-1 text-white">Liste des formations</h4>
                            </div>
                            <div class="col-md-4 text-right">
                                <button type="btn" data-toggle="modal" data-target="#addAv"
                                    class="btn mx-1 icon icon-left btn-success">
                                    <i data-feather="plus" width="20" class="mb-1"></i>
                                    Nouvelle formation
                                </button>
                                @include('user-space.candidates.modals.add-formation-modal')
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-1">
                            @foreach (['04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024'] as $value)
                                <form action="#" style="position: relative" class="border rounded shadow-md mb-3">
                                    <button style="position: absolute; top: 0px; right: 0px; scale: 95%"
                                        class="btn float-right btn-outline-danger border-0 btn-sm icon">
                                        <i data-feather="x" stroke-width="3px" width="30" class="mb-1"></i>
                                    </button>
                                    <div class="py-3 px-2">
                                        <div class="form-group">
                                            <label class="">
                                                Degré
                                            </label>
                                            <input type="text" placeholder="Degré" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Institut</label>
                                            <input type="text" placeholder="A partir du" required
                                                class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label>Du </label>
                                                <input type="date" placeholder="" required class="form-control">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Au </label>
                                                <input type="date" placeholder="Jusqu'au" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea type="text" rows="6" required class="form-control"
                                                placeholder="Ajouter une description de la formation"></textarea>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn col-md-3 icon icon-left btn-primary">
                                Sauvegarder
                            </button>
                            <button type="reset" class="btn icon icon-left btn-light">
                                Annuler
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
