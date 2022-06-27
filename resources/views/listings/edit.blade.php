@extends('layouts.app')
@section('title')
Edit Listing
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-2">Editer l'annonce</h3>

    </div>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            {!! Form::model($listing, ['route' => ['listings.update', $listing->id], 'method' => 'patch', 'files' => true]) !!}
                            <div class="row">
                                @include('listings.fields')
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

@section('extrascripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection