<!-- Titre de l'annonce Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('title', 'Titre:') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'true']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('category', 'Catégorie:') !!}
        
        {!! Form::select('category', array(
        'Immobilier' => array('Immobilier' => 'Appartement', 'Maison'),
        'Automobile' => array('Automobile' => 'Berline', '4x4', 'Moto'),
        'Electronique' => array('Electronique' => 'Ordinateur', 'Téléphone', 'Tablette'),
        'Sport' => array('Sport' => 'Sport'),
        'Divers' => array('Divers' => 'Divers'),
        ) , null, ['class' => 'form-select']) !!}
    </div>
</div>

<!-- Image Field -->
<div class="form-group col-sm-6 ">
    {!! Form::label('image', 'Images:') !!}
    {!! Form::file('image', ['class' => 'form-control'])!!}
</div>
<div class="clearfix"></div>

<!-- Prix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Prix:') !!}
    {!! Form::number('price', null, ['class' => 'form-control', 'required' => 'true']) !!}
</div>

<div class="clearfix"></div>
<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['rows' => '30', 'class' => 'form-control']) !!}
</div>

<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-6 float-right">
    <a href="{{ route('listings.index') }}" class="btn btn-light m-2">Annuler</a>
    {!! Form::submit('Enregistrer', ['class' => 'btn bg-gradient-dark  m-2']) !!}
</div>