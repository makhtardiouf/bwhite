<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}: {{ $payments->id }}
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}: {{ $payments->type }}
</div>

<!-- Product Field -->
<div class="form-group">
    {!! Form::label('product', 'Product:') !!} {{ $payments->product }}
</div>

<!-- Platform Field -->
<div class="form-group">
    {!! Form::label('platform', 'Platform:') !!} {{ $payments->platform }}
</div>

<!-- Data Field -->
<div class="form-group">
    {!! Form::label('data', 'Données:') !!}
    <p clas="p-2">{{ json_encode($payments->data) }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Date:') !!}: {{ $payments->updated_at }}
</div>

