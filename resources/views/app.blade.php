<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('assets/site/css/vendor.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/site/css/public.css') }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<title>Dá</title>
</head>
<body>

	@yield('content')
	
	<script type="text/javascript" src="{{ asset('assets/site/js/public.js') }}"></script>
	<script type="text/javascript">
	  	var urlAfiliacion = "<?php echo URL::to('/prueba-gratis'); ?>";

		$('.bxslider').bxSlider({
			adaptiveHeight: true,
	  		pager: false
	  	});
	  	
	</script>
</body>
</html>