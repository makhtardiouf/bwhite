@extends('layouts.app')

@section('auth')
    @if(\Request::is('static-sign-up')) 
        @include('layouts.navbars.nav')
        @yield('content')
        @include('layouts.footers.footer')
    
    @elseif (\Request::is('static-sign-in')) 
        @include('layouts.navbars.nav')
            @yield('content')
        @include('layouts.footers.footer')
    
    @else
        @if (\Request::is('profile'))  
            @include('layouts.navbars.sidebar')
            <div class="main-content position-relative bg-gray-100">
                @include('layouts.navbars.nav')
                @yield('content')
            </div>

        @else
            @include('layouts.navbars.sidebar')
            <main class="main-content position-relative mt-1 border-radius-lg">
                @include('layouts.navbars.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.footer')
                </div>
            </main>
        @endif

       {{-- @include('components.fixed-plugin') --}}
    @endif

    

@endsection