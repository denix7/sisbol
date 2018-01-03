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
                    <a class="btn btn-primary btn-lg glyphicon glyphicon-log-out" type="link" href="menu.organizar.php">volver</a>
                </div>
            </div>  
        </div>
        
        <div style="width: 500px;margin: auto;border: 1px solid #1279F3;padding: 20px;">
            <h4>Subir PDF</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table class="table">
				<tr>
                        <td><label>Nombre del Ensayista</label></td>
                        <td><input type="text" name="nombreEnsayista" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label>Categoria</label></td>
                        <td><textarea name="categoria"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="subir" value="subir">Subir</button>
                            </div>
                        </td>
						<td>
                            <a class="btn btn-primary btn-lg btn-block glyphicon glyphicon-th-list" type="link" href="lista.php">lista</a>
                        </td>
                    </tr>
					<tr>
					<td>
					  <div class=" col-md-12 col-md-offset-6" >
                            <a class="btn  btn-info btn-lg btn-block" type="link" href="menu.organizar.php">Organizar Trabajos</a>
							</div>
                        </td>
					</tr>
                </table>
            </form>            
        </div>
    </body>
</html>

<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
			$nombreEnsayista=$_POST['nombreEnsayista'];
            $titulo= $_POST['titulo'];
            $catego= $_POST['categoria'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO documento(nombreEnsayista,titulo,categoria,tamanio,tipo,nombre_archivo) VALUES('$nombreEnsayista','$titulo','$catego','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}
?>