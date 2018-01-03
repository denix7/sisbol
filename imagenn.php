<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from informacion where id_info=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_foto']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
                   <iframe width="100%" height="800px" src="archivos/<?php echo $datos['nombre_foto']; ?>"></iframe>﻿	   
                
                <?php } } ?>
    </body>
</html>
