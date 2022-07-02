@extends('layouts.app')
@section('content')

<div class="card my-4">
    <div class="card-header p-2 position-relative">
        <div class="btn btn-outline-dark border-radius-lg pt-2">
            <h6 class="text-capitalize h6">Pack Commerçants Bwhite: 30,000F</h6>
        </div>
    </div>

    <div class="card-body p-2">
        <div class="row">
            <div class="col-xl-6 col-md-8 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src="{{asset('assets/img/home-decor-2.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                        <a href="/">
                            <h5>
                                <i class="fa-2x fa-solid fa-cart-shopping m-3"></i> Souscrivez au Pack Commerçants
                            </h5>
                        </a>
                        <p class="mb-4 text-sm">
                            Avec ce pack postez gratuitement vos annonces et vos produits seront minutieusement montés et présentés par notre équipe de monteurs infographes.
                            Après la présentation ils seront ensuite exposés dans la plateforme et partagés encore dans tous les réseaux sociaux par nos 30.000 agents commerciaux
                            présents partout au Sénégal, ainsi en un clic vous pouvez vous faire beaucoup de ventes par jour sans bouger.</p>

                        <div class="d-flex">
                            {!! Form::open(['route' => 'payments.wave']) !!}
                            <div class="row d-none">
                                <div class="form-group">
                                    {!! Form::label('product', 'Produit:') !!}
                                    {!! Form::text('product', "Pack Commerçants", ['class' => 'form-control']) !!}
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    {!! Form::label('platform', 'Platforme:') !!}
                                    {!! Form::text('platform', "Bwhite Senegal", ['class' => 'form-control']) !!}
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    {!! Form::label('price', 'Montant:') !!}
                                    {!! Form::text('price', "110", ['class' => 'form-control']) !!}
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12 pull-right">
                                    <a href="/packs" class="btn btn-light m-2">Retour</a>

                                    {!! Form::submit('Souscrire', ['class' => 'btn bg-gradient-info m-2']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection