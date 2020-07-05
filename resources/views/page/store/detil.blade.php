@extends('layout.app')
@section('konten')
    
        <div class="container">
            <!-- Swiper -->
            <div class="swiper-container product-details">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/img/apple.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/apple.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/apple.png" alt="">
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>


            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-rounded" data-toggle="modal" data-target="#share"><i class="material-icons mb-18 mr-2">share</i>Share</a>
            <a href="#" class="btn btn-sm badge btn-primary float-right mt-1">{{$lapak->namaLapak}}</a>

            <p class="text-secondary my-3 small">
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-secondary md-18 vm">star</i>
                <i class="material-icons text-secondary md-18 vm">star</i>
                <span class="text-dark vm ml-2">Rating 4.2</span> <span class="vm">based on 245 reviews</span>
            </p>

            <a href="#" class="text-dark mb-1 mt-2 h6 d-block">{{$store->namaBarang}}</a>
            <p class="text-secondary small mb-2">{{$store->kategori}}</p>

            <p class="text-secondary">{{$store->deskripsi}}</p>
            <div class="row mb-4">
                <div class="col">
                    <h3 class="text-success font-weight-normal mb-0">$ {{$store->harga}}</h3>
                    <p class="text-secondary text-mute mb-0">{{$store->bobot}}.0 {{$store->volume}}</p>
                </div>
                <div class="col-auto align-self-center">
                    <button class="btn btn-lg btn-default shadow btn-rounded">Beli <i class="material-icons md-18">shopping_cart</i></button>
                </div>
            </div>
            <h6 class="text-muted">dikirim dari : {{$lapak->kec}}, {{$lapak->kab}}</h6>

            @foreach ($komen as $k)
                <div class="row bg-white py-3">
                    <div class="col-6 mb-3">
                        <p>
                            <i class="material-icons text-warning md-18 vm">star</i>
                            <i class="material-icons text-warning md-18 vm">star</i>
                            <i class="material-icons text-warning md-18 vm">star</i>
                            <i class="material-icons text-secondary md-18 vm">star</i>
                            <i class="material-icons text-secondary md-18 vm">star</i>
                        </p>
                    </div>
                    <div class="col-6 mb-3 text-right">
                        <p class="text-muted small">{{$k->created_at}}</p>
                    </div>
                    <div class="col-auto align-self-start">
                        <figure class="avatar avatar-50">
                            <img src="/img/user1.png" alt="">
                        </figure>
                    </div>
                    <div class="col">
                        <h6>{{$k->nama}} </h6>
                        <p class="text-secondary small">{{$k->komentar}}</p>
                        @if ($lapak->id === $store->lapak_id)
                            @if ($k->balas == null)
                                <a href="#balas{{$k->id}}" data-toggle="modal" class="badge btn btn-sm btn-primary">Balas</a>                               
                            @else
                                <a href="#balas{{$k->id}}" data-toggle="modal" class="badge btn btn-sm btn-danger">Edit Balasan</a> 
                            @endif
                        @endif
                    </div>
                </div>
                @if ($k->balas == null)
                @else
                <div class="row bg-white pb-3 ml-3 my-1">
                    <div class="col-6 mb-3">
                        <p>
                            <i class="material-icons text-warning md-18 vm">star</i>
                            <i class="material-icons text-warning md-18 vm">star</i>
                            <i class="material-icons text-warning md-18 vm">star</i>
                            <i class="material-icons text-warning md-18 vm">star</i>
                            <i class="material-icons text-warning md-18 vm">star</i>
                        </p>
                    </div>
                    <div class="col-6 mb-3 text-right">
                        <p class="text-muted small">{{$k->updated_at}}</p>
                    </div>
                    <div class="col-auto align-self-start">
                        <figure class="avatar avatar-50">
                            <img src="/img/user1.png" alt="">
                        </figure>
                    </div>
                    <div class="col">
                        <h6>{{$k->pemilikBarang}}</h6>
                        <p class="text-secondary small">{{$k->balas}}</p>
                    </div>
                </div>
                @endif
            @endforeach

            <h6 class="subtitle">Komentar</h6>
            <p class="text-center">
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-secondary vm">star</i>
                <i class="material-icons h3 text-secondary vm">star</i>
            </p>
            <form action="/addKomen" method="post"> @csrf
                <div class="form-group float-label active">
                    <input type="text" class="form-control" required value="{{session('name')}}" name="nama">
                    <input type="hidden" class="form-control" required value="{{$store->id}}" name="barang_id">
                    <label class="form-control-label">Nama</label>
                </div>
                <div class="form-group float-label active">
                    <input type="email" class="form-control" required value="{{session('email')}}" name="email">
                    <label class="form-control-label">Alamat Email</label>
                </div>
                <div class="form-group float-label">
                    <textarea class="form-control" required name="komentar"></textarea>
                    <label class="form-control-label">Tulis komentar anda ...</label>
                </div>
                <button type="submit" class="btn btn-lg btn-default btn-rounded shadow"><span>Comment</span><i class="material-icons">arrow_forward</i></button>
            </form>
            <br>
            <br>

        </div>

@endsection
@section('script')
    <script>
        $(window).on('load', function() {
            var swiper = new Swiper('.product-details ', {
                slidesPerView: 1,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination'
                }
            });
        });
    </script>

    <div class="modal fade" id="share" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content text-center">                
                <div class="modal-body">
                    <h6 class="subtitle mt-0">Share with</h6>
                    <div class="row">
                        <div class="col-12">
                            <figure class="avatar avatar-50 border-0 mx-1">
                                <img src="/img/facebook.png" alt="">
                            </figure>
                            <figure class="avatar avatar-50 border-0 mx-1">
                                <img src="/img/whatsapp.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    @foreach ($komen as $k)
    <div class="modal fade" id="balas{{$k->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="header-title mb-0">Balas Komentar</h5>
                </div>
                <form action="/updateKomen/{{$k->id}}" method="post"> @csrf @method('patch')
                    <div class="modal-body text-center pr-4 pl-4">
                        <div class="form-group text-left float-label">
                            <textarea class="form-control text-muted" rows="1" disabled>{{$k->komentar}}</textarea>
                        </div>
                        <div class="form-group text-left float-label">
                            <textarea class="form-control" rows="3" name="balas">{{$k->balas}}</textarea>
                            <label for="" class="form-control-label">Balasan</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default btn-rounded btn-block col">Balas</button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection