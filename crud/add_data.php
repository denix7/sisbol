<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	// variables for input data
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city_name = $_POST['city_name'];
	$c_iden = $_POST['c_iden'];
	// variables for input data
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO revisor(first_name,last_name,user_city,c_iden) VALUES('$first_name','$last_name','$city_name','$c_iden')";
	// sql query for inserting data into database
	
	// sql query execution function
	if(mysqli_query($link,$sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Los datos fueron insertados exitosamente');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error la insertar los datos');
		</script>
		<?php
	}
	// sql query execution function
}
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style.css" type="text/css" />
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


<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a id="rev" href="index.php">MENU REVISOR</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="Nombre" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Apellido" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="Ciudad" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="c_iden" placeholder="Carnet" required /></td>    
    </tr>
    <td><button type="submit" name="btn-save"><strong>GUARDAR</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>


</body>
</html>