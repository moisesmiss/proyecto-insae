<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="login row d-flex justify-content-center">
			<div class="col-12 col-md-8">
				<!-- Material form register -->
				<div class="card">

					<h5 class="card-header info-color white-text text-center py-4">
						<strong>Registrarse</strong>
					</h5>

					<!--Card content-->
					<div class="card-body px-lg-5 pt-0">

						<!-- Form -->
						<form class="text-center" style="color: #757575;">

							<div class="form-row">
								<div class="col-12 col-md">
									<!-- nombre -->
									<div class="md-form">
										<input type="text" id="materialRegisterFormFirstName" class="form-control">
										<label for="materialRegisterFormFirstName">Nombre</label>
									</div>
								</div>
								<div class="col-12 col-md">
									<!-- apellido paterno -->
									<div class="md-form">
										<input type="email" id="materialRegisterFormLastName" class="form-control">
										<label for="materialRegisterFormLastName">Apellido Paterno</label>
									</div>
								</div>
								<div class="col-12 col-md">
									<!-- apellido materno -->
									<div class="md-form">
										<input type="text" name="" id="apellidoM" class="form-control">
										<label for="apellidoM">Apellido Materno</label>
									</div>
								</div>
							</div>

							<!-- E-mail -->
							<div class="md-form mt-0">
								<input type="email" id="materialRegisterFormEmail" class="form-control">
								<label for="materialRegisterFormEmail">Correo</label>
							</div>

							<div class="form-row">
								<!-- Password -->
								<div class="col-12 col-md">
									<div class="md-form">
										<input type="password" id="password" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
										<label for="password">Contraseña</label>
									</div>
								</div>

								<div class="col-12 col-md">
									<div class="md-form">
										<input type="password" id="password2" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
										<label for="password2">Repetir Contraseña</label>
									</div>
								</div>
								
							</div>


							<!-- Sign up button -->
							<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Aceptar</button>
							<a href="index.php">Iniciar sesión</a>

							</form>
							<!-- Form -->

						</div>

					</div>
					<!-- Material form register -->
				</div>
			</div>




		</div>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/mdb.min.js"></script>
	</body>
	</html>