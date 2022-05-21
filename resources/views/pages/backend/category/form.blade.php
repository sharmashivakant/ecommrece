@extends('layouts.backend')
@if(request()->routeIs('catalog.categories.edit'))
    @section('title','Edit Category')
@else
    @section('title','Add Category')
@endif
@section('content')
<div class="card">
    <div class="card-body">
        <x-validation />
        @if(request()->routeIs('catalog.categories.edit'))
            {!! Form::model($category,['route' => ['catalog.categories.update',$category->id], 'method' => 'put','data-parsley-validate']) !!}
        @else
            {!! Form::open(['route' => 'catalog.categories.store','data-parsley-validate']) !!}
        @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        {!! Form::label('Name *') !!}
                        {!! Form::text('name', old('name'), [
                            'class' => 'form-control',
                            'placeholder' => 'Category Name',
                            'required'
                        ]) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label('Details *') !!}
                        {!! Form::text('details', old('details'), [
                            'class' => 'form-control',
                            'placeholder' => 'Category Details',
                            'required'
                        ]) !!}
                    </div>

                    <div class="mb-3">
                        @if(request()->routeIs('catalog.categories.edit'))
                            {!! Form::submit('Update Category', ['class' => "btn btn-primary mt-2 float-right"]) !!}
                        @else
                            {!! Form::submit('Save Category', ['class' => "btn btn-primary mt-2 float-right"]) !!}
                        @endif
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection