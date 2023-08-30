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
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- <script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('js/jquery.sticky.js') }}"></script>
<script src="{{ url('js/waypoints.min.js') }}"></script>
<script src="{{ url('js/jquery.counterup.min.js') }}"></script>
<script src="{{ url('js/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/slick.min.js') }}"></script>
<script src="{{ url('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ url('js/kids.js') }}"></script> --}}

@vite([
	'resources/sass/app.scss', 
	'resources/js/app.js',
	'resources/js/extra/jquery.min.js', 
	'resources/js/extra/bootstrap.bundle.min.js', 
	'resources/js/extra/jquery.sticky.js', 
	//'resources/js/extra/waypoints.min.js', 
	'resources/js/extra/jquery.counterup.min.js', 
	'resources/js/extra/owl.carousel.min.js', 
	'resources/js/extra/slick.min.js', 
	'resources/js/extra/isotope.pkgd.min.js', 
	'resources/js/extra/jquery.magnific-popup.min.js', 
	'resources/js/extra/jquery.meanmenu.min.js', 
	'resources/js/extra/kids.js'
])

{{-- @vite('resources/js/extra/jquery.min.js') 
@vite('resources/js/extra/bootstrap.bundle.min.js') 
@vite('resources/js/extra/jquery.sticky.js') 
@vite('resources/js/extra/waypoints.min.js') 
@vite('resources/js/extra/jquery.counterup.min.js') 
@vite('resources/js/extra/owl.carousel.min.js') 
@vite('resources/js/extra/slick.min.js') 
@vite('resources/js/extra/isotope.pkgd.min.js') 
@vite('resources/js/extra/jquery.magnific-popup.min.js') 
@vite('resources/js/extra/kids.js')  --}}
@routes


</head>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<body id='app'>
<header class="homepage-two header">
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="header-top-info">
<ul>
<li><i class="fa-solid fa-location-dot"></i> 482/B, MILLENNIUM DRIVE, CHANDRIKA KUMARANATHUNGA MAWATHA, MALABE.</li>
<!-- <li><i class="fa-solid fa-envelope"></i> info@kidsinaction.com </li> -->
<li style="width: 200px; margin-left: 1.4rem;"><i class="fa-solid fa-phone"></i> +94 112 407 407 </li>
</ul>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="header-top-social footer-social">
<ul>
<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="menu">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="index.html"><img alt="" src="images/logo.png"/></a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
<li class="nav-item dropdown">
<a aria-current="page" class="nav-link active" href="index.html">Home</a>
</li>
<li class="nav-item"><a class="nav-link" href="programs.html">Our Programs</a> </li>
<li class="nav-item dropdown">
<a class="nav-link" href="#">About Us</a>
<ul class="dropdown-menu">
<li class="nav-item"><a class="dropdown-item" href="about.html">Who We Are?</a> </li>
<li class="nav-item"><a class="dropdown-item" href="blog-page.html">Our Branch Network</a></li>
<li class="nav-item"><a class="dropdown-item" href="teacher.html">Our Teachers</a></li>
</ul>
</li>
<li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a> </li>
<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a> </li>
<li class="nav-item"><a class="nav-link btn btn-primary kids-active-btn" href="tel:+94112407407"> Call Us</a> </li>
</ul>
</div>
</nav>
</div>
</div>
<!-- end menu -->
<div class="header-shape-one"><img alt="" src="images/header-shape-01.png"/></div>
<div class="header-shape-two"><img alt="" src="images/header-shape-02.png"/></div>
<div class="header-shape-three"><img alt="" src="images/footer-01.png"/></div>
<div class="container">
<!-- end menu -->
<div class="header-slider owl-carousel owl-theme">
<div class="header-slider-item">
<div class="header-slider-text">
<h1>Make Your Children�s  Life Special</h1>
<p>The Universe is one great kindergarten for man. Everything that exists has brought with it its own peculiar lesson.</p>
</div>
</div>
<!-- iteam -->
<div class="header-slider-item">
<div class="header-slider-text">
<h1>Better Education Better Life</h1>
<p>The Universe is one great kindergarten for man. Everything that exists has brought with it its own peculiar lesson.</p>
</div>
<div class="haeader-slider-form">
<form action="" class="d-flex">
<input placeholder="Search Your Courese" type="text"/>
<a class="btn-search" href="#"><img alt="" src="images/search.png"/></a>
</form>
</div>
</div>
<!-- iteam -->
<div class="header-slider-item">
<div class="header-slider-text">
<h1>Education is the power of world </h1>
<p>The Universe is one great kindergarten for man. Everything that exists has brought with it its own peculiar lesson.</p>
</div>
<div class="haeader-slider-form">
<form action="" class="d-flex">
<input placeholder="Search Your Courese" type="text"/>
<a class="btn-search" href="#"><img alt="" src="images/search.png"/></a>
</form>
</div>
</div>
<!-- iteam -->
<div class="header-slider-item">
<div class="header-slider-text">
<h1>Good Learning Better Living</h1>
<p>The Universe is one great kindergarten for man. Everything that exists has brought with it its own peculiar lesson.</p>
</div>
<div class="haeader-slider-form">
<form action="" class="d-flex">
<input placeholder="Search Your Courese" type="text"/>
<a class="btn-search" href="#"><img alt="" src="images/search.png"/></a>
</form>
</div>
</div>
<!-- iteam -->
</div>
</div>
<div class="cloud">
<img alt="" src="images/graybg.png"/>
</div>
</header>
<div>
@yield('content')
</div>
<div>
<footer class="footer">
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-6 col-lg-8">
<img alt="" src="images/logo.png"/>
<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiaproi-dent, sunt in culpa qui officia dese deserunt...</p>
<ul>
<li><i class="fa-solid fa-location-dot"></i> 482/B, MILLENNIUM DRIVE, CHANDRIKA KUMARANATHUNGA MAWATHA, MALABE.</li>
<!-- <li><i class="fa-solid fa-envelope"></i> info@kidsinaction.com </li> -->
<li><i class="fa-solid fa-phone"></i> +94 112 407 407 </li>
</ul>
</div>
<!-- col-md-4 -->
<!--<div class="col-md-2 col-sm-6 col-lg-2">
				<h4>Quick Links</h4>
				<ul class="footer-link">
					<li class="nav-item"><a href="#" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Classes</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Teachers</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Latest News</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Countact Us</a></li>
				</ul>
			</div>-->
<!-- col-md-4 -->
<!--<div class="col-md-2 col-sm-6 col-lg-2">
				<h4>Categories</h4>
				<ul class="footer-link">
					<li class="nav-item"><a href="#" class="nav-link">Painting</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Drawing</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Sports, Games</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Life Science</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Activities & Events</a></li>
				</ul>
			</div>-->
<!-- col-md-4 -->
<div class="col-md-4 col-sm-6 col-lg-4">
<h4>Photo gallery</h4>
<div class="footer-gellary-area">
<ul class="footer-gellary">
<li><a href="#"><img alt="" src="images/g-01.png"/></a></li>
<li><a href="#"><img alt="" src="images/g-02.png"/></a></li>
<li><a href="#"><img alt="" src="images/g-03.png"/></a></li>
<li><a href="#"><img alt="" src="images/g-04.png"/></a></li>
<li><a href="#"><img alt="" src="images/slider-01.png"/></a></li>
<li><a href="#"><img alt="" src="images/slider-02.png"/></a></li>
<li><a href="#"><img alt="" src="images/slider-03.png"/></a></li>
<li><a href="#"><img alt="" src="images/post-03.jpg"/></a></li>
</ul>
<div class="footer-social">
<ul>
<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
<!-- col-md-4 -->
</div>
</div>
<div class="footer-shape-one"><img alt="" src="images/shape-11.png"/></div>
<div class="footer-shape-two"><img alt="" src="images/shape-11.png"/></div>
<div class="footer-shape-three"><img alt="" src="images/dragon.png"/></div>
</footer>

</div>

</body>
</html>
