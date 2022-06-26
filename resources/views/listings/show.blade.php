@extends('layouts.user_type.auth')
@section('title')
Contenu de l'annonce
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h4>Contenu de l'annonce</h4>
    </div>
    @include('adminlte-templates::common.errors')
    <div class="section-body">
        <div class="card">
            <div class="card-body col-8">
                @include('listings.show_fields')

                <div class="section-header-breadcrumb">
                    <a href="{{ route('listings.index') }}" class="btn btn-sm bg-gradient-dark float-right">Retour</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extrascripts')
@section('extrascripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    var editor = ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            editor.enableReadOnlyMode('description');
            editor.isReadOnly;
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection