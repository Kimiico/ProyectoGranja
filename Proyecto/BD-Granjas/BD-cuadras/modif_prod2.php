<?php
	
	ModificarProducto($_POST['no'], $_POST['cuadra_id'], $_POST['nombre'], $_POST['capacidad_max']);

	function ModificarProducto($no, $id_cuadra, $nom, $cant)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE cuadra SET cuadra_id='".$id_cuadra."', nombre='".$nom."', capacidad_max='".$cant."' WHERE no='".$no."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>