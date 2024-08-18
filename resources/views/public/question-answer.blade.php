<!-- Questions Start -->
<div class="container py-5">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
            <h1 class="display-6">Questions</h1>
            <p class="text-primary fs-5 mb-0">Des incompréhensions ou des inquiétudes, nous sommes à votre écoute.
            </p>
        </div>
        <div class="col-lg-6 text-lg-end">
            <a class="btn btn-primary py-3 px-4" href="#poser-une-question-section">Poser une question</a>
        </div>
    </div>
    <div class="row mb-5 mx-1 wow fadeInUp">
        @foreach (\App\Models\Question::all() as $model)
            @include('public.components.question')
        @endforeach
    </div>
    <div id="poser-une-question-section"></div>
    <div class="accordion" id="poser-une-question">
        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="accordion-header" id="headingQuestion">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseQuestion" aria-expanded="true" aria-controls="collapseQuestion">
                    Poser une question
                </button>
            </h2>
            <div id="collapseQuestion" class="accordion-collapse collapse show" aria-labelledby="headingQuestion"
                data-bs-parent="#poser-une-question">
                <div class="accordion-body">
                    <form wire:submit="askQuestion">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="state.lastname" minlength="2" class="form-control text-dark"
                                        id="lastname" required placeholder="Votre nom">
                                    <label for="lastname">Nom <span class="text-primary">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="state.firstname" minlength="2" class="form-control text-dark"
                                        id="firstname" required placeholder="Vos prénoms">
                                    <label for="firstname">Prénoms <span class="text-primary">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" wire:model="state.email" class="form-control text-dark" id="email"
                                        required placeholder="Votre courriel">
                                    <label for="email">Courriel <span class="text-primary">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control text-dark" id="title" minlength="4" maxlength="150" wire:model="state.title"
                                        required placeholder="Résumé de la question">
                                    <label for="title">Résumé de la question <span class="text-primary">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control text-dark" wire:model="state.description" required placeholder="Détails supplémentaires" id="description"
                                        style="height: 100px" maxlength="255" rows="6"></textarea>
                                    <label for="description">Description <span class="text-primary">*</span></label>
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
                                <button type="submit" class="btn btn-primary py-3 px-4">Poser</button>
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
