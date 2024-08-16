<div class="col-12 col-md-4">
    <div class="card mb-4">
        @if ($webinary->movie == null)
            <img src="{{ asset($webinary->photo) . '?' . rand() }}" style="width:100%; height:200px; object-fit: cover"
                class="card-img-top" alt="">
        @else
            <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
                <iframe src="{{ asset($webinary->movie) . '?' . rand() }}" width="100%" height="300px" allowfullscreen></iframe>
            </div>
        @endif
        <div class="card-body">
            <h5 class="card-title">
                {{ $webinary->title }} - <span class="fw-bold text-primary" style="font-size: 16px">
                    {{ $webinary->datetime }}</span>
            </h5>
            <p class="card-text line-clamp">{{ $webinary->description }}</p>
            @if ($webinary->movie == null)
                <p class="card-text text-primary link">
                    <a href="{{ $webinary->url }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="text-primary" style="width: 20px">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                        S'inscrire
                    </a>
                </p>
            @endif
        </div>
        <div class="card-footer bg-primary py-2">
            <small class="text-white">{{ $webinary->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>
