<?php
	include ("01_db.php");
	
	$sql	=	"DELETE "
			.	"FROM personas "
			.	"WHERE personas_id = {$_GET['id']}";
	
	if($conexion->query($sql))
	{
		header("Location:index.php");
	}
	else
	{
		header("Location:index.php");
	}

 ?>