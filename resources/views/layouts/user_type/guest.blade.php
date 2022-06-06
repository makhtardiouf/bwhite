@extends('layouts.app')

@section('guest')
    @if(\Request::is('login/forgot-password')) 
        @include('layouts.navbars.guest.nav')
        @yield('content') 
    @else
        <div class="container-fluid top-0">
            <div class="row">
            <div class="col-2">
                <a href="/"><img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" style="max-height:156px;" class="p-4"/></a>
                </div>
                <div class="col-8 page-header min-vh-30 pt-2 border-radius-lg" style="background-image: url('{{ asset('assets/img/bwhite-banniere1.jpeg') }}');">
                <span class="mask opacity-6"></span>
                </div>

                <div class="col-2">
                    @include('layouts.navbars.guest.nav')
                </div>
            </div>
        </div>
        @yield('content')        
        @include('layouts.footers.footer')
    @endif
@endsection
