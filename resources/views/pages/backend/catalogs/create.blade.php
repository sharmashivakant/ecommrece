@extends('layouts.admin')
@section('title', 'Create New Catalogue')
@section('content')
    <div class="col-12">
        <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success" id="msg">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">@yield('title')</strong>
                    </div>
                    <div class="card-body mt-2">
                        <form method="post" action="{{ route('admin.catalog.upload') }}" enctype="multipart/form-data"
                            class="dropzone" id="dropzone">
                            @csrf
                            <div class="dz-message needsclick">
                                <div class="circle circle-lg bg-primary">
                                    <i class="fe fe-upload fe-24 text-white"></i>
                                </div>
                                <h5 class="text-muted mt-4">Drop files here or click to upload</h5>
                            </div>
                        </form>
                        <form action="{{ route('admin.catalog.store') }}" method="post" id="catalog_form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12 mt-3">
                                    <label for="first_name">Name *</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="details">Short Description *</label>
                                    <textarea class="form-control" name="short_desc">{{ old('short_desc') }}</textarea>
                                    @if ($errors->has('short_desc'))
                                        <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="details">Description *</label>
                                <textarea name="details" class="form-control" rows="10">{{ old('details') }}</textarea>
                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="details">Material *</label>
                                <textarea class="form-control" name="material">{{ old('material') }}</textarea>
                                @if ($errors->has('material'))
                                    <span class="text-danger">{{ $errors->first('material') }}</span>
                                @endif
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="details">Price *</label>
                                    <input type="text" name="price" value="{{ old('price') }}" class="form-control" />
                                    @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="details">Size *</label>
                                    <input type="text" name="size" value="{{ old('size') }}" class="form-control" />
                                    @if ($errors->has('size'))
                                        <span class="text-danger">{{ $errors->first('size') }}</span>
                                    @endif
                                </div>
                            </div>


                    </div> <!-- /. card-body -->
                </div> <!-- /. card -->

                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Stock Inventory</strong>
                        </div>

                        <div class="card-body mt-2">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="details">Sku *</label>
                                <input type="text" name="sku" {{ old('sku') }} class="form-control" />
                                @if ($errors->has('sku'))
                                    <span class="text-danger">{{ $errors->first('sku') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Stock Quantity *</label>
                                <input type="text" name="quantity" {{ old('quantity') }} class="form-control" />
                                @if ($errors->has('quantity'))
                                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                                @endif
                            </div>
                            </div>
                        </div>
                    </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            </div> <!-- /. end-section -->
        @endsection
        @push('css')
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
        @endpush
        @push('js')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
            <script type="text/javascript">
                Dropzone.options.dropzone = {
                    maxFilesize: 10,
                    renameFile: function(file) {
                        var dt = new Date();
                        var time = dt.getTime();
                        return time + file.name;
                    },
                    acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    addRemoveLinks: true,
                    timeout: 60000,
                    success: function(file, response) {
                        console.log(response);
                        $('#catalog_form').append('<input type="hidden" name="images[]" value="' + response['success'] +
                            '" />');
                    },
                    error: function(file, response) {
                        return false;
                    }
                };
            </script>
        @endpush
