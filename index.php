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
			<div class="col-12 col-md-6">
				<!-- Material form login -->
				<div class="card">

					<h5 class="card-header info-color white-text text-center py-4">
						<strong>Iniciar sesión</strong>
					</h5>

					<!--Card content-->
					<div class="card-body px-lg-5 pt-0">

						<!-- Form -->
						<form class="text-center" style="color: #757575;">

							<!-- Email -->
							<div class="md-form">
								<input type="email" id="materialLoginFormEmail" class="form-control">
								<label for="materialLoginFormEmail">Correo</label>
							</div>

							<!-- Password -->
							<div class="md-form">
								<input type="password" id="materialLoginFormPassword" class="form-control">
								<label for="materialLoginFormPassword">Contraseña</label>
							</div>

							<div class="d-flex justify-content-around">
								<div>
									<!-- Remember me -->
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
										<label class="form-check-label" for="materialLoginFormRemember">Recuerdame</label>
									</div>
								</div>
								<div>
									<!-- Forgot password -->
									<a href="">¿Olvidaste tu contraseña?</a>
								</div>
							</div>

							<!-- Sign in button -->
							<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Iniciar Sesión</button>

							<!-- Register -->
							<p>
								<a href="crear-cuenta.php">Crear cuenta</a>
							</p>

						</form>
						<!-- Form -->

					</div>

				</div>
				<!-- Material form login -->
			</div>
		</div>



		
	</div>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>