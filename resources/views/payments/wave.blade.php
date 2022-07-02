@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
    </div>

    <div class="content">
        <div class="section-body">
            <div class="card my-4">
                <div class="card-header p-2 position-relative">
                    <div class="btn btn-outline-dark border-radius-lg pt-2">
                        <h6 class="text-capitalize h6">Achat {{ $params['product'] }}</h6>
                    </div>
                </div>

                <div class="card-body p-2">
                    <div class="m-4">Cliquer sur le boutton ci-dessous pour 
                        <span class="h6 text-info">payer {{ $params['price'] }} XOF avec l'application Wave</span>
                        <br><span class="text-sm font-italic">(Prix de test)</span>
                    </div>
                        
                    @if($params['error'])
                        <div class="m-4 text text-danger">{{ $params['error'] }}</div>
                    @endif

                    <div class="row">
                        <div class="form-group col-sm-6 float-right mt-2">
                            <a href="/packs" class="btn btn-light mx-4">Annuler</a>

                            @if(!$params['error'])
                            <a href="{{ $params['wave_launch_url'] }}" class="btn btn-outline-info">
                                <img src="{{asset('images/wave-logo.png')}}" class="h-8" />
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection