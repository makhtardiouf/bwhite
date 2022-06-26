<!-- Titre de l'annonce Field -->
<div class="form-group">
    {!! Form::label('title', "") !!}
    <p>{{ $listing->title }}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Catéorie:') !!}
    <p>{{ $listing->category }}</p>
</div>

<!-- Prix Field -->
<div class="form-group">
    {!! Form::label('price', 'Prix (XOF):') !!}
    <p>{{ $listing->price }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    <p><img class="img-thumbnail border-radius-xl" src="{{ asset('storage/'.$listing->image) }}"></p>
</div>

<!-- Area Field -->
<div class="form-group">
    {!! Form::label('area', 'Zone géographique:') !!}
    <p>{{ $listing->area }}</p>
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p><textarea id="description" readonly>{{ $listing->description }}</textarea></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Dernière mise à jour:') !!}
    <p>{{ $listing->updated_at }}</p>
</div>

