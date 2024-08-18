<!-- Questions Start -->
<div class="container py-5">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.5s">
        <div class="col-lg-6">
            <h1 class="display-6">Commentaires ({{ count($comments = $post->get_comments()) }})</h1>
            <p class="text-primary fs-5 mb-0">
                Réactions des internautes par rapport à cet article !
            </p>
        </div>
        <div class="col-lg-6 text-lg-end">
            <a class="btn btn-primary py-3 px-4" href="#faire-un-commentaire-section">
                Faire un commentaire
            </a>
        </div>
    </div>
    <div class="row mb-5 mx-1 wow fadeInUp">
        @forelse ($comments as $comment)
            @include('public.components.comment')
        @empty
            <span class="text-center fw-bold text-dark my-2">
                {{ __('Aucun commentaire enregistré pour le moment.') }}
            </span>
        @endforelse
    </div>
    <div id="faire-un-commentaire-section"></div>
    <div class="accordion" id="faire-un-commentaire">
        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="accordion-header" id="headingQuestion">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseQuestion" aria-expanded="true" aria-controls="collapseQuestion">
                    Faire un commentaire
                </button>
            </h2>
            <div id="collapseQuestion" class="accordion-collapse collapse show" aria-labelledby="headingQuestion"
                data-bs-parent="#faire-un-commentaire">
                <div class="accordion-body">
                    <form wire:submit="saveComment">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="state.lastname" minlength="2"
                                        class="form-control text-dark" id="lastname" required placeholder="Votre nom">
                                    <label for="lastname">Nom <span class="text-primary">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="state.firstname" minlength="2"
                                        class="form-control text-dark" id="firstname" required
                                        placeholder="Vos prénoms">
                                    <label for="firstname">Prénoms <span class="text-primary">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" wire:model="state.email" class="form-control text-dark"
                                        id="email" required placeholder="Votre courriel">
                                    <label for="email">Courriel <span class="text-primary">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control text-dark" wire:model="state.content" required placeholder="Détails supplémentaires"
                                        id="content" style="height: 100px" maxlength="255" rows="6"></textarea>
                                    <label for="content">Commentaire <span class="text-primary">*</span></label>
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="col-12" wire:loading.remove>
                                    <div class="alert alert-danger pb-0">
                                        <ul class="text-danger fw-bold">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            @session('success')
                                <div class="col-12">
                                    <div class="alert alert-success text-success fw-bold">
                                        &check;
                                        {{ session('success') }}
                                    </div>
                                </div>
                            @endsession
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary py-3 px-4">Commenter</button>
                                &nbsp;
                                <button type="reset" class="btn btn-light py-3 px-4">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Questions End -->
