@extends('layouts.login')
@section('title')
    {{'Sign in'}}
@stop
@section('content')
<div class="wrap-login100">
    <div class="login100-pic js-tilt" data-tilt>
        <img src="{{asset('themes/backend/login/images/img-01.png')}}" alt="IMG">
    </div>
    <form class="login100-form validate-form" method="POST" action="{{ route('signup') }}">
        {{ csrf_field() }}
        <span class="login100-form-title">
            Sign in
        </span>
        <p style="color: red;text-align: center;margin-bottom: 10px;margin-top: -20px">
            {{($xabar)??''}}
        </p>
        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="name" placeholder="Name" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
            </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password" placeholder="Password" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password_confirmation" placeholder="Password" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>
        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Login
            </button>
        </div>
        <div class="text-center p-t-12">
        <span class="txt1">
            Forgot
        </span>
        <a class="txt2" href="#">
            Login
        </a>
        </div>
    </form>
</div>
@endsection
