<div class="card mb-3">
    <img src="{{ asset('storage/'.$listing->image) }}" class="card-img-top  shadow border-radius-xl" alt="{{ $listing->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $listing->category }}: {{ $listing->title }}</h5>
        <p class="card-text"><textarea id="description">{{ $listing->description }}</textarea></p>
        <p class="card-text">
            <small class="text-muted">
                <ul>
                    <li>{{ $listing->price }} XOF</li>
                    <li>{{ $listing->area }}</li>
                    <li>{{ $listing->updated_at }}</li>
                </ul>
            </small>
        </p>
    </div>
</div>