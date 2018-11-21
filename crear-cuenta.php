<?php
require_once 'models/funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	if($password == $password2){
		$password = password_hash($password, PASSWORD_DEFAULT);
		$insert1 = insert('personas', ['nombre' => $nombre, 'apellidos' => $apellidos]);
		$insert2 = insert('usuarios', ['id' => getLast('personas')['id'], 'email' => $email, 'password' => $password]);

		if($insert1 && $insert2){
			$success = true;
			echo "<script>alert('Datos añadidos de forma correcta')</script>";
		}
	} else {
		$error = ['las contraseñas no son iguales'];
	}
}


require_once 'views/crear-cuenta.php';