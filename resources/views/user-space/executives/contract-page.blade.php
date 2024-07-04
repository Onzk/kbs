<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Contrats</h3>
                <p class="text-subtitle text-muted">
                    Voici la liste de tous vos contrats passés via {{ config('app.name') }}.
                </p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                <h4 class="card-title text-white">Liste de vos contrats</h4>
            </div>
            <div class="card-body p-0">
                <table class='table border-bottom table-bordered table-striped' id="table1">
                    <thead class="bg-dark text-white pt-2">
                        <tr>
                            <th class="py-1">Fait le</th>
                            <th class="py-1">Libellé du poste</th>
                            <th class="py-1">Entreprise</th>
                            <th class="py-1">Status</th>
                            <th class="py-1">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-1">12 Juin 2024</td>
                            <td class="py-1">Directeur des opérations</td>
                            <td class="py-1">KOLIBRI Entreprises Lomé</td>
                            <td class="py-1">
                                <span class="badge w-100 rounded bg-success">En cours</span>
                            </td>
                            <td class="py-1">
                                <div class="d-inline-block">
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#exampleModalScrollable">
                                        <i class="mr-2" data-feather="eye"></i>
                                        <span class="text-xs pt-1">Détails</span>
                                    </button>
                                    @include('user-space.executives.modals.contract-modal')
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
