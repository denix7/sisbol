<?php 
	include "datos/conexion.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Productos</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/Estilos.css">
	<link href="assets/css/bootstrap.css" rel="stylesheet"/>
	<meta name="generator" content="Geany 1.22" />
</head>
<body>

	<div class="container">
        <div class="row main-low-margin text-center">

        		<h3 class="text-center">Administrar Eventos</h3>
        <div class="container">
            <div class="row main-low-margin text-center">
                <div class="col-md-offset-10 col-md-2 col-sm-2">
                    <a class="btn btn-primary btn-lg glyphicon glyphicon-log-out" type="link" href="..\menu.php">volver</a>
                </div>
            </div>  
        </div>
	<br/>
	<div style="width: 500px;margin: auto;border: 1px solid #1279F3;padding: 20px;">
		<form action="Acciones/guardar.php" method="post" enctype="multipart/form-data" class="form-horizontal">
			<div class="form-group">
				<label>Nombre:</label>
				<label><input type="text" name="Nombre" /></label><br>
			
				<label>Precio:</label>
				<label><input type="text" name="Precio"/> $</label>

				<input type="file" name="foto" />
				<br/>
				<input type="submit" value="Upload"/>
			</div>
		</form>
	</div>
<table border="2px" class="table table-striped">
	<tr>
		<td>ID</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Imagen</td>
		<td>Acciones</td>
	</tr>
	<?php
		include 'Datos/conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
	?>
	<tr>
		<td><?php echo $f['idProducto'];?></td>
		<td><?php echo $f['Nombre'];?></td>
		<td><?php echo $f['Precio'];?></td>
		<td><?php echo "<img class=\"imagen\" src=\""."Imagenes/".$f['Imagen']."\"/>";?></td>
		<td><?php echo '<a href="Acciones/eliminar.php?eliminar='.$f['idProducto'].'">Eliminar producto</a>';?>
		<?php echo '<a href="editar.php?editar='.$f['idProducto'].'">Editar</a>';?></td>
	</tr>
	<?php
	}
	?>
	</table>	

        </div>
    </div>
	
</body>
</html>