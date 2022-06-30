@extends('layouts.app')
@section('title')
Payments Details
@endsection
@section('content')
<section class="section">
    <div class="section-header m-4">
        <h1 class="h6">Paiement</h1>
    </div>

    @include('adminlte-templates::common.errors')
    <div class="section-body">
        <div class="card">
            <div class="card-body col-8">
                @include('payments.show_fields')

                <div class="section-header-breadcrumb m-2">
                    <a href="{{ route('payments.index') }}" class="btn btn-primary form-btn float-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection