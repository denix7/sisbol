<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM revisor WHERE user_id=".$_GET['delete_id'];
	mysqli_query($link,$sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />

    <script type="text/javascript">

    function edt_id(id)
    {
    	if(confirm('Quieres editar los datos ?'))
    	{
    		window.location.href='edit_data.php?edit_id='+id;
    	}
    }
    function delete_id(id)
    {
    	if(confirm('Seguro de eliminar los datos ?'))
    	{
    		window.location.href='index.php?delete_id='+id;
    	}
    }
    </script>


    </head>

    <header>
        
   <!--     <nav>

        <img id="myid" src="fondonegro2.jpg" />
        <ul>
            <li><a href="http://localhost/crud/aevista/sis2/index.html">INICIO</a></li>
                    <li><a href="http://localhost/crud/aevista/sis2/nosotros.html">NOSOTROS</a></li>
                    <li><a href="http://localhost/crud/aevista/sis2/expositores.html">EXPOSITORES</a></li>
                    <li><a href="http://localhost/crud/aevista/sis2/noticias.html">NOTICIAS</a></li>
                    <li><a href="http://localhost/crud/aevista/sis2/iniciar.html">INICIAR SESION</a></li>
                </ul>
        

    </header>

   
    </nav>  -->   
         <nav id="mynav">

        <section id="top">                    
                        <h1>EDITAR REVISORES</h1>           
        </section>
        </nav> 

        <nav id="coor">

        <section>                    
                        <h1 style="text-align: center;">
                                    <a id="coor" href="">COORDINADOR</a>
                         </h1>           
        </section>
        </nav> 

    <body>


       
    
    <div id="body">
    	<div id="content">
        <table align="center">
        <tr>
        <th colspan="5"><a id="rev" href="add_data.php">AÑADIR REVISOR</a></th>
        </tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Ciudad</th>
        <th>Carnet</th>
        <th colspan="2">Operations</th>
        </tr>
        <?php
    	$sql_query="SELECT * FROM revisor";
    	$result_set=mysqli_query($link,$sql_query);
    	if(mysqli_num_rows($result_set)>0)
    	{
            while($row=mysqli_fetch_row($result_set))
    		{
    		?>
                <tr>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                
                <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
                <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
                </tr>
            <?php
    		}
    	}
    	else
    	{
    		?>
            <tr>
            <td colspan="5">No se encontraron datos !</td>
            </tr>
            <?php
    	}
    	?>
        </table>
        </div>
    </div>


</body>
</html>