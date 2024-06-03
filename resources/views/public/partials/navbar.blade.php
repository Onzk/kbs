<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="{{ route('public.index') }}" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="{{ asset('assets/public/img/logo.png') }}"
                alt="" style="width: 45px;">{{ config('app.name') }}</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Accueil</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <div href="token.html" class="">
                        <a href="token.html" class="dropdown-item disabled">Présentations et Informations clés</a>
                        <div>
                            <a href="token.html" style="padding-left: 32px; border-left:solid 1px grey"
                                class="dropdown-item border-left">- Présentation KAPI Consult</a>
                            <a href="token.html" style="padding-left: 32px; border-left:solid 1px grey"
                                class="dropdown-item border-left">- Présentation de KBS</a>
                            <a href="token.html" style="padding-left: 32px; border-left:solid 1px grey"
                                class="dropdown-item border-left">- Informations clés</a>
                        </div>
                    </div>
                    <a href="token.html" class="dropdown-item">Cadres & Hauts Cadres</a>
                    <a href="faq.html" class="dropdown-item">Entreprises</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">A Propos</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <div href="token.html" class="">
                        <a href="token.html" class="dropdown-item disabled">Qui sommes-nous ?</a>
                        <div>
                            <a href="token.html" style="padding-left: 32px; border-left:solid 1px grey"
                                class="dropdown-item border-left">- Présentation de la société</a>
                            <a href="token.html" style="padding-left: 32px; border-left:solid 1px grey"
                                class="dropdown-item border-left">- Mission - Vision - Valeurs</a>
                            <a href="token.html" style="padding-left: 32px; border-left:solid 1px grey"
                                class="dropdown-item border-left">- Equipes</a>
                        </div>
                    </div>
                    <a href="token.html" class="dropdown-item">Prestations pour les cadres</a>
                    <a href="token.html" class="dropdown-item">Prestations pour les entreprises</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Process Prestation</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="feature.html" class="dropdown-item">Pour les cadres</a>
                    <a href="feature.html" class="dropdown-item">Pour les entreprises</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Médias & Nouvelles</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="feature.html" class="dropdown-item">Webinaires</a>
                    <a href="feature.html" class="dropdown-item">Questions réponses</a>
                    <a href="feature.html" class="dropdown-item">Comminiqués</a>
                    <a href="feature.html" class="dropdown-item">Blog</a>
                </div>
            </div>
            <a href="roadmap.html" class="nav-item nav-link">Recrutements</a>
            <a href="roadmap.html" class="nav-item nav-link">FAQs</a>
            <a href="roadmap.html" class="nav-item nav-link">Espace utilisateur</a>
            <a href="roadmap.html" class="nav-item nav-link">Protection de données</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</nav>
