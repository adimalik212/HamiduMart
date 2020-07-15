@extends('layout.app')
@section('konten')
    <div class="container">
        <form action="/bayar" method="post"> @csrf
        <br>
        <div class="card mb-4 border-0 shadow-sm">
            <div class="card-body text-center">
                <p class="text-secondary my-1">Jumlah yang Harus diBayar</p>
                <h3 class="mb-0">@rupiah($pilih->sum('total'))</h3>
                <input type="hidden" value="@rupiah($pilih->sum('total'))" name="total">
            </div>
        </div>

        <p class="text-center text-secondary mb-3">dengan</p>

        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link text-left active" id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="true">
                    <div class="row">
                        <div class="col pl-2">
                            <p class="text-secondary mb-0 text-center">Rincian Barang</p>
                            {{-- <h6 class="text-dark my-0">4</h6> --}}
                        </div>
                    </div>
                </a>
                <a class="nav-item nav-link text-left" id="nav-booking-tab" data-toggle="tab" href="#nav-booking" role="tab" aria-controls="nav-booking" aria-selected="false">
                    <div class="row">
                        <div class="col pl-2">
                            <p class="text-secondary mb-0 text-center">Alamat Pengiriman</p>
                            {{-- <h6 class="text-dark my-0">25</h6> --}}
                        </div>
                    </div>
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
                <ul class="list-items">
                    @foreach ($pilih as $p)
                    @foreach ($store->where('id', $p->barang_id) as $s)
                    <input type="hidden" value="{{$p->kode}}" name="kode">
                    @foreach ($lpk->where('id', $s->lapak_id) as $lpk)
                        <input type="hidden" value="{{$lpk->user_id}}" name="penjual">
                    @endforeach
                    <li>
                        <div class="row">
                            <div class="col">{{$s->namaBarang}}</div>
                            <div class="col-auto"><a href="#"> @rupiah($p->total) ({{$p->jumlah}})</a></div>
                        </div>
                    </li>
                    @endforeach
                    @endforeach
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-booking" role="tabpanel" aria-labelledby="nav-booking-tab">
                <ul class="list-items">
                    <li>
                        <div class="row">
                            <div class="col">
                                <div class="form-group float-label active">
                                    <input type="text" class="form-control" required name="alamat" value="{{$lapak->alamat}}">
                                    <label class="form-control-label">Alamat</label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col">
                                <div class="form-group float-label active">
                                    <input type="text" class="form-control" required name="kec" value="{{$lapak->kec}}">
                                    <label class="form-control-label">Kecamatan</label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col">
                                <div class="form-group float-label active">
                                    <input type="text" class="form-control" required name="kab" value="{{$lapak->kab}}">
                                    <label class="form-control-label">Kabupaten</label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col">
                                <div class="form-group float-label active">
                                    <input type="text" class="form-control" required name="prov" value="{{$lapak->prov}}">
                                    <label class="form-control-label">Provinsi</label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Bayar</span><i class="material-icons">arrow_forward</i></button>
        <br>
        <br>
        </form>
    </div>
@endsection