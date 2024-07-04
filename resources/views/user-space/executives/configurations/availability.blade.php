<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Disponibilité</h3>
                <p class="text-subtitle text-muted">
                    Définissez les intervalles de dates durant lesquels vous êtes disponibles pour prendre un emploi ou
                    un projet.
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
                                <h4 class="card-title pt-1 text-white">Intervalles de disponibilité</h4>
                            </div>
                            <div class="col-md-4 text-right">
                                <button type="btn" data-toggle="modal" data-target="#addAv"
                                    class="btn mx-1 icon icon-left btn-success">
                                    <i data-feather="plus" width="20" class="mb-1"></i>
                                    Nouvel intervalle
                                </button>
                                @include('user-space.executives.modals.add-availability-modal')
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach (['02/04/2024 - 02/05/2024', '04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024', '02/04/2024 - 02/05/2024', '04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024'] as $value)
                                <div class="col-md-6 col">
                                    <fieldset class="mb-2">
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark rounded-0 text-white">-</span>
                                            </div>
                                            <input type="date" class="form-control" />
                                            <button type="submit" class="btn icon icon-left btn-danger">
                                                <i data-feather="trash-2" width="20" class="mb-1"></i>
                                            </button>
                                        </div>
                                    </fieldset>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4"> 
                            <button type="submit" class="btn col-md-3 icon icon-left btn-primary">
                                Confirmer
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
