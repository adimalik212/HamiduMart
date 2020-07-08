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
                                <a href="#hapus{{$s->id}}" data-toggle="modal" class="btn btn-sm btn-secondari p-0 float-right text-danger"><i class="material-icons md-18">delete</i></a>
                                <a href="/detilStore/{{$s->id}}" class="text-dark mb-1 h6 d-block">{{$s->namaBarang}}</a>
                                @foreach ($lpk->where('id', $s->lapak_id) as $l)
                                    <p class="text-secondary small mb-2">{{$l->kab}} - {{$l->kec}}</p>
                                @endforeach
                                <h5 class="text-success font-weight-normal mb-0">@rupiah($s->harga)
                                    {{-- <span class="badge badge-primary d-inline-block ml-2"><small>10% off</small></span> --}}
                                </h5>
                                <p class="text-secondary small text-mute mb-0">{{$s->bobot}}.0 {{$s->volume}} | {{$s->kondisi}}</p>
                            </div>
                        </div>
                        <a href="/editStore/{{$s->id}}" class="btn btn-primary button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">edit</i></a>
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
@section('script')
    @foreach ($store as $s)
        <div class="modal fade" id="hapus{{$s->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content shadow">
                    <div class="modal-header">
                        <h5 class="header-title mb-0">Hapus Barang</h5>
                    </div>
                    <form action="/deleteStore/{{$s->id}}" method="post"> @csrf @method('delete')
                        <div class="modal-body text-center pr-4 pl-4">
                            <div class="form-group text-left float-label">
                                <input type="text" class="form-control text-center" value="{{$s->namaBarang}}" disabled>
                                <button class="overlay btn btn-sm btn-link text-success">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-danger btn-rounded btn-block col">Hapus</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection