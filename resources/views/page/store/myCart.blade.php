@extends('layout.app')
@section('konten')
            <div class="container">
            <div class="subtitle h6">
                <div class="d-inline-block">
                    {{-- My Cart --}}
                </div>
            </div>
            {{-- @foreach ($store->where('id', $o->barang_id) as $s) --}}
            <div class="row">
                <div class="col-12 px-0">
                    <ul class="list-group list-group-flush mb-4">
                        
                        @foreach ($pilih as $o)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <form action="/pilih/{{$o->id}}" method="post"> @csrf @method('delete')
                                        <button data-toggle="modal" class="btn btn-sm btn-link p-0 float-right"><i class="material-icons">remove_circle</i></button>
                                        </form>
                                    </div>
                                    <div class="col-2 pl-0 align-self-center">
                                        <figure class="product-image h-auto"><img src="img/apple.png" alt="" class="vm"></figure>
                                    </div>
                                    <div class="col px-0 align-self-center">
                                        @foreach ($store->where('id', $o->barang_id) as $s)
                                        <a href="#" class="text-dark mb-1 h6 d-block">{{$s->namaBarang}}</a>
                                        <h5 class="text-success font-weight-normal mb-0">@rupiah($s->harga)</h5>
                                        <p class="text-secondary small text-mute mb-0">{{$s->bobot}} {{$s->volume}} | {{$s->kondisi}}</p>
                                        @foreach ($lpk->where('id', $s->lapak_id) as $lpk)
                                        <p class="text-secondary small text-mute mb-0">{{$lpk->kec}}-{{$lpk->kab}}</p>
                                        @endforeach
                                        @endforeach
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <form action="/pilih/{{$o->id}}" method="post"> @csrf @method('patch')
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-light-grey px-1" type="submit" name="jml" value="min"><i class="material-icons">remove</i></button>
                                            </div>
                                            <input type="text" class="form-control w-35" placeholder="" value="{{$o->jumlah}}">
                                            <div class="input-group-append">
                                                <button class="btn btn-light-grey px-1" type="submit" name="jml" value="plus"><i class="material-icons">add</i></button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                    </ul>
                </div>
            </div>

            {{-- <div class="card bpilih-0 shadow-sm border-top-dashed">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <span class="btn btn-success p-3 rounded-circle">
                                <i class="material-icons">local_activity</i>
                            </span>
                        </div>
                        <div class="col">
                            <div class="form-group mb-0 float-label active">
                                <input type="text" class="form-control" required="" value="ADU00548DOU">
                                <label class="form-control-label">Apply Coupon Code</label>
                            </div>
                        </div>
                        <div class="col-auto align-self-center">
                            <button class="btn btn-default button-rounded-36 shadow"><i class="material-icons">arrow_forward</i></button>
                        </div>
                    </div>
                </div>

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
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body text-center">
                    <p class="text-secondary my-1">Total</p>
                        <h3 class="mb-0">@rupiah($pilih->sum('total'))</h3>
                    <br>
                    <a href="/bayar" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Bayar</span><i class="material-icons">arrow_forward</i></a>
                </div>
            </div>
            

@endsection
