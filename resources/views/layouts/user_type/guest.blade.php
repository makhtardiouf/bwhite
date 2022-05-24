@extends('layouts.app')

@section('guest')
    @if(\Request::is('login/forgot-password')) 
        @include('layouts.navbars.guest.nav')
        @yield('content') 
    @else
        <div class="container-fluid top-0">
            <div class="row">
            <div class="col-2">
                <a href="/"><img src="{{ asset('assets/img/bwhite4.png') }}" style="max-height:156px;" class="p-4"/></a>
                </div>
                <div class="col-6 pl-2 py-4">
                    <span class="display-6 font-weight-bolder text-dark text-gradient">Votre Plateforme de Proximité</span>
                </div>

                <div class="col-4">
                    @include('layouts.navbars.guest.nav')
                </div>
            </div>
        </div>
        @yield('content')        
        @include('layouts.footers.footer')
    @endif
@endsection