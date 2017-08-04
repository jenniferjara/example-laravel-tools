<header class="nav-bar scrolled">
	<div class="row">
		<div class="col s12">
			<nav class="nav-top">
				<a class="nav-logo" href="{{ route('site.home.index') }}">
					<span class="da_logo_da"></span>
				</a>

				<ul class="right nav-lineal">
					<li class="nav-lineal-opt"><a class="nav-lineal-link go-products" href="{{ route('site.home.index') }}#productos">Nuestro Producto</a></li>
					<li class="nav-lineal-opt"><a class="nav-lineal-link" href="{{ route('site.layout.nosotros') }}">Nosotros</a></li>
					<li class="nav-lineal-opt"><a class="nav-lineal-link" href="{{ route('site.layout.contacto') }}">Contáctanos</a></li>
					<li class="nav-lineal-opt"><a data-activates='dropdown1' class="login dropdown-button"><span class="da_ico_user nav-lineal-icon-login"></span>Inicia sesión</a></li>
				</ul>
				<div class="nav-collapse d-none">
					<a data-activates='dropdown2' class="nav-perfil button-collapse">
						<i class="da_ico_user nav-perfil-icon"></i>
					</a>
					<a data-activates="slide-out" class="nav-barra button-collapse">
						<i class="material-icons">menu</i>
					</a>
				</div>
			</nav>
		</div>
	</div>
</header>

<ul id="slide-out" class="side-nav d-none">
	<li><a class="go-products" href="{{ route('site.home.index') }}#productos">Conoce Dá</a></li>
	<li><a href="{{ route('site.layout.nosotros') }}">Acerca de nosotros</a></li>
	<li><a href="{{ route('site.layout.beneficio') }}">Beneficios</a></li>
	<li><a href="{{ route('site.layout.reconocimiento') }}">Reconocimientos</a></li>
	<li><a href="{{ route('site.layout.medicion') }}">Medición</a></li>
	<li><a class="go-cotiza" href="{{ route('site.home.index') }}#cotiza">Cotiza tu plan</a></li>
	<li><a href="{{ route('site.layout.free') }}">Pruébalo gratis</a></li>
	<li><a class="waves-effect" href="{{ route('site.layout.contacto') }}">Contáctanos</a></li>
</ul>

<ul id='dropdown1' class='dropdown-content d-none'>
	<li class="dropdown2-li"><a class="dropdown2-a" href="#!">Como empresa</a></li>
	<li class="dropdown2-li"><a class="dropdown2-a" href="#!">Como colaborador</a></li>
</ul>

<ul id='dropdown2' class='dropdown-content'>
	<li class="dropdown2-li"><a class="dropdown2-a" href="#!">Como empresa</a></li>
	<li class="dropdown2-li"><a class="dropdown2-a" href="#!">Como colaborador</a></li>
</ul>