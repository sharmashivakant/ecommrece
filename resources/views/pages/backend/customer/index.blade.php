@extends('layouts.admin')
@section('title','Customer')
@section('content')
<div class="col-12">
    <div class="card shadow">
        <div class="card-body">
            <div class=" mt-3">
                <x-validation />
                @if(session()->has('message'))
                <div class="alert alert-success" id="msg">
                    {{ session()->get('message') }}
                </div>
                @endif
                <table id="customer" class="table table-custom mb-0 table-hover">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $data)
                        <tr>
                            <td>{{ $data->first_name ?? null }}</td>
                            <td>{{ $data->last_name ?? null }}</td>
                            <td>{{ $data->user->email ?? null }}</td>
                            <td>{{ $data->phone ?? null}}</a></td>

                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.customer.edit',$data->id) }}">Edit</a>
                                    <a class="dropdown-item"
                                        onclick="deleteCustomer('{{ route('admin.customer.destroy',$data->id) }}')">Delete</a>

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
$('#customer').DataTable({
    autoWidth: true,
    "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
    ]
});
</script>
@endpush