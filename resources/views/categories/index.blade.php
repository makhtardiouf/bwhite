@extends('layouts.app')
@section('title')
Catégories
@endsection
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card py-2">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="btn btn-outline-dark border-radius-lg pt-2">
                    <h6 class="text-capitalize h6">Les Catégories</h6>
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
