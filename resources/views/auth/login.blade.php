@extends('layouts.auth')

@section('content')
<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Log In</strong> to your account</div>
            <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="{{ url('password/reset') }}" class="btn btn-link btn-block">Forgot your password?</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-info btn-block">Log In</button>
                    </div>
                </div>
                <div class="login-or">OR</div>
                <div class="form-group">
                    <div class="col-md-4">
                        <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ url('auth/google') }}"><button type="button" class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button></a>
                    </div>
                </div>
                <div class="login-subtitle">
                    Don't have an account yet? <a href="{{ route('register') }}">Create an account</a>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2021 KeuanganKu
            </div>
            <div class="pull-right">
                <a href="#">About</a> |
                <a href="#">Privacy</a> |
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>

</div>
@endsection