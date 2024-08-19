<div id="sidebar" class="active">
    <div class="sidebar-wrapper bg-dark active">
        <a href="{{ route('entreprise-space.index') }}" class="d-block sidebar-header text-white fw-bold">
            <img src="{{ asset('assets/public/img/logo.png') }}" alt="" srcset=""> KBS
        </a>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menus Principaux</li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        Route::is('entreprise-space.index') ||
                        Route::is('entreprise-space.profile') ||
                        Route::is('entreprise-space.home'),
                ])>
                    <a href="{{ route('entreprise-space.index') }}" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        Route::is('entreprise-space.search') ||
                        Route::is('entreprise-space.executive_profile'),
                ])>
                    <a href="{{ route('entreprise-space.search') }}" class="sidebar-link">
                        <i data-feather="search" width="20"></i>
                        <span>Recherche</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('entreprise-space.discussions'),
                ])>
                    <a href="{{ route('entreprise-space.discussions') }}" class="sidebar-link">
                        <i data-feather="message-circle" width="20"></i>
                        <span class="d-flex w-100 justify-content-between align-items-center">
                            <span class="col">
                                Discussions
                            </span>
                            <livewire:components.chat-badge :user="$_user" :simple="false" />
                        </span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('entreprise-space.contracts'),
                ])>
                    <a href="{{ route('entreprise-space.contracts') }}" class="sidebar-link">
                        <i data-feather="file-text" width="20"></i>
                        <span>Contrats</span>
                    </a>
                </li>
                <li class="sidebar-title">Configurations</li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        url()->current() ==
                        route('entreprise-space.configurations', [
                            'config' => 'a-propos',
                        ]),
                ])>
                    <a href="{{ route('entreprise-space.configurations', ['config' => 'a-propos']) }}"
                        class="sidebar-link">
                        <i data-feather="bookmark" width="20"></i>
                        <span>A propos</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        url()->current() ==
                        route('entreprise-space.configurations', [
                            'config' => 'profils-recherchés',
                        ]),
                ])>
                    <a href="{{ route('entreprise-space.configurations', ['config' => 'profils-recherchés']) }}"
                        class="sidebar-link">
                        <i data-feather="briefcase" width="20"></i>
                        <span>Profils Recherchés</span>
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
                    'active' => Route::is('entreprise-space.en.terms_of_use'),
                ])>
                    <a href="{{ route('entreprise-space.en.terms_of_use') }}" class="sidebar-link">
                        <i data-feather="file-text" width="20"></i>
                        <span>Conditions d'utilisation</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('entreprise-space.en.privacy_policy'),
                ])>
                    <a href="{{ route('entreprise-space.en.privacy_policy') }}" class="sidebar-link">
                        <i data-feather="info" width="20"></i>
                        <span>Politique de Confidentialité</span>
                    </a>
                </li>
                <li class="sidebar-item text-danger">
                    <a href="{{ route('logout') }}" class="text-danger sidebar-link">
                        <i class="text-danger" data-feather="log-out" width="20"></i>
                        <span class="text-danger">Se Déconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
