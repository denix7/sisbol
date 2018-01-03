<?php 
	include "datos/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
</head>
<body>
	<form action="Acciones/editar.php" method="POST" enctype="multipart/form-data">
	<table>
		<TR>
			<td><label>Nombre:</label></td>
			<?php
			$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
			mysql_select_db($db,$con)or die("no existe la base de datos");
			$re = mysql_query("select Nombre,Precio from productos where idProducto = ".$_GET['editar'].";");
			while ($f=mysql_fetch_array($re)){
				?>
			<td><label><input type="text" name="Nombre"<?php echo 'value="'.$f['Nombre'].'"';?> /></label></td>
		</TR>
		<TR>
			<td><label>Precio:</label></td>
			<td><label><input type="text" name="Precio" <?php echo 'value="'.$f['Precio'].'"';?>/> $</label></td>
			<?php } ?>
			<input type="hidden" name="id" value=<?php echo '"'.$_GET['editar'].'"'; ?> >
		</TR>
	</table>
	<br>
	<input type="file" name="foto"/>
	<br/>
	<br>
	<input type="submit" value="Editar"/>
	</form>
</body>
</html>