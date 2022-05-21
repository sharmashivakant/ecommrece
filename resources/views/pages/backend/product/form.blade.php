@extends('layouts.backend')
@if(request()->routeIs('catalog.products.edit'))
    @section('title','Edit Product')
@else
    @section('title','Add Product')
@endif
@section('content')
<div class="card">
    <div class="card-body">
        <x-validation />
        @if(request()->routeIs('catalog.products.edit'))
            {!! Form::model($product,['route' => ['catalog.products.update',$product->id], 'method' => 'put','data-parsley-validate']) !!}
        @else
            {!! Form::open(['route' => 'catalog.products.store','data-parsley-validate']) !!}
        @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        {!! Form::label('Product Category') !!}
                        {!! Form::select('category', $cats->pluck('name','id') , 0 , [
                            'class' => 'form-control',
                            'placeholder' => 'Select Product Category',
                            'required'
                        ]) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label('Product Details') !!}
                        {!! Form::textarea('details', old('details'), [
                            'class' => 'form-control',
                            'placeholder' => 'Product Details',
                            'rows' => 3,
                            'required'
                        ]) !!}
                    </div>

                    <div class="mb-3">
                        @if(request()->routeIs('catalog.products.edit'))
                            {!! Form::submit('Update Category', ['class' => "btn btn-primary mt-2 float-right"]) !!}
                        @else
                            {!! Form::submit('Save Category', ['class' => "btn btn-primary mt-2 float-right"]) !!}
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection