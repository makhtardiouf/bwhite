@extends('layouts.app')
@section('title')
Les annonces
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h4>Les annonces</h4>

    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                @include('listings.table')
                <div class="section-header-breadcrumb">
                    <a href="{{ route('listings.create')}}" class="btn btn-sm bg-gradient-dark">Ajouter</a>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection