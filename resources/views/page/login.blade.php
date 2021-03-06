@extends('layout/app2')
@section('konten')
<div class="row no-gutters vh-100 loader-screen bg-success">
    <div class="col align-self-center text-white text-center">
        <img src="/img/logo.png" alt="logo">
        <h1><span class="font-weight-light">Hamidu</span>Mart</h1>
        <div class="laoderhorizontal"><div></div><div></div><div></div><div></div></div>
    </div>
</div>
<div class="row no-gutters vh-100 proh bg-template bg-success">
    <img src="img/apple.png" alt="logo" class="apple right-image align-self-center">
    <div class="col align-self-center px-3 text-center">
        <img src="img/logo.png" alt="logo" class="logo-small">
        <h2 class="text-white "><span class="font-weight-light">Sign</span>In</h2>
        <form class="form-signin shadow" method="POST" action="/loginPost"> @csrf
            <div class="form-group float-label">
                <input type="email" id="inputEmail" class="form-control" name="email" value="user@gmail.com" required autofocus>
                <label for="inputEmail" class="form-control-label">Email address</label>
            </div>

            <div class="form-group float-label">
                <input type="password" id="inputPassword" class="form-control" name="password" value="user" required>
                <label for="inputPassword" class="form-control-label">Password</label>
            </div>

            <div class="form-group my-4 text-left">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberme">
                    <label class="custom-control-label" for="rememberme">Remember Me</label>
                </div>
            </div>

            <div class="row">
                <div class="col-auto">
                    <button type="submit" class="btn btn-lg btn-success btn-rounded shadow" id="login"><span>Sign in</span><i class="material-icons">arrow_forward</i></button>
                </div>
                <div class="col align-self-center text-right pl-0">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </form>
        <p class="text-center text-white">
            Don't have account yet?<br>
            <a href="/register">Sign Up</a> here.
        </p>
    </div>
</div>
@endsection