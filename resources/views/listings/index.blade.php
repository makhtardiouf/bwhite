@extends('layouts.user_type.auth')
@section('title')
    Les annonces 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h4>Les annonces</h4>
            <div class="section-header-breadcrumb">
            <a href="{{ route('listings.create')}}" class="btn btn-sm bg-gradient-dark">Ajouter</a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('listings.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection
