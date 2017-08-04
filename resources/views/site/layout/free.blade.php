@extends('app')

@section('content')

@include('site.partials.navbarlayout')

<section id="afiliacion">

	<nav class="nav-breadcrumbs">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="{{ route('site.home.index') }}" class="breadcrumb">Inicio</a>
					<a href="{{ route('site.layout.free') }}" class="breadcrumb">Pruébalo gratis</a>
				</div>
			</div>
		</div>
	</nav>
	<div id="form-free-wrap" class="wrapper-general">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="center-align">
						<p class="titles">¡Realiza tu prueba gratis!</p>
						<p>Afiliate y podrás inscribir hasta</p>
						<p>10 colaboradores</p>
					</div>
					<div class="row">
						<div class="col s12 offset-l2 l8">
							<form method="post" action="/free" id="form-free" class="form-common">
								{{ csrf_field() }}
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="number_ruc" id="number_ruc"" type="text" class="validate">
										<label for="number_ruc"">Número de RUC*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="company" type="text" class="validate" autocomplete="off">
										<label for="company">Nombre de la Empresa*</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12 l6">
										<input name="razon" id="text" type="text" class="validate" autocomplete="off">
										<label for="razon">Razón social*</label>
									</div>
									<div class="input-field col s12 l6">
										<div>
			                    			 <label style="top: -.5rem;">Sector*</label>
			                                <select class="error browser-default select-afiliate" id="sector" name="sector">
			                    				<option value="" disabled selected>Elige un sector</option>
			                    				<option value="1">Manager</option>
			                                    <option value="2">Developer</option>
			                                    <option value="3">Business</option>
			                    			</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 l6">
										<input name="contact_person" type="text" class="validate" autocomplete="off">
										<label for="contact_person">Persona de contacto*</label>
									</div>
									<div class="input-field col s12 l6">
										<input name="contact_person_email" type="email" class="validate" autocomplete="off">
										<label for="contact_person_email">Correo electrónico de contacto*</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12 l6">
										<input id="contact_person_phone" name="contact_person_phone" type="text" class="validate" autocomplete="off">
										<label for="contact_person_phone">Teléfono*</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12">
										<div class="terms-box valign-wrapper">
											<input name="terms" type="checkbox" id="terms" autocomplete="off">
											<label for="terms"></label>
											{{-- <span style="cursor: pointer;" id="label-terms">Acepto términos y condiciones*</span> --}}
											<a class="modal-trigger" href="#modal_message">Acepto términos y condiciones*</a>
										</div>
									</div>
								</div>
								
							</form>
						</div>
					</div>
					<p class="campos-requeridos">*Campos requeridos</p>
					<div class="btn-da-wrapper valign-wrapper">
						<a id="btn-send-free" class="waves-effect waves-light btn btn-purple font-bold" href="">Enviar</a>
					</div>
					<div class="btn-da-wrapper d-none">
						<a class="waves-effect waves-light btn btn-flat" href="{{ route('site.home.index') }}">Regresar</a>
					</div>
				</div>
			</div>
		</div>	
	</div>

</section>

@include('site.partials.modal')
@include('site.partials.loader')

@include('site.partials.footer')

@stop