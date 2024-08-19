@php($_user = Auth::guard('web')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <h3 class="text-primary">Discussions</h3>
        <p class="text-subtitle text-muted">Envoyez et recevez des messages aux Candidats ou Entreprises en temps-réel.
        </p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header px-2 py-1 w-100 text-left bg-primary">
                        <div class="text-sm mt-2 px-2 mb-2 text-white">Contacts</div>
                        <div class="m-2 mt-2 form-group d-flex">
                            <input type="text" class="form-control col pb-1 text-dark" wire:model.live="search"
                                placeholder="Rechercher..." />
                            <button disabled wire:loading wire:target="search,tab"
                                class="input-group-text icon bg-primary border-0 rounded">
                                <div class="spinner-border ml-3 spinner-border-sm text-white" role="status">
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-tabs border-bottom" id="myTab" role="tablist">
                            <li class="nav-item col text-center" role="presentation">
                                <a @class([
                                    'nav-link fw-bold py-4 d-flex justify-content-center align-items-center',
                                    'active' => $tab == 0,
                                ]) wire:click.prevent="$set('tab', 0)" id="candidate-tab"
                                    data-toggle="tab" href="#candidate" role="tab" aria-controls="candidate"
                                    aria-selected="false">
                                    Candidats
                                    @if ($nb = $_user->count_new_messages_from_category('candidate'))
                                        <span
                                            class="px-2 py-1 mx-2 bg-success text-xs rounded">{{ $nb }}</span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item col text-center" role="presentation">
                                <a @class([
                                    'nav-link fw-bold py-4 d-flex justify-content-center align-items-center',
                                    'active' => $tab == 1,
                                ]) wire:click.prevent="$set('tab', 1)" id="entreprise-tab"
                                    data-toggle="tab" href="#entreprise" role="tab" aria-controls="entreprise"
                                    aria-selected="false">
                                    Entreprises
                                    @if ($nb = $_user->count_new_messages_from_category('entreprise'))
                                        <span
                                            class="px-2 py-1 mx-2 bg-success text-xs rounded">{{ $nb }}</span>
                                    @endif
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent" style="height: 72vh; overflow-y: auto">
                            <div @class(['tab-pane fade', 'show active' => $tab == 0]) id="candidate" role="tabpanel"
                                aria-labelledby="candidate-tab">
                                <div class="col-md-12">
                                    @forelse ($this->loadData() as $model)
                                        @include('admin.modules.chat-contact', ['key' => 'candidate'])
                                        <hr class="divider py-0 my-0" />
                                    @empty
                                        <div class="text-center fw-bold text-primary m-4 w-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                style="width: 50px; height: 50px;" fill="currentColor"
                                                class="m-2 text-primary">
                                                <path fill-rule="evenodd"
                                                    d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <br><br>
                                            {{ __('Aucun candidat trouvé.') }}
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            <div @class(['tab-pane fade', 'show active' => $tab == 1]) id="entreprise" role="tabpanel"
                                aria-labelledby="entreprise-tab">
                                <div class="col-md-12">
                                    @forelse ($this->loadData() as $model)
                                        @include('admin.modules.chat-contact', ['key' => 'entreprise'])
                                    @empty
                                        <div class="text-center fw-bold text-primary m-4 w-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                style="width: 50px; height: 50px;" fill="currentColor"
                                                class="m-2 text-primary">
                                                <path fill-rule="evenodd"
                                                    d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <br><br>
                                            {{ __('Aucune entreprise trouvée.') }}
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8" wire:poll>
                @if (strlen(trim($current_id)))
                    <div class="card" wire:loading.remove wire:target="current_id">
                        <div class="card-header bg-primary">
                            <div class="media d-flex align-items-center">
                                <div class="avatar mr-3">
                                    <img src="{{ asset($current_model->photo) . '?' . rand() }}" alt=""
                                        srcset="">
                                </div>
                                <div class="name flex-grow-1">
                                    <h6 class="mb-1 text-white">{{ $current_model->fullname() }}</h6>
                                    <span class="text-white">Domaine :
                                        {{ $current_model->domain ?? $current_model->sector }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 bg-grey" id="box" style="height: 70vh; overflow-y: auto">
                            <div class="chat-content pb-4">
                                @forelse ($this->loadChats() as $model)
                                    @if ($model->user_id == null)
                                        <div class="chat chat-left my-4">
                                            <div class="chat-body mb-4">
                                                <div class="chat-message col-12 col-md-4">
                                                    <p>
                                                        {{ $model->content }}
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
                                    @else
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
                                    @endif
                                @empty
                                    <div class="fw-bold w-100 text-center col-12 d-flex align-items-center text-primary justify-content-center"
                                        style="height: 62vh">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="mx-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        Discutez avec {{ $current_model->fullname() }} ici.
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
                            <form wire:submit="send"
                                class="px-4 input-group d-flex flex-direction-column align-items-center">
                                <div class="d-flex flex-grow-1">
                                    <input type="text" required wire:model="message" minlength="1"
                                        class="form-control" style="font-size: 16px"
                                        placeholder="{{ __('Entrez votre message') }}...">
                                </div>
                                <button type="submit" class="btn py-2 mx-2 rounded btn-icon btn-primary"
                                    wire:loading.disabled wire:target="send">
                                    <div class="spinner-border spinner-border-sm text-white" wire:loading
                                        wire:target="send" role="status"></div>
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
                @else
                    <div class="card border" wire:loading.remove wire:target="current_id">
                        <div class="card-body">
                            <div class="fw-bold w-100 text-center col-12 d-flex align-items-center text-primary justify-content-center"
                                style="height: 62vh">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                                Sélectionnez un contact pour commencer.
                            </div>
                        </div>
                    </div>
                @endif
                <div class="card border w-100" wire:loading wire:target="current_id">
                    <div class="card-body w-100">
                        <div class="fw-bold w-100 text-center col-12 d-flex align-items-center text-primary justify-content-center"
                            style="height: 62vh">
                            <div>
                                <div class="spinner-border spinner-border-sm text-primary p-4" role="status">
                                </div>
                                <br><br>
                                Chargement . . .
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('scrollDown', (event) => {
                console.log('Ok');
                var objDiv = document.getElementById("box");
                objDiv.scrollTop = objDiv.scrollHeight ? objDiv.scrollHeight : 500;
            });
        });
    </script>
</div>
