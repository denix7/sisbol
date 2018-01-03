<?php
include('conexion.php');
if(isset ($_POST[ 'btn' ])){
	
	include('conexion.php');
	$nombre = $_FILES[ 'txtImg' ][ 'name' ];
	$tmp = $_FILES[ 'txtImg' ][ 'tmp_name'];
	$folder = 'images';
	
	move_uploaded_file($tmp , $folder.'/'.$nombre);
	
	$bytesArchivo = file_get_contents($folder.'/'.$nombre);
	$comentario = $_POST['txtComent'];
	
	$sql = "INSERT img(img_comentario ,img_contenido ) VALUES(?,?)";
	$stm = $conexion->prepare($sql);
	$stm->bind_param('ss' , $comentario , $bytesArchivo);
	if($stm->execute()){
		echo 'Insertado con exito :)';
	}
}
?> 

<form method= "POST" action="" enctype="multipart/form-data">
<label>Ingresar comentario</label>
<input type= "text" name = "txtComent" />
<br/> <br/>
<label> Ingresa imagen</label>
<input type = "file" name = "txtImg" />
<br/>
<button type="submit" name="btn">Agregar</button>
</form>
<table>
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

