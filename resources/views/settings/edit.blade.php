@extends('layouts.app')
@section('title')
Edit Settings
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-0">Edit Settings</h3>

    </div>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            {!! Form::model($settings, ['route' => ['settings.update', $settings->id], 'method' => 'patch']) !!}
                            <div class="row">
                                @include('settings.fields')
                            </div>

                            {!! Form::close() !!}
                            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                                <a href="{{ route('settings.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection