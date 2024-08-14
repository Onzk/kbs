<a href="#" wire:click="$set('choosen', '{{ $candidate->id }}')" class="d-block col-md-6 col-12 wow fade-in mb-2"
    data-wow-delay="0.2s">
    <div class="card border shadow-md rounded hover-scale pb-0" style="border-radius: 0px;">
        <div class="row">
            <div class="col-lg-4 mb-0 col-md-12 col-12" style="min-width: 200px">
                <div class="p-2 pb-0 m-2 mb-0 text-center">
                    <img src="{{ asset($candidate->photo) . '?' . rand() }}"
                        class="shadow-lg bg-transparent p-1 rounded-circle"
                        style="height: 150px; width: 150px; object-fit: cover; border-width: 4px; border-style: dotted"
                        alt="team">
                    <div class="rounded fw-bold mt-3 mb-2">
                        @include('user-space.components.stars', [
                            'default' => 'dark',
                            'size' => 20,
                            'stars' => $candidate->stars(),
                        ])
                        <br>
                        <span class="text-warning">
                            {{ $candidate->rate() }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 text-center text-lg-left col-12">
                <div class="card-body mx-0 px-2 pb-0">
                    <h5 class="card-title mt-0">
                        <span class="fw-bold text-primary">{{ $candidate->lastname }}</span>
                        {{ $candidate->firstname }}
                    </h5>
                    <div class="fw-bold mb-2 py-2 mr-2 text-dark border-bottom border-primary rounded text-sm hide-scrollbar"
                        style="height: 100px; overflow-y:scroll; border-width: 4px !important">
                        {{ $candidate->about ?? '- Aucune description fournie -' }}
                         </div>
                    <p class="card-text my-2">
                        <span class="badge text-xs rounded me-2 mb-1 bg-info">
                            {{ $candidate->nbyear }} ans d'expérience
                        </span>
                        <span class="badge text-xs rounded me-2 mb-1 bg-success">
                            Expertise : {{ $candidate->domain }}
                        </span>
                        <span class="badge text-xs rounded me-2 mb-1 bg-dark">
                            Origine : {{ $candidate->country }}
                        </span>
                        @if ($candidate->has_governance_experience())
                            <span class="badge text-xs rounded me-2 mb-1 bg-succes">
                                Pas d'expérience en gouvernance
                            </span>
                        @else
                            <span class="badge text-xs rounded me-2 mb-1 bg-danger">
                                Aucune expérience en gouvernance
                            </span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</a>
