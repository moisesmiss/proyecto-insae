<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Sistema de ventas e inventario</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-4">
				<h5 class="text-center my-4">Crear cuenta</h5>
				<form class="row">
					<div class="col-12">
						<div class="input-field">
							<input type="text" name="nombre" id="nombre">
							<label for="nombre">Nombre</label>
						</div>
					</div>
					<div class="col-12">
						<div class="input-field">
							<input type="text" name="apellidos" id="apellidos">
							<label for="apellidos">Apellidos</label>
						</div>
					</div>
					<div class="col-12">
						<div class="input-field">
							<input type="email" name="email" id="email">
							<label for="email">Correo</label>
						</div>
					</div>
					<div class="col-12">
						<div class="input-field">
							<input type="password" name="password" id="password">
							<label for="password">Contraseña</label>
						</div>
					</div>
					<div class="col-12">
						<div class="input-field">
							<input type="password" name="password2" id="password2">
							<label for="password2">Repetir Contraseña</label>
						</div>
					</div>
					<div class="col-12">
						<button class="btn mx-auto d-block" type="submit">Aceptar</button>
					</div>
					<div class="col-12 my-4">
						<a class="d-block text-center" href="index.php">Iniciar sesión</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>