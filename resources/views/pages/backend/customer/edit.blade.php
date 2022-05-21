@extends('layouts.admin')
@section('title',' Edit Customer')
@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            @if(session()->has('message'))
            <div class="alert alert-success" id="msg">
                {{ session()->get('message') }}
            </div>
            @endif

            <form action="{{ route('admin.customer.update',$data->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="row">
                    <div class="col-lg-12 pb-2">
                        <div class="eg-input-group">
                            <img src="{{ asset('uploads/'.$data->image) }}" style="height: 200px; width:200px;" />
                            <label for="profile">Image *</label>
                            <input type="file" name="profile" class="form-control" />
                            @if($errors->has('profile'))
                            <span class="text-danger">{{ $errors->first('profile') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" name="first_name" class="form-control"
                                value="{{ $data->first_name ?? null }}" />
                            @if($errors->has('first_name'))
                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" name="last_name" class="form-control"
                                value="{{ $data->last_name ?? null }}" />
                            @if($errors->has('last_name'))
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="email">Email *</label>
                            <input type="text" name="email" class="form-control"
                                value="{{ $data->user->email ?? null }}" />
                            @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="phone">Phone *</label>
                            <input type="text" name="phone" class="form-control" value="{{ $data->phone ?? null }}" />
                            @if($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="password">Password *</label>
                            <input type="password" name="password" class="form-control" />
                            @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="password">Confirm Password *</label>
                            <input type="password" name="confirm_password" class="form-control" />
                            @if($errors->has('confirm_password'))
                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="eg-input-group profile-form-sumbit reg-submit-input d-flex align-items-center mt-2">
                            <input type="submit" value="Save">
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection
