<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">FAQs</h3>
                <p class="text-subtitle text-muted">
                    FAQs visibles sur le site vitrine.
                </p>
            </div>
        </div>
    </div>
    @php($models = $this->loadData())
    <section class="section">
        <div class="card pb-0  border-0">
            <div class="card-header px-2 py-3 w-100 text-right bg-primary">
                <div class="row p-0 justify-content-between align-items-center">
                    <div class="col-md-6 text-left">
                        <span class="text-sm px-2 text-white">FAQs</span>
                    </div>
                    <div class="col-md-4 text-right">
                        <button type="button" data-toggle="modal" data-target="#addOrUpdateModal" wire:click="reload"
                            class="btn py-1 icon icon-left btn-success">
                            Ajouter
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-0 pt-0 mb-0">
                <div class="col-12 bg-primary">
                    <div class="input-group border rounded-0 bg-primary py-4 pr-2 rounded-lg border-primary"
                        style="border-width: 5px !important">
                        <span class="input-group-text bg-primary border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-search text-white">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </span>
                        <input type="text" wire:model.live="search" placeholder="{{ __('Rechercher . . .') }}"
                            class="form-control border-0 rounded">
                        <button disabled class="input-group-text icon bg-primary border-0 rounded">
                            <div wire:loading class="spinner-border mx-3 spinner-border-sm text-white" role="status">
                            </div>
                            <div wire:loading.remove class="text-white fw-bold" style="color: white !important">
                                Total : {{ $models->count() }}
                            </div>
                        </button>
                    </div>
                </div>
                <table class="table mb-0 border-bottom table-bordered table-striped shadow-md">
                    <thead class="bg-primary text-white pt-2 border border-dark text-center">
                        <tr>
                            <th class="">Question</th>
                            <th class="">Réponse</th>
                            <th class="">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold">
                        @forelse ($models as $model)
                            <tr>
                                <td class="py-1">{{ $model->question }}</td>
                                <td class="py-1">{{ $model->answer ?? "-" }}</td>
                                <td class="py-1" style="width: 150px;">
                                    <div class="d-inline-block w-100">
                                        <div class="btn-group rounded-lg dropup">
                                            <button type="button" class="btn btn-danger rounded icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10"
                                                        y2="17">
                                                    </line>
                                                    <line x1="14" y1="11" x2="14"
                                                        y2="17">
                                                    </line>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="px-2 py-2 pt-0 text-center">
                                                    <div class="form-group text-dark fw-bold">
                                                        {{ __('Voulez-vous vraiment supprimer cet élément ?') }}
                                                    </div>
                                                    <button type="button"
                                                        wire:click="deleteModel('{{ $model->id }}')"
                                                        class="btn btn-danger btn-sm">Confirmer</button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="px-2 btn btn-warning btn-group"
                                            data-toggle="modal" data-target="#addOrUpdateModal"
                                            wire:click="$set('current_id', '{{ $model->id }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="30" class="text-center">
                                    <span class="fw-bold">{{ __("Aucune question trouvée") }}</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @if (strlen(trim($search)) >= 15)
                    <div class="p-4 pb-2">
                        {{ $models->links() }}
                    </div>
                @endif
                @include('components.alert')
            </div>
        </div>
    </section>
    @include('admin.modals.faq-form-modal')
</div>
