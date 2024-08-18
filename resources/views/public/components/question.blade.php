<div class="card col-md-6 col-lg-4 wow fadeInUp rounded-0 hover-scale" data-wow-delay="0.2s">
    <div class="card-body" style="">
        <h5 class="card-title">{{ $model->fullname() }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $model->title }}</h6>
        <p class="card-text">
            {{ $model->description }}
        </p>
        @if($model->answer)
        <p class="card-text bg-primary text-white rounded p-1" style="max-height: 150px; overflow-y: auto">
            <strong>KAPI Consult</strong>
            <br>
            {{ $model->answer }}
        </p>
        @endif
        <span class="card-link blockquote-footer">{{ $model->created_at }}</span>
    </div>
</div>
