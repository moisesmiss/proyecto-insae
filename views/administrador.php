<!DOCTYPE html>
<html lang="en">
<head>
	<title>Panel de control</title>
	<?php require_once 'includes/head.php' ?>
	<link rel="stylesheet" type="text/css" href="libs/assets/style.css">
</head>
<body>
	<ul id="slide-out" class="sidenav sidenav-fixed">
		<li><a href="#!">Productos</a></li>
		<li><a href="#!">Categorias</a></li>
		<li><a href="models/cerrar-sesion.php">Cerrar Sesión</a></li>
	</ul>

	<nav class="hide-on-large-only">
    <div class="nav-wrapper">
      <ul id="nav-mobile">
        <li><a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars"></i></a></li>
      </ul>
    </div>
  </nav>
	<main>
	</main>
	<?php include_once 'includes/scripts.php' ?>
	<script type="text/javascript" src="libs/assets/scripts.js"></script>
</body>
</html>