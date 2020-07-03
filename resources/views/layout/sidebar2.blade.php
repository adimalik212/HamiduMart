<div class="row no-gutters vh-100 loader-screen">
    <div class="col align-self-center text-white text-center">
        <img src="img/logo.png" alt="logo">
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
            <figure><img src="img/user1.png" alt=""></figure>
        </div>
        <h5 class="mb-1 ">{{session('name')}}</h5>
        {{-- <p class="text-mute small">Sydney, Australia</p> --}}
    </div>
    <br>
    <div class="row mx-0">
        <div class="col">
            <div class="card mb-3 border-0 shadow-sm bg-template-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3 class="badge badge-primary  shadow">Lapak Khusus Admin</h3>
                        </div>
                        <div class="col-auto">
                            <a href="/addStore" class="btn btn-default button-rounded-36 shadow"><i class="material-icons">add</i></a>
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