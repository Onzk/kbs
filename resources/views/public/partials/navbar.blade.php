<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="{{ route('public.home.index') }}" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary">
            <img class="img-fluid me-2" src="{{ asset('assets/public/img/logo.png') }}" alt="" style="width: 45px;">
            {{ config('app.name') }}
        </h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <div class="nav-item dropdown">
                <a href="#" @class([
                    'nav-link dropdown-toggle',
                    'active fw-bold' => Str::contains(Route::currentRouteName(), 'home'),
                ]) data-bs-toggle="dropdown">Accueil</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <div class="">
                        <a href="#" class="dropdown-item disabled">Présentations et Informations clés</a>
                        <div>
                            <a href="{{ route('public.home.kapi-presentation') }}"
                                style="padding-left: 32px; border-left:solid 1px grey" @class([
                                    'dropdown-item border-left',
                                    'active' => Route::is('public.home.kapi-presentation'),
                                ])>-
                                Présentation KAPI Consult</a>
                            <a href="{{ route('public.home.kbs-presentation') }}"
                                style="padding-left: 32px; border-left:solid 1px grey" @class([
                                    'dropdown-item border-left',
                                    'active' => Route::is('public.home.kbs-presentation'),
                                ])>-
                                Présentation de KBS</a>
                            <a href="{{ route('public.home.key-information') }}"
                                style="padding-left: 32px; border-left:solid 1px grey" @class([
                                    'dropdown-item border-left',
                                    'active' => Route::is('public.home.key-information'),
                                ])>-
                                Informations clés</a>
                        </div>
                    </div>
                    <a href="{{ route('public.home.executives') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.home.executives'),
                    ])>Cadres & Hauts
                        Cadres</a>
                    <a href="{{ route('public.home.entreprises') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.home.entreprises'),
                    ])>Entreprises</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" @class([
                    'nav-link dropdown-toggle',
                    'active fw-bold' => Str::contains(Route::currentRouteName(), 'about'),
                ]) data-bs-toggle="dropdown">A Propos</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <div class="">
                        <a href="#" class="dropdown-item disabled">Qui sommes-nous ?</a>
                        <div>
                            <a href="{{ route('public.about.society-presentation') }}"
                                style="padding-left: 32px; border-left:solid 1px grey" @class([
                                    'dropdown-item border-left',
                                    'active' => Route::is('public.about.society-presentation'),
                                ])>-
                                Présentation de la société</a>
                            <a href="{{ route('public.about.mvv') }}"
                                style="padding-left: 32px; border-left:solid 1px grey" @class([
                                    'dropdown-item border-left',
                                    'active' => Route::is('public.about.mvv'),
                                ])>-
                                Mission - Vision - Valeurs</a>
                            <a href="{{ route('public.about.teams') }}"
                                style="padding-left: 32px; border-left:solid 1px grey" @class([
                                    'dropdown-item border-left',
                                    'active' => Route::is('public.about.teams'),
                                ])>-
                                Equipes</a>
                        </div>
                    </div>
                    <a href="{{ route('public.about.executives-prestation') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.about.executives-prestation'),
                    ])>
                        Prestations pour les cadres
                    </a>
                    <a href="{{ route('public.about.entreprises-prestation') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.about.entreprises-prestation'),
                    ])>
                        Prestations pour les entreprises
                    </a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" @class([
                    'nav-link dropdown-toggle',
                    'active fw-bold' => Str::contains(Route::currentRouteName(), 'process'),
                ]) data-bs-toggle="dropdown">Process Prestation</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="{{ route('public.process.executives') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.process.executives'),
                    ])>Pour les
                        cadres</a>
                    <a href="{{ route('public.process.entreprises') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.process.entreprises'),
                    ])>Pour les
                        entreprises</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" @class([
                    'nav-link dropdown-toggle',
                    'active fw-bold' => Str::contains(Route::currentRouteName(), 'media-news'),
                ]) data-bs-toggle="dropdown">Médias & Nouvelles</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="{{ route('public.media-news.webinaries') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.media-news.webinaries'),
                    ])>Webinaires</a>
                    <a href="{{ route('public.media-news.questions') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.media-news.questions'),
                    ])>Questions
                        réponses</a>
                    <a href="{{ route('public.media-news.press') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.media-news.press'),
                    ])>Comminiqués</a>
                    <a href="{{ route('public.media-news.blog') }}" @class([
                        'dropdown-item',
                        'active' => Route::is('public.media-news.blog'),
                    ])>Blog</a>
                </div>
            </div>
            <a href="{{ route('public.recruitment') }}" @class([
                'nav-item nav-link',
                'active fw-bold' => Route::is('public.recruitment'),
            ])>Recrutements</a>
            <a href="{{ route('public.faqs') }}" @class([
                'nav-item nav-link',
                'active fw-bold' => Route::is('public.faqs'),
            ])>FAQs</a>
            <a href="{{ route('public.user-space') }}" @class([
                'nav-item nav-link',
                'active fw-bold' => Route::is('public.user-space'),
            ])>Espace utilisateur</a>
            <a href="{{ route('public.data-protection') }}" @class([
                'nav-item nav-link',
                'active fw-bold' => Route::is('public.data-protection'),
            ])>Protection de données</a>
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
