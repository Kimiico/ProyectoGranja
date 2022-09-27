<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
<center>
  <h1>Modificar Lotes</h1>
</center>
<br>
<br>




  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>No.</th>
  			<th>ID</th>
  			<th>Nombre</th>
  			<th>Cantidad</th>
            <th>Sexo</th>
            <th>Fecha</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>

                                                <th> <a href="http://localhost/proyecto/index/"> <button type="button" class="btn btn-info">Atras</button> </a> </th>




  		</thead>

      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM lote";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['no']; echo "</td>";
            echo "<td>"; echo $fila['lote_id']; echo "</td>";
            echo "<td>"; echo $fila['nombre']; echo "</td>";
            echo "<td>"; echo $fila['cantidad']; echo "</td>";
            echo "<td>"; echo $fila['sexo']; echo "</td>";
            echo "<td>"; echo $fila['fecha']; echo "</td>";
            echo "<td><a href='modif_prod1.php?no=".$fila['no']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo " <td><a href='eliminar_prod.php?no=".$fila['no']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>

     
  		
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>