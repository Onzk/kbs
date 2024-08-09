<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            <li class="nav-icon">
                <a href="{{ route('user-space.discussions') }}" class="nav-link mt-2 nav-link-lg nav-link-user">
                    <div class="d-lg-inline-block avatar">
                        <i data-feather="mail" style="height: 30px; width: 30px"></i>
                        @if ($_user->has_new_messages())
                            <span class="avatar-status pulse"></span>
                        @endif
                    </div>
                </a>
            </li>
            <li class="dropdown mt-2">
                <a href="#" data-toggle="dropdown"
                    class="nav-link d-flex align-items-center dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar mr-2">
                        <img src="{{ asset($_user->photo ?? 'storage/candidate/default.png') }}"
                            style="object-fit: cover; width: 40px; height: 40px;" alt="" srcset="">
                    </div>
                    <div class="d-none d-md-block d-lg-inline-block">
                        <div class="d-block">
                            <span class="d-block">
                                {{ $_user->fullname() }}
                            </span>
                            <span class="w-100">
                                @php($stars = $_user->stars())
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 1 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 1, 'p-0 m-0'])></i>
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 2 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 2, 'p-0 m-0'])></i>
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 3 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 3, 'p-0 m-0'])></i>
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 4 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 4, 'p-0 m-0'])></i>
                                <i data-feather="star" style="width: 15px; height: 15px;"
                                    fill="{{ $stars >= 5 ? '#F8E05A' : 'white' }}" @class(['text-warning' => $stars >= 5, 'p-0 m-0'])></i>
                            </span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('user-space.home') }}"><i data-feather="user"></i>
                        Profil</a>
                    <a class="dropdown-item" href="{{ route('public.home.index') }}"><i data-feather="log-out"></i> Se
                        Déconnecter</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
