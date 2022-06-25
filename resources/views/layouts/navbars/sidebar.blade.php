@auth
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-1 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center navbar-brand text-wrap" href="{{ route('dashboard') }}">
      <img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" />
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="fa-solid fa-gauge"></i> <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fa-solid fa-house"></i> <span class="nav-link-text ms-1">Site Publique</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (Request::is('user-profile') ? 'active' : '') }} " href="{{ url('user-profile') }}">
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

    </ul>
  </div>

</aside>

@else

@endauth