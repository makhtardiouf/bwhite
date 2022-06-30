@extends('layouts.app')
@section('title')
Annonce - page 2
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-2">Contenu de l'annonce</h3>
    </div>

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            {!! Form::open(['route' => 'listings.store', 'files' => true, 'role' => 'form text-left']) !!}
                            {{ csrf_field() }}

                            <div class="row d-none">
                                <div class="form-group col-sm-6">
                                    {!! Form::label('name', 'Prénoms et Nom:') !!}
                                    <input type="text" class="form-control" placeholder="Prénoms et Nom" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name') }}" required>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group col-sm-6">
                                    {!! Form::label('adresse', 'Adresse:') !!}
                                    <input type="text" class="form-control" placeholder="Adresse" name="adresse" id="adresse" aria-label="adresse" aria-describedby="adresse" value="{{ old('adresse') }}">
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group col-sm-6">
                                    {!! Form::label('phone', 'Téléphone mobile:') !!}
                                    <input type="number" class="form-control" placeholder="Téléphone" name="phone" id="phone" aria-label="phone" aria-describedby="phone" value="{{ old('phone') }}" required>
                                </div>
                            </div>

                            <div class="row">
                                @include('listings.fields_public')
                            </div>
                        </div>

                        <div class="form-group col-sm-6 float-right">
                            <a href="{{ route('listings.annonceStep1') }}" class="btn btn-light m-2">Retour</a>

                            {!! Form::submit('Enregistrer', ['class' => 'btn bg-gradient-dark m-2']) !!}
                        </div>
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