<?php 
	$host = "localhost";
	$user = "root";
	$password = "root";
	$database = "programacion_web";

	$conexion = new mysqli($host, $user, $password, $database);
	
	if( $conexion->connect_errno)
	{
		echo "<h3>Error de conexion a la BD</h3>";
	}
?>