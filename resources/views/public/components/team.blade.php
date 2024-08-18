<div class=" col-md-4 col-12 wow fadeInUp mb-4" data-wow-delay="0.2s">
    <div class="card border-light shadow-sm hover-scale" style="border-radius: 0px;">
        <img src="{{ asset($model->photo) . '?' . rand() }}" class="card-img-top" style="height: 300px; object-fit: cover;"
            alt="team">
        <div class="card-body">
            <h5 class="card-title text-center mt-4">
                <span class="fw-bold text-primary">{{ $model->lastname }}</span>
                {{ $model->firstname }}
            </h5>
            <p class="card-text text-center">
                {{ $model->speciality }}
            </p>
        </div>
        <div class="card-body d-inline-flex align-items-center justify-content-center">
            @if ($model->facebook)
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{ $model->facebook }}"
                    target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            @endif
            @if ($model->twitter)
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{ $model->twitter }}"
                    target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            @endif
            @if ($model->linkedin)
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="{{ $model->linkedin }}"
                    target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            @endif
        </div>
    </div>
</div>
