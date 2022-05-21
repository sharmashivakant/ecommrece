@extends('layouts.web')
@section('title','Contact-Us')
@section('content')
<!-- =============== contact us wrapper start =============== -->
<div class="contact-wrapper mt-110">
    <div class="container">
        <div class="row">
            <div class="section-header">
                <h2>Get in touch if you have any questions, concerns, or comments</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-12 col-lg-12">
                <div class="contact-form-wrapper">
                    @if(session()->has('message'))
                    <div class="alert alert-success" id="msg">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <h3>Get In Touch</h3>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form" id="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="review-input-group">
                                    <label for="fname">Your Full Name</label>
                                    <input type="text" name="fname" id="fname" placeholder="Your full name">
                                    @if($errors->has('full name'))
                                    <span class="text-danger">{{ $errors->first('full name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="review-input-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Your email">
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="review-input-group">
                                    <textarea name="message" id="message" cols="30" rows="7"
                                        placeholder="Your message"></textarea>
                                    @if($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="submit-btn">
                                    <input type="submit" value="Send Message">
                                </div>
                            </div>

                        </div>
                        <p class="form-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============== contact us wrapper end =============== -->
@endsection