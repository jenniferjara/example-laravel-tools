<section id="cotizaopt2" class="cotizaopt2 bg-grey wrapper-general valign-wrapper" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="cotiza-personal-title">
					<p>¿Quieres un trato más personalizado?</p>
					<p>¡Escríbenos!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 offset-l2 l8">
				<form method="post" action="/cotiza" id="cotizapersonal" class="form-common">
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s12 l6">
							<input name="name" id="name" type="text" class="validate" autocomplete="off">
							<label for="name">Nombre*</label>
						</div>
						<div class="input-field col s12 l6">
							<input name="company" id="company" type="text" class="validate" autocomplete="off">
							<label for="company">Empresa*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
							<input name="phone" id="phone" type="text" class="validate" autocomplete="off">
							<label for="phone">Teléfono*</label>
						</div>
						<div class="input-field col s12 l6">
							<input name="email" id="email" type="email" class="validate" autocomplete="off">
							<label for="email">Correo corporativo*</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
							<input name="cargo" id="cargo" type="text" class="validate" autocomplete="off">
							<label for="cargo">Cargo*</label>
						</div>
						<div class="input-field col s12 l6">
							<input id="employee" type="text">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="message" class="materialize-textarea" data-length="120" autocomplete="off"></textarea>
							<label for="message">Escribe un mensaje (opcional)</label>
						</div>
					</div>
				</form>
			</div>

			<div class="col s12">
				<p class="campos-requeridos">*Campos requeridos</p>
				<div class="btn-da-wrapper valign-wrapper">
					<a id="cotiza-personal-btn" class="waves-effect waves-light btn btn-purple font-bold" href="">Enviar</a>
				</div>
			</div>
		</div>
	</div>
</section>