@extends('layouts.app')
@section('title')
Create Listing
@endsection
<!-- <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" /> -->

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-2">Coordonnées de la nouvelle annonce</h3>
    </div>

    <div class="content">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            <div class="col-6">@include('adminlte-templates::common.errors')</div>
                            <br>
                            @if(Auth::check())
                                <div class="d-none">
                                    {{ $name = old('name') ? old('name') : Auth::user()->name }}
                                    {{ $phone = old('phone') ? old('phone') : Auth::user()->phone }}
                                </div>
                            @else
                                <div class="d-none">
                                    {{ $name = old('name') }}
                                    {{ $phone = old('phone') }}
                                </div>
                            @endif
                           

                            {!! Form::open(['route' => 'listings.annonceStep2', 'files' => true, 'role' => 'form text-left']) !!}
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    {!! Form::label('name', 'Prénoms et Nom:') !!}
                                    <input type="text" class="form-control" placeholder="Prénoms et Nom" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ $name }}" required>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group col-sm-6">
                                    {!! Form::label('adresse', 'Adresse:') !!}
                                    <input type="text" class="form-control" placeholder="Adresse" name="adresse" id="adresse" aria-label="adresse" aria-describedby="adresse" value="{{ old('adresse') }}">
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group col-sm-6">
                                    {!! Form::label('phone', 'Téléphone mobile:') !!}
                                    <input type="number" class="form-control" placeholder="221" name="phone" id="phone" aria-label="phone" aria-describedby="phone" value="{{ $phone }}" required>
                                </div>
                            </div>

                            <div class="form-group col-sm-6 float-right mt-4">
                                <a href="{{ route('listings.index') }}" class="btn btn-light m-2">Annuler</a>
                                {!! Form::submit('Suivant', ['class' => 'btn bg-gradient-dark m-2']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection