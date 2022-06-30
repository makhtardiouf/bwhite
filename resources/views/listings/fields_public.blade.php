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
    {!! Form::label('price', 'Prix (XOF):') !!}
    {!! Form::number('price', null, ['class' => 'form-control', 'required' => 'true']) !!}
</div>

<div class="clearfix"></div>
<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4, 'maxlength' => 100]) !!}
</div>
