<!DOCTYPE html>
<html lang="en" class="green-theme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HamiduMart</title>
    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="/vendor/materializeicon/material-icons.css">

    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link href="/vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Chosen multiselect CSS -->
    <link href="/vendor/chosen_v1.8.7/chosen.min.css" rel="stylesheet">

    <!-- nouislider CSS -->
    <link href="/vendor/nouislider/nouislider.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    
</head>
<body>
    @if (session('role') == 'Admin')
        @include('layout.sidebar2')
    @else
        @include('layout.sidebar')
    @endif
    
    <div class="wrapper">
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <button class="btn  btn-link text-dark menu-btn"><img src="img/menu.png" alt=""><span class="new-notification"></span></button>
                </div>
                <div class="col text-center"><img src="img/logo-header.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="/profile" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
                </div>
            </div>
        </div>
        
        @yield('konten')

        @include('layout.footer')
    </div>
    <!-- jquery, popper and bootstrap js -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <!-- swiper js -->
    <script src="/vendor/swiper/js/swiper.min.js"></script>
    
    <!-- nouislider js -->
    <script src="/vendor/nouislider/nouislider.min.js"></script>

    <!-- chosen multiselect js -->
    <script src="/vendor/chosen_v1.8.7/chosen.jquery.min.js"></script>

    <!-- template custom js -->
    <script src="/js/main.js"></script>
    
    @yield('script')


</body>
</html>