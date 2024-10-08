<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            <li class="nav-icon">
                <a href="{{ route('admin-space.discussions') }}" class="nav-link mt-2 nav-link-lg nav-link-user">
                    <div class="d-lg-inline-block avatar">
                        <i data-feather="mail" style="height: 30px; width: 30px"></i>
                        <livewire:components.chat-badge :user="$_user" />
                    </div>
                </a>
            </li>
            <li class="dropdown mt-2">
                <a href="#" data-toggle="dropdown"
                    class="nav-link d-flex align-items-center dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar mr-2">
                        <img src="{{ asset($_user->photo ?? 'storage/user/default.png') . '?' . rand() }}"
                            style="object-fit: cover; width: 40px; height: 40px;" alt="" srcset="">
                    </div>
                    <div class="d-none d-md-block d-lg-inline-block">
                        <div class="d-block">
                            <span class="d-block">
                                {{ $_user->email }}
                            </span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"
                        href="{{ route('admin-space.configurations', [
                            'config' => 'profil',
                        ]) }}">
                        <i data-feather="user"></i>
                        Profil
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"><i data-feather="log-out"></i> Se
                        Déconnecter
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
