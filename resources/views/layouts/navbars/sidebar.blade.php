@auth
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 position-absolute  bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="javascript:;" target="_blank">
      <img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" class="navbar-brand-img h-100" alt="main_logo">
    </a>
  </div>

  <hr class="horizontal light mt-0 mb-2">
  <div class="d-flex align-items-center justify-content-cente ms-4 my-3">
    <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-2.jpg" class="avatar avatar-sm">
    <div class="ms-2">
      <h6 class="text-sm text-white mb-0">{{ auth()->user()->name }}</h6>
      <p class="text-xs text-white opacity-5 mb-0">Superviseur</p>
    </div>
  </div>
  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white active bg-gradient-primary" href="/dashboard">
          <i class="fa-solid fa-gauge"></i> <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="/">
          <i class="fa-solid fa-house"></i> <span class="nav-link-text ms-1">Site Publique</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('user-profile') }}">
          <i class="fa-solid fa-user"></i> <span class="nav-link-text ms-1">Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('categories') }}">
          <i class="fa-solid fa-layer-group"></i>
          <span class="nav-link-text ms-1">Catégories</span>
        </a>
      </li>

      <li class="nav-item pb-2">
        <a class="nav-link" href="/listings">
          <i class="fa-solid fa-file-lines"></i>
          <span class="nav-link-text ms-1">Annonces</span>
        </a>
      </li>

      <li class="nav-item pb-2">
        <a class="nav-link" href="#">
          <i class="fa-solid fa-gifts"></i>
          <span class="nav-link-text ms-1">Packs</span>
        </a>
      </li>

      <li class="nav-item pb-2">
        <a class="nav-link" href="#">
          <i class="fa-solid fa-store"></i>
          <span class="nav-link-text ms-1">Boutiques</span>
        </a>
      </li>

      <li class="nav-item pb-2">
        <a class="nav-link" href="/logout">
          <i class="fa-solid fa-door-open"></i>
          <span class="nav-link-text ms-1">Déconnexion</span>
        </a>
      </li>

    </ul>
  </div>

</aside>

@else
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="javascript:;" target="_blank">
      <img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" class="navbar-brand-img h-100" alt="main_logo">
    </a>
  </div>

  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <!-- Not Logged in -->
      <li class="nav-item">
        <form class="container-fluid justify-content-start">
          <button class="btn btn-outline text-black"><a href="/">Véhicules</a></button>
          <button class="btn btn-outline text-black">Immobilier</button>
          <button class="btn btn-outline text-black">Electromenager</button>
          <button class="btn btn-outline text-black">Informatique</button>
        </form>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="text-black">Divers</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="#">Sport</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Plomberie</a></li>
        </ul>
      </li>

    </ul>
  </div>

</aside>
@endauth