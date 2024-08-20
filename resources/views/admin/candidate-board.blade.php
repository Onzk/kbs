<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Planche Candidat</h3>
                <p class="text-subtitle text-muted">
                    Voici la liste de tous les candidats enregitrés.
                </p>
            </div>
        </div>
    </div>
    @php($models = $this->loadData())
    <section class="section">
        <div class="card pb-0  border-0">
            <div class="card-header px-2 py-3 w-100 bg-primary">
                <span class="text-sm px-2 text-white">
                    Candidats Administrateurs Indépendants
                </span>
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
                <div class="table-responsive">
                    <table class="table mb-0 border-bottom table-bordered table-striped shadow-md">
                        <thead class="bg-primary text-white pt-2 border border-dark text-center">
                            <tr>
                                <th class="">Photo</th>
                                <th class="">Nom & Prénoms</th>
                                <th class="">Domaine</th>
                                <th class="">Années d'Expériences</th>
                                <th class="">Pays de Naissance</th>
                                <th class="">Courriel</th>
                                <th class="">Date de Création</th>
                                <th class="">Status</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center fw-bold text-dark">
                            @forelse ($models as $model)
                                <tr>
                                    <td class="py-1" style="width: 100px">
                                        <img src="{{ asset($model->photo) . '?' . rand() }}" class="rounded-circle"
                                            style="width: 50px; height: 50px; object-fit: cover" alt="image" />
                                    </td>
                                    <td class="py-1">{{ $model->fullname() }}</td>
                                    <td class="py-1">{{ $model->domain }}</td>
                                    <td class="py-1">{{ $model->nbyear }}</td>
                                    <td class="py-1">{{ $model->country }}</td>
                                    <td class="py-1">{{ $model->email }}</td>
                                    <td class="py-1">{{ \Carbon\Carbon::parse($model->created_at) }}</td>
                                    @if ($model->trashed())
                                        <td class="py-1 fw-bold text-dark">BLOQUE</td>
                                    @elseif ($model->enabled)
                                        <td class="py-1 fw-bold text-success">ACTIF</td>
                                    @else
                                        <td class="py-1 fw-bold text-danger">INCATIF</td>
                                    @endif
                                    <td class="py-1" style="width: 300px;">
                                        <div class="d-inline-block w-100">
                                            <button type="button" class="px-2 btn btn-primary btn-group"
                                                data-toggle="modal" data-target="#showCandidate"
                                                wire:click="$set('current_id', '{{ $model->id }}')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-info">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" y1="16" x2="12" y2="12">
                                                    </line>
                                                    <line x1="12" y1="8" x2="12.01" y2="8">
                                                    </line>
                                                </svg>
                                            </button>
                                            @if (!$model->trashed())
                                            <a href="{{ route('admin-space.discussions', ['tab' => 0, 'q' => $model->fullname()]) }}"
                                                class="px-2 btn btn-info btn-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-square">
                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <button type="button" class="px-2 btn btn-warning btn-group"
                                                data-toggle="modal" data-target="#updateModal"
                                                wire:click="$set('current_id', '{{ $model->id }}')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg>
                                            </button>
                                            @endif
                                            <button type="button" class="px-2 btn border border-warning btn-group" data-toggle="modal"
                                                data-target="#setDefaultMR"
                                                wire:click="$set('current_id', '{{ $model->id }}')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="orange" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-star text-warning">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                            </button>
                                            @if ($model->trashed())
                                                <div class="btn-group rounded-lg dropup">
                                                    <button type="button" class="btn btn-success rounded icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-refresh-cw">
                                                            <polyline points="23 4 23 10 17 10"></polyline>
                                                            <polyline points="1 20 1 14 7 14"></polyline>
                                                            <path
                                                                d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="px-2 py-2 pt-0 text-center">
                                                            <div class="form-group text-dark fw-bold">
                                                                {{ __('Voulez-vous vraiment récupérer ce compte ?') }}
                                                            </div>
                                                            <button type="button"
                                                                wire:click="switchDeletedState('{{ $model->id }}')"
                                                                @class(['btn btn-success btn-sm'])>
                                                                Confirmer
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                @if ($model->enabled)
                                                    <div class="btn-group rounded-lg dropup">
                                                        <button type="button" class="btn btn-danger rounded icon"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-x">
                                                                <line x1="18" y1="6" x2="6"
                                                                    y2="18"></line>
                                                                <line x1="6" y1="6" x2="18"
                                                                    y2="18"></line>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <div class="px-2 py-2 pt-0 text-center">
                                                                <div class="form-group text-dark fw-bold">
                                                                    {{ __('Voulez-vous vraiment désactiver ce compte ?') }}
                                                                </div>
                                                                <button type="button"
                                                                    wire:click="switchEnabledState('{{ $model->id }}')"
                                                                    @class(['btn btn-danger btn-sm'])>
                                                                    Confirmer
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="btn-group rounded-lg dropup">
                                                        <button type="button" class="btn btn-success rounded icon"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <div class="px-2 py-2 pt-0 text-center">
                                                                <div class="form-group text-dark fw-bold">
                                                                    {{ __('Voulez-vous vraiment activer ce compte ?') }}
                                                                </div>
                                                                <button type="button"
                                                                    wire:click="switchEnabledState('{{ $model->id }}')"
                                                                    @class(['btn btn-success btn-sm'])>
                                                                    Confirmer
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="btn-group rounded-lg dropup">
                                                    <button type="button" class="btn btn-danger rounded icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="px-2 py-2 pt-0 text-center">
                                                            <div class="form-group text-dark fw-bold">
                                                                {{ __('Voulez-vous vraiment supprimer ce compte ?') }}
                                                            </div>
                                                            <button type="button"
                                                                wire:click="switchDeletedState('{{ $model->id }}')"
                                                                @class(['btn btn-danger btn-sm'])>
                                                                Confirmer
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="30" class="text-center">
                                        <span class="fw-bold">{{ __('Aucun candidat trouvé') }}</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if (!strlen(trim($search)) and count($models) >= 15)
                    <div class="p-4 pb-2">
                        {{ $models->links() }}
                    </div>
                @endif
                @include('components.alert')
            </div>
        </div>
    </section>
    @include('admin.modals.show-candidate-modal')
    @include('admin.modals.candidate-form-modal')
    @include('admin.modals.candidate-default-mark-modal')
    {{-- @include('admin.modals.confirm-delete-modal', [
        'message' => 'Voulez-vous vraiment supprimer cet Expert KAPI ?',
        'model' => \App\Models\Expert::class,
    ]) --}}
</div>
