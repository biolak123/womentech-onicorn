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
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{('public/frontend/css/owl.carousel.min.css')}}">
    <script src="{{('public/frontend/js/jquery.min.js')}}"></script>
    <script src="{{('public/frontend/js/owl.carousel.min.js')}}"></script>
    <link rel="stylesheet" href="{{('public/frontend/css/tintuc.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/tintucEn.css')}}">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <style type="text/css">
        #popup-giua-man-hinh .headerContainer,
        #popup-giua-man-hinh .bodyContainer,
        #popup-giua-man-hinh .footerContainer {
            max-width: 960px;
            margin: 0 auto;
            background: #FFF
        }

        #popup-giua-man-hinh .padding {
            padding: 20px
        }

        #popup-giua-man-hinh .bodyContainer {
            min-height: 500px
        }

        #popup-giua-man-hinh #popUpBannerBox {
            position: fixed;
            background: rgba(0, 0, 0, 0.9);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            color: #FFF;
            z-index: 999999;
            display: none
        }

        #popup-giua-man-hinh .popUpBannerInner {
            max-width: 300px;
            margin: 0 auto
        }

        #popup-giua-man-hinh .popUpBannerContent {
            position: fixed;
            top: 150px;
            left:28%;
            
        }

        #popup-giua-man-hinh #closeButton {
            color: red;
            text-decoration: none;
            font-size: 18px
        }

        #popup-giua-man-hinh a#closeButton {
            float: right
        }
        .image-banner img {
            width: 600px;
            
        }
    </style>
    <title>@yield('title')</title>
</head>

<body>
    @include('frontend.partial.header-ENG')

    @yield('content')
    @include('frontend.partial.footer-ENG')

    
</body>

<script src="{{('public/frontend/js/tintuc.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</html>