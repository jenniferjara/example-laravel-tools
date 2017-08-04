@extends('app')

@section('content')

@include('site.partials.navbarlayout')

<section id="medicion">
	<nav class="nav-breadcrumbs">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="{{ route('site.home.index') }}" class="breadcrumb">Inicio</a>
					<a href="{{ route('site.layout.medicion') }}" class="breadcrumb">Medición</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="bg-medicion">
		<div class="d-none bg-grey">
			<img class="img-common" src="{{ asset('assets/site/img/responsive/img_medicion.jpg') }}" alt="Nosotros">
		</div>
		<div class="wrapper-general-text bg-layout-wrap valign-wrapper bg-grey">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="center-align">
							<div><span class="da_ico_measuring icons-special"></span></div>
							<p class="titles">Mide la felicidad <br>de tus colaboradores</p>
						</div>
					</div>
					<div class="col s12">
						<div class="btn-da-box valign-wrapper">
							<a class="waves-effect waves-light btn btn-da btn-purple font-bold" href="">¡Mide hoy!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-general bg-purple-light height-wrapper valign-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p class="titles center-align">Nuestra Herramienta!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4">
					<div class="center-align options">
						<div><span class="da_ico_test_line icons-white-lg"></span></div>
						<p class="layout-text">Contamos con una encuesta desarrollada por psicologos expertos en felicidad en el trabajo.</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div><span class="da_ico_areas_line icons-white-lg"></span></div>
						<p class="layout-text">Puedes selecionar a qué áreas de tu empresa la quieres enviar</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div><span class="da_ico_dashboard_line icons-white-lg"></span></div>
						<p class="layout-text">¡Ofrecemos un dashboard para que puedas revisar tus resultados!</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="wrapper-general height-wrapper valign-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">¡La felicidad es importante!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p>Incrementa la productividad</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p>Genera una relación cercana entre los colaboradores y la empresa</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p>Mejora el ambiente de trabajo</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="btn-da-wrapper valign-wrapper">
						<a class="waves-effect waves-light btn btn-cyan font-bold" href="{{ route('site.layout.free') }}">¡Pruébalo gratis hoy!</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-general bg-grey">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">Estudios</p>
					<p>Esta herramienta está respaldada por Jorge Yamamoto, Doctor en Psicología y Antropología.</p>
				</div>
			</div>

			@include('site.home.estudios.all')
			
		</div>
	</div>
	<div class="wrapper-general bg-grey d-none">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="btn-da-wrapper">
						<a class="waves-effect waves-light btn btn-flat" href="{{ route('site.home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('site.partials.footer')

@stop