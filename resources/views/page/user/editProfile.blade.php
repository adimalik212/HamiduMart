@extends('layout.app')
@section('konten')
    <div class="container">
        <form action="/editProfile/{{$lapak->id}}" method="post"> @csrf @method('patch')
            <div class="text-center">
                <div class="figure-profile shadow my-4">
                    <figure><img src="/img/user1.png" alt=""></figure>
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
                        <input type="text" class="form-control" required name="pemilik" value="{{$lapak->pemilik}}">
                        <label class="form-control-label">Nama</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="email" class="form-control" required name="email" value="{{session('email')}}">
                        <label class="form-control-label">Alamat Email</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" class="form-control" required name="hp" value="{{$lapak->hp}}" maxlength="13" minlength="11">
                        <label class="form-control-label">Nomor HP</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" class="form-control" required name="namaLapak" value="{{$lapak->namaLapak}}">
                        <label class="form-control-label">Nama Lapak</label>
                    </div>
                </div>
            </div>

            <h6 class="subtitle">Alamat</h6>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" class="form-control" required name="alamat" value="{{$lapak->alamat}}">
                        <label class="form-control-label">RT/RW, Dusun, Desa</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" class="form-control" required name="kec" value="{{$lapak->kec}}">
                        <label class="form-control-label">Kecamatan</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group float-label active">
                        <input type="text" class="form-control" required name="kab" value="{{$lapak->kab}}">
                        <label class="form-control-label">Kabupaten</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group float-label active">
                        <input type="text" class="form-control" required name="prov" value="{{$lapak->prov}}">
                        <label class="form-control-label">Provinsi</label>
                    </div>
                </div>
            </div>
            <br>

            <button type="submit" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Submit</span><i class="material-icons">arrow_forward</i></button>
            <br>
        </form>
    </div>
@endsection