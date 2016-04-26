<?php
	include('inc/cabecera.php');
	include('inc/menu.php');

	include("inc/db.php");

	$resultado = $conexion->query("SELECT p.* FROM personas p");

?>

<div class="container">

	<div class="row">
		<div class="col-md-8">
			<h1>CRUD Personas</h1>
			<table class='table table-condensed'>
				<tr>
					<th>Id</th>
					<th>Paterno</th>
					<th>Materno</th>
					<th>Nombres</th>
					<th></th>
				</tr>
<?php
				while ( $fila = $resultado->fetch_assoc() )
				{
?>
					<tr>
						<td><?php echo $fila['personas_id']?></td>
						<td><?php echo $fila['paterno']?></td>
						<td><?php echo $fila['materno']?></td>
						<td><?php echo $fila['nombres']?></td>
						<td> <a href="personas_modificar.php?id=<?php echo $fila['personas_id']?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
						<td> <a href="personas_eliminar.php?id=<?php echo $fila['personas_id']?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> </td>
					</tr>
<?php
				}
?>

			</table>
		</div>
		<div class="col-md-4">
			<div class="alert alert-success">
				<strong>Bienvenidos</strong> al CRUD Personas.
			</div>
		</div>
	</div>

</div>

<?php
	include('inc/scripts.php');
	include('inc/pie.php');
?>