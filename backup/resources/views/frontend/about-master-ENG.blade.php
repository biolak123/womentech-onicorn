<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="Womentech Association | WTA Token | Cryptocurrency">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{url('public/frontend/images/thumbnails.jpg')}}">
    <meta name="description" content="WTA Token is the official digital asset of the Global Women's Creative Startup Fund, developed by a team of experts and advisors from many parts of the world">

    <link rel="stylesheet" href="{{('public/frontend/css/about-english.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>@yield('title')</title>


</head>
<body>
    @include('frontend.partial.header-ENG')
    
    @yield('content')
    @include('frontend.partial.footer-ENG')

</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="{{('public/frontend/js/about.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</html>