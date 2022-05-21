@extends('layouts.web')
@section('title','Orders')
@section('content')
<div class="dashbord-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                @include('shared.sidebar')
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="order-details">
                    <table class="table order-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="order-id">#</th>
                                <th scope="col" class="order-id">Order Number</th>
                                <th scope="col" class="order-amount">Amount</th>
                                <th scope="col" class="order-date">Order Date</th>
                                <th scope="col" class="order-status">Status</th>
                                <th scope="col" class="order-active">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $key => $orders)
                            <tr>
                                <td class="order-id">{{ $key+1 }}</td>
                                <td class="order-date">{{ $orders->order_num }}</td>
                                <td class="order-amount">{{ $orders->amount }}</td>
                                <td class="order-status">{{ $orders->created_at->format('d M,Y @ h:i A') }}</td>
                                <td class="order-status">
                                    @if($orders->status == 1)
                                    <span class="badge rounded-pill bg-success text-light">Shipping</span>
                                    @elseif($orders->status == 0)
                                    <span class="badge rounded-pill bg-danger text-light">Pending</span>
                                    @elseif($orders->status == 2)
                                    <span class="badge rounded-pill bg-danger text-light">Delivery</span>
                                    @endif
                                </td>
                                <td class="order-active"><a href="{{ route('order.show',$orders->id) }}"><i class="flaticon-visibility"></i></a></td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
