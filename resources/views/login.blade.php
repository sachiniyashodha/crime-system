@extends('layouts.main')
@section('content')
    <div class="container max-90">
        <h1 class="text-center">Crime Management System</h1>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="login-card">
                    <img src="{{ asset('img/login.png') }}" class="profile-img-card">
                    <p class="profile-name-card">ADMIN ONLY</p>
                    <span class="reauth-email"> Enter your user name and password.</span>
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback">
                            <input class="form-control" type="text" name="username" id="username" value="{{ old('username') }}"  placeholder="UserName">
                            @if($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input class="form-control" type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Password">
                            @if($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{  old('remember') ? 'checked' : '' }}>Remember me
                                        </label>
                                    </div>
                                </div>
                                <a class="btn btn-primary btn-block btn-lg btn-signin" role="button" type="submit">Sign in</a>

                            </div>
                        </div>

                    </form>

{{--                    <a href="{{ route(password.rewuest) }}" class="forgot-password"> Forgot your password ?</a>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
