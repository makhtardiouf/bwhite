@extends('layouts.app')

@section('content')

  <main class="main-content">
    <section>
      <div class="page-header">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="text-info text-gradient font-weight-bold">Bienvenue</h3>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" aria-label="Mot de passe">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Se rappeler</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Connexion</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <small class="text-muted">
                  <a href="/login/forgot-password" class="text-dark">Vous avez oublié votre mot de passe?</a>
                </small>
                  <p class="mb-4 text-sm mx-auto">
                    <a href="register" class="text-info text-gradient font-weight-bold">Ouvrir un compte</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
