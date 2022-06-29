@extends('layouts.app')
@section('title')
Annonce - page 2
@endsection>

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-2">Coordonnées de la nouvelle annonce</h3>
    </div>

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            {!! Form::open(['route' => 'listings.annonceStep2', 'role' => 'form text-left']) !!}
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Prénoms et Nom" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Adresse" name="adresse" id="adresse" aria-label="adresse" aria-describedby="adresse" value="{{ old('adresse') }}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" class="form-control" placeholder="Téléphone" name="phone" id="phone" aria-label="phone" aria-describedby="phone" value="{{ old('phone') }}" required>
                                    </div>
                                   
                                </div>
                            </div>
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