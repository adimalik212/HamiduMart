@extends('layout.app')
@section('konten')
    <div class="container">
        <form action="addStorePost" method="post" enctype="multipart/form-data"> @csrf
            <div class="text-center  mt-4 mb-3">
                {{-- <figure class="avatar avatar-70">
                    <input type="file" class="form-control" name="photo" id="img1" style="cursor: pointer; display:none">
                    <label for="img1">
                    <img id="blah" src="/img/user1.png" alt=""></label>
                </figure>
                <figure class="avatar avatar-70">
                    <input type="file" class="form-control" name="photo2" id="img2" style="cursor: pointer; display:none">
                    <label for="img2">
                    <img id="blah2" src="/img/user1.png" alt=""></label>
                </figure>
                <figure class="avatar avatar-70">
                    <input type="file" class="form-control" name="photo3" id="img3" style="cursor: pointer; display:none">
                    <label for="img3">
                    <img id="blah3" src="/img/user1.png" alt=""></label>
                </figure> --}}
                <div class="galeri mb-3"></div>
                <div class="btn btn-dark text-white floating-btn">
                    <i class="material-icons">camera_alt</i>
                    input image
                    <input type="file" class="float-file" multiple name="photo" id="img-galeri" length="3">
                </div>
                
                {{-- <input type="file" name="" multiple > --}}
            </div>
            <h6 class="subtitle">Nama Barang</h6>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label">
                        <input type="text" class="form-control" required name="namaBarang">
                        <input type="hidden" class="form-control" value="{{$lapak->id}}" required name="lapak_id">
                        <label class="form-control-label">Nama Barang</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <select class="form-control" name="kategori">
                            <option value="">--Pilih Kategori--</option>
                            @foreach ($kategori as $k)
                                <option value="{{$k->kategori}}">{{$k->kategori}}</option>
                            @endforeach
                        </select>
                        <label class="form-control-label">Kategori</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <select class="form-control" name="kondisi">
                            <option>Baru</option>
                            <option>Bekas</option>
                        </select>
                        <label class="form-control-label">Kondisi</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label">
                        <input type="text" class="form-control" required name="harga">
                        <label class="form-control-label">Harga</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group float-label">
                        <input type="text" class="form-control" required name="bobot">
                        <label class="form-control-label">Bobot</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group float-label active">
                        <select class="form-control" name="volume">
                            <option>Gram</option>
                            <option>Kg</option>
                            <option>Liter</option>
                        </select>
                        <label class="form-control-label">Volume</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow">
                <span>Submit</span><i class="material-icons">arrow_forward</i></button>
            <br>
        </form>
    </div>
@endsection

@section('script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#img1").change(function() {
            readURL(this);
        })
    </script>
    <script>
        $(function() {
            var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++){
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img class="avatar avatar-70">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#img-galeri').on('change', function(){
                imagesPreview(this, 'div.galeri');
            });
        });
    </script>
@endsection