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
                <table class="table table-custom table-lg mb-0" id="orders">
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Paid</th>
                            <th>Status</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($orders as $order)
                            <td>
                                <a href="#">{{$order->order_id}}</a>
                            </td>
                            <td>{{$order->created_at->format('d M,Y')}}</td>
                            <td>{{$order->profile->first_name ?? null}}</td>
                            <td>&#8377;{{$order->product->price ?? null}}</td>
                            <td>
                                @if($order->status == 1)
                                <span class="badge rounded-pill bg-success text-light">Active</span>
                                @elseif($order->status == 0)
                                <span class="badge rounded-pill bg-danger text-light">Pending</span>
                                @elseif($order->status == 2)
                                <span class="badge rounded-pill bg-danger text-light">Delivery</span>
                                @endif
                            </td>
                            <td>{{$order->product->name ?? null}}</td>
                            <td>{{$order->amount}}</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <!-- <a class="dropdown-item" href="#">Remove</a> -->
                                    <a class="dropdown-item"
                                        onclick="deleteCustomer('{{ route('admin.orders.destroy',$order->id) }}')"
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
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('assets/theme-new/css/dataTables.bootstrap4.css') }}">
@endpush

@push('js')
<script src="{{ asset('assets/theme-new/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/theme-new/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
$('#orders').DataTable({
    autoWidth: true,
    "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
    ]
});
</script>
@endpush