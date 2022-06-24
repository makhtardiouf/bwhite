@extends('layouts.user_type.auth')
@section('title')
    Contenu de l'annonce 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h4>Contenu de l'annonce</h4>
        <div class="section-header-breadcrumb">
            <a href="{{ route('listings.index') }}"
                 class="btn btn-sm bg-gradient-dark float-right">Retour</a>
        </div>
      </div>
   @include('adminlte-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('listings.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
