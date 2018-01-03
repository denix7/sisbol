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
                    <h1>Nosotros</h1>
                    <h5>Anuncios de nuestros proximos eventos 
                    </h5>
                </div>
            </div>


        </div>
    </div>

    

    <div class="container">
    <div class="row main-low-margin ">
        <div class="col-md-8 col-sm-8">
            <?php
            include 'subirEvento/Datos/conexion.php';
            $re=mysql_query("select * from productos")or die(mysql_error());
            while ($f=mysql_fetch_array($re)) {
            ?>
        <div class="col-md-4 col-sm-4 text-center">
            <div class="circle-body"><i class="fa fa-desktop fa-5x  icon-set"></i></div>
        </div>
        <p>Nombre:</p> <h2><?php echo $f['Nombre'];?></h2>
        <p>Precio:</p> <h2><?php echo $f['Precio'];?></h2>
        <p>Imagen</p> <h2><?php echo "<img class=\"imagen\" src=\""."subirEvento/Imagenes/".$f['Imagen']."\"/>";?></h2>
        <br>
        <br>
        <?php
        }
        ?>

        </div>
    </div>
    </div>
    <div class="container">
        <div class="row main-low-margin text-center">
            <div class="col-md-6 col-sm-6 text-center">
                <img class="img-circle" src="assets/img/mision.png">
                <h3>Mision</h3>
                <p>
                    Lograr el Éxito del evento mas grande de tecnologia gracias a la pasión y entrega de nuestro Equipo de Trabajo
                </p>
            </div>
            <div class="col-md-6 col-sm-6 text-center">
                <img class="img-circle" src="assets/img/vision.png">
                <h3>Vision</h3>
                <p>
                    Implementar nuevos conceptos y tecnología en cada proyecto 
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

    <!-- CORE JQUERY LIBRERIA -->
    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRERIA -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
