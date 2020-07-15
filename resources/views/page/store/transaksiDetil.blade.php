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
        </div> --}}
        <a class="btn btn-lg btn-default text-white btn-block btn-rounded shadow my-4"><span>{{$pembeli->kode}}</span></a>
        {{-- <p class="text-center mb-3"><button class="btn">Daftar Transaksi</button></p> --}}

        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link text-left active" id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="true">
                    <div class="row">
                        @foreach ($user->where('id', $pembeli->pembeli) as $u)
                        {{-- <div class="col pl-2"> --}}
                            <div class="col-6">
                                <p class="text-white mb-0 badge bg-dark">Toko : {{$u->name}}</p>
                            </div>
                            <div class="col-6 text-right">
                                <p class="text-white mb-0 badge bg-danger">Konsumen : {{$u->name}}</p>
                            </div>
                            {{-- <h6 class="text-dark my-0">4</h6> --}}
                        {{-- </div> --}}
                        @endforeach
                    </div>
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
                <ul class="list-items">
                    @foreach ($pilih->where('kode', $pembeli->kode) as $p)
                    @foreach ($store->where('id', $p->barang_id) as $s)
                    <div>
                        <div class="card shadow-sm border-0 mb-1 bg-danger">
                            <div class="card-body p-3">
                                <div class="media">
                                    <div class="icon align-self-center">
                                        <i class="material-icons md-36 mr-3 text-white">account_balance_wallet</i>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0 text-white">{{$s->namaBarang}}</p>
                                        <small class="text-white text-mute">{{$p->jumlah}} x {{$s->harga}}</small>
                                    </div>
                                    <div class="text-white align-self-center">
                                        <h5>@rupiah($p->total)</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card mb-4 border-0 shadow-sm border-top-dashed">
            <div class="card-body text-center">
                <p class="text-secondary my-1">Jumlah yang Harus diBayar</p>
                <h3 class="mb-0">{{$pembeli->total}}</h3>
                @if ($pembeli->status == 'diTerima')
                    <p class="text-secondary my-1">Status :
                        <span class="badge bg-danger text-white">{{$pembeli->status}}</span>
                    </p>
                @else
                    @if ($pembeli->penjual == session('id'))
                        <p class="text-secondary my-1">Status : <a href="#status{{$pembeli->penjual}}" data-toggle="modal">
                            <span class="badge bg-danger text-white">{{$pembeli->status}}</span></a>
                        </p>
                    @else
                        <p class="text-secondary my-1">Status :
                            <span class="badge bg-danger text-white">{{$pembeli->status}}</span>
                        </p>
                    @endif
                @endif
            </div>
        </div>
        <br>
        {{-- <button type="submit" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Bayar</span><i class="material-icons">arrow_forward</i></button> --}}
        <br>
        <br>
        </form>
    </div>
@endsection
@section('script')
    <div class="modal fade" id="status{{$pembeli->penjual}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="header-title mb-0">Status</h5>
                </div>
                <form action="/status/{{$pembeli->id}}" method="post"> @csrf @method('patch')
                    <div class="modal-body text-center pr-4 pl-4">
                        <h5 class="my-3">-- {{$pembeli->status}} --</h5>
                        <div class="form-group text-left float-label">
                            <div class="form-group float-label active">
                                <select class="form-control" name="status">
                                    <option value="diBayar">diBayar</option>
                                    <option value="diProses">diProses</option>
                                    <option value="diKirim">diKirim</option>
                                    <option value="diTerima">diTerima</option>
                                </select>
                                <label class="form-control-label">Pilih Status</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default btn-rounded btn-block col">Update</button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection