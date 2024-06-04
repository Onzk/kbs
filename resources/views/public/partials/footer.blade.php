<div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-12">
                <h1 class="text-primary mb-4">
                    <img class="img-fluid me-2" src="{{ asset('assets/public/img/logo.png') }}" alt="" style="width: 85px;">
                        KAPI Board Select
                    </h1>
                <span>
                    En tant que <b class="text-primary">cabinet d'étude spécialisé dans divers domaines</b>, dont le recrutement, KAPI Consult se
                    fait un devoir de  <b class="text-primary">proposer des prestations de qualité à des clients</b> de plus en plus exigeants dont
                    les besoins varient en fonction de leur nature, de leurs profils, et de leurs besoins. À cet effet,
                    il convient pour une entreprise qui veut <b class="text-primary"> rester compétitive de s'adapter à la demande et d'adopter
                    les outils et technologies </b> qui sont susceptibles de lui conférer des <b class="text-primary">avantages compétitifs
                    déterminants et distinctifs</b>. C'est dans cet ordre d'idées que le <b class="text-primary">projet KAPI Board Select (KBS)</b> naît
                    dans <b class="text-primary">le seul but d'optimiser les process de recrutement pour des prestations de qualité optimale</b>.
                </span>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="mb-4">Liens rapides</h5>
                <a class="btn btn-link" href="{{ route('public.home.kapi-presentation') }}">Présentation KAPI Consult</a>
                <a class="btn btn-link" href="{{ route('public.home.kbs-presentation') }}">Présentation de KBS</a>
                <a class="btn btn-link" href="{{ route('public.home.key-information') }}">Informations clés</a>
                <a class="btn btn-link" href="{{ route('public.home.executives') }}">Cadres & Hauts Cadres</a>
                <a class="btn btn-link" href="{{ route('public.home.entreprises') }}">Entreprises</a>
                <a class="btn btn-link" href="{{ route('public.about.society-presentation') }}">Présentation de la société</a>
                <a class="btn btn-link" href="{{ route('public.about.mvv') }}">Mission - Vision - Valeurs</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="mb-4">&nbsp;</h5>
                <a class="btn btn-link" href="{{ route('public.about.teams') }}">Equipes</a>
                <a class="btn btn-link" href="{{ route('public.about.executives-prestation') }}">Prestations pour les cadres</a>
                <a class="btn btn-link" href="{{ route('public.about.entreprises-prestation') }}">Prestations pour les entreprises</a>
                <a class="btn btn-link" href="{{ route('public.process.executives') }}">Process Pour les cadres</a>
                <a class="btn btn-link" href="{{ route('public.process.entreprises') }}">Process Pour les entreprises</a>
                <a class="btn btn-link" href="{{ route('public.media-news.webinaries') }}">Webinaires</a>
                <a class="btn btn-link" href="{{ route('public.media-news.questions') }}">Questions réponses</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="mb-4">&nbsp;</h5>
                <a class="btn btn-link" href="{{ route('public.media-news.press') }}">Comminiqués</a>
                <a class="btn btn-link" href="{{ route('public.media-news.blog') }}">Blog</a>
                <a class="btn btn-link" href="{{ route('public.recruitment') }}">Recrutements</a>
                <a class="btn btn-link" href="{{ route('public.faqs') }}">FAQs</a>
                <a class="btn btn-link" href="{{ route('public.user-space') }}">Espace utilisateur</a>
                <a class="btn btn-link" href="{{ route('public.data-protection') }}">Protection de données</a>
            </div>
            <div class="col-lg-6 col-md-6">
                <h5 class="mb-4">Entrer en contact</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>
                    Agoè BKS 1,
                    Bd Faure Gnassingbe,
                    08 BP 8535 Lomé - Togo
                </p>
                <p><i class="fa fa-phone-alt me-3"></i>+228 93 17 01 01</p>
                <p><i class="fa fa-envelope me-3"></i>info@kapiconsult.tg</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <h5 class="mb-4">Nous suivre</h5>
                <div class="d-flex">
                    <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                    {{ \Carbon\Carbon::now()->year }}
                    &copy; <a href="#">{{ config('app.name') }}</a>, Tout droit réservé.
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
