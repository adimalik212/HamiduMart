@extends('layout.app')
@section('konten')
<div class="container">
    <div class="text-center">
        <div class="figure-profile shadow my-4">
            <figure><img src="img/user1.png" alt=""></figure>
            <div class="btn btn-dark text-white floating-btn">
                <i class="material-icons">camera_alt</i>
                <input type="file" class="float-file">
            </div>
        </div>
    </div>

    <h6 class="subtitle">Informasi Diri</h6>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group float-label active">
                <input type="text" class="form-control" required="" value="Ammy Johnson">
                <label class="form-control-label">Nama</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group float-label active">
                <input type="email" class="form-control" required="" value="ammyjohnson@maxartkiller.com">
                <label class="form-control-label">Alamat Email</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group float-label active">
                <input type="tel" class="form-control" required="" value="55 5555 555555 55">
                <label class="form-control-label">Phone Number</label>
            </div>
        </div>
    </div>

    <h6 class="subtitle">Address</h6>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group float-label active">
                <input type="text" class="form-control" required="" value="58, Lajpat Nagar">
                <label class="form-control-label">Address line 1</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group float-label active">
                <input type="text" class="form-control" value="Holand Street four">
                <label class="form-control-label">Address line 2</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group float-label active">
                <input type="tel" class="form-control" required="" value="Sydney">
                <label class="form-control-label">City</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group float-label active">
                <input type="tel" class="form-control" required="" value="25468">
                <label class="form-control-label">Pin Code</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group float-label active">
                <select class="form-control">
                    <option>Australia</option>
                    <option>America</option>
                    <option>Africa</option>
                    <option>France</option>
                </select>
                <label class="form-control-label">Country</label>
            </div>
        </div>
    </div>


    <a href="/profile" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Submit</span><i class="material-icons">arrow_forward</i></a>
    <br>
</div>
@endsection