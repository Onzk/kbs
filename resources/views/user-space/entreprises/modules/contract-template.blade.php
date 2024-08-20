<div @class([
    'mb-2 border-top w-100 border-primary p-0 rounded shadow d-flex justify-content-between align-items-center',
]) style="border-width: 8px !important">
    <div class="card w-100 m-0 p-0 shadow-none border rounded-0">
        <div class="card-content">
            <div class="card-body pb-1">
                <h4 class="card-title fw-bold text-primary">
                    {{ $model->title }}
                </h4>
                <p class="card-text text-dark">
                    {{ $model->description }}
                </p>
                <embed src="{{ asset($model->demo) . '?' . rand() }}" class="hide-scrollbar"
                    style="width: 100%; height: 30vh;" />
                <div class=" d-flex justify-content-between py-2 align-items-center">
                    <span class="badge rounded bg-primary p-2 fw-bold mr-2">
                        {{ $model->price }} FCFA
                    </span>
                    @php($buyers = $model->get_buyers())
                    <span class="text-primary fw-bold rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-download">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        {{ count($buyers) }}
                    </span>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex pt-1 justify-content-end align-items-center">
            @if (in_array($_user->id, $buyers))
                <button class="btn w-100 btn-success" wire:click="download('{{ $model->id }}')"
                    wire:loading.disabled wire:target="download('{{ $model->id }}')">
                    <div class="spinner-border spinner-border-sm text-white" wire:loading
                        wire:target="download('{{ $model->id }}')" role="status"></div>
                    <span wire:loading.remove wire:target="download('{{ $model->id }}')">
                        Télécharger
                    </span>
                </button>
            @else
                <button class="btn w-100 btn-primary" wire:click="buy('{{ $model->id }}')" wire:loading.disabled
                    wire:target="buy('{{ $model->id }}')">
                    <div class="spinner-border spinner-border-sm text-white" wire:loading
                        wire:target="buy('{{ $model->id }}')" role="status"></div>
                    <span wire:loading.remove wire:target="buy('{{ $model->id }}')">
                        Acheter
                    </span>
                </button>
            @endif
        </div>
    </div>
</div>
