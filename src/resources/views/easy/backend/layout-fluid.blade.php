<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}} | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" content="{{csrf_token()}}">
    <meta name="site-uri" content="{{url('/')}}">
    <meta name="locale" content="{{app()->getLocale()}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition">
<!-- Site wrapper -->
<div class="container-fluid">



                @yield('container')




</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<script src="{{asset('adminlte/js/requests.js')}}"></script>
<script src="{{asset('adminlte/js/core.js')}}"></script>


@stack('script')


</body>
</html>
