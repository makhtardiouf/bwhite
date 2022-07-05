@extends('layouts.app')
@section('title')
Contenu de l'annonce
@endsection
@section('content')
<main class="main-content  mt-0">
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">

            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card card-plain">
                            <div class="position-relative">
                                <a class="shadow-xl border-radius-xl">
                                    <img src="{{ asset('storage/'.$listing->image) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <span class="h4">
                                    <!-- {{ $listing->category }}:-->
                                    {{ $listing->title }}
                                </span>
                                <p class="my-2">
                                    <a href="tel:{{ $listing->phone }}" class="text-dark m-2">
                                      <i class="fa-solid fa-phone"></i> &nbsp; {{ $listing->phone }}
                                    </a>
                                </p>
                                <p class="my-2 h6">
                                   Prix: {{ number_format($listing->price, 0, ',', '.') }} XOF
                                </p>

                                <p class="my-2 h6">
                                   Publication: {{ strftime('%d-%m-%Y',strtotime($listing->updated_at)) }}
                                </p>

                                <p class="my-2">
                                    Statut: {!! $listing->approved ? '<i class="fa-solid fa-check-double text-success"></i>' : '<i class="fa-solid fa-circle-pause text-danger"></i>' !!}
                                </p>
                                <p class="m-4">
                                <div>{!! $listing->description !!}</div>
                                </p>

                                <div class="pt-4">
                                    <div class="row">
                                        <div class="text-center">
                                            <a href="tel:{{ $listing->phone }}" class="text-dark m-2">
                                                <i class="fa-2x fa-solid fa-phone"></i>
                                            </a>
                                            <a href="https://wa.me/{{ $listing->phone }}?text=Bonjour, je suis intéressé par votre annonce {{url()->current()}}/listings/show/{{ $listing->id}}" class="text-success m-2">
                                                <i class="fa-2x fa-brands fa-whatsapp"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @auth
                                    <div class="row pt-4">
                                        <div class="col text-center">
                                            <a href="{{ route('listings.index') }}" class="btn btn-outline-dark btn-sm m-2">Retour</a>

                                            @can('approve listing')
                                            <a href="/listings/{{$listing->id}}/edit" class="btn btn-outline-dark btn-sm  m-2">Editer</a>
                                                @if($listing->approved)
                                                <a href="/listings/{{$listing->id}}/disapprove" class="btn btn-outline-danger btn-sm  m-2" onclick="return confirm('Voulez-vous désapprouver cette annonce ?');">Désapprouver ?</a>
                                                @else
                                                <a href="/listings/{{$listing->id}}/approve" class="btn btn-outline-success btn-sm  m-2" onclick="return confirm('Voulez-vous approuver cette annonce ?');">Approuver ?</a>
                                                @endif
                                            @endcan
                                        </div>
                                    </div>
                                    @endauth
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection