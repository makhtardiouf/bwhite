@extends('layouts.app')

@section('guest')
@include('layouts.navbars.nav')

<div class="row">
    <div class="col">
        <a href="/"><img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" class="img-fluid border-radius-lg" style="max-height:156px;" /></a>

        <span class="col-9 h3 mt-4 text-info text-gradient">La Plateforme de Proximité</span>
    </div>
</div>

@yield('content')

@include('layouts.footers.footer')
@endsection