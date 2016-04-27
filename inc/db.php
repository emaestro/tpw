<?php 

	echo getenv('OPENSHIFT_MYSQL_DB_HOST');
	echo "<br>";
	echo getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	echo "<br>";
	echo getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	echo "<br>";
	echo getenv('OPENSHIFT_MYSQL_DB_PORT');
	echo "<br>";
	echo getenv('OPENSHIFT_APP_NAME');


	$conexion = new mysqli($host, $user, $password, $database);
	
	if( $conexion->connect_errno)
	{
		echo "<h3>Error de conexion a la BD</h3>";
	}
?>