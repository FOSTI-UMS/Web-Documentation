<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ config('app.name') }} @yield('judul')</title>
	<meta charset="UTF-8">
	<meta name="description" content="Web Dokumentasi Materi Fosti">
	<meta name="keywords" content="php, html, web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/plugin/prism/prism.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/plugin/sweetalert2/sweetalert2.min.css')}}" />

	<!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>

</head>
<body>
    <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="{{route('home')}}" class="site-logo">
			<img height="71" src="{{asset('assets/img/fostiputih.png')}}" alt="logo">
		</a>
		<ul class="main-menu">
			<li><a href="{{route('home')}}">Home</a></li>
			<li><a title="Fosti" href="http://fosti.ums.ac.id/">Fosti</a></li>
			<li><a title="Blog Fosti" href="http://fosti.ums.ac.id/blog">Blog</a></li>
			<li><a title="Event Fosti" href="https://event.fostiums.org">Event</a></li>
			<li><a title="Source Code" href="https://github.com/fosti">Source Code</a></li>
		</ul>
	</header>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{asset('assets/img/header-bg/1.jpg')}}">
		<div class="container">
			<h1 style="color: white;">F<font color="red">OS</font>TI DOCS</h1>
			<p style="color: white;" class="white-text">Forum Open Source Teknik Informatika</p>
		</div>
	</section>
	<!-- Page top section end -->

    @yield('konten')

    <!-- Footer section -->
	<div class="footer-section">
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="https://www.instagram.com/fosti_ums"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="https://www.facebook.com/Fosti.Umsurakarta"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="https://www.twiter.com/fostiums"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="https://www.github.com/fosti"><i class="fa fa-github"></i><span>Github</span></a>
				</div>
			</div>
		</div>
			<div class="container">
				<div class="copyright">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
						<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
							target="_blank">Colorlib</a> | Edited by <a href="https://aezo27.github.io"
							target="_blank">Aezo27.
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
	</div>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
	<script src="{{asset('assets/plugin/prism/prism.js')}}"></script>
    <script src="{{asset('assets/plugin/sweetalert2/sweetalert2.all.min.js')}}"></script>
	</body>
</html>
