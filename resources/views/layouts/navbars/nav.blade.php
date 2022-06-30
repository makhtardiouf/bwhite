<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarTop">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto d-flex align-items-center">
                <div class="input-group input-group-outline">
                    <label class="form-label">Rechercher...</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
            </div>

            <ul class="navbar-nav justify-content-end">
                @guest
                    <li class="nav-item d-flex align-items-center m-2">
                        <a class="text-dark" href="{{ url('register') }}"><i class="fas fa-user-circle"></i></a>
                    </li>
                    <li class="nav-item d-flex align-items-center m-2">
                        <a class="text-dark" href="{{ url('login') }}"><i class="fa-solid fa-key"></i></a>
                    </li>
                @endguest

                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link m-2 text-body" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner text-info">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>

                @auth
                <li class="nav-item d-flex align-items-center me-1 ml-2">
                    <a class="nav-link font-weight-bold px-1 text-body" href="{{ url('dashboard') }}">
                        <i class="fa fa-chart-pie opacity-6"></i> Dashboard</a>&nbsp;
                </li>
                <li class="nav-item d-flex align-items-center me-1">
                    <a class="nav-link font-weight-bold px-1 text-body" href="/listings">
                        <i class="fa-solid fa-file-lines"></i>
                        Annonces
                    </a>
                </li>
                <li class="nav-item dropdown  d-flex align-items-center">
                    <a href="javascript:;" class="nav-link px-1 text-body" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Makhtar
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link font-weight-bold text-body" href="{{ url('/logout')}}">
                        &nbsp; <i class="fa-solid fa-right-from-bracket"></i></a>&nbsp;
                </li>

                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="float-end p-3">
    <a href="{{ route('listings.annonceStep1')}}" class="btn bg-gradient-dark">Ajouter une annonce</a>
</div>
<li class="nav-item">
    <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Payments</p>
    </a>
</li>

