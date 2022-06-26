@extends('layouts.app')
@section('title')
Catégorie
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h3>Catégorie</h3>

    </div>
    @include('adminlte-templates::common.errors')
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                @include('categories.show_fields')
                <div class="section-header-breadcrumb">
                    <a href="{{ route('categories.index') }}" class="btn btn-sm bg-gradient-dark float-right">Retour</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection