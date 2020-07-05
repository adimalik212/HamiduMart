<div class="row no-gutters vh-100 loader-screen">
    <div class="col align-self-center text-white text-center">
        <img src="/img/logo.png" alt="logo">
        <h1><span class="font-weight-light">Hamidu</span>Mart</h1>
        <div class="laoderhorizontal">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="sidebar">
    <div class="text-center">
        <div class="figure-menu shadow">
            <figure><img src="/img/user1.png" alt=""></figure>
        </div>
        <h5 class="mb-1 ">{{session('name')}}</h5>
        {{-- <p class="text-mute small">{{session('name')}}_olshop</p> --}}
    </div>
    <br>
    <div class="row mx-0">
        <div class="col">
            <div class="card mb-3 border-0 shadow-sm bg-template-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="text-secondary small mb-0">Nama Lapak</p>
                            <h6 class="text-dark my-0">{{$lapak->namaLapak}}</h6>
                        </div>
                        <div class="col-auto">
                            <a href="#lapak" data-toggle="modal" class="btn btn-default button-rounded-36 shadow"><i class="material-icons">update</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="subtitle text-uppercase"><span>Menu</span></h5>
            <div class="list-group main-menu">
                <a href="/dashboard" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="/store" class="list-group-item list-group-item-action">Store</a>
                <a href="/kategori" class="list-group-item list-group-item-action">Kategori</a>
                <a href="/profile" class="list-group-item list-group-item-action">My Profile</a>
                <a href="/myProduct" class="list-group-item list-group-item-action">My Product</a>
                {{-- <a href="setting.html" class="list-group-item list-group-item-action">Settings</a> --}}
                <a href="/logout" class="list-group-item list-group-item-action mt-4">Logout</a>
            </div>
        </div>
    </div>
</div>
{{-- @section('script') --}}
    <!-- Modal -->
    <div class="modal fade" id="lapak" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="header-title mb-0">Indentitas Lapak</h5>
                </div>
                <form action="lapakUpdate/{{$lapak->id}}" method="post"> @csrf @method('patch')
                    <div class="modal-body text-center pr-4 pl-4">
                        <div class="form-group text-left float-label">
                            <input type="text" class="form-control text-center" value="{{$lapak->namaLapak}}" placeholder="Nama Lapak" name="namaLapak">
                            <input type="text" class="form-control text-center" value="{{$lapak->kab}}" placeholder="Kabupaten" name="kab">
                            <input type="text" class="form-control text-center" value="{{$lapak->kec}}" placeholder="Kecamatan" name="kec">
                            <button class="overlay btn btn-sm btn-link text-success">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-default btn-rounded btn-block col">Simpan</button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{-- @endsection --}}