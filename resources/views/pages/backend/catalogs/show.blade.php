@extends('layouts.admin')
@section('title', 'Catalogue Detail')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">@yield('title')</strong>
                    </div>
                    <div class="card-body mt-2">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">Name *</label>
                                <span class="form-control">{{ ucwords($product->name ?? null) }} </span>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="first_name">Slug *</label>
                                <span class="form-control"><span
                                        class="bg-light btn-sm">/backend/catalog/</span>{{ $product->slug ?? null }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="details">Short Description *</label>
                            <textarea class="form-control custom" readonly>{{  ucwords($product->short_desc ?? null) }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="details">Description *</label>
                            <textarea name="details" class="form-control custom" readonly
                                rows="10">{{ ucwords($product->details ?? null) }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="details">Material *</label>
                            <textarea class="form-control custom" name="material" readonly>{{ ucwords($product->material ?? null) }}</textarea>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="details">Price *</label>
                                <label class="form-control">{{ $product->price ?? 0 }}</label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Size *</label>
                                <label class="form-control">{{ $product->size ?? 0 }}</label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Sku *</label>
                                <label class="form-control">{{ $product->inventory->sku }}</label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Stock Quantity *</label>
                                <label class="form-control">{{ $product->inventory->quantity }}</label>
                            </div>
                                @php
                                    $image = explode(',', $product->images);
                                @endphp
                                @foreach ($image as $images)
                                    <img src="{{ asset('uploads/product/images/' . $images) }}" alt="..."
                                        class="img-thumbnail custom">
                                @endforeach

                        </div>
                        <div class="form-group">
                            <div class="form-check">

                            </div>
                        </div>

                    </div> <!-- /. card-body -->
                </div> <!-- /. card -->
            </div> <!-- /. end-section -->
        </div>
    </div>

        @endsection
