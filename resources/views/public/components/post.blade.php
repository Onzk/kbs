<div class="card text-start px-0 wow shadow-lg shadow-primary border-0 fadeInUp mb-4 rounded" style="overflow: hidden"
    data-wow-delay="0.2s">
    <img src="{{ asset($model->photo) . '?' . rand() }}" style="height: 550px; object-fit: cover"
        class="card-img-top rounded-0" alt="">
    <div class="card-body">
        <h5 class="card-title mt-2 fw-bold text-dark">
            <a href="{{ route('public.media-news.blog-show', ['post' => $model]) }}">
                {{ $model->title }}
            </a>
        </h5>
        <p class="card-text">
            {{ $model->get_short_description(350) }}
        </p>
        <a href="{{ route('public.media-news.blog-show', ['post' => $model]) }}" class="btn btn-primary px-4">Lire</a>
    </div>
    <div class="card-footer text-muted fw-bold">
        {{ $model->created_at->diffForHumans() }}
        &nbsp;
        <span class="badge bg-primary rounded">
            {{ count($model->get_comments()) }} commentaire(s)
        </span>
    </div>
</div>
