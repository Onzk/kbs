<div id="sidebar" class="active">
    <div class="sidebar-wrapper bg-dark active">
        <a href="{{ route('admin-space.index') }}" class="d-block sidebar-header text-white fw-bold">
            <img src="{{ asset('assets/public/img/logo.png') }}" alt="" srcset=""> KBS
        </a>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menus Principaux</li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        Route::is('admin-space.home') ||
                        Route::is('admin-space.index'),
                ])>
                    <a href="{{ route('admin-space.home') }}" class="sidebar-link">
                        <i data-feather="activity" width="20"></i>
                        <span>Tableau de Bord</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('candidate-space.discussions'),
                ])>
                    <a href="{{ route('candidate-space.discussions') }}" class="sidebar-link">
                        <i data-feather="message-circle" width="20"></i>
                        <span>Discussions</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('candidate-space.contracts'),
                ])>
                    <a href="{{ route('candidate-space.contracts') }}" class="sidebar-link">
                        <i data-feather="users" width="20"></i>
                        <span>Planche Candidat</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('candidate-space.contracts'),
                ])>
                    <a href="{{ route('candidate-space.contracts') }}" class="sidebar-link">
                        <i data-feather="bar-chart-2" width="20"></i>
                        <span>Planche Entreprise</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' => Route::is('candidate-space.contracts'),
                ])>
                    <a href="{{ route('candidate-space.contracts') }}" class="sidebar-link">
                        <i data-feather="file-text" width="20"></i>
                        <span>Contrats</span>
                    </a>
                </li>
                <li class="sidebar-title">Configurations</li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        url()->current() ==
                        route('admin-space.configurations', [
                            'config' => 'experts',
                        ]),
                ])>
                    <a href="{{ route('admin-space.configurations', ['config' => 'experts']) }}"
                        class="sidebar-link">
                        <i data-feather="user-check" width="20"></i>
                        <span>Experts KAPI</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        url()->current() ==
                        route('admin-space.configurations', [
                            'config' => 'webinaries',
                        ]),
                ])>
                    <a href="{{ route('admin-space.configurations', ['config' => 'webinaries']) }}"
                        class="sidebar-link">
                        <i data-feather="airplay" width="20"></i>
                        <span>Webinaires</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        url()->current() ==
                        route('admin-space.configurations', [
                            'config' => 'faqs',
                        ]),
                ])>
                    <a href="{{ route('admin-space.configurations', ['config' => 'faqs']) }}"
                        class="sidebar-link">
                        <i data-feather="info" width="20"></i>
                        <span>FAQs</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        url()->current() ==
                        route('admin-space.configurations', [
                            'config' => 'questions',
                        ]),
                ])>
                    <a href="{{ route('admin-space.configurations', ['config' => 'questions']) }}"
                        class="sidebar-link">
                        <i data-feather="help-circle" width="20"></i>
                        <span>Questions</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        url()->current() ==
                        route('admin-space.configurations', [
                            'config' => 'posts',
                        ]),
                ])>
                    <a href="{{ route('admin-space.configurations', ['config' => 'posts']) }}"
                        class="sidebar-link">
                        <i data-feather="hash" width="20"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li @class([
                    'sidebar-item',
                    'active' =>
                        url()->current() ==
                        route('admin-space.configurations', [
                            'config' => 'advanced',
                        ]),
                ])>
                    <a href="{{ route('admin-space.configurations', ['config' => 'advanced']) }}"
                        class="sidebar-link">
                        <i data-feather="command" width="20"></i>
                        <span>Avancées</span>
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
                    'active' =>
                        url()->current() ==
                        route('admin-space.configurations', [
                            'config' => 'profil',
                        ]),
                ])>
                    <a href="{{ route('admin-space.configurations', ['config' => 'profil']) }}"
                        class="sidebar-link">
                        <i data-feather="user" width="20"></i>
                        <span>Profil</span>
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
