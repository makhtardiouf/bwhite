<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $payments->id }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $payments->type }}</p>
</div>

<!-- Product Field -->
<div class="form-group">
    {!! Form::label('product', 'Product:') !!}
    <p>{{ $payments->product }}</p>
</div>

<!-- Platform Field -->
<div class="form-group">
    {!! Form::label('platform', 'Platform:') !!}
    <p>{{ $payments->platform }}</p>
</div>

<!-- Data Field -->
<div class="form-group">
    {!! Form::label('data', 'Data:') !!}
    <p>{{ $payments->data }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $payments->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $payments->updated_at }}</p>
</div>

