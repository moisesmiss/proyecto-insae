<?php
session_start();
if(!isset($_SESSION['admin'])){
	header('location: index.php');
}

require_once 'views/administrador.php';
?>