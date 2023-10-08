<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Porto - Multipurpose Website Template</title>

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href={{ asset("img/favicon.ico") }} type="image/x-icon" />
		<link rel="apple-touch-icon" href={{ asset("img/apple-touch-icon.png") }}>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href={{ asset("vendor/bootstrap/css/bootstrap.min.css") }}>
		<link rel="stylesheet" href={{ asset("vendor/fontawesome-free/css/all.min.css") }}>
		<link rel="stylesheet" href={{ asset("vendor/animate/animate.compat.css") }}>
		<link rel="stylesheet" href={{ asset("vendor/simple-line-icons/css/simple-line-icons.min.css") }}>
		<link rel="stylesheet" href={{ asset("vendor/owl.carousel/assets/owl.carousel.min.css") }}>
		<link rel="stylesheet" href={{ asset("vendor/owl.carousel/assets/owl.theme.default.min.css") }}>
		<link rel="stylesheet" href={{ asset("vendor/magnific-popup/magnific-popup.min.css") }}>

		<!-- Theme CSS -->
		<link rel="stylesheet" href={{ asset("css/theme.css") }}>
		<link rel="stylesheet" href={{ asset("css/theme-elements.css") }}>
		<link rel="stylesheet" href={{ asset("css/theme-blog.css") }}>
		<link rel="stylesheet" href={{ asset("css/theme-shop.css") }}>

		<!-- Current Page CSS -->
		<link rel="stylesheet" href={{ asset("vendor/circle-flip-slideshow/css/component.css") }}>

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href={{ asset("css/skins/default.css") }}>

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href={{ asset("css/custom.css") }}>

		<!-- Head Libs -->
		<script src= {{ asset("vendor/modernizr/modernizr.min.js") }}></script>

	</head>

	<body data-plugin-page-transition>
		@yield('content')

		<!-- Vendor -->
		<script src= {{ asset("vendor/plugins/js/plugins.min.js") }}></script>

		<!-- Theme Base, Components and Settings -->
		<script src= {{ asset("js/theme.js") }}></script>

		<!-- Circle Flip Slideshow Script -->
		<script src= {{ asset("vendor/circle-flip-slideshow/js/jquery.flipshow.min.js") }}></script>
		<!-- Current Page Views -->
		<script src= {{ asset("js/views/view.home.js") }}></script>

		<!-- Theme Custom -->
		<script src= {{ asset("js/custom.js") }}></script>

		<!-- Theme Initialization Files -->
		<script src= {{ asset("js/theme.init.js") }}></script>

	</body>
</html>
