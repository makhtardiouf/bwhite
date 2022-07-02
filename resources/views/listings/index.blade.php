@extends('layouts.app')
@section('title')
Les annonces
@endsection
@section('content')

<div class="row mt-4">
    <div class="col-12">
        <div class="card my-2">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="btn btn-outline-dark border-radius-lg pt-2">
                    <h6 class="text-capitalize h6">Les annonces</h6>
                </div>
            </div>

            <div class="card-body py-4 px-2">
                @include('listings.table')

                <div class="my-4">{{ $listings->links() }}</div>

                <div class="section-header-breadcrumb">
                    <a href="{{ route('listings.create')}}" class="btn btn-sm bg-gradient-dark">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection