@extends('app')

@section('content')

@include('site.partials.navbarlayout')

<section id="nosotros">
	<nav class="nav-breadcrumbs">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="{{ route('site.home.index') }}" class="breadcrumb">Inicio</a>
					<a href="{{ route('site.layout.nosotros') }}" class="breadcrumb">Acerca de nosotros</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="bg-nosotros">
		<div class="d-none">
			<img class="img-common" src="{{ asset('assets/site/img/responsive/img_nosotros.jpg') }}" alt="Nosotros">
		</div>
		<div class="wrapper-general-text bg-layout-wrap valign-wrapper bg-white">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<p class="titles">"La felicidad como herramienta de transformación mejora el rendimiento de tus colaboradores, refuerza la cultura y contribuye la conexión de los equipos de trabajo."</p>
						<br>
						<p class="text-orange font-bold">Giacomo Zolezzi, GG</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-general bg-grey valign-wrapper height-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p class="center-align titles">Nuestro producto</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4">
				<div class="center-align home-wrapper">
					<div><span class="da_ico_recognition icons-purple-lg"></span></div>
					<p class="subtitles">Reconocimientos</p>
					<div class="product-wrap">
						<p>Reconoce a tus colaboradores con KMS.</p>
						<p>LATAM Pass</p>
					</div>
					<a class="seemore" href="{{ route('site.layout.reconocimiento') }}">Leer más</a>
				</div>
			</div>

			<div class="col s12 l4">
				<div class="center-align home-wrapper">
					<div><span class="da_ico_benefits icons-purple-lg"></span></div>
					<p class="subtitles">Beneficios</p>
					<div class="product-wrap">
						<p>Queremos que des experiencias enfocadas en educación, viajes y bienestar.</p>
					</div>
					<a class="seemore" href="{{ route('site.layout.beneficio') }}">Leer más</a>
				</div>
			</div>
			
			<div class="col s12 l4">
				<div class="center-align home-wrapper">
					<div><span class="da_ico_measuring icons-purple-lg"></span></div>
					<p class="subtitles">Medición</p>
					<div class="product-wrap">
						<p>Gestiona la felicidad y vuelve más productivo a tu equipo.</p>
					</div>
					<a class="seemore" href="{{ route('site.layout.medicion') }}">Leer más</a>
				</div>
			</div>
			</div>
		</div>
	</div>

	<div class="wrapper-general">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align about-perfil">
					<p class="titles">Fundadores</p>
				</div>
			</div>
			<div class="row">
				<div class="center-align about-perfil">
					<div class="col s6 offset-l2 l4">
						<div class="about-perfil-pic about-perfil-bg1"></div>
						<div class="about-perfil-text">
							<p>Yoel Chlimper</p>
							<p>Gerente General</p>
						</div>
					</div>
					<div class="col s6 l4">
						<div class="about-perfil-pic about-perfil-bg2"></div>
						<div class="about-perfil-text">
							<p>Giacomo Zolezzi</p>
							<p>Gerente General</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="d-none bg-grey">
		<img class="img-common" src="{{ asset('assets/site/img/responsive/img_trabaja.jpg')}}" alt="Trabaja con nosotros">
	</div>
	<div class="bg-trabaja">
		<div class="bg-layout-wrap about-wrapper bg-grey">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<p class="titles">¡Trabaja con nosotros!</p>
						<p>Si quieres formar parte de nuestro equipo, <br>envíanos tu CV a:</p>
						<p class="contact-email">
							<a href="mailto:example@example.com" class="text-orange">trabajaconnostros&commat;da.pe</a>
						</p>
					</div>
					<div class="col s12 d-none">
						<div class="btn-da-wrapper">
							<a class="waves-effect waves-light btn-da btn-flat" href="{{ route('site.home.index') }}">Regresar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

@include('site.partials.footer')

@stop
