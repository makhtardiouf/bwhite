@extends('layouts.app')
@section('title')
    Settings 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Settings</h1>
           
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('settings.table')
                
                <div class="section-header-breadcrumb">
                <a href="{{ route('settings.create')}}" class="btn btn-primary form-btn">Settings <i class="fas fa-plus"></i></a>
            </div>
            </div>
       </div>
   </div>
    
    </section>
@endsection

