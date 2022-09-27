<?php
	
	ModificarProducto($_POST['no'], $_POST['nave_id'], $_POST['nombre'], $_POST['m2']);

	function ModificarProducto($no, $id_nave, $nom, $metros)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE nave SET nave_id='".$id_nave."', nombre='".$nom."', m2='".$metros."' WHERE no='".$no."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>