@extends('layouts.app')
@section('title')
    Payments 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Payments</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('payments.create')}}" class="btn btn-primary form-btn">Payments <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('payments.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

