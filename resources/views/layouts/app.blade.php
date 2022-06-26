<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Toutes vos annnonces sur Bwhite Sénégal</title>

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/css/nucleo-svg.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/loopple/loopple.css') }}"> -->
</head>

@auth
  <body class="g-sidenav-show bg-gray-200">
    @include('layouts.navbars.sidebar')

    <div class="main-content position-relative  h-100 border-radius-lg" id="panel">
      @include('layouts.navbars.nav')
      <div class="container-fluid pt-3">
        <div>
          <a class="navbar-brand m-0" href="javascript:;" target="_blank">
          <img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" class="navbar-brand-img h-100" alt="main_logo">
          </a>
        </div>
    
        @yield('content')
        @include('layouts.footers.footer')

      </div>
    </div>
@endauth

@guest

  <body class="g-sidenav-show bg-gray-100">
  @include('layouts.navbars.sidebar')
    <div class="main-content position-relative  h-100 border-radius-lg" id="panel">
      @include('layouts.navbars.nav')

      <div class="row">
        <div class="col m-2">
          <a href="/"><img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" class="img-fluid" style="max-height:150px;" /></a>

          <span class="h4 m-2 text-info text-gradient">La Plateforme de Proximité</span>
          <div class="text-center">
            <span class="ml-2 float-right"><a class="text-dark" href="{{ url('register') }} " aria-current="page" href="#">
                <i class="fas fa-2x fa-user-circle text-black"></i>
              </a>
            </span>
            &nbsp;&nbsp;
            <span class="ml-2">
              <a class="text-dark" href="{{ url('login') }} " aria-current="page" href="#">
                <i class="fa-2x fa-solid fa-key"></i>
              </a>
            </span>
          </div>
        </div>
      </div>

      @yield('content')
      
      @include('layouts.footers.footer')
    </div>
@endguest

    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/js/core/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/js/core/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/js/plugins/chartjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/material-dashboard-2-builder/v3.0.4/assets/js/material-dashboard.min.js"></script>
  
    @yield('extrascripts')
  </body>
</html>