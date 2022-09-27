<?php

	
	NuevoProducto($_POST['nave_id'], $_POST['nombre'], $_POST['m2']);
	
	function NuevoProducto($id_nave, $nom, $metros)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO nave (nave_id, nombre, m2) VALUES ('".$id_nave."', '".$nom."', '".$metros."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>