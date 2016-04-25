<?php 

	include("01_db.php");

	$sql	=	"INSERT INTO PERSONAS SET ".
				"paterno='{$_POST['txtPaterno']}',".
				"materno='{$_POST['txtMaterno']}',".
				"nombres='{$_POST['txtNombres']}'";

	if( $conexion->query($sql) )
	{
		header("Location:01.php");
	}
	else
	{
		header("Location:01_nuevo.php");
	}
 ?>