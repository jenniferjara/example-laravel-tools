@extends('app')

@section('content')

@include('site.partials.navbarlayout')

<section id="reconocimiento">
	<nav class="nav-breadcrumbs">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="{{ route('site.home.index') }}" class="breadcrumb">Inicio</a>
					<a href="{{ route('site.layout.reconocimiento') }}" class="breadcrumb">Reconocimientos</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="bg-reconocimiento">
		<div class="d-none bg-grey">
			<img class="img-common" src="{{ asset('assets/site/img/responsive/img_reconocimientos.jpg') }}" alt="Nosotros">
		</div>
		<div class="bg-layout-wrap wrapper-general-text valign-wrapper bg-grey">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="center-align home-wrapper">
							<div><span class="da_ico_recognition icons-special"></span></div>
							<p class="titles text-purple">¡Dá! Reconocimientos</p>
							<p class="layout-text">Crea cultura de reconocimiento. Ten colaboradores más felices y productivos.</p>
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
					<p class="titles center-align">¡Así funciona!</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4">
					<div class="center-align options">
						<div class="circle-option">1</div>
						<p class="layout-text">Adquiere paquetes de KMS. LATAM Pass.</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div class="circle-option">2</div>
						<p class="layout-text">Selecciona colaborador</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div class="circle-option">3</div>
						<p class="layout-text">Reconocelo con Kms y un mensaje <br>personalizado.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="wrapper-general">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles text-purple">¡El reconocimiento es importante!</p>
				</div>
			</div>
			<div class="row">

				<div class="col s12 l6">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p class="layout-text">Refuerza conductas positivas</p>
					</div>
				</div>

				<div class="col s12 l6">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p class="layout-text">Motiva a los equipos de trabajo</p>
					</div>
				</div>

				<div class="col s12 l6">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p class="layout-text">Contribuye a alcanzar las metas establecidas</p>
					</div>
				</div>

				<div class="col s12 l6">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p class="layout-text">Obtén reportes de reconocimiento y evalua <br> el desempeño de tus colaboradores</p>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col s12">
					<div class="btn-da-wrapper valign-wrapper">
						<a class="waves-effect waves-light btn btn-cyan font-bold" href="{{ route('site.layout.free') }}">¡Pruébalo gratis hoy!</a>
					</div>
				</div>
				<div class="col s12">
					<div class="btn-da-wrapper d-none">
						<a class="waves-effect waves-light btn btn-flat" href="{{ route('site.home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@include('site.partials.footer')

@stop