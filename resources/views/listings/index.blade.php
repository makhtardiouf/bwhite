@extends('layouts.app')
@section('title')
Les annonces
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Les annonces</h6>
                </div>
            </div>

            <div class="card-body p-2">
                @include('listings.table')
                <div class="section-header-breadcrumb">
                    <a href="{{ route('listings.create')}}" class="btn btn-sm bg-gradient-dark">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection