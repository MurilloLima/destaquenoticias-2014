<!DOCTYPE html>
<html lang="en">

<head>
    <!--<< Required meta tags >>-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/css/modernmag-assets.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="icon" type="image/png" href="{{ asset('home/images/icon.png') }}" />
    <style>
        .theiaStickySidebar:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
    <link rel="stylesheet" href="home/fontawesome/css/font-awesome.min.css">
    <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/57/8b/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/57/8b/util.js"></script>
    <!--<< Title >>-->
    <title>Destaque notícias - @yield('title')</title>

</head>

<body>
    <!-- Container -->
    <div id="container">
        @include('home.layout.nav')
        @yield('content')
        @include('home.layout.footer')
    </div>

    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="{{ asset('home/js/modernmag-plugins.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script
        src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en">
    </script>
    <script src="{{ asset('home/js/gmap3.min.js') }}"></script>
    <script src="{{ asset('home/js/script.js') }}"></script>
</body>

</html>
