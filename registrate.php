<?php session_start();
	//archivo importante que maneja la logica del registro, realiza validaciones con sesiones

if (isset($_SESSION['usuario'])) {//tenemos una sesion con el valor de usuario iniciada?
		header('Location: indexlogin.php');
	}	

if ($_SERVER['REQUEST_METHOD']=='POST') {//resivimos los datos en la misma pagina con 
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);	//estos datos se pasan por el 'name'
	//CAPTURAMOS LOS DATOS QUE SE ENVIARON POR EL FORMULARIO DE LA VISTA
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	//echo "$usuario . $password . $password2";

	//SI NO HAY ERRORES INSERTAMOS AL USUARIO
	$errores = '';

	//REVISAMOS QUE LAS VARIABLES NO ESTEN VACIAS y MANDAMOS UN MENSAJE POR LA VISTA
	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //si estan vacios mostramos un mensaje
	}else{//sino hay errores entonces conectamos a la bd
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=loginregistro', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}


		//hacemos consultas
		//sera que el usuario que mandamos es igual a algun usuario en nuestra bd?
		$statement = $conexion->prepare('SELECT * FROM usuario WHERE usuario=:usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));//ejecutamos nuestra consulta y queremos que el usuario sea iguales
		$resultado = $statement->fetch();//guarda regestro de usuario o false(usuario no existe)

		if ($resultado != false) {//si la variable es false entonces ya existe el usuario en la bd
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}

		//comprobamos si las contraseñas son iguales 
		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}

	//si no existen errores entonces podemos incertar usuario en la bd
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuario (id, usuario, pass) VALUES (null, :usuario, :pass)');
		$statement->execute(array(
			':usuario' => $usuario, 
			':pass' => $password
			)); 

		//despues de insertar al usuario lo redirigimos para que pueda iniciar sesion
		header('Location: login.php');
	}
}

require 'views/registrate.view.php'

//SANITIZE quita etiquetas y evita inyeccion de codigo
//strtolower hace todo minuscula para insertar a la bd
 ?>