<!DOCTYPE html>
<html>
<head>
	<title>SisBol</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Slabo|Lato" rel="stylesheet">
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/styles.css">		
</head>
<body>
	<h3 class="text-center">Menu Principal Administracion de Eventos</h3>
    <div class="container">
        <div class="row main-low-margin text-center">
            <div class="col-md-offset-10 col-md-2 col-sm-2">
               <i></i>
	           <a class="btn btn-primary btn-lg btn-block glyphicon glyphicon-log-out" type="link" href="cerrar.php">Salir</a>
            </div>
        </div>  
    </div> 

    
    <div class="container" style="font-size: 26px;font-family: Arial black;padding-top: 38px">
        <div class="row text-center">
            <div class="col-sm-4 col-sm-offset-4">
                <h2>Coordinador</h2>          
            </div> 
        </div>
    </div>
    
   

    <div class="container" style="padding-top: 75px">
        <div class="row text-center">
            <div class="col-md-6">
                <a class="btn  btn-primary btn-lg btn-block" type="link" href="indexHoteles.php">AGREGAR INFORMACION</a>
                <a class="btn  btn-success btn-lg btn-block" type="link" href="crud">REVISOR</a>
                <a class="btn  btn-success btn-lg btn-block" type="link" href="subirEvento/index.php">AGREGAR EVENTO</a>
            </div>

            <div class=" col-md-6" >
                <a class="btn  btn-info btn-lg btn-block" type="link" href="indexsubir.php">SUBIR ENSAYOS</a>
                <a class="btn  btn-warning btn-lg btn-block" type="link" href="expositores/listar.php">EXPOSITORES</a>
            </div>   
        </div>

    </div>
</body>
</html>