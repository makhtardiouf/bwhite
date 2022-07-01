@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
    </div>

    <div class="content">
        <div class="section-body">
            <div class="card my-4">
                <div class="card-header p-2 position-relative">
                    <div class="btn btn-outline-dark border-radius-lg pt-2">
                        <h6 class="text-capitalize h6">Résultat du paiement Wave</h6>
                    </div>
                </div>

                <div class="card-body p-2">
                   <ul>
                    <li>Reference: {{ $payment->id }}</li>
                    <li>Montant: {{ $payment->data["amount"] }} XOF</li>
                    <li>Statut: {{ $payment->data["payment_status"] }}</li>
                    <li></li>
                   </ul>
                    <div class="row">
                        <div class="form-group col-sm-6 float-right">
                            <a href="/packs" class="btn btn-light m-4">Retour</a>

                            <a href="/payments/" class="btn btn-outline-info m-4">Liste des paiements</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection