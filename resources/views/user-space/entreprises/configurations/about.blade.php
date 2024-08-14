@php($_user = Auth::guard('entreprises')->user())
<div class="main-content container-fluid" wire:polsl>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">{{ __('A propos') }}</h3>
                <p class="text-subtitle text-muted">
                    {{ __('Configurez ici les informations professionnelles de votre entreprise.') }}
                </p>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a @class(['nav-link', 'active' => $tab == 0]) wire:click.prevent="$set('tab', 0)" id="details-tab" data-toggle="tab"
                href="#details" role="tab" aria-controls="details" aria-selected="false">
                Détails
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a @class(['nav-link', 'active' => $tab == 1]) wire:click.prevent="$set('tab', 1)" id="social-tab" data-toggle="tab"
                href="#social" role="tab" aria-controls="social" aria-selected="false">
                Réseaux Sociaux
            </a>
        </li>
    </ul>
    <br>
    <div class="tab-content" id="myTabContent">
        <div @class(['tab-pane fade', 'show active' => $tab == 0]) id="details" role="tabpanel" aria-labelledby="details-tab">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-4 col-12 d-flex align-items-stretch" style="min-width: 200px">
                        <div class="card border w-100">
                            <div class="card-header p-2 bg-primary mb-2">
                                <span class="text-sm px-2 text-white">{{ __("Logo de l'Entreprise") }}</span>
                            </div>
                            <div class="card-body pt-3">
                                <form enctype="multipart/form-data">
                                    <div class="form-group text-center">
                                        <div class="mb-2">
                                            <img src="{{ asset($_user->photo) . '?' . rand() }}" id="imgProfile"
                                                class="p-1 rounded-circle"
                                                style="object-fit: cover; height: 160px; width: 160px; border: black 4px dashed"
                                                alt="">
                                            <input class="form-control bg-white" wire:model.live="photo" type="file"
                                                id="profile" accept="image/*" hidden />
                                        </div>
                                        <br>
                                        <div class="spinner-border spinner-border-sm m-2 text-primary" wire:loading
                                            wire:target="photo" role="status"></div>
                                        <div wire:loading.remove wire:target="photo">
                                            <label for="profile" style="cursor: pointer;"
                                                class="btn icon btn-outline-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    style="width: 30px;" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                                <span style="text-transform: none">
                                                    Modifier
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 d-flex align-items-stretch" style="min-width: 200px">
                        <div class="card border w-100">
                            <div class="card-header p-2 bg-primary mb-2">
                                <span class="text-sm px-2 text-white">{{ __('Vidéo de Présentation') }}</span>
                            </div>
                            <div class="card-body pt-3">
                                <form enctype="multipart/form-data">
                                    <div class="form-group text-center">
                                        <div class="mb-2">
                                            @if ($_user->presentation_movie)
                                                <video src="{{ asset($_user->presentation_movie) . '?' . rand() }}"
                                                    class="p-1"
                                                    style="object-fit: cover; height: 160px; width: 100%; border: black 4px dashed"
                                                    alt="" controls></video>
                                            @else
                                                <div class="p-1 text-primary pt-4"
                                                    style="object-fit: cover; height: 160px; width: 100%; border: black 4px dashed"
                                                    alt="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 60px"
                                                        viewBox="0 0 24 24" fill="currentColor" class="mx-2">
                                                        <path fill-rule="evenodd"
                                                            d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 18.375V5.625Zm1.5 0v1.5c0 .207.168.375.375.375h1.5a.375.375 0 0 0 .375-.375v-1.5a.375.375 0 0 0-.375-.375h-1.5A.375.375 0 0 0 3 5.625Zm16.125-.375a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h1.5A.375.375 0 0 0 21 7.125v-1.5a.375.375 0 0 0-.375-.375h-1.5ZM21 9.375A.375.375 0 0 0 20.625 9h-1.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h1.5a.375.375 0 0 0 .375-.375v-1.5Zm0 3.75a.375.375 0 0 0-.375-.375h-1.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h1.5a.375.375 0 0 0 .375-.375v-1.5Zm0 3.75a.375.375 0 0 0-.375-.375h-1.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h1.5a.375.375 0 0 0 .375-.375v-1.5ZM4.875 18.75a.375.375 0 0 0 .375-.375v-1.5a.375.375 0 0 0-.375-.375h-1.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h1.5ZM3.375 15h1.5a.375.375 0 0 0 .375-.375v-1.5a.375.375 0 0 0-.375-.375h-1.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375Zm0-3.75h1.5a.375.375 0 0 0 .375-.375v-1.5A.375.375 0 0 0 4.875 9h-1.5A.375.375 0 0 0 3 9.375v1.5c0 .207.168.375.375.375Zm4.125 0a.75.75 0 0 0 0 1.5h9a.75.75 0 0 0 0-1.5h-9Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <br><br>
                                                    <span class="fw-bold">Pas de vidéo de présentation définie</span>
                                                </div>
                                            @endif
                                            <input class="form-control bg-white" wire:model.live="movie" type="file"
                                                id="movie" accept="video/*" hidden />
                                        </div>
                                        <br>
                                        <div class="spinner-border spinner-border-sm m-2 text-primary" wire:loading
                                            wire:target="movie" role="status"></div>
                                        <div wire:loading.remove wire:target="movie">
                                            <label for="movie" style="cursor: pointer;"
                                                class="btn icon btn-outline-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    style="width: 30px;" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                                <span style="text-transform: none">
                                                    Modifier
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-header p-2 bg-primary mb-2">
                                <span class="text-sm px-2 text-white">{{ __('Informations non modifiables') }}</span>
                            </div>
                            <div class="card-body pt-3">
                                <form>
                                    <div class="form-group">
                                        <label for="nom">
                                            {{ __("Nom de l'Entreprise") }}
                                            <span class="text-primary label-indic">
                                                ({{ __('modification impossible') }})
                                            </span>
                                        </label>
                                        <p class="form-control" id="nom">
                                            {{ $_user->name }}
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">
                                            {{ __('Courriel') }}
                                            <span class="text-primary label-indic">
                                                ({{ __('modification impossible') }})
                                            </span>
                                        </label>
                                        <p class="form-control" id="lastname">
                                            {{ $_user->email }}
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header p-2 bg-primary mb-2">
                                <span
                                    class="text-sm px-2 text-white">{{ __('Contact Professionnel & Description') }}</span>
                            </div>
                            <div class="card-body pt-3">
                                <form wire:submit="saveAbout">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>{{ __("Secteur d'Activité") }}</label>
                                                <select required id="sector" wire:model="about_state.sector"
                                                    name="sector" class="form-control text-dark input-select"
                                                    placeholder="{{ __('Lien vers votre profil linkedin') }}">
                                                    @include('user-space.candidates.others.activity-select')
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="size">{{ __("Taille (nombre d'employés)") }}</label>
                                                <input wire:model="about_state.size" type="numeric" min="1"
                                                    placeholder="{{ __("Nombre d'employés") }}" required
                                                    class="form-control" id="size">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="hq">{{ __('Adresse du Siège social') }}</label>
                                                <input wire:model="about_state.hq_address" type="text"
                                                    min="4" placeholder="{{ __('Adresse du siège social') }}"
                                                    required class="form-control" id="hq">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="website">{{ __('Site Web') }}</label>
                                        <input wire:model="about_state.website" type="url"
                                            placeholder="{{ __('Site web') }}" class="form-control" id="website">
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="policy">{{ __("Informations sur la politique de diversité et d'inclusion") }}</label>
                                        <textarea required minlength="8" wire:model="about_state.diversity_policy" class="form-control" id="policy"
                                            rows="6" placeholder="Politique de diversité et d'inclusion."></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="about">Description</label>
                                        <textarea required minlength="8" wire:model="about_state.description" class="form-control" id="about"
                                            rows="6" placeholder="Donnez une brève description."></textarea>
                                    </div>
                                    <div class="mt-4" type="submit">
                                        <button type="submit" wire:loading.disabled wire:target="saveAbout"
                                            class="btn col-md-3 icon icon-left btn-primary">
                                            <div class="spinner-border spinner-border-sm text-white" wire:loading
                                                wire:target="saveAbout" role="status"></div>
                                            <span wire:loading.remove wire:target="saveAbout">
                                                Confirmer
                                            </span>
                                        </button>
                                        <button type="reset" wire:click.prevent="reload" wire:loading.disabled
                                            wire:target="saveAbout" class="btn icon icon-left btn-light">
                                            Annuler
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div @class(['tab-pane fade', 'show active' => $tab == 1]) id="social" role="tabpanel" aria-labelledby="social-tab">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-header px-2 py-1 mb-4 w-100 text-right bg-primary">
                        <div class="row p-0 justify-content-between align-items-center">
                            <div class="col-md-6 text-left">
                                <span class="text-sm px-2 text-white">
                                    {{ __("Liens vers les réseaux sociaux de l'entreprise") }}
                                </span>
                            </div>
                            <div class="col-md-4 text-right">
                                <button type="btn" data-toggle="modal" data-target="#addlink"
                                    class="btn icon py-1 icon-left btn-success">
                                    <span wire:ignore>
                                        <i data-feather="plus" width="20" class="mb-1"></i>
                                    </span>
                                    Ajouter
                                </button>
                                @include('user-space.candidates.modals.add-link-modal', [
                                    'state' => 'about_state.link_form.link',
                                    'placeholder' => 'Liens vers vos réseaux sociaux ...',
                                ])
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (count($links = $_user->get_links()))
                            <form wire:submit="updateLink" class="row">
                                @for ($i = 0; $i < count($links); $i++)
                                    <div class="col-md-6 col-12">
                                        @php($to_remove = str_contains($about_state['link_remove'], $i))
                                        <div class="border w-100 rounded shadow-md p-3 pt-4 mb-3" @style(['position: relative', 'background:#FAFAFA !important' => $to_remove])>
                                            <label for="trashlink{{ $i }}"
                                                wire:click.prevent="toggleDelete('{{ $i }}', 'about_state', 'link_remove')"
                                                style="position: absolute; top: 0px; right: 0px;"
                                                @class([
                                                    'btn m-1 mt-2 d-flex justify-content-center align-items-center float-right fw-bold border-0 btn-sm icon',
                                                    'btn-danger' => $to_remove,
                                                ])>
                                                <input type="checkbox" id="trashlink{{ $i }}"
                                                    style="pointer-events: none" @class([
                                                        'form-check-input form-check-sm form-check-danger mr-1',
                                                        'bg-danger border-0' => $to_remove,
                                                    ])
                                                    @checked($to_remove)>
                                                <span>
                                                    supprimer
                                                </span>
                                            </label>
                                            <div class="px-2 w-100 pt-4 row">
                                                <div class="col-12">
                                                    <div class="form-group w-100">
                                                        <label>
                                                            {{ __('Lien') }}
                                                        </label>
                                                        <input @disabled($to_remove) type="text"
                                                            wire:model="about_state.link.{{ $i }}.link"
                                                            placeholder="{{ __('Lien') }}" required
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </form>
                            <div class="col-12">
                                <div wire:loading wire:target="updateLink,saveLink,reload" class="btn" disabled
                                    style="pointer-events: none">
                                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                                    </div>
                                </div>
                                <div class="mt-2" wire:loading.remove wire:target="updateLink,saveLink,reload">
                                    <a data-toggle="modal" data-target="#confirmLinksUpdate"
                                        class="btn col-md-3 icon icon-left btn-primary">
                                        Sauvegarder
                                    </a>
                                    <div class="modal fade text-left" wire:ignore.self id="confirmLinksUpdate"
                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-xs modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark">
                                                    <h4 class="modal-title text-white" id="myModalLabel33">
                                                        Confirmation
                                                    </h4>
                                                    <button type="button" class="btn bg-white" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" class="text-dark">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18 18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {{ __('Voulez-vous enregistrer vos modifications et vos suppressions ?') }}
                                                </div>
                                                <div class="modal-footer">
                                                    <div>
                                                        <button wire:click.prevent="updateLink" data-dismiss="modal"
                                                            aria-label="Close" type="submit"
                                                            class="btn btn-primary ml-1">
                                                            <span wire:ignore><i
                                                                    class="bx bx-check d-block d-sm-none"></i></span>
                                                            <span class="d-none d-sm-block">Confirmer</span>
                                                        </button>
                                                        <button data-dismiss="modal" aria-label="Close"
                                                            class="btn btn-light-secondary">
                                                            <span wire:ignore><i
                                                                    class="bx bx-x d-block d-sm-none"></i></span>
                                                            <span class="d-none d-sm-block">Annuler</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button wire:click.prevent="reload" class="btn icon icon-left btn-light">
                                        Annuler
                                    </button>
                                </div>
                            </div>
                        @else
                            <div
                                class="fw-bold w-100 text-center col-12 d-block align-items-center text-primary justify-content-center py-4">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    style="width: 60px" class="mx-2">
                                    <path fill-rule="evenodd"
                                        d="M19.902 4.098a3.75 3.75 0 0 0-5.304 0l-4.5 4.5a3.75 3.75 0 0 0 1.035 6.037.75.75 0 0 1-.646 1.353 5.25 5.25 0 0 1-1.449-8.45l4.5-4.5a5.25 5.25 0 1 1 7.424 7.424l-1.757 1.757a.75.75 0 1 1-1.06-1.06l1.757-1.757a3.75 3.75 0 0 0 0-5.304Zm-7.389 4.267a.75.75 0 0 1 1-.353 5.25 5.25 0 0 1 1.449 8.45l-4.5 4.5a5.25 5.25 0 1 1-7.424-7.424l1.757-1.757a.75.75 0 1 1 1.06 1.06l-1.757 1.757a3.75 3.75 0 1 0 5.304 5.304l4.5-4.5a3.75 3.75 0 0 0-1.035-6.037.75.75 0 0 1-.354-1Z"
                                        clip-rule="evenodd" />
                                </svg> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height: 50px"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>...
                                <br><br>
                                {{ __('Aucun lien trouvé') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.alert')
</div>

@push('live.scripts')
    <script>
        document.getElementById("profile").onchange = function(event) {
            document.getElementById("imgProfile").src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush
