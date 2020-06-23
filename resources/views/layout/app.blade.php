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

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    
</head>
<body>
    @yield('konten')

    <!-- jquery, popper and bootstrap js -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <!-- swiper js -->
    <script src="/vendor/swiper/js/swiper.min.js"></script>
    
    <!-- template custom js -->
    <script src="/js/main.js"></script>
    
    @yield('script')


</body>
</html>