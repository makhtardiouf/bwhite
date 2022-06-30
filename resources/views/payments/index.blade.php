@extends('layouts.app')
@section('title')
Payments
@endsection
@section('content')
<section class="section">
    <div class="section-header p-4">
        <h4 class="h4">Paiements effectués</h4>
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