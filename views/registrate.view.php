<!DOCTYPE html>
<html>
<head>
	<title>SisBol</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />		
</head>
<body>
	<h1>Registrate</h1>

	<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="assets/img/fondonegro2.jpg" height="40" width="140"></a>
            </div>
            <div class="navbar-collapse collapse" style="font-size: 25px;font-family: impact; padding-top: 8px">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">INICIO</a></li>
                    <li><a href="nosotros.html">NOSOTROS</a></li>
                    <li><a href="expositores.html">EXPOSITORES</a></li>
                    <li><a href="noticias.html">NOTICIAS</a></li>
                    <li><a href="indexlogin.php">INICIAR SESION</a></li>
                </ul>
            </div>
        </div>
    </div>


	<div class="container">
        <div class="row main-low-margin text-center">
            <div class="col-md-offset-3 col-md-6 col-sm-10">
                <h3>REGISTRATE</h3>
                <hr>
                <!-- especialchars evita inyecciones y action envia a la misma pagina-->
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
                    <div class="row">
                        
                            <div class="form-group">
                                <i class="icono izquierda fa fa-user"></i><input type="text" class="form-control" name="usuario" placeholder="Usuario">
                            </div>
                        
                            <div class="form-group"><!-- Post envia los datos por el name -->
                                <i class="icono izquierda fa fa-lock"></i><input type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div>
                        
                            <div class="form-group">
                                <i class="icono izquierda fa fa-lock"></i><input type="password" class="form-control" name="password2" placeholder="Repetir Contraseña">
                            </div>
                        
                    		<div class="form-group">
                    			<button type="submit" class="btn btn-primary btn-block" name="enviar">Registrar</button>
                    		</div>


                    <!-- agregamos un poco de php para mostrar errores -->
					<?php if (!empty($errores)): ?>
						<div>
							<ul>
								<?php echo $errores; ?>
							</ul>
						</div>
					<?php endif; ?> 
                </form>
                <p>Ya tienes cuenta?
					<a href="login.php">Iniciar Sesion</a>
				</p>
            </div>
   		</div>
    </div>


</body>
</html>