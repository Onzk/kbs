<div @class([
    'mb-2 border-left border-primary p-4  rounded d-flex justify-content-between align-items-center',
    'bg-primary border-info' => $selected,
]) style="border-width: 5px !important">
    <span style="pointer-events: none" @class([
        'bg-primary mr-2 badge border-0 rounded-circle',
        'text-white' => $selected,
        'bg-info' => $selected,
    ])>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 35px; height: 40px">
            <path fill-rule="evenodd"
                d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                clip-rule="evenodd" />
            <path
                d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
        </svg>
    </span>
    <span @class([
        'mx-2 col line-clamp-2 fw-bold d-inline fw-bold',
        'text-primary' => !$selected,
        'text-white' => $selected,
    ])>
        {{ $position->title }}
    </span>
    <span>
        <a @if ($out) href="{{ route('entreprise-space.search', ['search' => $position->id]) }}"
            @else wire:click="$set('search', '{{ $position->id }}')" @endif
            @class([
                'btn btn-outline-primary border-0 icon',
                'btn-outline-info' => $selected,
            ])>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-search">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </a>
    </span>
</div>
