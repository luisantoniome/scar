<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>SCAR: Sistema de Control y Administración para Restaurantes</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300|Patrick+Hand+SC">
    <link rel="stylesheet" href="{{ elixir('styles.css') }}">
</head>
<body>
	
	<header class="Header">
		<div class="Header-logo">
			<h1>Scar</h1>
		</div>
		<div class="Header-hamburger">
			<span id="hamburger" class="fa fa-bars"></span>
		</div>
		<nav id="menu" class="Menu">
			<ul class="Menu-list">
				<li class="Menu-item">
					<a href="#" class="Menu-link">Menú</a>
				</li>
				<li class="Menu-item">
					<a href="#" class="Menu-link">Reservaciones</a>
				</li>
			</ul>
		</nav>
	</header>

    @yield('content')

    <footer class="Footer">
		<p class="Footer-copyright">&copy; SCAR 2015</p>
	</footer>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>