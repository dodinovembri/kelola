@extends('layouts.auth')

@section('content')
<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Log In</strong> to your account</div>
            <form method="POST" action="{{ route('password.email') }}" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" required autocomplete="email" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-5">
                        <a href="{{ route('login') }}" class="btn btn-link btn-block">Already have an account</a>
                    </div>
                    <div class="col-md-7">
                        <button class="btn btn-info btn-block">Send Password Reset Link</button>
                    </div>
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