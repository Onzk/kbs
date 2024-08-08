<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Recherche</h3>
                <p class="text-subtitle text-muted">
                    Recherchez les profils d'administrateurs qui vous intéressent.
                </p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                <h4 class="card-title text-white">Filtre</h4>
            </div>
            <div class="card-body">
                <div class="row m-1">
                    <form action="#" class="border rounded shadow-md mb-3">
                        <div class="py-3 px-2">
                            <div class="form-group">
                                <label class="">
                                    Formation suivie
                                </label>
                                <input type="text" placeholder="Recherchez par formation" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="">
                                    Institut de formation
                                </label>
                                <input type="text" placeholder="Recherchez par institut" required class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label>Disponible du </label>
                                    <input type="date" placeholder="" required class="form-control">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Au </label>
                                    <input type="date" placeholder="" required class="form-control">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Années d'expérience minimum </label>
                                    <input type="number" placeholder="" value="10" min="0" max="100" required class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn col-md-3 icon icon-left btn-primary">
                        <i data-feather="search" width="20" class="mb-1"></i>
                        Rechercher
                    </button>
                    <button type="reset" class="btn icon icon-left btn-light">
                        Annuler
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-1 pt-2 mb-4 bg-dark">
                        <h4 class="card-title text-white">Résultat</h4>
                    </div>
                    <div class="card-body pb-0">
                        <div class="row">
                            @for ($i = 0; $i < 8; $i++)
                                @include('user-space.components.executive')
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
