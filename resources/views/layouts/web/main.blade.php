<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="-" />
		<meta name="keywords" content="-" />
		<meta name="author" content="Vimana Studio" />

		<meta name="theme-color" content="#0d1d41"><!-- Chrome, Firefox OS and Opera -->
		<meta name="msapplication-navbutton-color" content="#0d1d41"><!-- Windows Phone -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#0d1d41"><!-- iOS Safari -->
		<link rel="shortcut icon" href="{{ asset('webimages/main/punto.png') }}"><!-- Favicon -->

		{{-- <meta property="og:url"         content="http://vimana.studio" />
		<meta property="og:type"        content="article" />
		<meta property="og:title"       content="Diseño Web y Diseño Gráfico" />
		<meta property="og:description" content="Somos un equipo de trabajo dedicado a desarrollar contenido visual e interactivo" />
		<meta property="og:image"       content="{{ asset('webimages/logos/main-logo.png') }}" />
		<meta name="twitter:title"      content="Studio Vimana" />
		<meta name="twitter:image"      content="{{ asset('webimages/logos/main-logo.png') }}" />
		<meta name="twitter:url"        content="http://vimana.studio" /> --}}
		{{-- <meta name="twitter:card"       content="" /> --}}
		{{--<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">--}}
		<link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/bootstrap/bootstrap3/bootstrap.min.css') }}">
		<link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/animate/animate.css') }}">
		<link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/ionicons/ionicons.min.css') }}"> 
		@yield('styles')
		<link rel="stylesheet" type="text/css" href="{{ asset('css/web.css') }}">

	</head>
	<body>
		<header>
			@include('layouts.web.partials.nav')
		</header>
		<a id="top" class="anchor"></a>
		@yield('content')
		@include('layouts.web.partials.modals')
		@include('layouts.web.partials.scripts')
		@yield('scripts')
		@yield('custom_js')
		<script>
			$('.MainOwlSlider').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 0,
				nav: false,
				dots: false, 
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});
		</script>
	</body>
</html>