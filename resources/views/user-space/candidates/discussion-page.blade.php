@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid" wire:poll>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Discussions</h3>
                <p class="text-subtitle text-muted">Trouvez toutes vos discussions avec nos experts KAPI Consult.</p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <div class="media d-flex align-items-center">
                        <div class="avatar mr-3">
                            <img src="{{ asset('assets/user-space/images/logo.png') }}" alt="" srcset="">
                            <span class="avatar-status bg-success"></span>
                        </div>
                        <div class="name flex-grow-1">
                            <h6 class='mb-0 text-white'>{{ config('app.name') }}</h6>
                            <span class='text-xs'>{{ __('Toujours en ligne') }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 bg-grey" id="box" style="height: 70vh; overflow-y: auto">
                    <div class="chat-content pb-4">
                        @forelse ($_user->messages(true) as $model)
                            @if ($model->user_id == null)
                                <div class="chat my-4">
                                    <div class="chat-body">
                                        <div class="chat-message col-12 col-md-4">
                                            <p>
                                                {{ $model->content }}
                                            </p>
                                            <span class='text-xs border-bottom text-dark'>
                                                {{ $model->at() }} -
                                                @if ($model->readed)
                                                    <span class="fw-bold text-success">vu</span>
                                                @else
                                                    <span class="fw-bold text-secondary">ok</span>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="chat chat-left my-4">
                                    <div class="chat-body mb-4">
                                        <div class="chat-message col-12 col-md-4">
                                            <p>
                                                {{$model->content}}
                                            </p>
                                            <span class='text-xs border-bottom'>
                                                {{ $model->at() }}
                                                @if ($model->is_new())
                                                    - <span class="fw-bold text-success">nouveau</span>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <div class="fw-bold w-100 text-center col-12 d-flex align-items-center text-primary justify-content-center"
                                style="height: 62vh">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                                Discutez avec {{ config('app.name') }} ici pour toutes vos interrogations
                            </div>
                        @endforelse
                        <div class="chat bg-transparent">
                            <div class="chat-message"
                                style="background-color:transparent !important; box-shadow: none !important">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer px-0">
                    <form wire:submit="send" class="px-4 input-group d-flex flex-direction-column align-items-center">
                        <div class="d-flex flex-grow-1">
                            <input type="text" required wire:model="message" minlength="1"
                                class="form-control" style="font-size: 16px"
                                placeholder="{{ __('Entrez votre message') }}...">
                        </div>
                        <button type="submit" class="btn py-2 mx-2 rounded btn-icon btn-primary" wire:loading.disabled
                            wire:target="send">
                            <div class="spinner-border spinner-border-sm text-white" wire:loading wire:target="send"
                                role="status"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 30px" wire:loading.remove
                                wire:target="send" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        var objDiv = document.getElementById("box");
        objDiv.scrollTop = objDiv.scrollHeight;
    </script>
</div>
