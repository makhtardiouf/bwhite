
<nav class="navbar navbar-main navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                @auth
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">
                        <i class="fa fa-chart-pie opacity-6 me-1"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/logout')}}" aria-current="page" href="#">Déconnexion</a>
                </li>

                @else
                <!-- Not Logged in -->
                <form class="container-fluid justify-content-start">
                    <button class="btn bg-gradient-dark me-2" type="button">Véhicules</button>
                    <button class="btn bg-gradient-dark" type="button">Immobilier</button>
                    <button class="btn bg-gradient-dark" type="button">IElectromenager</button>
                    <button class="btn bg-gradient-dark">Informatique</button>
                    <button class="btn bg-gradient-dark">Plomberie</button>
                    <button class="btn bg-gradient-dark">Sport</button>
                </form>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('register') }} " aria-current="page" href="#">
                        <i class="fas fa-2x fa-user-circle text-black"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('login') }} " aria-current="page" href="#">
                        <i class="fa-2x fa-solid fa-key"></i>
                    </a>
                </li>
                @endauth
            </ul>

            <form class="d-flex">
                <input class="form-control" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>