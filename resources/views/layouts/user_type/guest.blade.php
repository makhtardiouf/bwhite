@extends('layouts.app')

@section('guest')
    @if(\Request::is('login/forgot-password')) 
        @include('layouts.navbars.guest.nav')
        @yield('content') 
    @else
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-6">
                    <span class="p-4"><a href="/"><img src="{{ asset('assets/img/bwhite5-logo.jpeg') }}" style="max-height:156px;" /></a></span>
                </div>

                <div class="col-md-8">
                    <a href="/"><span class=""><img src="{{ asset('assets/img/bwhite-banniere1.jpeg') }}" class=" img-fluid border-radius-lg" /></span></a>
                </div>

                <div class="col-md-2 col-sm-4">
                    @include('layouts.navbars.guest.nav')
                </div>
            </div>
        </div>
        @yield('content')        
        @include('layouts.footers.footer')
    @endif
@endsection
