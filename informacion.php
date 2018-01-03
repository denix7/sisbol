<?php
	$conexion=mysqli_connect('localhost','root','','test');
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>SISBOL</title>

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
                    <li><a href="nosotros.html">NOSOTROS</a></li>
                    <li><a href="expositores.php">EXPOSITORES</a></li>
                    <li><a href="informacion.php">NOTICIAS</a></li>
                    <li><a href="login.php">INICIAR SESION</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row main-low-margin">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h1>Expositores</h1>
                    <h5>
						Contamos con los mejores expositores y diversos equipos que aportan experiencia para generar un ambiente en el que puedas desarrollar al maximo tus conocimientos.
					</h5>
                </div>
            </div>
        </div>
    </div>
	
	<!---->
	
    <div class="container" style="padding-top: 75px">
        <div class="row text-center">
            <div class="col-md-6">
                <a class="btn  btn-primary btn-lg btn-block" type="link" href="crud/aevista/sis2/coordinadornotaopinion.html">NOTA/OPINION</a>
                <a class="btn  btn-success btn-lg btn-block" type="link" href="crud">REVISOR</a>
            </div>
       
    </div>
	
	<div class="container"> 

    
    
        <div class="row main-low-margin text-center">
             <div class="col-md-4 col-sm-4 text-center">    <!--<div class=" col-md-3 col-md-offset-8" > -->
                <img class="img-circle" src="assets/img/hotel1.jpg">
                <h3>Expositor 1</h3>

               	<?php
			$sql="SELECT nombre_general from informacion where id_info=1";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			
			?>
			
			<tr>
				
				<td><?php echo $mostrar['nombre_general'] ?></td>
			</tr>

			<?php
			}
			?>
			

                <h4>Perfil del expositor</h4>
                <p>
                    <?php
			$sql="SELECT direccion from informacion where id_info=1";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			
			?>
			
			<tr>
				
				<td><?php echo $mostrar['direccion'] ?></td>
			</tr>

			<?php
			}
			?>
                </p>
            </div>




            
            <div class="col-md-4 col-sm-4 text-center">
                <img class="img-circle" src="assets/img/hotel2.jpg">
                
						
			<h3>Expositor 2</h3>

               	<?php
			$sql="SELECT nombre_general from informacion where id_info=2";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			
			?>
			
			<tr>
				
				<td><?php echo $mostrar['nombre_general'] ?></td>
			</tr>

			<?php
			}
			?>
			
		

                
                <h4>Perfil del expositor</h4>
                <p>
                    <?php
			$sql="SELECT direccion from informacion where id_info=2";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			
			?>
			
			<tr>
				
				<td><?php echo $mostrar['direccion'] ?></td>
			</tr>

			<?php
			}
			?> 
                </p>
            </div>



            
            <div class="col-md-4 col-sm-4 text-center">
                    <img class="img-circle" src="assets/img/rdz.jpg">   
                <h3>Expositor 3</h3>

               	<?php
			$sql="SELECT nombre_general from informacion where id_info=3 ";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			
			?>
			
			<tr>
				
				<td><?php echo $mostrar['nombre_general'] ?></td>
			</tr>

			<?php
			}
			?>
			
                <h4>Perfil del expositor</h4>
                <p>
                   <?php
			$sql="SELECT direccion from informacion where id_info=3 ";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			
			?>
			
			<tr>
				
				<td><?php echo $mostrar['direccion'] ?></td>
			</tr>

			<?php
			}
			?> 
                </p>
            </div>




        </div>
        
        </div>

    <div class="space-bottom"></div>

    <div id="footer">
        <div class="row">
            
            <div class="col-md-6">
                <h4>Necesitas ayuda?</h4>
                <hr>
                
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="col-md-6 text-center">
                <a href="#"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x color-pinterest"></i></a>

                <p class="main-low-margin">Direccion: <br>
                    Calle Sucre y Parque La Torre <br>
                    Cochabamba - Bolivia
                </p>
            </div>
        </div>

        <div class="row">
            <div class="text-center">
                Copyright©2017 SisBol | Todos los derechos reservados
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRERIA -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- SLIDER SCRIPTS LIBRERIA -->
</body>
</html>
