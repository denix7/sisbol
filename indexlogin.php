<?php session_start(); //funcion para trabajar con sesiones REDIRIGE A UNA PESTAÑA DEPENDIENDO SI EXISTE SESION

if (isset($_SESSION['usuario'])) {//si exite sesion enviamos al contenido
	header('Location: menu.php');
}else{								//sino enviar a formulario de registro
	header('Location: login.php');
}

	
 ?>