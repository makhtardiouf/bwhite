@extends('layouts.app')
@section('content')

<div class="card my-4">
    <div class="card-header p-2 position-relative">
        <div class="btn btn-outline-dark border-radius-lg pt-2">
            <h6 class="text-capitalize h6">Les Packs Bwhite</h6>
        </div>
    </div>

    <div class="card-body p-2">
        <div class="row">
            <div class="col-xl-6 col-md-8 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                        <a href="/">
                            <h5>
                                <i class="fa-2x fa-solid fa-bullhorn m-3"></i> Souscrivez au Pack Annonceurs
                            </h5>
                        </a>
                        <p class="mb-4 text-sm">
                            Poster vos annonces à 1000fr dans une plate-forme pas encore saturée où toutes les annonces seront visibles grâce à notre système de partage
                            en dehors même du site couvrant tous les réseaux sociaux avec un lien renvoyant directement vers la plate-forme B-white Sénégal.
                            Ce pack est réservé aux agences immobilières, aux gérants de parking et aux particuliers voulant écouler un objet.</p>

                        <div class="d-flex">
                            {!! Form::open(['route' => 'settings.store']) !!}
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('product', 'Produit:') !!}
                                    {!! Form::text('product', "Pack Annonceurs", ['class' => 'form-control']) !!}
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    {!! Form::label('platform', 'Platforme:') !!}
                                    {!! Form::text('platform', "Bwhite Senegal", ['class' => 'form-control']) !!}
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    {!! Form::label('price', 'Montant:') !!}
                                    {!! Form::text('price', "100", ['class' => 'form-control']) !!}
                                </div>

                                <div class="clearfix"></div>

                                <div class="form-group col-sm-12 pull-right">
                                    <a href="/packs" class="btn btn-light m-2">Retour</a>

                                    {!! Form::submit('Souscrire', ['class' => 'btn bg-gradient-dark m-2']) !!}
                                </div>

                                {!! Form::close() !!}
                                <div class="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection