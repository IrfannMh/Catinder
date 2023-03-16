<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('kodingan/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('kodingan/css/tes.css')}}">
    <script src="{{asset('kodingan/js/explore.js')}}"></script>
    <title>@yield('title')</title>
  </head>
  
  
  <body class="bg_menu">
    @yield('isi')
    
    @yield('footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('kodingan/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('kodingan/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('kodingan/js/popper.min.js')}}"></script>
  </body>
</html>