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
                    <li><a href="nosotros.php">NOSOTROS</a></li>
                    <li><a href="expositores.php">EXPOSITORES</a></li>
                    <li><a href="infoHotelRest.php">NOTICIAS</a></li>
                    <li><a href="indexlogin.php">INICIAR SESION</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row main-low-margin">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h1>Iniciar Sesion</h1>
                    <h5>Inicia sesión para ver los eventos y las sesiones que guardaste en tu cuenta.
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row main-low-margin text-center">
            <div class="col-md-7 col-sm-7">
                <h3>INICIAR SESION</h3>
                <hr>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    	<button type="submit" class="btn btn-primary" name="enviar">Entrar</button>
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
            </div>

            <div class="col-md-5 col-sm-5">
                <div class="circle-body"><i class="fa fa-sign-in fa-5x  icon-set"></i></div>
                	<p>Registrar nuevo administrador
						<a href="Registrate.php">Registrate</a>
					</p>
            	</div>
       		</div>
   		</div>
    </div>
	
</body>
</html>