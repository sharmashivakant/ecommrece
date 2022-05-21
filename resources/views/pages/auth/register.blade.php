@extends('layouts.web')
@section('title','Register Your Account')
@section('content')
<!-- =============== register wrapper start =============== -->
<div class="register-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="register-switcher text-center">
                    <a href="{{ route('account.register') }}" class="resister-btn active">Register</a>
                    <a href="{{ route('account.login') }}" class="login-btn">Login</a>
                </div>
            </div>
        </div>
        <div class="row mt-100 justify-content-center">
            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-10">
                <div class="reg-login-forms">
                    <h4 class="reg-login-title text-center">
                        Register Your Account
                    </h4>
                    @if(session()->has('message'))
                    <div class="alert alert-success" id="msg">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <form action="{{ route('account.register') }}" method="POST" id="register-form">

                        @csrf

                        <div class="reg-input-group">
                            <label for="fname">First Name*</label>
                            <input type="text" id="first_name" name="first_name" placeholder="Your first name">
                            @if($errors->has('first_name'))
                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div class="reg-input-group">
                            <label for="lname">Last Name*</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Your last name">
                            @if($errors->has('last_name'))
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                        <div class="reg-input-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" placeholder="Your email">
                            @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="reg-input-group">
                            <label for="text">Phone *</label>
                            <input type="text" id="phone" name="phone" placeholder="Your Phone">
                            @if($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="reg-input-group">
                            <label for="password">Password *</label>
                            <input type="password" id="password" name="password" placeholder="Enter a password">
                            @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="reg-input-group">
                            <label for="sure-pass">Confirm Password *</label>
                            <input type="password" id="sure-pass" name="confirm_password"
                                placeholder="Confirm password">
                            @if($errors->has('confirm_password'))
                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>
                        <div class="reg-input-group reg-check-input d-flex align-items-center">
                            <input type="checkbox" id="form-check" required>
                            <label for="form-check">I agree to the <a href="#">Terms & Policy</a></label>
                        </div>
                        <div class="reg-input-group reg-submit-input d-flex align-items-center">
                            <input type="submit" id="submite-btn" value="CREATE AN ACCOUNT">
                        </div>
                    </form>

                    <div class="reg-social-login">
                        <h5>or Signup WITH</h5>
                        <ul class="social-login-options">
                            <li><a href="#" class="facebook-login"><i class="flaticon-facebook-app-symbol"></i> Sign
                                    up whit facebook</a></li>
                            <li><a href="#" class="google-login"><i class="flaticon-pinterest-1"></i> Signup whit
                                    google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  register wrapper end =============== -->




<!-- ===============  Newslatter area start =============== -->
<div class="newslatter-area mt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newslatter-wrap ">
                    <div class="corner-1 position-absolute top-0 start-0">
                        <img src="assets/images/shape/corner1.png" alt="">
                    </div>
                    <div class="corner-2 position-absolute end-0 bottom-0">
                        <img src="assets/images/shape/corner2.png" alt="">
                    </div>

                    <div class="newslatter-content position-relative">
                        <h3>NEWSLETTER</h3>
                        <p> Join now and get 20% off your next purchase!</p>
                        <div class="plane-vactor d-lg-block d-none">
                            <img src="assets/images/shape/plane-vactor.png" alt="">
                        </div>
                        <form action="#" id="newslatter" class="newslatter">
                            <div class="newslatter-form">
                                <input type="text" name="newslatter-form" placeholder="Type Your Email">
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  Newslatter area end =============== -->
@endsection