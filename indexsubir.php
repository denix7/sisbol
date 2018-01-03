<?php session_start();
	//logica del contenido y verifa si un usario tiene una sesion y sino se registra
	
	//protegemos la pagina del contenido y solo cuando tenga una sesion podre mostrar el contenido
	if (isset($_SESSION['usuario'])) {
		require 'views/indexsubir.php';
	}else{
		header('Location: login.php');
	}
 ?>