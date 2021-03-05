<!DOCTYPE html>
<html lang="en">
<head>

     <title>Imperialstech.com</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel = "icon" href ="{{asset('assets/user/images/favicon.png')}}" type = "image/x-icon">

     <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/user/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/user/css/aos.css')}}">
     <link rel="stylesheet" href="{{asset('assets/user/css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/user/css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('assets/user/css/templatemo-digital-trend.css')}}">

</head>
<body>

    @include('user.layouts.navbar')


    @yield('main')


    @include('user.layouts.footer')


     <!-- SCRIPTS -->
     <script src="{{asset('assets/user/js/jquery.min.js')}}"></script>
     <script src="{{asset('assets/user/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets/user/js/aos.js')}}"></script>
     <script src="{{asset('assets/user/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('assets/user/js/smoothscroll.js')}}"></script>
     <script src="{{asset('assets/user/js/custom.js')}}"></script>

</body>
</html>
