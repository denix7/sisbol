<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM revisor WHERE user_id=".$_GET['edit_id'];
	$result_set=mysqli_query($link,$sql_query);
	$fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city_name = $_POST['city_name'];
	$c_iden = $_POST['c_iden'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE revisor SET first_name='$first_name',last_name='$last_name',user_city='$city_name',c_iden='$c_iden' WHERE user_id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysqli_query($link,$sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Los datos se actualizaron exitosamente');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error mientras se actualizaban los datos');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
}
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

   </head>

<header>
        
        <nav>
        <img id="myid" src="fondonegro2.jpg" />
        <ul>
            <li><a href="http://localhost/crud/aevista/sis2/index.html">INICIO</a></li>
                    <li><a href="http://localhost/crud/aevista/sis2/nosotros.html">NOSOTROS</a></li>
                    <li><a href="http://localhost/crud/aevista/sis2/expositores.html">EXPOSITORES</a></li>
                    <li><a href="http://localhost/crud/aevista/sis2/noticias.html">NOTICIAS</a></li>
                    <li><a href="http://localhost/crud/aevista/sis2/iniciar.html">INICIAR SESION</a></li>
                </ul>
        </nav>   

    </header>
     </nav>   
         <nav id="mynav">

        <section id="top">                    
                        <h1>EDITAR REVISORES</h1>           
        </section>
        </nav> 

<body>

<div id="header">
	<div id="content">
	
    <label></label>
    </div>
</div>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="Nombre" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Apellido" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="Ciudad" value="<?php echo $fetched_row['user_city']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="c_iden" placeholder="Carnet" value="<?php echo $fetched_row['c_iden']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>ACTUALIZAR</strong></button>
    <button type="submit" name="btn-cancel"><strong>CANCELAR</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>


</body>
</html>