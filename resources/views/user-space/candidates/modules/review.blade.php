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
                <span class="badge rounded" wire:ignore>
                    @php($stars = (int) $model->rate)
                    <i data-feather="star" style="height: 20px; width: 20px;"
                        fill="{{ $stars >= 1 ? '#F8E05A' : 'white' }}" @class([
                            'text-warning' => $stars >= 1,
                            'text-muted' => $stars < 1,
                            'p-0 m-0',
                        ])></i>
                    <i data-feather="star" style="height: 20px; width: 20px;"
                        fill="{{ $stars >= 2 ? '#F8E05A' : 'white' }}" @class([
                            'text-warning' => $stars >= 2,
                            'text-muted' => $stars < 2,
                            'p-0 m-0',
                        ])></i>
                    <i data-feather="star" style="height: 20px; width: 20px;"
                        fill="{{ $stars >= 3 ? '#F8E05A' : 'white' }}" @class([
                            'text-warning' => $stars >= 3,
                            'text-muted' => $stars < 3,
                            'p-0 m-0',
                        ])></i>
                    <i data-feather="star" style="height: 20px; width: 20px;"
                        fill="{{ $stars >= 4 ? '#F8E05A' : 'white' }}" @class([
                            'text-warning' => $stars >= 4,
                            'text-muted' => $stars < 4,
                            'p-0 m-0',
                        ])></i>
                    <i data-feather="star" style="height: 20px; width: 20px;"
                        fill="{{ $stars >= 5 ? '#F8E05A' : 'white' }}" @class([
                            'text-warning' => $stars >= 5,
                            'text-muted' => $stars < 5,
                            'p-0 m-0',
                        ])></i>
                </span>
            </p>
            <p>
                {{ $model->comment }}
            </p>
            <span style="height: 30px" class="text-muted">{{ $model->updated_at->diffForHumans() }}</span>
        </div>
    </div>
</div>
