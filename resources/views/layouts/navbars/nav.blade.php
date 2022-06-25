<nav class="navbar navbar-main navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">
                        <i class="fa fa-chart-pie opacity-6 me-1"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/listings">
                    <i class="fa-solid fa-file-lines"></i> Annonces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">
                    <i class="fa-solid fa-file-lines"></i> Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/logout')}}" aria-current="page" href="#">
                        <i class="fa-solid fa-right-from-bracket"></i></a>
                </li>

                @else
                <!-- Not Logged in -->
                <li>
                    <form class="container-fluid justify-content-start">
                        <button class="btn bg-gradient-dark me-2" type="button"><a href="/" class="text-white">Véhicules</a></button>
                        <button class="btn bg-gradient-dark" type="button">Immobilier</button>
                        <button class="btn bg-gradient-dark" type="button">Electromenager</button>
                        <button class="btn bg-gradient-dark">Informatique</button>
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Divers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Sport</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Plomberie</a></li>
                    </ul>
                </li>
                <li class="nav-item ml-8">
                    <form class="d-flex">
                        <input class="form-control" type="search" placeholder="Rechercher" aria-label="Search">
                        <!-- <button class="" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
                    </form>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>