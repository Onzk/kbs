<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            <li class="dropdown nav-icon">
                <a href="#" data-toggle="dropdown" class="nav-link mt-2 dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-lg-inline-block avatar">
                        <i data-feather="mail" style="height: 30px; width: 30px"></i>
                        <span class="avatar-status pulse"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                    <h6 class="py-2 px-4" style="font-size: 12px; font-weight: bold">Nouveau(x) message(s)</h6>
                    <ul class="list-group px-2 rounded-none">
                        <li class="list-group-item border-0 align-items-start">
                            <a href="{{ route('user-space.discussions') }}">
                                <h6 class="fw-bold" style="font-size: 12px">Il y a 2 heures</h6>
                                <p class="text-xs">
                                    Bienvenue sur KBS
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown mt-2">
                <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar mr-2 mt-1">
                        <img src="{{ asset('assets/public/img/avatar.png') }}" style="object-fit: cover; width: 40px; height: 40px;" alt="" srcset="">
                    </div>
                    <div class="d-none d-md-block d-lg-inline-block">
                        <div class="d-block">
                            <span class="d-block">
                                Eric AMEDJI
                            </span>
                            <span class="w-100">
                                <i data-feather="star" style="width: 10px; height: 10px;" fill="orange" class="text-warning p-0 m-0"></i>
                                <i data-feather="star" style="width: 10px; height: 10px;" fill="orange" class="text-warning p-0 m-0"></i>
                                <i data-feather="star" style="width: 10px; height: 10px;" fill="orange" class="text-warning p-0 m-0"></i>
                                <i data-feather="star" style="width: 10px; height: 10px;" fill="orange" class="text-warning p-0 m-0"></i>
                                <i data-feather="star" style="width: 10px; height: 10px;" fill="dark" class="text-dark p-0 m-0"></i>
                            </span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('user-space.profile') }}"><i data-feather="user"></i> Profil</a>
                    <a class="dropdown-item" href="{{ route('public.home.index') }}"><i data-feather="log-out"></i> Se Déconnecter</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
