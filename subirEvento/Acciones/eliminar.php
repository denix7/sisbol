<?php
	include '../Datos/conexion.php';
	$id= $_GET['eliminar'];
	$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	$re = mysql_query("select Imagen from productos where idProducto=".$id.";");
	while ($imagen=mysql_fetch_array($re)) {
		$espera = unlink("../Imagenes/".$imagen['Imagen']);
	}
	mysql_query("delete from productos where idProducto =".$id.";");
	header("Location: ../");	
?>