<div class="mr-2 mb-2 d-flex justify-content-start align-items-center">
    <a href="{{ env('APP_URL') }}/{{ $url }}" download class="btn btn-outline-dark badge border-0 rounded">
        <img src="{{ asset('assets/user-space/images/pdf.png') }}" alt="" style="width: 30px">
    </a>
    <span class="mx-2 line-clamp-1 d-inline">
        {{ $title }}
    </span>
</div>
