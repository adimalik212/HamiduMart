@extends('layout.app2')
@section('konten')
<div class="row no-gutters vh-100 loader-screen bg-success">
    <div class="col align-self-center text-white text-center">
        <img src="img/logo.png" alt="logo">
        <h1><span class="font-weight-light">Go</span>Fruit</h1>
        <div class="laoderhorizontal"><div></div><div></div><div></div><div></div></div>
    </div>
</div>
<div class="row no-gutters vh-100 proh bg-template bg-success">
    <img src="img/apple.png" alt="logo" class="apple right-image align-self-center">
    <div class="col align-self-center px-3  text-center">
        <img src="img/logo.png" alt="logo" class="logo-small">
        <h2 class="text-white"><span class="font-weight-light">Sign</span>In</h2>
        <form class="form-signin shadow" method="POST" action="/registerPost"> @csrf
             <div class="form-group float-label">
                <input type="text" class="form-control" name="name" required autofocus>
                <label class="form-control-label">Nama Lapak</label>
            </div>
            
            <div class="form-group float-label">
                <input type="email" id="inputEmail" name="email" class="form-control" required>
                <label for="inputEmail" class="form-control-label">Alamat email</label>
            </div>

            <div class="form-group float-label">
                <input type="password" id="inputPassword" name="password" class="form-control" required>
                <label for="inputPassword" class="form-control-label">Password</label>
            </div>
            <br><br>
            {{-- <div class="form-group my-4 text-left">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberme">
                    <label class="custom-control-label" for="rememberme">I accept <a href="#">Terms and Condition</a></label>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-auto">
                    <button type="submit" class="btn btn-lg btn-default btn-rounded shadow bg-success"><span>Sign Up</span><i class="material-icons">arrow_forward</i></button>
                </div>
            </div>
        </form>
        <p class="text-center text-white">
            Already have account?<br>
            <a href="/login">Sign In</a> here.
        </p>
    </div>
</div>
@endsection