@extends('layouts.backend')
@section('title','Categories')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex gap-4 align-items-center">
            <div class="d-md-flex gap-4 align-items-center float-right">
                <a href="{{ route('catalog.categories.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-circle me-2"></i> Add Category
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
                <th>Name</th>
                <th>Status</th>
                <th>Number of Products</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cats as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td><a href="#" class="border-bottom">{{ $item->name }}</a></td>
                <td>
                    @if($item->status == 1)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-danger">Disabled</span>
                    @endif
                </td>
                <td>{{ rand(1,100) }}</td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="actions">
                        <a href="{{ route('catalog.categories.edit',$item->id) }}" class="btn btn-outline-dark"><i
                                class="bi bi-pencil"></i></a>
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