@extends('layouts.web')
@section('title','Dashboard')
@section('content')
<div class="dashbord-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                @include('shared.sidebar')
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="dashbord-product-status text-center">
                    <h5 class="dashbord-title">Hi  {{ucwords($profile->full_name)}}</h5>
                    <div class="row">
                        <div class="col-lg-3  col-md-3 col-sm-6 ">
                            <div class="product-status-single">
                                <h3>03</h3>
                                <h5>Pending</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="product-status-single">
                                <h3>02</h3>
                                <h5>Processign</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="product-status-single">
                                <h3>01</h3>
                                <h5>Picked</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="product-status-single">
                                <h3>10</h3>
                                <h5>Complete</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
