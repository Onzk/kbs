<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="{{ route('public.index') }}" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="{{ asset('assets/public/img/logo.png') }}" alt=""
                style="width: 45px;">{{ config('app.name') }}</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <div class="nav-item dropdown dropend">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Accueil</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <div class="nav-item dropdown dropend">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Présentation & Infromations clés</a>
                        <div class="dropdown-menu shadow-sm m-0">
                            <a href="{{ route('public.index') }}" class="dropdown-item active">Présentation de KAPI Consult</a>
                            <a href="token.html" class="dropdown-item">Présentation de KBS</a>
                            <a href="faq.html" class="dropdown-item">Informations clés KPC / KBS</a>
                        </div>
                    </div>
                    <a href="token.html" class="dropdown-item">Pour les cadres</a>
                    <a href="faq.html" class="dropdown-item">Pour les entreprises</a>
                </div>
            </div>
            <a href="about.html" class="nav-item nav-link">A Propos</a>
            <a href="service.html" class="nav-item nav-link">Process Prestations</a>
            <a href="roadmap.html" class="nav-item nav-link">Médias & Nouvelles</a>
            <a href="roadmap.html" class="nav-item nav-link">Recrutements</a>
            <a href="roadmap.html" class="nav-item nav-link">FAQs</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="feature.html" class="dropdown-item">Feature</a>
                    <a href="token.html" class="dropdown-item">Token Sale</a>
                    <a href="faq.html" class="dropdown-item">FAQs</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                    class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                    class="fab fa-twitter"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i
                    class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</nav>