@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <!-- Content area -->
    <div class="content pb-20">

        <!-- Form with validation -->
        {!! Form::open(['url' => route('password.request'), 'method' => 'POST', 'class' => 'form-validate']) !!}
        <div class="panel panel-body login-form">
            <div class="text-center">
                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                <h5 class="content-group">Set new password</h5>
            </div>

            <div class="form-group has-feedback has-feedback-left">
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" required="required">
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
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
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
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required="required">
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
                <button type="submit" class="btn bg-pink-400 btn-block">Reset Password <i class="icon-arrow-right14 position-right"></i></button>
            </div>

            <div class="content-divider text-muted form-group"><span>Already have an account?</span></div>
            <a href="{{ route('get_login') }}" class="btn btn-primary btn-block content-group">Login Here</a>
        </div>
    {!! Form::close() !!}
    <!-- /form with validation -->

    </div>
    <!-- /content area -->
@endsection