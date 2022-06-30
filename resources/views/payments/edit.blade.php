@extends('layouts.app')
@section('title')
    Edit Payments 
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Edit Payments</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('payments.index') }}"  class="btn btn-primary">Back</a>
                </div>
            </div>
  <div class="content">
              @include('adminlte-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($payments, ['route' => ['payments.update', $payments->id], 'method' => 'patch']) !!}
                                        <div class="row">
                                            @include('payments.fields')
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
