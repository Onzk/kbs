<div class="card text-start px-0 wow fadeInUp mb-4" data-wow-delay="0.2s">
    <div class="card-header bg-primary text-white fw-bold">{{ $post->created_at->diffForHumans() }}</div>
    <img src="{{ asset($post->image) . '?' . rand() }}" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">
            {{ $post->get_short_description() }}
        </p>
        <a href="#" class="btn btn-primary">Lire</a>
    </div>
    <div class="card-footer text-muted">
        {{ count($post->get_comments()) }} commentaire(s)
    </div>
</div>
