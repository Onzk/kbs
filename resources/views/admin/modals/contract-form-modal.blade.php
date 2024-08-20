<div class="modal fade text-left" id="addOrUpdateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg  " role="document">
        <div wire:loading.remove wire:target="current_id" @class([
            'modal-content border-top rounded-lg',
            'border-success' => $current_id == '',
            'border-warning' => $current_id != '',
        ])
            style="border-width: 8px !important">
            <div class="modal-header bg-white">
                <h4 class="modal-title text-dark" id="myModalLabel33">
                    {{ __(($state == [] or $current_id == '') ? 'Formulaire de création' : 'Formulaire de mise à jour') }}
                </h4>
                <button type="button" class="btn bg-white" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="text-dark">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit="addOrUpdateModel">
                <div class="modal-body">
                    <div class="col-12" wire:loading.remove>
                        @if ($errors->any())
                            <div class="alert alert-danger pb-0">
                                <ul class="text-white fw-bold pb-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div wire:loading.remove class="alert alert-danger fw-bold text-white">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div wire:loading.remove class="alert alert-success fw-bold text-white">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">
                                    {{ __('Libellé/Titre') }}
                                </label>
                                <input placeholder="{{ __('Libellé/Titre') }}" type="text" wire:model="state.title"
                                    required class="form-control" id="title" />
                            </div>
                        </div>
                        <div class="col-12 mb-0">
                            <div class="form-group">
                                <label for="search_candidate">
                                    {{ __('Candidat') }}
                                </label>
                                <div class="form-group position-relative has-icon-right">
                                    <input list="candidates" placeholder="{{ __('Candidat') }}" type="email"
                                        wire:model.live="search_candidate" required class="form-control"
                                        id="search_candidate" />
                                    <div wire:loading wire:target="search_candidate" class="form-control-icon">
                                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <datalist id="candidates">
                            @foreach (\App\Models\Candidate::all() as $model)
                                <option value="{{ $model->email }}">{{ $model->fullname() . ' - ' . $model->domain }}
                                </option>
                            @endforeach
                        </datalist>
                        @if (isset($state['candidate_id']) and $state['candidate_id'])
                            @php($model = \App\Models\Candidate::find($state['candidate_id'])->first())
                            @if ($model)
                                <div class="col-12 mb-4 fadeIn">
                                    <div
                                        class="d-flex text-dark border shadow-sm justify-content-between align-items-center p-4 py-2 rounded">
                                        <img src="{{ asset($model->photo) . '?' . rand() }}" class="rounded-circle"
                                            style="width: 70px; height: 70px; object-fit: cover;" alt="">
                                        <div class="ml-4 col p-0">
                                            <div class="fw-bold text-dark line-clamp-1">{{ $model->fullname() }}
                                            </div>
                                            <div class="w-100">
                                                <div class="line-clamp-1 my-2">
                                                    {{ $model->domain }}
                                                </div>
                                                @include('user-space.components.stars', [
                                                    'default' => 'dark',
                                                    'size' => 20,
                                                    'stars' => $model->stars(),
                                                ])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        <div class="col-12">
                            <div class="form-group">
                                <label for="search_entreprise">
                                    {{ __('Entreprise') }}
                                </label>
                                <div class="form-group position-relative has-icon-right">
                                    <input list="entreprises" placeholder="{{ __('Entreprise') }}" type="email"
                                        wire:model.live="search_entreprise" required class="form-control"
                                        id="search_entreprise" />
                                    <div wire:loading wire:target="search_entreprise" class="form-control-icon">
                                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <datalist id="entreprises">
                            @foreach (\App\Models\Entreprise::all() as $model)
                                <option value="{{ $model->email }}">{{ $model->fullname() . ' - ' . $model->sector }}
                                </option>
                            @endforeach
                        </datalist>
                        @if (isset($state['entreprise_id']) and $state['entreprise_id'])
                            @php($model = \App\Models\Entreprise::find($state['entreprise_id'])->first())
                            @if ($model)
                                <div class="col-12 mb-4 fadeIn">
                                    <div
                                        class="d-flex text-dark border shadow-sm justify-content-between align-items-center p-4 py-2 rounded">
                                        <img src="{{ asset($model->photo) . '?' . rand() }}" class="rounded-circle"
                                            style="width: 70px; height: 70px; object-fit: cover;" alt="">
                                        <div class="ml-4 col p-0">
                                            <div class="fw-bold text-dark line-clamp-1">{{ $model->fullname() }}
                                            </div>
                                            <div class="w-100">
                                                <div class="line-clamp-1 my-2">
                                                    {{ $model->sector }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        @if (!($state == [] or $current_id == ''))
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">
                                        {{ __('Status') }}
                                    </label>
                                    <select class="form-control" wire:model="state.status" required id="status">
                                        <option value="pending">{{ __('EN ATTENTE') }}</option>
                                        @if ($state['status'] == 'pending')
                                            @if ($state['entreprise_file'] and $state['candidate_file'] and $state['admin_file'])
                                                <option value="ongoing">{{ __('EN COURS') }}</option>
                                            @endif
                                            @if ($state['status'] == 'ongoing')
                                                <option value="finished">{{ __('TERMINE') }}</option>
                                            @endif
                                        @endif
                                        <option value="aborted">{{ __('ANNULE') }}</option>
                                    </select>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <div wire:loading wire:target="addOrUpdateModel,current_id" class="btn" disabled
                        style="pointer-events: none">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                    </div>
                    <div wire:loading.remove wire:target="addOrUpdateModel,current_id">
                        @if ($state == [] or $current_id == '')
                            <button type="submit" class="btn btn-success ml-1">
                                <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                                <span class="d-none d-sm-block">Créer</span>
                            </button>
                            <button type="reset" class="btn btn-light-secondary">
                                <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                                <span class="d-none d-sm-block">Effacer</span>
                            </button>
                        @else
                            <button type="submit" wire:click="addOrUpdateModel" class="btn btn-warning ml-1"
                                data-dismiss="modal">
                                <span wire:ignore><i class="bx bx-check d-block d-sm-none"></i></span>
                                <span class="d-none d-sm-block">Modifier</span>
                            </button>
                            <button type="button" data-dismiss="modal" aria-label="Close"
                                class="btn btn-light-secondary">
                                <span wire:ignore><i class="bx bx-x d-block d-sm-none"></i></span>
                                <span class="d-none d-sm-block">Annuler</span>
                            </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        <div wire:loading wire:target="current_id" @class(['modal-content border-top rounded-lg border-warning']) style="border-width: 8px !important">
            <div class="border-0 rounded text-center py-4" style="height: 150px">
                <div class="spinner-border spinner-border-sm text-primary" style="margin-top:50px">
                </div>
            </div>
        </div>
    </div>
</div>
