<?php

	
	NuevoProducto($_POST['lote_id'], $_POST['nombre'], $_POST['cantidad'], $_POST['sexo'], $_POST['fecha']);
	
	function NuevoProducto($id_lote, $nom, $cant, $sex, $fe)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO Lote (lote_id, nombre, cantidad, sexo, fecha) VALUES ('".$id_lote."', '".$nom."', '".$cant."', '".$sex."', '".$fe."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>