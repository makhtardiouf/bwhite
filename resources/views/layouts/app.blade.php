<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Toutes vos annnonces sur Bwhite Sénégal</title>

  {{-- @livewireStyles --}}

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

  <!-- <link href="{{ asset('css/app.css') }}"> -->
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
</head>

@auth

  <body class="g-sidenav-show bg-gray-100">
    @include('layouts.navbars.sidebar')

    <main class="main-content position-relative mt-1 bg-gray-100 border-radius-lg">
      @include('layouts.navbars.nav')
      <div class="container-fluid py-4">
        @yield('content')
        @include('layouts.footers.footer')
      </div>
    </main>

@endauth

@guest

  <body class="bg-gray-100">
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
@endguest

    @if(session()->has('success'))
    <div x-data="{ show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="position-fixed bg-success rounded right-3 text-sm py-2 px-4">
      <p class="m-0">{{ session('success')}}</p>
    </div>
    @endif

    @stack('dashboard')

    @auth
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    @endauth

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

    {{-- @livewireScripts --}}
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    @yield('extrascripts')

    <!-- <script type="text/javascript">
      window.livewire.on('closeModal', () => {
        $('#createDataModal').modal('hide');
      });
    </script> -->

  </body>

</html>