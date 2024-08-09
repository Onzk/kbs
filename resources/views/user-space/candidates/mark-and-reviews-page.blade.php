@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid" wire:poll>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Notes & Avis</h3>
                <p class="text-subtitle text-muted">
                    Trouvez ici les avis laissés par ceux qui vous ont déjà contactés.
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center h-100">
                @if ($rate = $_user->rate())
                    <span class="text-warning fw-bold h2">
                        {{ $rate }}
                    </span>
                @endif
                <span class="badge rounded" wire:ignore>
                    @php($stars = $_user->stars())
                    <i data-feather="star" style="height: 50px;" fill="{{ $stars >= 1 ? '#F8E05A' : 'white' }}"
                        @class([
                            'text-warning' => $stars >= 1,
                            'text-muted' => $stars < 1,
                            'p-0 m-0',
                        ])></i>
                    <i data-feather="star" style="height: 50px;" fill="{{ $stars >= 2 ? '#F8E05A' : 'white' }}"
                        @class([
                            'text-warning' => $stars >= 2,
                            'text-muted' => $stars < 2,
                            'p-0 m-0',
                        ])></i>
                    <i data-feather="star" style="height: 50px;" fill="{{ $stars >= 3 ? '#F8E05A' : 'white' }}"
                        @class([
                            'text-warning' => $stars >= 3,
                            'text-muted' => $stars < 3,
                            'p-0 m-0',
                        ])></i>
                    <i data-feather="star" style="height: 50px;" fill="{{ $stars >= 4 ? '#F8E05A' : 'white' }}"
                        @class([
                            'text-warning' => $stars >= 4,
                            'text-muted' => $stars < 4,
                            'p-0 m-0',
                        ])></i>
                    <i data-feather="star" style="height: 50px;" fill="{{ $stars >= 5 ? '#F8E05A' : 'white' }}"
                        @class([
                            'text-warning' => $stars >= 5,
                            'text-muted' => $stars < 5,
                            'p-0 m-0',
                        ])></i>
                </span>
            </div>
        </div>
    </div>
    <!-- Reviews start -->
    <div class="col-12">
        <div class="card h-100">
            @php($contracts = $_user->marked_contracts())
            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                <h4 class="card-title text-white">{{ count($contracts ?? []) }} Avis</h4>
            </div>
            <div class="card-body pt-3 pb-0">
                <div class="row">
                    @forelse ($contracts as $model)
                    @include("user-space.candidates.modules.review")
                    @empty
                        <div class="col-12 pb-4 text-center">
                            <span class="fw-bold">{{ __("Aucune note ni avis pour le moment") }}</span>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Reviews end -->

</div>
