@extends('layouts.login')
@section('title')
    {{'Login'}}
@stop
@section('content')
<div class="wrap-login100">
    <div class="login100-pic js-tilt" data-tilt>
        <img src="{{asset('themes/backend/login/images/img-01.png')}}" alt="IMG">
    </div>
    <form class="login100-form validate-form" action="{{route('login')}}" method="POST">
        {{ csrf_field() }}
        <span class="login100-form-title">
            Member Login
        </span>
        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <p class="erros-text">{{ $message }}</p>
            </span>
        @enderror
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <p class="erros-text">{{ $message }}</p>
            </span>
        @enderror
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" name="remember" id="remember" />
                    <label class="custom-control-label" for="rememberPasswordCheck">
                        Remember password
                    </label>
                </div>
            </div>
        </div>
        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                Login
            </button>
        </div>
        <div class="text-center p-t-12">
        <span class="txt1">
            Forgot
        </span>
        @if (Route::has('password.request'))
            <a class="txt2" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
        </div>
    </form>
</div>
@endsection