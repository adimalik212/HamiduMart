@extends('layout.app')
@section('konten')
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
<a href="/login" class="btn btn-success button-rounded-54 shadow text-white float-bottom-right"><i class="material-icons">arrow_forward</i></a>
<!-- Swiper -->
<div class="swiper-container introduction vh-100">
    <div class="swiper-wrapper">
        <div class="swiper-slide overflow-hidden bg-orange text-white">
            <div class="row no-gutters h-100">
                <img src="img/orange-slices.png" alt="" class="orange-slice right-image align-self-center">
                <div class="col align-self-center px-3">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <h1 class="text-uppercase">Other Controls Elements</h1>
                                    <p>Click on Menu button > Side menu and select other controls</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-slide overflow-hidden bg-success text-white">
            <div class="row no-gutters h-100">
                <img src="img/pineapple.png" alt="" class="pinapple right-image align-self-center">
                <div class="col align-self-center px-3">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <h1 class="text-uppercase">Testy Awesome Fruits</h1>
                                    <p>SLorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide overflow-hidden bg-warning text-white">
            <div class="row no-gutters h-100">
                <img src="img/banana.png" alt="" class="banana right-image align-self-center">
                <div class="col align-self-center px-3">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <h1 class="text-uppercase">Loving Freshness Everyday</h1>
                                    <p>SLorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<!-- notification -->
<div class="notification bg-white shadow bottom border-primary">
    <div class="row">
        <div class="col-auto align-self-center pr-0">
            <i class="material-icons text-primary md-36">fullscreen</i>
        </div>
        <div class="col">
            <h6>Viewing in Phone?</h6>
            <p class="mb-0 text-secondary">Double tap to enter into fullscreen mode for each page.</p>
        </div>
        <div class="col-auto align-self-center pl-0">
            <button class="btn btn-link closenotification"><i class="material-icons text-secondary text-mute md-18 ">close</i></button>
        </div>
    </div>
</div>
<!-- notification ends -->
@endsection

@section('script')
    <script>
        $(window).on('load', function() {
            var swiper = new Swiper('.introduction', {
                pagination: {
                    el: '.swiper-pagination',
                },
            });

            /* notification view and hide */
            setTimeout(function() {
                $('.notification').addClass('active');
                setTimeout(function() {
                    $('.notification').removeClass('active');
                }, 3500);
            }, 500);
            $('.closenotification').on('click', function(){
                $(this).closest('.notification').removeClass('active')
            });
        });

    </script>
@endsection