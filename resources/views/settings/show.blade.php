@extends('layouts.app')
@section('title')
Settings Details
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Settings Details</h1>

    </div>
    @include('stisla-templates::common.errors')
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                @include('settings.show_fields')
                <div class="section-header-breadcrumb">
                    <a href="{{ route('settings.index') }}" class="btn btn-primary form-btn float-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection