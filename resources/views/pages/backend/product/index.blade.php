@extends('layouts.backend')
@section('title','Products')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex gap-4 align-items-center">
            <div class="d-md-flex gap-4 align-items-center float-right">
                <a href="{{ route('catalog.products.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-circle me-2"></i> Add New Product
                </a>
            </div>
        </div>
    </div>
</div>

<div class="table-responsive mt-3">
    <x-validation />
    <table id="datatable" class="table table-custom mb-0 table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Product#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>In Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $prd)
            <tr>
                <td>{{ $prd->id }}</td>
                <td>{{ $prd->sku }}</td>
                <td>{{ $prd->number }}</td>
                <td><a href="#" class="border-bottom">{{ $prd->name }}</a></td>
                <td>Rs. {{ $prd->price }}.00</td>
                <td>
                    @if($prd->status == 1)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Disabled</span>
                    @endif
                </td>
                <td><a href="#" class="border-bottom">{{ rand(1,100) }}</a></td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="actions">
                        <a href="{{ route('catalog.products.edit',$prd->id) }}" class="btn btn-outline-dark"><i
                                class="bi bi-pencil"></i></a>
                        <a href="#" class="btn btn-outline-dark"><i class="bi bi-stickies"></i></a>
                        <a href="#" class="btn btn-secondary"><i class="bi bi-trash"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('css')
<!-- CSS -->
<link rel="stylesheet" href="{{ asset('libs/datatable/datatables.min.css') }}" type="text/css">
@endpush

@push('js')
<!-- Javascript -->
<script src="{{ asset('libs/datatable/datatables.min.js') }}"></script>
<script>
    $('#datatable').DataTable({
        //responsive: true,
        'columnDefs': [ {
            'targets': [4],
            'orderable': false,
        }]
    });
</script>
@endpush