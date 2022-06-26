@extends('layouts.app')
@section('title')
Catégories
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Catégorie</h6>
                </div>
            </div>

            <div class="card-body p-2">
                @include('categories.table')

                <div class="section-header-breadcrumb">
                    <a href="{{ route('categories.create')}}" class="btn btn-sm bg-gradient-dark ">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
