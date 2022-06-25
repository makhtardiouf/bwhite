  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer pt-2">
    <div class="container">
      <div class="row">

        <div class="col text-center">
          <img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" />

          <a href="#" class="text-secondary m-3">
            Bwhite
          </a>
          <a href="#" class="text-secondary m-3">
            A propos
          </a>
          <a href="{{ url('register') }}" class="text-secondary m-3">Inscription</a>
          <a href="{{ url('login') }}" class="text-secondary m-3">Connexion</a>
          <br>
          <div class="mt-4">
            <span class="text text-info"><i class="fa-solid fa-phone"></i></span>
            <span class="fs-6 text-center text-dark text-gradient"> <a href="tel:+221338362883">33-836-28-83</a> / <a href="tel:+221780103636">78-010-3636</a></span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col text-center">
          <a href="#" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
          </a>
          <a href="#" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
          </a>
          <a href="#" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col text-center">
          <p class="text-success text-gradient font-weight-bold">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Bwhite Sénégal
          </p>
        </div>
      </div>
    </div>
  </footer>