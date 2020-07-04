@extends('layout.app')
@section('konten')
    <div class="container">
        <input type="text" class="form-control form-control-lg search my-3" placeholder="Search">
        <div class="subtitle h6">
            <div class="d-inline-block">
                Jumlah Barang<br>
                <p class="small text-mute">{{$store->count()}} Product</p>
            </div>
            <div class="float-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/addStore" class="btn btn-light text-primary"><i class="material-icons">add_box</i></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($store as $s)
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/apple.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-sm btn-secondari p-0 float-right text-danger"><i class="material-icons md-18">delete</i></a>
                                <a href="" class="btn btn-sm btn-secondari p-0 float-right text-primary"><i class="material-icons md-18">edit</i></a>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">{{$s->namaBarang}}</a>
                                @foreach ($lpk->where('id', $s->lapak_id) as $l)
                                    <p class="text-secondary small mb-2">{{$l->kab}} - {{$l->kec}}</p>
                                @endforeach
                                <h5 class="text-success font-weight-normal mb-0">$ {{$s->harga}}
                                    <span class="badge badge-success d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">{{$s->bobot}} {{$s->volume}}</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="row">
            <div class="col-12 text-center">
                <div class="btn btn-default btn-rounded mb-3">
                    <div class="btn-loader">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <h6 class="d-inline-block text-left mx-2 mb-0 text-normal">Loading Content<br><small class="text-mute">Please wait for a while...</small></h6>
                </div>
            </div>
        </div> --}}
    </div>
@endsection