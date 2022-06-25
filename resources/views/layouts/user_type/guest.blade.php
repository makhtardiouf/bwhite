@extends('layouts.app')

@section('guest')
@include('layouts.navbars.nav')

<div class="row">
    <div class="col">
        <a href="/"><img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" class="img-fluid" style="max-height:150px;" /></a>

        <span class="h3 ml-4 mt-4 text-info text-gradient">La Plateforme de Proximité</span>
    </div>
</div>

@yield('content')

@include('layouts.footers.footer')
@endsection