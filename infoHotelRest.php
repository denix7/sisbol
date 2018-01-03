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
<h3 class="text-center">Lista de Hoteles y Restaurantes</h3>
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

    <h3 class="text-center">Lista de Hoteles y Restaurantes</h3>
        <div class="container">
            <div class="row main-low-margin text-center">
                <div class="col-md-offset-11 col-md-2 col-sm-2">
                    <a class="btn btn-primary btn-lg glyphicon glyphicon-log-out" type="link" href="indexsubir.php">volver</a>
                </div>
            </div>
        </div>
	<!---->
	
	
<?php
include('conexion.php');
?>
 <div class="container">
            <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <table class="table table-striped table-bordered">
   <!--<table>-->
   <thead> 
      <th>Imagen ID </th>
	  <th>Imagen</th>
	   <th>Imagen Comentario </th>
   </thead>
   <tbody> 
   <?php
   	$sql = "SELECT * FROM img";
	$stm = $conexion->query( $sql);
	while($datos = $stm->fetch_object()){
	?>	
		<tr> 
		<td> <?php echo $datos->img_id; ?></td>
		<td> <img width="30%" src="data:image/jpg; base64 ,<?php echo base64_encode($datos->img_contenido); ?>" /> </td>
		<td> <?php echo $datos->img_comentario; ?></td>
		</tr>
		
		<?php
	}
	
?>
   </tbody>
 
<?php

?>
</table>

<!---->


    </div>
        </div>
        </div>
    </body>
</html>
