<div id="sidebar" class="active">
    <div class="sidebar-wrapper bg-dark active">
        <div class="sidebar-header text-white fw-bold">
            <img src="{{ asset('assets/public/img/logo.png') }}" alt="" srcset=""> KBS
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menus Principaux</li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('user-space.index') || Route::is('user-space.home'),
                ])>
                    <a href="{{ route('user-space.index') }}" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('user-space.discussions'),
                ])>
                    <a href="{{ route('user-space.discussions') }}" class="sidebar-link">
                        <i data-feather="message-circle" width="20"></i>
                        <span>Discussions</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => Route::is('user-space.contracts')])>
                    <a href="{{ route('user-space.contracts') }}" class="sidebar-link">
                        <i data-feather="file-text" width="20"></i>
                        <span>Contrats</span>
                    </a>
                </li>
                <li class="sidebar-title">Mon Compte</li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-layout.html" class="sidebar-link">
                        <i data-feather="user" width="20"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="at-sign" width="20"></i>
                        <span>Contact</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="award" width="20"></i>
                        <span>Formations</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="layers" width="20"></i>
                        <span>Expériences</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="briefcase" width="20"></i>
                        <span>Projets</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="list" width="20"></i>
                        <span>Compétences</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="globe" width="20"></i>
                        <span>Langues</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="thumbs-up" width="20"></i>
                        <span>Centres d'Intérêts</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="star" width="20"></i>
                        <span>CV</span>
                    </a>
                </li>
                <li class="sidebar-title">Autres</li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="{{ route('public.home.index') }}" class="sidebar-link">
                        <i data-feather="corner-down-right" width="20"></i>
                        <span>KBS Accueil</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="bookmark" width="20"></i>
                        <span>Conditions d'utilisation</span>
                    </a>
                </li>
                <li @class(['sidebar-item', 'active' => false])>
                    <a href="form-editor.html" class="sidebar-link">
                        <i data-feather="clipboard" width="20"></i>
                        <span>Politique de Confidentialité</span>
                    </a>
                </li>
                <li class="sidebar-item text-danger">
                    <a href="form-editor.html" class="text-danger sidebar-link">
                        <i class="text-danger" data-feather="log-out" width="20"></i>
                        <span class="text-danger">Se Déconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
