@extends('layouts.user_type.auth')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('categories')
        </div>     
    </div>   
</div>
@endsection