@extends('app')
@section('content')
	@include('site.partials.navbarlayout')

	<section class="form-results valign-wrapper center-align">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="form-messages-wrap">
						<div>
							<span class="da_ico_happyface icons-special" style="margin-left: 20px;"></span>
						</div>
						<div>
							<p class="titles text-orange">¡Listo!</p>
							<p>El pago se ha realizado exitosamente.</p>
							<p>Te hemos enviado un correo para que puedas empezar a disfrutar de Dá.</p>
						</div>
					</div>
				</div>
				<div class="col s12">
					<div class="btn-da-wrapper">
						<a class="waves-effect btn btn-purple font-bold" href="{{ route('site.home.index') }}">Ir al home</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('site.partials.footer')
@stop