@extends('layout.app2')
@section('konten')
    
    <div class="row no-gutters vh-100">
        <div class="col align-self-center text-white text-center">
            <img src="/img/logo.png" alt="logo">
            <h1><span class="font-weight-light">Hamidu</span>Mart</h1>
            <div class="laoderhorizontal"><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(window).on('load', function(){
            setTimeout(function(){
                window.open("intro", "_self");    
            }, 2000)
            
        })

    </script>
@endsection