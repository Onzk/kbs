<div class="main-content container-fluid">
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
                            <h6 class='mb-0 text-white'>KAPI Consult</h6>
                            <span class='text-xs'>Toujours en ligne</span>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-4 bg-grey" style="height: 70vh; overflow-y: auto">
                    <div class="chat-content pb-4">
                        @for ($i = 0; $i < 8; $i++)
                        <div class="chat my-2 float-right">
                            <div class="chat-body float-right w-100">
                                    <div class="chat-message col-12 col-md-6">
                                            <p>
                                                Bonjour, KAPI. Comme vous le savez, nous sommes une start-up toute
                                                fraîche.
                                                Nous n'avions pas une idée concrète de comment faire un contrat pour un
                                                administrateur indépendant. Alors, merci pour le contrat d'hier.
                                            </p>
                                            <span class='text-xs' style="font-weight: bold">
                                                Il y a 4min - <span class="fw-bold text-success">vu</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="chat chat-left col-12 col-md-6">
                                    <div class="chat-body">
                                        <div class="chat-message">
                                            <p>
                                                Bonjour POLARIS Transport. Nous sommes heureux d'avoir pu vous aider.
                                                Nous essayerons de toujours répondre à vos besoins dans le cadre du
                                                possible
                                                et du professionnel.
                                            </p>
                                            <span class='text-xs' style="font-weight: bold">
                                                Il y a 4min - <span class="fw-bold text-success">nouveau</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        @endfor
                        <div class="chat bg-transparent">
                            <div class="chat-message"
                                style="background-color:transparent !important; box-shadow: none !important">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer px-0">
                    <form class=" px-4 input-group d-flex flex-direction-column align-items-center">
                        <div class="d-flex flex-grow-1">
                            <input type="text" class="form-control" placeholder="Entrez votre message..">
                        </div>
                        <button class="btn btn-icon btn-primary">
                            <i data-feather="send"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
