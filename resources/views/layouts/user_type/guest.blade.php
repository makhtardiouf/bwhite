@extends('layouts.app')

@section('guest')
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
@endsection