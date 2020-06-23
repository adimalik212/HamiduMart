@extends('layout.app')
@section('konten')
    <div class="container">
        <input type="text" class="form-control form-control-lg search my-3" placeholder="Search">
        <div class="subtitle h6">
            <div class="d-inline-block">
                All fresh fruits<br>
                <p class="small text-mute">2154 products</p>
            </div>
            <div class="float-right">
                <div class="btn-group filter-group" role="group" aria-label="Basic example">
                    <a href="/add" class="btn btn-light "><i class="material-icons">add_box</i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/apple.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons md-18">favorite_outline</i></button>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">Red Apple </a>
                                <p class="text-secondary small mb-2">Imported from Simla</p>
                                <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup>
                                    <span class="badge badge-success d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/grapes2.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons md-18">favorite_outline</i></button>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">Green Grapes</a>
                                <p class="text-secondary small mb-2">Chilled fresh</p>
                                <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup>
                                    <span class="badge badge-success d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/orange-2.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons md-18">favorite_outline</i></button>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">Orange</a>
                                <p class="text-secondary small mb-2">Sweet and Juicy</p>
                                <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup>
                                    <span class="badge badge-info d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/orange-small.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons md-18">favorite_outline</i></button>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">Lemon</a>
                                <p class="text-secondary small mb-2">Most Demanded</p>
                                <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup>
                                    <span class="badge badge-primary d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/apple.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons md-18">favorite_outline</i></button>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">Red Apple </a>
                                <p class="text-secondary small mb-2">Imported from Simla</p>
                                <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup>
                                    <span class="badge badge-success d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/grapes2.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons md-18">favorite_outline</i></button>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">Green Grapes</a>
                                <p class="text-secondary small mb-2">Chilled fresh</p>
                                <h5 class="text-success font-weight-normal mb-0">$ 100<sup>.00</sup>
                                    <span class="badge badge-success d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/orange-2.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons md-18">favorite_outline</i></button>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">Orange</a>
                                <p class="text-secondary small mb-2">Sweet and Juicy</p>
                                <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup>
                                    <span class="badge badge-info d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-md-2 col-lg-2 align-self-center">
                                <figure class="product-image"><img src="img/orange-small.png" alt="" class=""></figure>
                            </div>
                            <div class="col">
                                <button class="btn btn-sm btn-link p-0 float-right"><i class="material-icons md-18">favorite_outline</i></button>
                                <a href="/detil" class="text-dark mb-1 h6 d-block">Lemon</a>
                                <p class="text-secondary small mb-2">Most Demanded</p>
                                <h5 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup>
                                    <span class="badge badge-primary d-inline-block ml-2"><small>10% off</small></span>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">1.0 kg</p>
                            </div>
                        </div>
                        <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
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
        </div>
    </div>
@endsection