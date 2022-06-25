@extends('layouts.app')

@section('guest')
@if(\Request::is('login/forgot-password'))
@include('layouts.navbars.nav')
@yield('content')
@else
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <a href="/"><img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" class="img-fluid border-radius-lg" style="max-height:156px;" /></a>
        </div>
        <div class="col-5 h3 mt-4 text-info text-gradient">La Plateforme de Proximité</div>
        <div class="col-3 mt-4">
            <form class="bd-search">
                <input type="search" class="form-control" id="search-input" placeholder="Rechercher..." aria-label="Rechercher..." autocomplete="off" data-bd-docs-version="5.0">
            </form>
        </div>
        
        <div class="col-2 mt-4">
            @include('layouts.navbars.nav')
        </div>
    </div>
</div>

<div class="row">
    <div class="col m-2">
        <button type="button" class="btn bg-gradient-dark">Véhicules</button>
        <button type="button" class="btn bg-gradient-dark">Immobilier</button>
        <button type="button" class="btn bg-gradient-dark">Electromenager</button>
        <button type="button" class="btn bg-gradient-dark">Informatique</button>
        <button type="button" class="btn bg-gradient-dark">Plomberie</button>
        <button type="button" class="btn bg-gradient-dark">Sport</button>
    </div>
</div>

@yield('content')
@include('layouts.footers.footer')
@endif
@endsection