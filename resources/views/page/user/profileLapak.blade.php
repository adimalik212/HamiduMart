@extends('layout/app')
@section('konten')
<div class="container">
    <div class="text-center">
        <div class="figure-profile shadow my-4">
            <figure><img src="/img_user/{{$lpk->photo}}" alt=""></figure>
        </div>
        <h3 class="mb-1 ">{{$lpk->pemilik}}</h3>
        <p class="text-secondary">{{$lpk->kec}}, {{$lpk->kab}}</p>
    </div>
    <br>
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-auto">
                    <span class="btn btn-default p-3 btn-rounded-15">
                        <i class="material-icons">store_mall_directory</i>
                    </span>
                </div>
                <div class="col pl-0">
                    <p class="text-secondary mb-1">Nama Lapak</p>
                    <h4 class="text-dark my-0">{{$lpk->namaLapak}}</h4>
                </div>
                <div class="col-auto pl-0 align-self-center">
                    <a href="" class="btn btn-default button-rounded-36 shadow"><i class="material-icons">update</i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($store->where('lapak_id', $lpk->id) as $s)
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                        <a href="" target="_blank"><div class="badge badge-primary float-right mt-1">WhattApp</div></a>
                        
                        <figure class="product-image"><img src="/img/apple.png" alt="" class=""></figure>
                        
                        <a href="/detilStore/{{$s->id}}" class="text-dark mb-1 mt-2 h6 d-block">{{$s->namaBarang}}</a>
                        <p class="text-secondary small mb-2">{{$s->kategori}}</p>
                        <h5 class="text-success font-weight-normal mb-2">@rupiah($s->harga)</h5>
                        <p class="text-secondary small text-mute mb-0">{{$s->bobot}}.0 {{$s->volume}}</p>
                        <p class="text-secondary small text-mute mb-0">{{$lpk->kec}}</p>

                        @forelse ($pilih->where('barang_id', $s->id)->where('status', null)->where('pembeli', session('id')) as $o)
                            <form action="/pilih/{{$o->id}}" method="post"> @csrf @method('patch')
                            <button class="btn btn-danger button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                            </form>
                        @empty                                
                            <form action="/pilih" method="post"> @csrf
                            <input type="hidden" name="barang_id" value="{{$s->id}}">
                            <input type="hidden" name="harga" value="{{$s->harga}}">
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                            </form>
                        @endforelse
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <a href="" target="_blank" class="btn btn-lg btn-success text-white btn-block btn-rounded shadow"><span>WhattApp</span><i class="material-icons">arrow_forward</i></a>
    <br>
</div>
@endsection