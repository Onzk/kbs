<div class="col-md-6 col-12 mb-3">
    <div class="form-group shadow">
        <div class="form-control p-4">
            <div class="row align-items-center justify-content-start mb-2">
                <div class="col-md-2" style="max-width: 60px">
                    <div class="avatar">
                        <img src="{{ asset($model->entreprise->photo) }}" class="border rounded-circle border-primary"
                            style="width:50px; height: 50px; object-fit: cover;" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="mx-1">
                        <span class="text-primary" style="font-weight: bold; font-size: 18px">
                            {{ $model->entreprise->name }}
                        </span>
                        <br>
                        <span class="text-dark" style="font-size: 12px">
                            {{ $model->entreprise->description ?? '-' }}
                        </span>
                    </div>
                </div>
            </div>
            <hr>
            <p class="align-middle">
                @include('user-space.components.stars', [
                    'default' => 'dark',
                    'size' => 15,
                    'stars' => (int) $model->rate,
                ])
            </p>
            <p>
                {{ $model->comment }}
            </p>
            <span style="height: 30px" class="text-muted">{{ $model->updated_at->diffForHumans() }}</span>
        </div>
    </div>
</div>
