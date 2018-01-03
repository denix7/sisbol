<?php
include '../Datos/conexion.php';
$ruta = "../Imagenes/";
opendir($ruta);
$destino = $ruta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
$nombre=$_FILES['foto']['name'];
$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	mysql_query("insert into productos(Nombre,Precio,Imagen)values('$_POST[Nombre]','$_POST[Precio]','$nombre')",$con);
	header("location:../"); 
?>
