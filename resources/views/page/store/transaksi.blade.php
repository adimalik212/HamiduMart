@extends('layout.app')
@section('konten')
    <div class="container">
        <form action="/bayar" method="post"> @csrf
        <br>
        {{-- <div class="card border-0 shadow-sm mt-3">
            <div class="card-body">
                <div class="row ">
                    <div class="col-4">
                        <p class="text-secondary mb-1 small">Sub Total</p>
                        <h5 class="mb-0">$360.00</h5>
                    </div>
                    <div class="col-4 text-center">
                        <p class="text-secondary mb-1 small">Tax</p>
                        <h5 class="mb-0">$40.00</h5>
                    </div>
                    <div class="col-4 text-right">
                        <p class="text-secondary mb-1 small">Discount</p>
                        <h5 class="mb-0">-$100.00</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4 border-0 shadow-sm border-top-dashed">
            <div class="card-body text-center">
                <p class="text-secondary my-1">Jumlah yang Harus diBayar</p>
                <h3 class="mb-0">@rupiah($pilih->sum('total'))</h3>
                <input type="hidden" value="@rupiah($pilih->sum('total'))" name="total">
            </div>
        </div> --}}

        <a class="btn btn-lg btn-default text-white btn-block btn-rounded shadow my-4"><span>Daftar Transaksi</span></a>

        {{-- <p class="text-center mb-3"><button class="btn">Daftar Transaksi</button></p> --}}

        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link text-left active" id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="true">
                    <div class="row">
                        <div class="col pl-2">
                            <p class="text-secondary mb-0 text-center">Pembelian</p>
                            {{-- <h6 class="text-dark my-0">4</h6> --}}
                        </div>
                    </div>
                </a>
                <a class="nav-item nav-link text-left" id="nav-booking-tab" data-toggle="tab" href="#nav-booking" role="tab" aria-controls="nav-booking" aria-selected="false">
                    <div class="row">
                        <div class="col pl-2">
                            <p class="text-secondary mb-0 text-center">Penjualan</p>
                            {{-- <h6 class="text-dark my-0">25</h6> --}}
                        </div>
                    </div>
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
                <ul class="list-items">
                    @foreach ($pembeli as $b)
                    <li>
                        <div class="row">
                            <div class="col"><a class="collapsed" data-toggle="collapse" href="#collapseExample">{{$b->kode}}</a> | {{$b->created_at}}</div>
                            <div class="col-auto">{{$b->total}}</div>
                        </div>
                    </li>
                    <div class="collapse" id="collapseExample">
                        @foreach ($pilih->where('kode', $b->kode) as $p)
                        @foreach ($store->where('id', $p->barang_id) as $s)
                        <div class="card shadow-sm border-0 mb-1 bg-danger">
                            <div class="card-body p-3">
                                <div class="media">
                                    <div class="icon align-self-center">
                                        <i class="material-icons md-36 mr-3 text-white">picture_as_pdf</i>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0 text-white">{{$s->namaBarang}}</p>
                                        <small class="text-white text-mute">{{$p->jumlah}} x {{$s->harga}}</small>
                                    </div>
                                    <div class="text-white align-self-center">
                                        <h4>@rupiah($p->total)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                    @endforeach
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-booking" role="tabpanel" aria-labelledby="nav-booking-tab">
                <ul class="list-items">
                    @foreach ($penjual as $j)
                    <li>
                        <div class="row">
                            <div class="col"><a class="collapsed" data-toggle="collapse" href="#penjual">{{$j->kode}}</a> | {{$b->created_at}}</div>
                            <div class="col-auto">{{$j->total}}</div>
                        </div>
                    </li>
                    <div class="collapse" id="penjual">
                        @foreach ($pilih->where('kode', $b->kode) as $p)
                        @foreach ($store->where('id', $p->barang_id) as $s)
                        <div class="card shadow-sm border-0 mb-1 bg-danger">
                            <div class="card-body p-3">
                                <div class="media">
                                    <div class="icon align-self-center">
                                        <i class="material-icons md-36 mr-3 text-white">picture_as_pdf</i>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0 text-white">{{$s->namaBarang}}</p>
                                        <small class="text-white text-mute">{{$p->jumlah}} x {{$s->harga}}</small>
                                    </div>
                                    <div class="text-white align-self-center">
                                        <h4>@rupiah($p->total)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>
        <br>
        {{-- <button type="submit" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Bayar</span><i class="material-icons">arrow_forward</i></button> --}}
        <br>
        <br>
        </form>
    </div>
@endsection