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
                                <p class="my-2 h6">
                                    {{ number_format($listing->price, 0, ',', '.') }} XOF
                                </p>
                                <p class="my-2 h6">
                                    {{ Carbon\Carbon::parse($listing->updated_at)->format('F d, Y') }}
                                </p>

                                <p class="m-4">
                                <div>{!! $listing->description !!}</div>
                                </p>

                                <div class="d-flex align-items-center pt-4">
                                    <a href="tel:+221780103636" class="text-dark px-6 m-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="En cours">
                                        <i class="fa-2x fa-solid fa-phone"></i>
                                    </a>
                                    <a href="https://wa.me/221780103636?text=Bonjour" class="text-success m-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="En cours">
                                        <i class="fa-2x fa-brands fa-whatsapp"></i>
                                    </a>
                                </div>

                                @auth
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="form-group col-sm-6 float-right">
                                        <a href="{{ route('listings.index') }}" class="btn btn-outline-dark btn-sm m-2">Retour</a>
                                        <a href="/listings/{{$listing->id}}/edit" class="btn btn-outline-primary btn-sm mb-0">Editer</a>
                                    </div>
                                    <div class="avatar-group mt-2">
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                        </a>
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
</main>
@endsection