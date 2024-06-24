<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            <li class="dropdown nav-icon">
                <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-lg-inline-block avatar">
                        <i data-feather="mail"></i>
                        <span class="avatar-status pulse"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                    <h6 class="py-2 px-4" style="font-size: 12px; font-weight: bold">Nouveau(x) message(s)</h6>
                    <ul class="list-group px-2 rounded-none">
                        <li class="list-group-item border-0 align-items-start">
                            <div>
                                <h6 class="fw-bold" style="font-size: 12px">Il y a 2 heures</h6>
                                <p class="text-xs">
                                    Bienvenue sur KBS
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar mr-1">
                        <img src="{{ asset('assets/public/img/avatar.png') }}" style="object-fit: cover" alt="" srcset="">
                    </div>
                    <div class="d-none d-md-block d-lg-inline-block">Frédéric DEGBE</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i data-feather="user"></i> Profil</a>
                    <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Se Déconnecter</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
