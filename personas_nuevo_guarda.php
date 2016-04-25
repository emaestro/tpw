<?php 

	include("inc/db.php");

	$sql	=	"INSERT INTO personas SET ".
				"paterno = '{$_POST['txtPaterno']}', ".
				"materno = '{$_POST['txtMaterno']}', ".
				"nombres = '{$_POST['txtNombres']}' ";

	if( $conexion->query($sql) )
	{
		header("Location:index.php");
	}
	else
	{
		header("Location:personas_nuevo.php");
	}
 ?>