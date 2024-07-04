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
            <div class="card-body p-0">
                <table class='table border-bottom table-bordered table-striped' id="table1">
                    <thead class="bg-dark text-white pt-2">
                        <tr>
                            <th>Fait le</th>
                            <th>Libellé du poste</th>
                            <th>Entreprise</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12 Juin 2024</td>
                            <td>Directeur des opérations</td>
                            <td>KOLIBRI Entreprises Lomé</td>
                            <td class="">
                                <span class="badge w-100 rounded bg-success">En cours</span>
                            </td>
                            <td>
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
