<?php session_start();

	//COMPROBAR QUE EL USUARIO AL ENTRAR A ESTA PAGINA NO TENGA UNA SESION INCIADA
	
	if (isset($_SESSION['usuario'])) {//tenemos una sesion con el valor de usuario iniciada?
		header('Location: indexlogin.php');//SI YA TIENE SESION LO ENVIAMOS AL INDEX

	}	

	$errores = '';
	//verificamos si se han enviado los datos
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
			$password = $_POST['password'];

		//conectarnos a la bd
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=test', 'root', '');	
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}

		//sera el usuario que pasamos en el fomulario?
		$statement = $conexion->prepare('
			SELECT * FROM usuario WHERE usuario=:usuario AND pass=:password'
		);

		//sustituimos los placeholders por variables
		$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password
		));

		$resultado = $statement->fetch();//si devuelve false el usuario y contraseña no coinciden
		if ($resultado !== false) {//si devuelve true  abrimos una sesion
			$_SESSION['usuario'] = $usuario;
			header('Location: indexlogin.php');//y lo redirigimos a la pagina inicio
			//echo "Datos correctos";
		}else{
			$errores .= '<li>Datos incorrectos</li>';
		}	
	}

	require 'views/login.view.php';
 ?>