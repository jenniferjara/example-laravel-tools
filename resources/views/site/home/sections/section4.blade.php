<section id="cotiza" class="go-to-section" data-section-name="cotiza">
	<div class="cotiza-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p class="titles left-center">¡Incrementa la felicidá <br>de tus colaboradores!</p>
					<p class="subtitles left-center">Cotiza tu plan</p>

					<form id="cotiza-home">
						<p class="range-field">
							<input type="range" id="test5" min="0" max="600" value ="0" />
						</p>
					</form>
					<span style="display: none;" id="slide-cero"></span>
				</div>
				<div class="col s12">
					<div class="btn-da-wrapper">
						<a id="cotiza-home-btn" class="waves-effect btn btn-purple font-bold" href="">¡Cotizar ya!</a>
					</div>
				</div>

				<div class="col s12">
					<div class="btn-da-wrapper">
						<a class="waves-effect btn btn-cyan" href="{{ route('site.layout.free') }}">¡Pruébalo gratis hoy!</a>
					</div>
				</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

@include('site.home.cotiza.option1')
@include('site.home.cotiza.option2')

@include('site.partials.loader')