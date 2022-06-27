<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true']) !!}
</div>
<div class="clearfix"></div>

<!-- Icon Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icone:') !!}
    {!! Form::text('icon', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div> -->


<!-- Priority Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority', 'Priorité (1-10):') !!}
    {!! Form::number('priority', "1", ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4, 'maxlength' => 100]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 pull-right">

    <a href="{{ route('categories.index') }}" class="btn btn-light m-2">Annuler</a>

    {!! Form::submit('Enregistrer', ['class' => 'btn bg-gradient-dark m-2']) !!}
</div>