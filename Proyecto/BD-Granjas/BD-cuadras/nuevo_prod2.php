<?php

	
	NuevoProducto($_POST['cuadra_id'], $_POST['nombre'], $_POST['capacidad_max']);
	
	function NuevoProducto($id_cuadra, $nom, $cant)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO cuadra (cuadra_id, nombre, capacidad_max) VALUES ('".$id_cuadra."', '".$nom."', '".$cant."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>