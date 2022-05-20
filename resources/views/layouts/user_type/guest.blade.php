@extends('layouts.app')

@section('guest')
    @if(\Request::is('login/forgot-password')) 
        @include('layouts.navbars.guest.nav')
        @yield('content') 
    @else
        <div class="container z-index-sticky top-0">
            <div class="row">
            <div class="col-2">
                <a href="/"><img src="{{ asset('assets/img/bwhite3.png') }}" /></a>
                </div>
                <div class="col-6 py-4">
                    <span class="display-6 font-weight-bolder text-info text-gradient">Votre Plateforme de Proximité</span>
                </div>

                <div class="col-4">
                    @include('layouts.navbars.guest.nav')
                </div>
            </div>
        </div>
        @yield('content')        
        @include('layouts.footers.guest.footer')
    @endif
@endsection