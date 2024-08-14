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
                    @forelse ($_user->positions as $position)
                        <div class="col-lg-3 col-md-6 col-12" style="min-width: 350px">
                            @include('user-space.entreprises.modules.position', [
                                'selected' => $position->id == $search,
                                'out' => false,
                            ])
                        </div>
                    @empty
                        <div
                            class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                style="width: 50px" class="mx-2">
                                <path fill-rule="evenodd"
                                    d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                            </svg>
                            <br><br>
                            {{ __('Aucun profil recherché trouvé') }}
                            <br><br>
                            <a href="{{ route('entreprise-space.configurations', ['config' => 'profils-recherchés']) }}"
                                class="btn pt-2 icon icon-left btn-success">
                                <span wire:ignore>
                                    <i data-feather="plus" class="text-white" width="20" class="mb-1"></i>
                                </span>
                                Nouveau Profil
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @if (count($_user->positions))
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" style="width: 50px" class="mx-2">
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
    @endif
</div>
