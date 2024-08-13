@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid">
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
            <div class="card-header p-2 mb-2 bg-primary">
                <span class="text-sm px-2 text-white">Avis ({{ count($contracts ?? []) }})</span>
            </div>
            <div class="card-body pt-3 pb-0">
                <div class="row">
                    @forelse ($contracts as $model)
                    @include("user-space.candidates.modules.review")
                    @empty
                        <div class="col-12 pb-4 text-primary text-center d-block justify-content-center align-items-center">
                            <svg style="width: 60px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mx-2">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                              </svg>
                              <br><br>
                            <span class="fw-bold">{{ __("Aucune note ni avis pour le moment") }}</span>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Reviews end -->

</div>
