<!-- Titre de l'annonce Field -->
<div class="form-group">
    {!! Form::label('title', "Titre de l'annonce:") !!}
    <p>{{ $listing->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $listing->description }}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $listing->category }}</p>
</div>

<!-- Prix Field -->
<div class="form-group">
    {!! Form::label('price', 'Prix:') !!}
    <p>{{ $listing->price }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $listing->image }}</p>
</div>

<!-- Area Field -->
<div class="form-group">
    {!! Form::label('area', 'Area:') !!}
    <p>{{ $listing->area }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $listing->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $listing->updated_at }}</p>
</div>

