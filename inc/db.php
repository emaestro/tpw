<?php


	$conexion = new mysqli(getenv('OPENSHIFT_MYSQL_DB_HOST'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), getenv('OPENSHIFT_MYSQL_DB_PASSWORD'), getenv('OPENSHIFT_APP_NAME'));
	
	if( $conexion->connect_errno)
	{
		echo "<h3>Error de conexion a la BD</h3>";
	}
?>