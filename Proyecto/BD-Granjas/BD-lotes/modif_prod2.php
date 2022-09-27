<?php
	
	ModificarProducto($_POST['no'], $_POST['lote_id'], $_POST['nombre'], $_POST['cantidad'], $_POST['sexo'], $_POST['fecha'] );

	function ModificarProducto($no, $id_lote, $nom, $cant, $sex, $fe)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE Lote SET lote_id='".$id_lote."', nombre='".$nom."', cantidad='".$cant."' WHERE no='".$no."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>