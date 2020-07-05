@extends('layout.app')
@section('konten')
    <div class="container">
        <form action="/editStorePost/{{$store->id}}" method="post"> @csrf @method('patch')
            <div class="text-center">
                <div class="figure-profile shadow my-4">
                    <figure><img src="/img/user1.png" alt=""></figure>
                    <div class="btn btn-dark text-white floating-btn">
                        <i class="material-icons">camera_alt</i>
                        <input type="file" class="float-file" name="photo">
                    </div>
                </div>
            </div>
            <h6 class="subtitle">Jual Barang Baru</h6>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label">
                        <input type="text" class="form-control" required name="namaBarang" value="{{$store->namaBarang}}">
                        <input type="hidden" class="form-control" value="{{$lapak->id}}" required name="lapak_id">
                        <label class="form-control-label">Nama Barang</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <select class="form-control" name="kategori">
                            <option value="{{$store->kategori}}">{{$store->kategori}}</option>
                            <option value="">--Pilih Kategori--</option>
                            @foreach ($kategori as $k)
                                <option value="{{$k->kategori}}">{{$k->kategori}}</option>
                            @endforeach
                        </select>
                        <label class="form-control-label">Kategori</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <select class="form-control" name="kondisi">
                            <option value="{{$store->kondisi}}">{{$store->kondisi}}</option>
                            <option value="">--Pilih Kondisi--</option>
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
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
                        <input type="text" class="form-control" placeholder="Harga barang" name="harga" value="{{$store->harga}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group float-label">
                        <input type="tel" class="form-control" required name="bobot" value="{{$store->bobot}}">
                        <label class="form-control-label">Bobot</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group float-label active">
                        <select class="form-control" name="volume">
                            <option value="{{$store->kondisi}}">{{$store->volume}}</option>
                            <option>Gram</option>
                            <option>Kg</option>
                            <option>Liter</option>
                        </select>
                        <label class="form-control-label">Volume</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="5">{{$store->deskripsi}}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow">
                <span>Submit</span><i class="material-icons">arrow_forward</i></button>
            <br>
        </form>
    </div>
@endsection