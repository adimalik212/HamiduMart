@extends('layout/app')
@section('konten')

    <div class="container">
        <input type="text" class="form-control form-control-lg search my-3" placeholder="Search">

        <h6 class="subtitle">Kategori</h6>
        <div class="row">
            <!-- Swiper -->
            <div class="swiper-container small-slide">
                <div class="swiper-wrapper">
                    @foreach ($kateg as $k)                        
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/orange.png" alt="" class="small-slide-right">
                                        <div class="col-8">
                                            {{-- <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button> --}}
                                            <a href="/store" class="text-dark mb-1 mt-2 h6 d-block">{{$k->kategori}}</a>
                                            <p class="text-secondary small">Dari, Oleh, Untuk Hamidu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <h6 class="subtitle">Products <a href="/store" class="float-right small">View All</a></h6>
        <div class="row">
            @foreach ($store->take(6) as $s)                
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <a href="" target="_blank"><div class="badge badge-primary float-right mt-1">WhattApp</div></a>
                            <figure class="product-image"><img src="img/apple.png" alt="" class=""></figure>
                            <a href="/detilStore/{{$s->id}}" class="text-dark mb-1 mt-2 h6 d-block">{{$s->namaBarang}}</a>
                            <p class="text-secondary small mb-2">{{$s->kategori}}</p>
                            <h5 class="text-success font-weight-normal mb-2">$ {{$s->harga}}</h5>
                            <p class="text-secondary small text-mute mb-0">{{$s->bobot}}.0 {{$s->volume}}</p>
                            <p class="text-secondary small text-mute mb-0">{{$lapak->kec}}</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid bg-warning text-white my-3">
        <div class="row">
            <div class="container">
                <div class="row  py-4 ">
                    <div class="col">
                        <h1 class="text-uppercase mb-3">20% OFF Season Sale</h1>
                        <p class="mb-3">Use Coupan Code<br><span class="text-dark">DFR0020</span></p>
                    </div>
                    <div class="col-5 col-md-3 col-lg-2 col-xl-2">
                        <img src="img/banana.png" alt="" class="mw-100 mt-3">
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <p>Get the all new fresh bananas at very low price</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container"> <br>
        {{-- <h6 class="subtitle">Are you looking for:</h6>
        <div class="row">
            <div class="col">
                <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">Fresh</button>
                <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">$100 - $299</button>
                <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">600+</button>
                <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">$300 - $599</button>
                <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">Deliver Today</button>
            </div>
        </div> --}}
        <h6 class="subtitle">News Updates</h6>
        <div class="row">
            <!-- Swiper -->
            <div class="swiper-container news-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/fresh-orange-juice.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/orange-juice.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/fresh-orange-juice.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/orange-juice.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/fresh-orange-juice.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/orange-juice.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <div class="row">
            <div class="col text-center">
                <h5 class="subtitle mb-1">Most Exciting Feature</h5>
                <p class="text-secondary">Take a look at our services</p>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-6 col-md-3">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <i class="material-icons mb-4 md-36 text-template">card_giftcard</i>
                        <h2>{{$store->count()}}</h2>
                        <p class="text-secondary text-mute">Barang</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <i class="material-icons mb-4 md-36 text-template">people</i>
                        <h2>{{$user->count()}}</h2>
                        <p class="text-secondary text-mute">Pengguna</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <i class="material-icons mb-4 md-36 text-template">local_florist</i>
                        <h2>1542</h2>
                        <p class="text-secondary text-mute">Eco environment</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <i class="material-icons mb-4 md-36 text-template">location_city</i>
                        @php
                            $null = null;
                            $isi = $lapak->namaLapak > 1;
                        @endphp
                        <h2>{{$lapak->where('namaLapak', $isi)->count()}}</h2>
                        <p class="text-secondary text-mute">Lapak</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(window).on('load', function() {
        /* swiper slider carousel */
        var swiper = new Swiper('.small-slide', {
            slidesPerView: 'auto',
            spaceBetween: 0,
        });

        var swiper = new Swiper('.news-slide', {
            slidesPerView: 5,
            spaceBetween: 0,
            pagination: {
                el: '.swiper-pagination',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                320: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                }
            }
        });

        /* notification view and hide */
        setTimeout(function() {
            $('.notification').addClass('active');
            setTimeout(function() {
                $('.notification').removeClass('active');
            }, 3500);
        }, 500);
        $('.closenotification').on('click', function() {
            $(this).closest('.notification').removeClass('active')
        });
    });

</script>
@endsection