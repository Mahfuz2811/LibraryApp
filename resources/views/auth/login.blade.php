@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<!-- Content area -->
<div class="content pb-20">

    @include('inc.alert')

    <!-- Form with validation -->
    {!! Form::open(['url' => route('post_login'), 'method' => 'POST']) !!}
        <div class="panel panel-body login-form">
            <div class="text-center">
                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                <h5 class="content-group">Login to your account</h5>
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

            <div class="form-group login-options">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remember" id="remember" class="styled" {{ old('email') ? 'checked' : ''}}>
                            Remember Me
                        </label>
                    </div>

                    <div class="col-sm-6 text-right">
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn bg-pink-400 btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
            </div>

            <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
            <a href="{{ route('get_register') }}" class="btn btn-primary btn-block content-group">Sign up</a>
        </div>
    {!! Form::close() !!}
    <!-- /form with validation -->

</div>
<!-- /content area -->
@endsection
