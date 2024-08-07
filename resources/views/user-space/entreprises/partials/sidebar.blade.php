<div id="sidebar" class="active">
    <div class="sidebar-wrapper bg-dark active">
        <a href="{{ route('user-space.en.index') }}" class="d-block sidebar-header text-white fw-bold">
            <img src="{{ asset('assets/public/img/logo.png') }}" alt="" srcset=""> KBS
        </a>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menus Principaux</li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('user-space.en.index') || Route::is('user-space.en.home'),
                ])>
                    <a href="{{ route('user-space.en.index') }}" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('user-space.en.search') || Route::is('user-space.en.executive_profile'),
                ])>
                    <a href="{{ route('user-space.en.search') }}" class="sidebar-link">
                        <i data-feather="search" width="20"></i>
                        <span>Recherche</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('user-space.en.discussions'),
                ])>
                    <a href="{{ route('user-space.en.discussions') }}" class="sidebar-link">
                        <i data-feather="message-circle" width="20"></i>
                        <span>Discussions</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('user-space.en.contracts'),
                ])>
                    <a href="{{ route('user-space.en.contracts') }}" class="sidebar-link">
                        <i data-feather="file-text" width="20"></i>
                        <span>Contrats</span>
                    </a>
                </li>
                <li class="sidebar-title">Mon Compte</li>
                <li @class(['sidebar-item', 'active' => Route::is('user-space.en.profile')])>
                    <a href="{{ route('user-space.en.profile') }}" class="sidebar-link">
                        <i data-feather="user" width="20"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li class="sidebar-title">Configurations</li>
                <li @class([
                    'sidebar-item',
                    'active' => request()->fullUrlIs(
                        route('user-space.en.configurations', [
                            'config' => 'a-propos',
                        ])),
                ])>
                    <a href="{{ route('user-space.en.configurations', ['config' => 'a-propos']) }}" class="sidebar-link">
                        <i data-feather="bookmark" width="20"></i>
                        <span>A propos</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => request()->fullUrlIs(
                        route('user-space.en.configurations', [
                            'config' => 'contact',
                        ])),
                ])>
                    <a href="{{ route('user-space.en.configurations', ['config' => 'contact']) }}" class="sidebar-link">
                        <i data-feather="at-sign" width="20"></i>
                        <span>Contact</span>
                    </a>
                </li>
                <li class="sidebar-title">Autres</li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="{{ route('public.home.index') }}" class="sidebar-link">
                        <i data-feather="corner-down-right" width="20"></i>
                        <span>KBS Accueil</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('user-space.en.en.terms_of_use'),
                ])>
                    <a href="{{ route('user-space.en.en.terms_of_use') }}" class="sidebar-link">
                        <i data-feather="file-text" width="20"></i>
                        <span>Conditions d'utilisation</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('user-space.en.en.privacy_policy'),
                ])>
                    <a href="{{ route('user-space.en.en.privacy_policy') }}" class="sidebar-link">
                        <i data-feather="info" width="20"></i>
                        <span>Politique de Confidentialité</span>
                    </a>
                </li>
                <li class="sidebar-item text-danger">
                    <a href="{{ route('public.home.index') }}" class="text-danger sidebar-link">
                        <i class="text-danger" data-feather="log-out" width="20"></i>
                        <span class="text-danger">Se Déconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
