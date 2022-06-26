@extends('layouts.app')
@section('title')
    Create Catégorie 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-2">Nouvelle Catégorie</h3>
        </div>
        <div class="content">
            @include('adminlte-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                                {!! Form::open(['route' => 'categories.store']) !!}
                                    <div class="row">
                                        @include('categories.fields')
                                    </div>
                                {!! Form::close() !!}
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
