@extends('app')

@section('content')

	@include('site.partials.navbar')

	@include('site.home.sections.section1')
	{{-- @include('site.home.sections.section2')
	@include('site.home.sections.section3') --}}
	@include('site.home.sections.section4')

	<section id="estudios">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<p class="titles">Aquí te damos algunos estudios sobre la felicidad en el trabajo</p>
				</div>
			</div>
			
			@include('site.home.estudios.all')
			
		</div>
	</section>

	@include('site.partials.footer')

@stop