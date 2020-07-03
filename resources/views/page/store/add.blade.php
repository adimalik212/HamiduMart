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

    <h6 class="subtitle">Jual Barang Baru</h6>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group float-label">
                <input type="text" class="form-control" required="">
                <label class="form-control-label">Nama Barang</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group float-label active">
                <select class="form-control" name="kategori">
                    <option value="ATK">ATK</option>
                </select>
                <label class="form-control-label">Kategori</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group float-label active">
                <select class="form-control" name="kondisi">
                    <option>Baru</option>
                    <option>Bekas</option>
                </select>
                <label class="form-control-label">Kondisi</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            {{-- <label for="validationServerUsername" class="form-control-label">Username</label> --}}
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">Rp.</span>
                </div>
                <input type="text" class="form-control" placeholder="Harga barang">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group float-label">
                <input type="tel" class="form-control" required="">
                <label class="form-control-label">Berat</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group float-label active">
                <select class="form-control" name="kategori">
                    <option>Gram</option>
                    <option>Kg</option>
                    <option>Meter</option>
                    <option>Cm</option>
                </select>
                <label class="form-control-label">Volume</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="form-group">
                <label class="form-control-label" for="exampleFormControlTextarea1">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="5"></textarea>
            </div>
        </div>
    </div>


    <a href="/myProduct" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Submit</span><i class="material-icons">arrow_forward</i></a>
    <br>
</div>
@endsection