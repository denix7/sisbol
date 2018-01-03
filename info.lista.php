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
                    <a class="btn btn-primary btn-lg glyphicon glyphicon-log-out" type="link" href="agregar.info.php">volver</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <table class="table table-striped table-bordered">
                <tr>
				
                <td>nombre_general</td>
                <td>direccion</td>
                <td>especificacion</td>
				<td>nombre_foto</td>
				<td>fotito</td>
                </tr>
                <?php
                include 'config.inc.php';
                $db=new Conect_MySql();
                $sql = "select*from informacion";
                $query = $db->execute($sql);
                while($datos=$db->fetch_row($query)){?>
                <tr>
				 <td><?php echo $datos['nombre_general']; ?></td>
                <td><?php echo $datos['direccion']; ?></td>
                <td><?php echo $datos['especificacion']; ?></td>
				
                <td><a href="imagenn.php?id=<?php echo $datos['id_info']?>"><?php echo $datos['nombre_foto']; ?></a></td>
				
				 <img width="5" height="5" src="data:image/jpg;base64,<?php echo base64_encode($ruta)?>" alt="?">
               
				 
				
                </tr>  
                <?php  } ?>
                </table>
            </div>
        </div>
        </div>
    </body>
</html>
