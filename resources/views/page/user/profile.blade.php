@extends('layout/app')
@section('konten')
<div class="container">
    <div class="text-center">
        <div class="figure-profile shadow my-4">
            <figure><img src="img/user1.png" alt=""></figure>
        </div>
        <h3 class="mb-1 ">{{$lapak->pemilik}}</h3>
        <p class="text-secondary">{{$lapak->kec}}, {{$lapak->kab}}</p>
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
                    <h4 class="text-dark my-0">{{$lapak->namaLapak}}</h4>
                </div>
                <div class="col-auto pl-0 align-self-center">
                    <a href="/editProfile/{{$lapak->id}}" class="btn btn-default button-rounded-36 shadow"><i class="material-icons">update</i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link text-left active" id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="true">
                <div class="row">
                    <div class="col-auto align-self-center pr-1">
                        <span class="btn btn-success button-rounded-26">
                            <i class="material-icons md-18 text-mute">card_giftcard</i>
                        </span>
                    </div>
                    <div class="col pl-2">
                        <p class="text-secondary mb-0 small text-truncate">Today's Delivery</p>
                        <h6 class="text-dark my-0">4</h6>
                    </div>
                </div>
            </a>
            <a class="nav-item nav-link text-left" id="nav-booking-tab" data-toggle="tab" href="#nav-booking" role="tab" aria-controls="nav-booking" aria-selected="false">
                <div class="row">
                    <div class="col-auto align-self-center pr-1">
                        <span class="btn btn-warning button-rounded-26">
                            <i class="material-icons md-18 text-mute">payment</i>
                        </span>
                    </div>
                    <div class="col pl-2">
                        <p class="text-secondary mb-0 small text-truncate">Future Bookings</p>
                        <h6 class="text-dark my-0">25</h6>
                    </div>
                </div>
            </a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
            <ul class="list-items">
                <li>
                    <div class="row">
                        <div class="col">Orange 1kg at $ 152.00</div>
                        <div class="col-auto"><a href="#">Track</a></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col">Orange 1kg at $ 152.00</div>
                        <div class="col-auto"><a href="#">Track</a></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col">Orange 1kg at $ 152.00</div>
                        <div class="col-auto"><a href="#">Track</a></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col">Orange 1kg at $ 152.00</div>
                        <div class="col-auto"><a href="#">Track</a></div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="nav-booking" role="tabpanel" aria-labelledby="nav-booking-tab">
            <ul class="list-items">
                <li>
                    <div class="row">
                        <div class="col">Orange 1kg at $ 152.00</div>
                        <div class="col-auto"><a href="#">Track</a></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col">Orange 1kg at $ 152.00</div>
                        <div class="col-auto"><a href="#">Track</a></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col">Orange 1kg at $ 152.00</div>
                        <div class="col-auto"><a href="#">Track</a></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col">Orange 1kg at $ 152.00</div>
                        <div class="col-auto"><a href="#">Track</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <br> --}}
    <h6 class="subtitle">Informasi Kontak</h6>
    <dl class="row mb-4">
        <dt class="col-3 text-secondary font-weight-normal">Email</dt>
        <dd class="col-9">: {{session('email')}}</dd>
        <dt class="col-3 text-secondary font-weight-normal">Nomor HP</dt>
        <dd class="col-9">: {{$lapak->hp}}</dd>
    </dl>

    <h6 class="subtitle">Alamat</h6>
    <dl class="row mb-4">
        <dt class="col-3 text-secondary font-weight-normal">Alamat</dt>
        <dd class="col-9">: {{$lapak->alamat}}</dd>
        <dt class="col-3 text-secondary font-weight-normal">Kecamatan</dt>
        <dd class="col-9">: {{$lapak->kec}}</dd>
        <dt class="col-3 text-secondary font-weight-normal">Kabupaten</dt>
        <dd class="col-9">: {{$lapak->kab}}</dd>
        <dt class="col-3 text-secondary font-weight-normal">Provinsi</dt>
        <dd class="col-9">: {{$lapak->prov}}</dd>
    </dl>
    {{-- <p class="mb-4">{{$lapak->alamat}},<br>
        {{$lapak->kec}},<br>
        {{$lapak->kab}}<br>
        {{$lapak->prov}}
    </p> --}}
    
    <a href="/editProfile/{{$lapak->id}}" class="btn btn-lg btn-dark text-white btn-block btn-rounded shadow"><span>Edit Profile</span><i class="material-icons">arrow_forward</i></a>
    <br>
</div>
@endsection