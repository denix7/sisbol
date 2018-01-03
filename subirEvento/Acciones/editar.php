<?php
	include '../Datos/conexion.php';
	$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	if ($_FILES['foto']['name']=="") {
		mysql_query("update productos set Nombre ='".$_POST['Nombre']."', Precio='".$_POST['Precio']."' where idProducto=".$_POST['id'].";");
	}
	else{
		$re = mysql_query("select Imagen from productos where".$_POST['id'].";");
		while ($f=mysql_fetch_array($re)) {
			unlink("../Imagenes/".$f['Imagen']);
		}
		$ruta = "../Imagenes/";
		opendir($ruta);
		$destino = $ruta.$_FILES['foto']['name'];
		copy($_FILES['foto']['tmp_name'],$destino);
		$nombre=$_FILES['foto']['name'];
		mysql_query("update productos set Nombre ='".$_POST['Nombre']."', Precio='".$_POST['Precio']."', Imagen ='".$nombre."' where idProducto=".$_POST['id'].";");
	}
	header("Location: ../");
?>