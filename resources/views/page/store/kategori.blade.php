@extends('layout/app')
@section('konten')
    <div class="container">
        <div class="text-center">
            <div class=" my-2">
                <figure><img src="img/logo.png" alt=""></figure>
            </div>
            <h3 class="mb-1 ">Kategori</h3>
        </div>
        <br>
        <div class="card mb-4 border-0 shadow-sm">
            <div class="card-body">
                <form action="kategoriAdd" method="post"> @csrf
                    <div class="row">
                        <div class="col-auto">
                        </div>
                        <div class="col pl-0 form-group float-label">
                            <input type="text" class="form-control" required name="kategori">
                            <label class="form-control-label">Kategori</label>
                        </div>
                        <div class="col-auto pl-0 align-self-center">
                            <button type="submit" class="btn btn-default button-rounded-36 shadow"><i class="material-icons">save</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link text-left active" id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="true">
                    <div class="row">
                        <div class="col-auto align-self-center pr-1">
                        </div>
                        <div class="col pl-2">
                            <p class="text-secondary mb-0 small text-truncate">Daftar Kategori</p>
                        </div>
                    </div>
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
                <ul class="list-items">
                    @foreach ($kateg as $k)
                        <li>
                            <div class="row">
                                <div class="col">{{$k->kategori}}</div>
                                <div class="col-auto pr-2"><a href="#edit{{$k->id}}" data-toggle="modal"><i class="material-icons text-primary">edit</i></a></div>
                                <div class="col-auto pl-0"><a href="#hapus{{$k->id}}" data-toggle="modal"><i class="material-icons text-danger">delete</i></a></div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <br>
    </div>
@endsection
@section('script')
    @foreach ($kateg as $k)
    <!-- Modal -->
    <div class="modal fade" id="edit{{$k->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="header-title mb-0">Edit Kategori</h5>
                </div>
                <form action="kategoriUpdate/{{$k->id}}" method="post"> @csrf @method('patch')
                    <div class="modal-body text-center pr-4 pl-4">
                        <br>
                        <div class="form-group text-left float-label">
                            <input type="text" class="form-control text-center" value="{{$k->kategori}}" placeholder="Kategori" name="kategori">
                            <button class="overlay btn btn-sm btn-link text-success">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-default btn-rounded btn-block col">Update</button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="hapus{{$k->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="header-title mb-0">Hapus Kategori</h5>
                </div>
                <form action="kategoriDelete/{{$k->id}}" method="post"> @csrf @method('delete')
                    <div class="modal-body text-center pr-4 pl-4">
                        <br>
                        <div class="form-group text-left float-label">
                            <input type="text" class="form-control text-center" value="{{$k->kategori}}" disabled name="kategori">
                            <button class="overlay btn btn-sm btn-link text-success">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-default btn-rounded btn-block col">Delete</button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection