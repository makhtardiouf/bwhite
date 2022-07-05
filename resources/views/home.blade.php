@extends('layouts.app')

@section('content')

<main class="main-content  mt-0">
    {{--
    <div class="row">
        <div class="col-4 mt-4 mx-auto">
            <div id="highlight" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#highlight" data-slide-to="0" class="active"></li>
                    <li data-target="#highlight" data-slide-to="1"></li>
                    <li data-target="#highlight" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @php
                    $activeSet = false;
                    @endphp

                    @foreach($listings as $listing)
                    @if($listing->image)
                    @if($activeSet)
                    <div class="carousel-item">
                        @else
                        <div class="carousel-item active">
                            @php
                            $activeSet = true;
                            @endphp
                            @endif
                            <img class="d-block w-100 h-20" src="{{ asset('storage/'.$listing->image) }}" alt="Slide annonce">

                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">{{ $listing->title }}</h5>
                                <p class="text-white text-sm text-truncate">
                                    {!! Str::substr($listing->description, 0, 50) !!}
                                </p>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#highlight" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#highlight" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    --}}
    
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1 text-info text-gradient font-weight-bold">Nouveautés</h6>
                </div>

                <div class="card-body p-3">
                    <div class="row">
                        @foreach($listings as $listing)
                        @if($listing->image)
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="shadow-xl border-radius-xl" href="/listings/show/{{ $listing->id}}">
                                        <img src="{{ asset('storage/'.$listing->image) }}" alt="img-blur-shadow" class="img-thumbnail shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="/listings/show/{{ $listing->id}}">
                                        <h5>{{ $listing->title }}</h5>
                                    </a>
                                    <h5>{{ number_format($listing->price, 0, ',', '.') }} XOF</h5>

                                    <p class="mb-4 text-sm text-truncate">
                                        {!! Str::substr($listing->description, 0, 100) !!}
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="/listings/show/{{ $listing->id }}"><button type="button" class="btn btn-outline-primary btn-sm my-2">Voir</button></a>

                                        <a href="https://wa.me/{{ $listing->phone }}?text=Bonjour, je suis intéressé par votre annonce {{url()->current()}}/listings/show/{{ $listing->id}}" class="rounded-circle text-success" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                            <i class="fa-2x fa-brands fa-whatsapp"></i>
                                        </a>
                                        <a href="tel:+{{ $listing->phone }}" class="rounded-circle text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                            <i class="fa-solid fa-phone"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <p class="text-sm">Immobilier</p>
                </div>

                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="/">
                                        <h5>
                                            Dakar
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Belle grande villa meublée à louer à Sendou, composée de 6 chambres 2 salons, 3 terrasses, une piscine un grand garage un parking pour plusieurs voitures.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Voir</button>
                                        <div class="avatar-group mt-2">
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                            </a>
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="../assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="/">
                                        <h5>
                                            Thies
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Villa R+2 en bordure de route, avec 6 chambres dont 5 avec sdb, 2 salons et deux toilettes publiques.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Voir</button>
                                        <div class="avatar-group mt-2">
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                            </a>
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="../assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="/">
                                        <h5>
                                            Saint-Louis
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Très moderne villa de 5 chambres salles de bain toilette visiteur 2 salons une cuisine un garage un cour avant et arrière.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Voir</button>
                                        <div class="avatar-group mt-2">
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                            </a>
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col m-2">
            <a href="#"><img src="{{ asset('assets/img/bwhite-banniere1.jpeg') }}" class="mx-auto img-fluid border-radius-lg" /></a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <p class="text-sm">Electronique</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="../assets/img/laptopacer.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="/">
                                        <h5>
                                            Ordinateurs
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Laptop ACER, écran 14 Pouces Core i5 Ram 16Go, Disque Dur SSD 512Go, neuf dans sa boîte d'origine
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Voir</button>
                                        <div class="avatar-group mt-2">
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                            </a>
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="../assets/img/ipad.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="/">
                                        <h5>
                                            Tablettes
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Apple iPad 5ème génération, 128Go disk, Wifi, écran 9.7 disponible chez Bwhite Multimédia
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Voir</button>
                                        <div class="avatar-group mt-2">
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                            </a>
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="../assets/img/pc-macbook.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="/">
                                        <h5>
                                            Laptop
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Mac book pro 2017, RAM 16Go, écran 13 pouces, Disque Dur SSD 256Go.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Voir</button>
                                        <div class="avatar-group mt-2">
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                            </a>
                                            <a href="/" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card h-100 card-plain border">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="/">
                                        <i class="fa fa-plus text-secondary mb-3"></i>
                                        <h5 class=" text-success text-gradient font-weight-bold"><a href="{{ route('listings.create')}}">Ajoutez une annonce</a>
                                    </a>
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

{{-- 
@section('extrascripts')
<script>
    $('.carousel').carousel();
</script>
@endsection
--}}