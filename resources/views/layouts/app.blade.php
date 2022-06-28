<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Toutes vos annnonces sur Bwhite Sénégal
    | @yield('title')
  </title>

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/css/nucleo-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/css/nucleo-svg.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @notifyCss
</head>

<body class="g-sidenav-show bg-gray-100">
  @include('layouts.navbars.sidebar')

  <div class="main-content position-relative h-100 border-radius-lg" id="panel">
    @include('layouts.navbars.nav')
    <div class="container-fluid pt-3">
    <x:notify-messages />

      <div>
        <a class="navbar-brand m-0" href="/">
          <img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" class="navbar-brand-img h-100" alt="main_logo">
        </a>
        @guest
          <span class="h4 m-4 text-info text-gradient">La Plateforme de Proximité</span>
        @endguest
      </div>

      @yield('content')
      @include('layouts.footers.footer')
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/js/core/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/js/core/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/js/plugins/chartjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/js/material-dashboard.min.js"></script>
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62bab00613f76b001955a768&product=sop' async='async'></script>
  @notifyJs
  @yield('extrascripts')
</body>

</html>