@php($_user = Auth::guard('entreprises')->user())
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
            <div class="card-header p-2 mb-2 bg-primary">
                <span class="text-sm px-2 text-white">Filtre</span>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-2 gx-3" style="max-height: 60vh; overflow: auto">
                    @foreach ($_user->positions as $position)
                        <div class="col-lg-3 col-md-6 col-12" style="min-width: 350px">
                            @include('user-space.entreprises.modules.position', [
                                'selected' => $position->id == $search,
                                'out' => false,
                            ])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2 mb-4 bg-primary">
                        <span class="text-sm px-2 text-white">Profils Correspondants</span>
                    </div>
                    <div class="card-body pb-0">
                        <div wire:loading class="col-12 text-center pb-4">
                            <div class="spinner-border text-primary p-4" style="border-width: 4px !important"
                                role="status"></div>
                            <br><br>
                            <span class="fw-bold text-primary"> {{ __('Traitement en cours . . .') }}</span>
                        </div>
                        <div class="row" wire:loading.remove>
                            @if (strlen(trim($search)))
                                @forelse ($matches as $candidate)
                                    @include('user-space.components.candidate')
                                @empty
                                    <div
                                        class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            style="width: 50px" class="mx-2">
                                            <path fill-rule="evenodd"
                                                d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <br><br>
                                        {{ __('Aucun candidat correspondant au profil') }}
                                    </div>
                                @endforelse
                            @else
                                <div
                                    class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        style="width: 50px" class="mx-2">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <br><br>
                                    {{ __('Sélectionnez un profil pour commencer') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.alert')
</div>
