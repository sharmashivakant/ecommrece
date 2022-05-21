@extends('layouts.web')
@section('title','Profile')
@section('content')
<div class="dashbord-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                @include('shared.sidebar')
            </div>

            <div class="col-xl-8 col-lg-8">
                @if(session('message'))
                <div class="alert alert-success alert-dismissible fade show">
                    <p><strong>{{ session('message') }}</strong></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
                <form action="{{ route('profile.update',$profile->id) }}" method="POST" enctype="multipart/form-data" id="profile-form">
                    @csrf
                    <div class="profile-form-wrapper">
                    <h5>Profile</h5>
                    <div class="profile-top">
                        <div class="user-image">
                            <img src="{{ asset('uploads/user/thumbnail/'.$profile->image) }}" alt="">
                            <div class="prifil-change-icon">
                                <i class="bi bi-camera"></i>
                            </div>
                        </div>
                        <div class="profile-top-btns">
                           <input type="file" name="image" class="upload" />
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="fname">First Name*</label>
                                    <input type="text" id="first_name" name="first_name" value="{{ ucwords($profile->first_name ?? null) }}" placeholder="Your first name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="lname">Last Name*</label>
                                    <input type="text" id="last_name"  name="last_name" value="{{ ucwords($profile->last_name ?? null) }}" placeholder="Your last name" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="email">Email *</label>
                                    <input type="email" id="email" name="email" value="{{ ucwords($profile->user->email ?? null) }}" placeholder="Your email" required readonly>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="Number">Contact Number *</label>
                                    <input type="tel" id="phone" name="phone" value="{{ ucwords($profile->phone ?? null) }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="address">Address *</label>
                                    <input type="text" id="address" name="address" value="{{ ucwords($profile->address ?? null) }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="city">City *</label>
                                   <x-cities :selected="$profile->city" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="state">State *</label>
                                    <x-states  :selected="$profile->state ?? 'HR'"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="zip">Zip Code * </label>
                                    <input type="number" id="zip" name="pincode" value="{{ $profile->pincode ?? null }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="country">Country *</label>
                                    <x-countries :name="'country'" :selected="$profile->country ?? 'IN'"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="password">Password *</label>
                                    <input type="password" id="password" name="password" placeholder="Enter a password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="sure-pass">Confirm Password *</label>
                                    <input type="password" id="sure-pass" name="confirm_password" placeholder="Confirm password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div
                                    class="eg-input-group profile-form-sumbit reg-submit-input d-flex align-items-center">
                                    <input type="submit" id="submite-btn" value="Save Change">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
