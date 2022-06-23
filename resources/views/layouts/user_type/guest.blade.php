@extends('layouts.app')

@section('guest')
@if(\Request::is('login/forgot-password'))
@include('layouts.navbars.guest.nav')
@yield('content')
@else
<div class="container-fluid">
    <div class="row" style="background-color: #292429; --bs-bg-opacity: .3;">
        <div class="col-2">
            <a href="/"><img src="{{ asset('assets/img/bwhite6-logo-black.svg') }}" class="img-fluid border-radius-lg" style="max-height:156px;" /></a></span>
            <!-- <a href="/"><span class=""><img src="{{ asset('assets/img/bwhite-banniere1.jpeg') }}" class=" img-fluid border-radius-lg" /></span></a> -->
            
        </div>
        <div class="col-5 h2 mt-2 text-info text-gradient">La Plateforme de Proximité</div>
        <div class="col-2 m-2">
            <form class="bd-search">
                <input type="search" class="form-control" id="search-input" placeholder="Rechercher..." aria-label="Rechercher..." autocomplete="off" data-bd-docs-version="5.0">
            </form>
        </div>
        <div class="col-2">
            @include('layouts.navbars.guest.nav')
        </div>
    </div>
</div>

<div class="row">
    <div class="col m-2">
        <button type="button" class="btn btn-outline-dark">Véhicules</button>
        <button type="button" class="btn btn-outline-dark">Immobilier</button>
        <button type="button" class="btn btn-outline-dark">Electromenager</button>
        <button type="button" class="btn btn-outline-dark">Informatique</button>
        <button type="button" class="btn btn-outline-dark">Plomberie</button>
        <button type="button" class="btn btn-outline-dark">Sport</button>
    </div>
</div>

@yield('content')
@include('layouts.footers.footer')
@endif
@endsection