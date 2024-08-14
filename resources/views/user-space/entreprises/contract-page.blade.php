@php($_user = Auth::guard('entreprises')->user())
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
            <div class="card-header p-2 mb-2 bg-primary">
                <span class="text-sm px-2 text-white">Vos contrats</span>
            </div>
            <div class="card-body p-0">
                <table class='table border-bottom table-bordered table-striped' id="table1">
                    <thead class="bg-primary text-white pt-2">
                        <tr>
                            <th class="py-1">Fait le</th>
                            <th class="py-1">Libellé du poste</th>
                            <th class="py-1">Candidat</th>
                            <th class="py-1">Status</th>
                            <th class="py-1">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($_user->contracts as $model)
                            <tr>
                                <td class="py-1">{{ $model->created_at }}</td>
                                <td class="py-1">{{ $model->title }}</td>
                                <td class="py-1">{{ $model->entreprise->name }}</td>
                                <td class="py-1">
                                    @switch($model->status)
                                        @case('pending')
                                            <span class="badge w-100 rounded bg-warning">En attente</span>
                                        @break

                                        @case('ongoing')
                                            <span class="badge w-100 rounded bg-success">En cours</span>
                                        @break

                                        @case('finished')
                                            <span class="badge w-100 rounded bg-info">Terminé</span>
                                        @break

                                        @case('aborted')
                                            <span class="badge w-100 rounded bg-danger">Annulé</span>
                                        @break

                                        @default
                                            <span class="badge w-100 rounded bg-secondary">Inconnu</span>
                                    @endswitch
                                </td>
                                <td class="py-1">
                                    <div class="d-inline-block w-100">
                                        <button type="button" class="px-2 btn btn-outline-primary" data-toggle="modal"
                                            data-target="#exampleModalScrollable">
                                            <i data-feather="eye"></i>
                                        </button>
                                        @include('user-space.entreprises.modals.contract-modal')
                                        @if ($model->status == 'pending' or $model->status == 'oingoing')
                                            <button type="button" class="px-2 btn btn-outline-warning"
                                                data-toggle="modal" data-target="#addAv">
                                                <i data-feather="star"></i>
                                            </button>
                                            @include('user-space.entreprises.modals.add-review-modal')
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="30" class="text-center">
                                        <span class="fw-bold">{{ __("Aucun contrat pour l'instant") }}</span>
                                    </td>
                                </tr>
                            @endforelse
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
