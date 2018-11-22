<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Sistema de ventas e inventario</title>
	<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="libs/materialize/css/materialize.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-4">
				<h5 class="text-center my-4">Iniciar sesión</h5>
				<form method="post">
					<div class="input-field">
						<input type="email" name="email" id="email">
						<label for="email">Correo</label>
					</div>
					<div class="input-field">
						<input type="password" name="password" id="password">
						<label for="password">Contraseña</label>
					</div>
					<button class="btn mx-auto d-block" type="submit">Aceptar</button>
					<a class="mt-4 d-block text-center" href="crear-cuenta.php">Crear cuenta</a>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="libs/materialize/js/materialize.min.js"></script>
</body>
</html>