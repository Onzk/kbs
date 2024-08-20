@php($_user = Auth::guard('entreprises')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Modèles de Contrat</h3>
                <p class="text-subtitle text-muted">
                    Recherchez des modèles pour vos contrats avec des candidats.
                </p>
            </div>
        </div>
    </div>
    @php($models = $this->loadData())
    <div class="col-12">
        <div class="card">
            <div class="card-header p-2 mb-2 bg-primary">
                <div class="text-sm mt-2 px-2 mb-3 text-white fw-bold">Total {{ count($models) }} modèle(s)</div>
                <div class="m-2 mt-2 input-group d-flex">
                    <input type="text" class="form-control col text-dark" wire:model.live="search"
                        placeholder="Rechercher..." />
                    <button disabled wire:loading wire:target="search"
                        class="input-group-text icon bg-primary border-0 rounded">
                        <div class="spinner-border ml-3 spinner-border-sm text-white" role="status">
                        </div>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-2 gx-3">
                    @forelse ($models as $model)
                        <div class="col-md-4 col-12">
                            @include('user-space.entreprises.modules.contract-template')
                        </div>
                    @empty
                        <div
                            class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height: 50px" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-layout">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                <line x1="9" y1="21" x2="9" y2="9"></line>
                            </svg>
                            <br><br>
                            @if (strlen(trim($search)))
                                {{ __('Aucun modèle trouvé pour le moment') }}
                            @else
                                {{ __('Aucun modèle trouvé') }}
                            @endif
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @include('components.alert')
</div>
