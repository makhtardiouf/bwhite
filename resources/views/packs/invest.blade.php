@extends('layouts.app')
@section('content')

<div class="card my-4">
    <div class="card-header p-2 position-relative">
        <div class="btn btn-outline-dark border-radius-lg pt-2">
            <h6 class="text-capitalize h6">Pack Investisseurs Bwhite: 50,000F</h6>
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
                                <i class="fa-2x fa-solid fa-money-bill-trend-up m-3"></i> Souscrivez au Pack Investisseurs
                            </h5>
                        </a>
                        <p class="mb-4 text-sm">
                            Vous qui rêviez de votre propre site de vente en ligne sans savoir comment s'y prendre, ou qui êtes à la recherche d'un secteur rentable où investir, ce pack est le vôtre. C'est le préféré aussi de certains grands commerçants.
                            A 50.000F seulement vous obtenez votre propre espace privé dans la plateforme B-white Sénégal
                            par lequel passeront vos propres clients pour rejoindre la plateforme, 
                            Vos clients une fois dedans vous bénéficierez de tout article acheté sur le site même si vous dormiez; 
                            en effet c'est comme si tous les produits de la plateforme vous appartiennent. 
                        </p>
                        
                        <div class="d-flex">
                            {!! Form::open(['route' => 'payments.wave']) !!}
                            <div class="row d-none">
                                <div class="form-group">
                                    {!! Form::label('product', 'Produit:') !!}
                                    {!! Form::text('product', "Pack Investisseurs", ['class' => 'form-control']) !!}
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    {!! Form::label('platform', 'Platforme:') !!}
                                    {!! Form::text('platform', "Bwhite Senegal", ['class' => 'form-control']) !!}
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    {!! Form::label('price', 'Montant:') !!}
                                    {!! Form::text('price', "120", ['class' => 'form-control']) !!}
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12 pull-right">
                                    <a href="/packs" class="btn btn-light m-2">Retour</a>

                                    {!! Form::submit('Souscrire', ['class' => 'btn bg-gradient-success m-2']) !!}
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