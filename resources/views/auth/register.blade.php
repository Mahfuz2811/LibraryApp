@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <!-- Content area -->
    <div class="content pb-20">

        @include('inc.alert')

        <!-- Form with validation -->
        {!! Form::open(['url' => route('post_register'), 'method' => 'POST']) !!}
            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                    <h5 class="content-group">Register for new account</h5>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Full Name">
                    <div class="form-control-feedback">
                        <i class="icon-vcard text-muted"></i>
                    </div>
                    @if($errors->has('name'))
                        <span class="help-block text-danger">
                            <i class="icon-cancel-circle2 position-left"></i>
                            {{ $errors->first('name') }}
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control" placeholder="Username">
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
                    </div>
                    @if($errors->has('username'))
                        <span class="help-block text-danger">
                            <i class="icon-cancel-circle2 position-left"></i>
                            {{ $errors->first('username') }}
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone Number">
                    <div class="form-control-feedback">
                        <i class="icon-phone2 text-muted"></i>
                    </div>
                    @if($errors->has('phone'))
                        <span class="help-block text-danger">
                            <i class="icon-cancel-circle2 position-left"></i>
                            {{ $errors->first('phone') }}
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address">
                    <div class="form-control-feedback">
                        <i class="icon-envelop text-muted"></i>
                    </div>
                    @if($errors->has('email'))
                        <span class="help-block text-danger">
                            <i class="icon-cancel-circle2 position-left"></i>
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                    @if($errors->has('password'))
                        <span class="help-block text-danger">
                            <i class="icon-cancel-circle2 position-left"></i>
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                    @if($errors->has('password_confirmation'))
                        <span class="help-block text-danger">
                            <i class="icon-cancel-circle2 position-left"></i>
                            {{ $errors->first('password_confirmation') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-pink-400 btn-block">Register <i class="icon-arrow-right14 position-right"></i></button>
                </div>

                <div class="content-divider text-muted form-group"><span>Already have an account?</span></div>
                <a href="{{ route('get_login') }}" class="btn btn-primary btn-block content-group">Login Here</a>
            </div>
        {!! Form::close() !!}
        <!-- /form with validation -->

    </div>
    <!-- /content area -->
@endsection
