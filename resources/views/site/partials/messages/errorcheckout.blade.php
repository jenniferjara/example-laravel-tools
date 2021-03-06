@extends('app')
@section('content')
	@include('site.partials.navbarpages')

	<section class="form-results valign-wrapper center-align">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="form-messages-wrap">
						<div>
							<span class="da_ico_error icons-special" style="margin-left: 20px;"></span>
						</div>
						<div>
							<p class="titles text-orange">¡Ups!</p>
							<p>Lo sentimos, no se puede procesar el pago.</p>
							<p>Vuelva a intentarlo.</p>
						</div>
					</div>
				</div>
				<div class="col s12">
					<div class="btn-da-wrapper">
						<a class="waves-effect btn btn-flat font-bold comeback" href="">Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('site.partials.footer')
@stop