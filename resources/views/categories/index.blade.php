@extends('layouts.user_type.auth')
@section('title')
    Catégories 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h4>Catégories</h4>
            <div class="section-header-breadcrumb">
                <a href="{{ route('categories.create')}}" class="btn btn-sm bg-gradient-dark ">Ajouter</a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('categories.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

