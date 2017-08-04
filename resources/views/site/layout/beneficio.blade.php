@extends('app')

@section('content')

@include('site.partials.navbarlayout')

<section id="beneficio">
	<nav class="nav-breadcrumbs">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="{{ route('site.home.index') }}" class="breadcrumb">Inicio</a>
					<a href="{{ route('site.layout.beneficio') }}" class="breadcrumb">Beneficios</a>
				</div>
			</div>
		</div>
	</nav>
	
	<div class="bg-beneficio">
		<div class="d-none bg-grey">
			<img class="img-common" src="{{ asset('assets/site/img/responsive/img_beneficios.jpg') }}" alt="Nosotros">
		</div>
		<div class="bg-layout-wrap wrapper-general-text valign-wrapper bg-grey">
			<div class="container">
				<div class="row">
					<div class="col offset-l2 l8 s12">
						<div class="center-align home-wrapper">
							<div><span class="da_ico_benefits icons-special"></span></div>
							<p class="titles text-purple">¡Dá! Beneficios</p>
							<p class="layout-text">Dale a tus colaboradores los mejores beneficios.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-general bg-purple-light valign-wrapper height-wrapper">
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
						<p class="layout-text">Escoge los beneficios que ofrecemos.</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div class="circle-option">2</div>
						<p class="layout-text">Carga beneficios propios.</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align options">
						<div class="circle-option">3</div>
						<p class="layout-text">Crea grupo de colaboradores para dirigir mejor tus beneficios.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="wrapper-general valign-wrapper height-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">¡Es importante dar beneficios!</p>
				</div>
			</div>
			<div class="row">

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p class="layout-text">Es un ahorro a tus colaboradores</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p class="layout-text">Genera un compromiso fortaleciendo un vinculo entre empresa y colaborador</p>
					</div>
				</div>

				<div class="col s12 l4">
					<div class="center-align layout-box">
						<div><span class="da_ico_checkcircle_line font-bold icons-check"></span></div>
						<p class="layout-text">Los motiva y hace más felices</p>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="wrapper-general bg-beneficio-options">
		<div>
			<div class="row">
				<div class="slider-wrapper">
					<div class="slider-option">
						<div class="center-align">
							<div><span class="da_ico_travel_line icons-white-lg"></span></div>
							<p class="titles">¡Dá! Viajes</p>
						</div>
						<ul class="bxslider">
							<li>
								<div class="slider-img-wrap">
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_viaje1.png') }}" alt="">
									</div>
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_viaje2.png') }}" alt="">
									</div>
								</div>
							</li>
							<li>
								<div class="slider-img-wrap">
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_viaje3.png') }}" alt="">
									</div>
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_viaje2.png') }}" alt="">
									</div>
								</div>
							</li>
						</ul>
					</div>

					<div class="slider-option">
						<div class="center-align">
							<div><span class="da_ico_education_line icons-white-lg"></span></div>
							<p class="titles">¡Dá! Educación</p>
						</div>
						<ul class="bxslider">
							<li>
								<div class="slider-img-wrap">
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_educacion1.png') }}" alt="">
									</div>
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_educacion2.png') }}" alt="">
									</div>
								</div>
							</li>
							<li>
								<div class="slider-img-wrap">
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_educacion3.png') }}" alt="">
									</div>
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_educacion2.png') }}" alt="">
									</div>
								</div>
							</li>
						</ul>
					</div>

					<div class="slider-option">
						<div class="center-align">
							<div><span class="da_ico_health_line icons-white-lg"></span></div>
							<p class="titles">¡Dá! Bienestar</p>
						</div>
						<ul class="bxslider">
							<li>
								<div class="slider-img-wrap">
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_salud1.png') }}" alt="">
									</div>
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_salud2.png') }}" alt="">
									</div>
								</div>
							</li>
							<li>
								<div class="slider-img-wrap">
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_salud2.png') }}" alt="">
									</div>
									<div class="slider-img">
										<img src="{{ asset('assets/site/img/logos/logo_salud3.png') }}" alt="">
									</div>
								</div>
							</li>
						</ul>
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
						<a class="waves-effect waves-light btn btn-flat-white" href="{{ route('site.home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@include('site.partials.footer')

@stop