@extends('layouts.admin')
@section('title', 'Manage Catalogue')
@section('content')
<div class="col-12">
    <div class="card shadow">
        <div class="card-body">
            <div class=" mt-3">
                <x-validation />
                @if (session()->has('message'))
                <div class="alert alert-success" id="msg">
                    {{ session()->get('message') }}
                </div>
                @endif
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($products as $key => $product)
                            <td>
                                <a href="#">{{ $key+1 }}</a>
                            </td>
                            <td class="sorting_1">
                                <div class="d-flex align-items-center"><a href="app-product.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">@php
                                            $image = explode(',',$product->images);

                                            @endphp<img src="{{ asset('uploads/product/images/'.$image[0]) }}"
                                                width="40" height="40" alt=""></div>
                                    </a>
                                    <div><a href="app-product.html" class="text-reset">{{$product->name}}</a>
                                        <div class="sa-meta mt-0">
                                            <ul class="sa-meta__list">
                                                </li>
                                                <li class="sa-meta__item">SKU: <span title="Click to copy product SKU"
                                                        class="st-copy">{{ $product->inventory->sku ?? null }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{$product->category->name ?? null}}</td>
                            <td>
                                @if($product->status == 1)
                                <span class="badge rounded-pill bg-success text-light">In Stock</span>
                                @elseif($product->status == 0)
                                <span class="badge rounded-pill bg-danger text-light">Out Of Stock</span>
                                @endif
                            </td>
                            <td>&#8377;{{$product->price}}</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('admin.catalog.show',$product->slug) }}"
                                                class="dropdown-item">Show</a>
                                            <a href="{{ route('admin.catalog.edit',$product->slug) }}"
                                                class="dropdown-item">Edit</a>
                                            <a class="dropdown-item"
                                                onclick="deleteCustomer('{{ route('admin.catalog.destroy',$product->id) }}')">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('assets/theme-new/css/dataTables.bootstrap4.css') }}">
@endpush

@push('js')
<script src="{{ asset('assets/theme-new/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/theme-new/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
$('#products').DataTable({
    autoWidth: true,
    "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
    ]
});
</script>
@endpush
