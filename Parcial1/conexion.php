<?php
function abrir_conexion(){

	$servername = "localhost";
	$username = "root";
	$password = "uniminuto";
	$dbname = "paypal_table";

	try{
		global $con;
		$con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		die($e->getMessage());
	}
}
function cerrar_conexion(){
	global $con;
	$con = null;
}
?>