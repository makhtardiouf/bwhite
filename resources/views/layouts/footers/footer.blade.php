  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-2"><img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" /></div>

        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Bwhite
          </a>
          <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Apropos
          </a>
          <br>
          <div class="mt-4">
            <span class="text text-info"><i class="fa-solid fa-phone"></i></span>
            <span class="fs-6 text-center text-dark text-gradient"> <a href="tel:+221338362883">33-836-28-83</a> / <a href="tel:+221780103636">78-010-3636</a></span>
          </div>
        </div>

        @if (!auth()->user() || \Request::is('static-sign-up'))
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
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
        @endif
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up'))
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0  text-success text-gradient font-weight-bold">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Bwhite Sénégal
          </p>
        </div>
      </div>
      @endif
    </div>
  </footer>