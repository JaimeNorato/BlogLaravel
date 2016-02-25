<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	@include('admin.template.partials.nav')

	<section class="panel-body">
		@include('flash::message')
		@yield('content')
	</section>

	<footer class="footer modal-footer">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">
					<p class="navbar-text">Todos los derechos reservados &copy {{ date('Y') }}</p>
					<p class="navbar-text navbar-right"><b>Jaime Norato</b></p>
				</div>
			</div>
		</nav>
	</footer>
	<script src="{{ asset('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>