<?php 

	include("inc/db.php");

	$sql	=	"UPDATE PERSONAS SET "
			.	"paterno = '{$_POST['txtPaterno']}', "
			.	"materno = '{$_POST['txtMaterno']}', "
			.	"nombres = '{$_POST['txtNombres']}' "
			.	"WHERE personas_id = {$_POST['txtId']}";

	if($conexion->query($sql))
	{
		header("Location:index.php");
	}else{
		header("Location:index.php");
	}
?>