<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('site')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('site')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('site')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('site')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{url('site')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('site')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('site')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('site')}}/css/style.css" type="text/css">
</head>
<body>
@include('header')
<div class="main">
    @yield('content')
</div>
@include('footer')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{url('site')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{url('site')}}/js/bootstrap.min.js"></script>
<script src="{{url('site')}}/js/jquery.nice-select.min.js"></script>
<script src="{{url('site')}}/js/jquery-ui.min.js"></script>
<script src="{{url('site')}}/js/jquery.slicknav.js"></script>
<script src="{{url('site')}}/js/mixitup.min.js"></script>
<script src="{{url('site')}}/js/owl.carousel.min.js"></script>
<script src="{{url('site')}}/js/main.js"></script>
</body>
</html>
