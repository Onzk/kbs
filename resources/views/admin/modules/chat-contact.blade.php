<a href="#" wire:click="$set('current_id', '{{ $model->id }}')" @class([
    'hover-scale d-flex text-dark justify-content-between align-items-center py-3 px-3 rounded-0',
    'border-left border-primary shadow' => $model->id == $current_id,
])
 style="border-left-width : 8px !important" >
    <img src="{{ asset($model->photo) . '?' . rand() }}" class="rounded-circle"
        style="width: 50px; height: 50px; object-fit: cover;" alt="">
    <div class="ml-3 col p-0">
        <div class="fw-bold text-dark line-clamp-1 text-xs">{{ $model->fullname() }}</div>
        <div class="text-sm w-100">
            @php($chat = $model->get_last_message())
            <div class="line-clamp-1 mt-1">
                {{ $chat?->content ?? '- Aucun message -' }}
            </div>
            @if ($chat)
                <span class="fw-bold text-dark text-xs">
                    {{ \Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}
                </span>
            @endif
            @if ($model->enabled)
                <span class="fw-bold badge bg-success rounded px-2 py-1 text-xs">ACTIF</span>
            @else
                <span class="fw-bold badge bg-warning rounded px-2 py-1 text-xs">INACTIF</span>
            @endif
        </div>
    </div>
    <div>
        @if ($nb = $_user->count_new_messages_from($key, $model->id))
            <span class="badge bg-primary pb-2 text-xs rounded">{{ $nb }}</span>
        @endif
    </div>
</a>
