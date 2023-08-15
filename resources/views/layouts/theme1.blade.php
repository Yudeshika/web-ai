<!DOCTYPE html><html>
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<link href="{{ url('images/logo.png') }}" rel="icon"/>
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet"/>
<link href="{{ url('css/all.css') }}" rel="stylesheet"/>
<link href="{{ url('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('css/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('css/slick.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('css/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('css/meanmenu.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('css/font-family/font-family-two.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('css/preloader.css') }}" rel="stylesheet"/>
<link href="{{ url('css/style.css') }}" rel="stylesheet"/>
<link href="{{ url('css/responsive.css') }}" rel="stylesheet"/>
<title>Kids In Action</title>
<meta name="csrf-token" content="{{ csrf_token() }}">@vite(['resources/sass/app.scss', 'resources/js/app.js'])@routes</head>
<body id='app'>
@yield('content')
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('js/jquery.sticky.js') }}"></script>
<script src="{{ url('js/waypoints.min.js') }}"></script>
<script src="{{ url('js/jquery.counterup.min.js') }}"></script>
<script src="{{ url('js/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/slick.min.js') }}"></script>
<script src="{{ url('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ url('js/kids.js') }}"></script>
</body>
</html>
