@extends('layouts.user_type.auth')
@section('title')
    Catégorie
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h3>Catégorie</h3>
        <div class="section-header-breadcrumb">
            <a href="{{ route('categories.index') }}"
                 class="btn btn-primary form-btn float-right">Retour</a>
        </div>
      </div>
   @include('adminlte-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('categories.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
