<?php 
require_once 'database.php';
function getLast($tabla){
	$conexion = getConexion();
	$declaracion = $conexion->prepare("select * from $tabla order by id desc limit 1");
	$declaracion->execute();
	return $declaracion->fetch();
}

function insert($tabla, $data){
	$conexion = getConexion();

	$campos = implode(',',array_keys($data));
	$values = implode("','", array_values($data));

	$sql = "insert into $tabla($campos) values('$values')";
	$declaracion = $conexion->prepare($sql);
	if($declaracion->execute())
		return true;
	else 
		return false;
}

function find($tabla, $data){
	$conexion = getConexion();
	$campo = array_keys($data)[0];
	$valor = array_values($data)[0];

	$sql = "select * from $tabla where $campo = '$valor'";
	$declaracion = $conexion->prepare($sql);
	$declaracion->execute();
	return $declaracion->fetch();
}