<div class="card wow shadow-lg mb-4 border-primary fadeInUp" data-wow-delay="0.2s" style="border-left-width: 8px">
    <div class="card-body" style="">
        <h5 class="card-title fw-bold">{{ $comment["lastname"] . " " . $comment["firstname"] }}</h5>
        <p class="card-text text-dark">
            {{ $comment["content"] }}
        </p>
        <span class="card-link blockquote-footer">{{ \Carbon\Carbon::parse($comment["created_at"])->diffForHumans() }}</span>
    </div>
</div>
