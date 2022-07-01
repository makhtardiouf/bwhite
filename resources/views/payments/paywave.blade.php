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
                        <h6 class="text-capitalize h6">Achat Pack Bwhite</h6>
                    </div>
                </div>

                <div class="card-body p-2">
                    <p class="h6 m-2">Cliquer sur le boutton ci-dessous pour payer avec l'application Wave</p>

                    <div class="row">
                        <div class="form-group col-sm-6 float-right">
                            <a href="{{$wave_launch_url}}" class="btn btn-outline-info m-4"><img src="{{asset('images/wave-logo.png')}}" class="h-12"/></a>
                            <div class="clear-fix"></div>
                            <a href="{{ route('payments.index') }}" class="btn btn-light mx-4 my-2">Annuler</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection