<!-- Navbar -->
<nav class="navbar navbar-expand-lg top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none navbar-transparent mt-4' : 'w-100 shadow-none mt-4') }}">
  <div class="container-fluid {{ (Request::is('static-sign-up') ? 'container' : 'container-fluid') }}">
   
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse right" id="navigation">
      <ul class="navbar-nav mx-auto">
        @if (auth()->user())
            <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{ url('dashboard') }}">
                <i class="fa fa-chart-pie opacity-6 me-1 {{ (Request::is('static-sign-up') ? '' : 'text-dark') }}"></i>
                Dashboard
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="{{ url('profile') }}">
                <i class="fa fa-user opacity-6 me-1 {{ (Request::is('static-sign-up') ? '' : 'text-dark') }}"></i>
                Profile
            </a>
            </li>
        @endif
        <li class="nav-item">
          <a class="nav-link me-2" href="{{ auth()->user() ? url('static-sign-up') : url('register') }}">
            <i class="fas fa-user-circle  me-1 text-dark"></i>
            Enregistrement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="{{ auth()->user() ? url('static-sign-in') : url('login') }}">
            <i class="fas fa-key me-1 text-blue"></i>
            Connection
          </a>
        </li>
      </ul>
      <ul class="navbar-nav d-lg-block d-none">
        <li class="nav-item">
          <a href="#" target="_blank" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-{{ (Request::is('static-sign-up') ? 'light' : 'dark') }}">Telecharger</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
