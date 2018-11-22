<?php
require_once 'models/funciones.php';
session_start();
if(isset($_SESSION['admin'])){
	header('location: administrador.php');
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$registro = find('usuarios', ['email' => $email]);
	if (!empty($registro) && $registro['email'] == $email && password_verify($password, $registro['password'])){
		$_SESSION['admin'] = $email;
		header('location: administrador.php');
	} else {
		echo "<script>alert('Datos incorrectos')</script>";
	}
}


require_once 'views/index.php';
?>