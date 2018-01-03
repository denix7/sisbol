<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SISBOL</title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway|Roboto" rel="stylesheet">
    
        <link href="assets/css/bootstrap.css" rel="stylesheet" />

        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

        <link href="assets/css/style.css" rel="stylesheet" />  
    </head>
    <body>
        <h3 class="text-center">Subir documentos revisados</h3>
        <div class="container">
            <div class="row main-low-margin text-center">
                <div class="col-md-offset-10 col-md-2 col-sm-2">
                    <a class="btn btn-primary btn-lg glyphicon glyphicon-log-out" type="link" href="indexsubir.php">volver</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <table class="table table-striped table-bordered">
                <tr>
				 <td>nombreEnsayista</td>
                <td>titulo</td>
                <td>categoria</td>
                <td>tamaño</td>
                <td>tipo</td>
                <td>nombre</td>
                </tr>
                <?php
                include 'config.inc.php';
                $db=new Conect_MySql();
                $sql = "select*from documento";
                $query = $db->execute($sql);
                while($datos=$db->fetch_row($query)){?>
                <tr>
				 <td><?php echo $datos['nombreEnsayista']; ?></td>
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['categoria']; ?></td>
                <td><?php echo $datos['tamanio']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
                </tr>  
                <?php  } ?>
                </table>
            </div>
        </div>
        </div>
    </body>
</html>
