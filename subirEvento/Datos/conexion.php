

<?php
	$server="localhost";
	$username="root";
	$password="";
	$db='ejemploimagenes';
	$con=mysql_connect($server,$username,$password)or die('conexion ok');
	$sdb=mysql_select_db($db,$con)or die('conexionFail');

?>



<?php
/*	$server="localhost";
	$username="root";
	$password="";
	$db='ejemploimagenes';
	$con=mysql_connect($server,$username,$password)or die(conexionOk());
	$sdb=mysql_select_db($db,$con)or die(conexionFail());




	class conexion {
 
    public function conexionOk() {
        return 'Conexion a Bd exitosa';
    }

    public function conexionFail(){
        return 'Conexion a Bd no existe';
    }
}
*/?>
