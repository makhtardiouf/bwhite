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
            <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                        <a href="/packs/annonceur">
                            <h5>
                                <i class="fa-2x fa-solid fa-bullhorn m-3"></i> Pack Annonceurs
                            </h5>
                        </a>
                        <p class="mb-4 text-sm">
                            Poster vos annonces à 1000fr dans une plate-forme pas encore saturée où toutes les annonces seront visibles grâce à notre système de partage
                            en dehors même du site couvrant tous les réseaux sociaux avec un lien renvoyant directement vers la plate-forme B-white Sénégal.
                            Ce pack est réservé aux agences immobilières, aux gérants de parking et aux particuliers voulant écouler un objet.</p>

                        <div class="d-flex align-items-center justify-content-between">
                            <a href="/packs/annonceur">
                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">Souscrire</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src="../assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                        <a href="/">
                            <h5>
                            <i class="fa-2x fa-solid fa-cart-shopping m-3"></i> Pack Commerçants
                            </h5>
                        </a>
                        <p class="mb-4 text-sm">
                            Avec ce pack postez gratuitement vos annonces et vos produits seront minutieusement montés et présentés par notre équipe de monteurs infographes.
                            Après la présentation ils seront ensuite exposés dans la plate-forme et partagés encore dans tous les réseaux sociaux par nos 30.000 agents commerciaux
                            présents partout au Sénégal, ainsi en un clic vous pouvez vous faire beaucoup de ventes par jour sans bouger.</p>

                        <div class="d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">Souscrire</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src="../assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                        <a href="/">
                            <h5>
                            <i class="fa-2x fa-solid fa-money-bill-trend-up m-3"></i> Pack Investisseurs
                            </h5>
                        </a>
                        <p class="mb-4 text-sm">
                            Vous qui rêviez de votre propre site de vente en ligne sans savoir comment s’y prendre, ou qui êtes à la recherche d’un secteur rentable où investir, ce pack est le vôtre. C’est le préféré aussi de certains grands commerçants.
                            A 50.000fr seulement vous obtenez votre propre espace privé dans la plate-forme B-white Sénégal
                            par lequel passeront vos propres clients pour rejoindre la plate-forme, Vos clients une fois dedans vous bénéficierez de tout article acheté sur le site même si vous dormiez ; en effet c’est comme si tous les produits de la plateforme vous appartiennent. </p>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">Souscrire</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection