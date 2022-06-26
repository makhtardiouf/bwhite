@extends('layouts.app')
@section('title')
Editer la catégorie
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-0">Editer la catégorie</h3>
        <div class="filter-container section-header-breadcrumb row justify-content-md-end">
            <a href="{{ route('categories.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'patch']) !!}
                            <div class="row">
                                @include('categories.fields')
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection