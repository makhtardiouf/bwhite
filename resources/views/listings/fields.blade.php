<!-- Titre de l'annonce Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('title', 'Titre:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('category', 'Catégorie:') !!}
        {!! Form::select('category', array(
        'Immobilier' => array('Immobilier' => 'Immobilier'),
        'Automobile' => array('Automobile' => 'Automobile'),
        'Electronique' => array('Electronique' => 'Electronique'),
        'Sport' => array('Sport' => 'Sport'),
        'Divers' => array('Divers' => 'Divers'),
        )) !!}
    </div>
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Prix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Prix:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-8 col-lg-8">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <a href="{{ route('listings.index') }}" class="btn btn-light">Annuler</a>
    {!! Form::submit('Enregistrer', ['class' => 'btn bg-gradient-dark']) !!}
</div>