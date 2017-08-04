@extends('app')

@section('content')

@include('site.partials.navbarlayout')

<section id="contacto">
	<nav class="nav-breadcrumbs">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="{{ route('site.home.index') }}" class="breadcrumb">Inicio</a>
					<a href="{{ route('site.layout.contacto') }}" class="breadcrumb">Contáctanos</a>
				</div>
			</div>
		</div>
	</nav>
	<div id="form-contact-wrap" class="wrapper-general">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="center-align">
						<p class="titles">Contáctanos</p>
						<p>Ingresa tus datos y nos comunicaremos contigo</p>
					</div>
					<div class="row">
						<div class="col s12 offset-l2 l8">
							<form method="post" action="/contact" id="form-contact" class="form-common">
								{{ csrf_field() }}
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="name_contact" id="name_contact" type="text" class="validate" autocomplete="off">
										<label for="name_contact">Nombre*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="company_contact" id="company_contact" type="text" class="validate" autocomplete="off">
										<label for="company_contact">Empresa*</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="phone_contact" id="phone_contact" type="number" class="validate" autocomplete="off">
										<label for="phone_contact">Teléfono*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="email_contact" id="email_contact" type="email" class="validate" autocomplete="off">
										<label for="email_contact">Correo corporativo*</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="position_contact" id="position_contact" type="text" class="validate" autocomplete="off">
										<label for="position_contact">Puesto*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="employee_contact" id="employee_contact" type="number" class="validate" autocomplete="off">
										<label for="employee_contact">Número de colaboradores*</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="message_contact" class="materialize-textarea" data-length="120"  autocomplete="off"></textarea>
										<label for="message_contact">Escribe un mensaje (opcional)</label>
									</div>
								</div>
							</form>
						</div>
					</div>
					<p class="campos-requeridos">*Campos requeridos</p>
					<div class="btn-da-wrapper valign-wrapper">
						<a id="btn-send-contact" class="waves-effect waves-light btn btn-purple font-bold" href="">Enviar</a>
					</div>
					<div class="btn-da-wrapper d-none">
						<a class="waves-effect waves-light btn btn-flat" href="{{ route('site.home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

@include('site.partials.loader')

@include('site.partials.footer')

@stop