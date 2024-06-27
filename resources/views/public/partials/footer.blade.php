<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-12">
                <h1 class="text-white mb-4">
                    <img class="img-fluid me-2" src="{{ asset('assets/public/img/logo.png') }}" alt=""
                        style="width: 85px;">
                    {{ config('app.name') }}
                </h1>
                <span>
                    En tant que <span class="text-white">cabinet d'étude spécialisé dans divers domaines</span>, dont le
                    recrutement, KAPI Consult se
                    fait un devoir de <span class="text-white">proposer des prestations de qualité à des clients</span> de
                    plus en plus exigeants dont
                    les besoins varient en fonction de leur nature, de leurs profils, et de leurs besoins. À cet effet,
                    il convient pour une entreprise qui veut <span class="text-white"> rester compétitive de s'adapter à la
                        demande et d'adopter
                        les outils et technologies </span> qui sont susceptibles de lui conférer des <span
                        class="text-white">avantages compétitifs
                        déterminants et distinctifs</span>. C'est dans cet ordre d'idées que le <span
                        class="text-white">projet KAPI Board Select (KBS)</span> naît
                    dans <span class="text-white">le seul but d'optimiser les process de recrutement pour des prestations
                        de qualité optimale</span>.
                </span>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4 text-white">Accueil</h5>
                <a class="btn btn-link text-white" href="{{ route('public.home.kapi-presentation') }}">Présentation KAPI
                    Consult</a>
                <a class="btn btn-link text-white" href="{{ route('public.home.kbs-presentation') }}">Présentation de KBS</a>
                <a class="btn btn-link text-white" href="{{ route('public.home.key-information') }}">Informations clés</a>
                <a class="btn btn-link text-white" href="{{ route('public.home.executives') }}">Section Administrateurs</a>
                <a class="btn btn-link text-white" href="{{ route('public.home.entreprises') }}">Section Entreprises</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4 text-white">A Propos</h5>
                <a class="btn btn-link text-white" href="{{ route('public.about.mvv') }}">Mission - Vision - Valeurs</a>
                <a class="btn btn-link text-white" href="{{ route('public.about.teams') }}">Equipe</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4 text-white">Media & Nouvelles</h5>
                <a class="btn btn-link text-white" href="{{ route('public.media-news.webinaries') }}">Webinaires</a>
                <a class="btn btn-link text-white" href="{{ route('public.media-news.questions') }}">Questions réponses</a>
                <a class="btn btn-link text-white" href="{{ route('public.media-news.blog') }}">Blog</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4 text-white">Autres</h5>
                <a class="btn btn-link text-white" href="{{ route('public.faqs') }}">FAQs</a>
                <a class="btn btn-link text-white" href="{{ route('user-space.index') }}">Espace utilisateur</a>
                <a class="btn btn-link text-white" href="{{ route('public.data-protection') }}">Protection de données</a>
            </div>
            <div class="col-lg-6 col-md-6">
                <h5 class="mb-4 text-white">Entrer en contact</h5>
                <p class="text-white"><i class="fa fa-map-marker-alt me-3"></i>
                    Agoè BKS 1,
                    Bd Faure Gnassingbe,
                    08 BP 8535 Lomé - Togo
                </p>
                <p class="text-white"><i class="fa fa-phone-alt me-3"></i>+228 93 17 01 01</p>
                <p class="text-white"><i class="fa fa-envelope me-3"></i>info@kapiconsult.tg</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <h5 class="mb-4 text-white">Nous suivre</h5>
                <div class="d-flex">
                    <a class="btn btn-light btn-square rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-square rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-light btn-square rounded-circle me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                    {{ \Carbon\Carbon::now()->year }}
                    &copy; <a href="{{ route('public.home.index') }}" class="text-white fw-bold">{{ config('app.name') }}</a>, Tout droit réservé.
                </div>
                <div class="col-md-6 text-center text-md-end d-none">
                    <!--/*** This template is free as long as you keep the footer author's credit link/attribution link/backlink. If you'd like to use the template without the footer author's credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
</div>
