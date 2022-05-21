@extends('layouts.admin')
@section('title','Orders')
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
                <table class="table datatables" id="payments">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Order Number</th>
                            <th>Payment</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payment as $data)
                        <tr>
                            <td>{{$data->profile->first_name ?? null}}</td>
                            <td>{{$data->order_id}}</td>
                            <td>{{$data->payment_id}}</td>
                            <td>{{$data->amount}}</td>
                            <td>{{$data->created_at->format('d M,Y @ h:i A')}}</td>
                            <td>
                                @if($data->status == 1)
                                <span class="badge rounded-pill bg-success text-light">Active</span>
                                @elseif($data->status == 0)
                                <span class="badge rounded-pill bg-danger text-light">Pending</span>
                                @endif
                            </td>

                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item"
                                        onclick="deleteCustomer('{{ route('admin.payments.destroy',$data->id) }}')"
                                        class="btn btn-primary ">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> <!-- simple table -->
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('assets/theme-new/css/dataTables.bootstrap4.css') }}">
@endpush

@push('js')
<script src="{{ asset('assets/theme-new/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/theme-new/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
$('#payments').DataTable({
    autoWidth: true,
    "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
    ]
});
</script>
@endpush