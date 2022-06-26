@extends('layouts.app')
@section('title')
Create Listing
@endsection
<!-- <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" /> -->

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-0">Saisir une nouvelle annonce</h3>

    </div>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            {!! Form::open(['route' => 'listings.store', 'files' => true, 'role' => 'form text-left']) !!}
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
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

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

<script>
    // FilePond.setOptions({
    //     allowMultiple: true,
    //     server: {
    //         process: "{{ config('filepond.server.process') }}",
    //         revert: "{{ config('filepond.server.revert') }}",
    //         headers: {
    //             'X-CSRF-TOKEN': "{{ @csrf_token() }}",
    //         }
    //     }
    // });

    // FilePond.create(document.querySelector('input[type="file"]'));
</script>

@endsection