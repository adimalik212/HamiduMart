@extends('layout.app')
@section('konten')
    
        <div class="container">
            <!-- Swiper -->
            <div class="swiper-container product-details">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/apple.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/apple.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/apple.png" alt="">
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>


            <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-rounded ml-2">Share FB</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-rounded ml-2">Share WA</a>
            <div class="badge badge-success float-right mt-1">10% off</div>

            <p class="text-secondary my-3 small">
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-warning md-18 vm">star</i>
                <i class="material-icons text-secondary md-18 vm">star</i>
                <i class="material-icons text-secondary md-18 vm">star</i>
                <span class="text-dark vm ml-2">Rating 4.2</span> <span class="vm">based on 245 reviews</span>
            </p>

            <a href="#" class="text-dark mb-1 mt-2 h6 d-block">Red Apple </a>
            <p class="text-secondary small mb-2">Imported from Simla</p>

            <p class="text-secondary">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis. Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sandside conv allis .</p>
            <div class="row mb-4">
                <div class="col">
                    <h3 class="text-success font-weight-normal mb-0">$ 120<sup>.00</sup></h3>
                    <p class="text-secondary text-mute mb-0">1.0 kg</p>
                </div>
                <div class="col-auto align-self-center">
                    <button class="btn btn-lg btn-default shadow btn-rounded">Add <i class="material-icons md-18">shopping_cart</i></button>
                </div>
            </div>

            <h6 class="subtitle">Product Budget</h6>
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
                    <p class="text-muted small">2 hours ago</p>
                </div>
                <div class="col-auto align-self-start">
                    <figure class="avatar avatar-50">
                        <img src="img/user1.png" alt="">
                    </figure>
                </div>
                <div class="col">
                    <h6>Lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor.</h6>
                    <p class="text-secondary small">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis. Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sandside conv allis .</p>
                </div>
            </div>

            <h6 class="subtitle">Add Comment</h6>
            <p class="text-center">
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-warning vm">star</i>
                <i class="material-icons h3 text-secondary vm">star</i>
                <i class="material-icons h3 text-secondary vm">star</i>
            </p>

            <div class="form-group float-label active">
                <input type="text" class="form-control" required="" value="Jordan Simond">
                <label class="form-control-label">Name</label>
            </div>
            <div class="form-group float-label active">
                <input type="email" class="form-control" required="" value="gofruites@gmail.co" >
                <label class="form-control-label">Email address</label>
            </div>
            <div class="form-group float-label">
                <textarea class="form-control" required=""></textarea>
                <label class="form-control-label">Type your comment...</label>
            </div>
            <a href="#" class="btn btn-lg btn-default btn-rounded shadow"><span>Comment</span><i class="material-icons">arrow_forward</i></a>
            
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
@endsection