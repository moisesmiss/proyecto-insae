<?php 

function getConexion(){
	return new PDO('mysql:host=localhost;dbname=insae;charset=utf8', 'root', '');
}