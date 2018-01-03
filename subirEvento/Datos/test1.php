<?php
 
require_once 'conexion.php';
 
class conexiontest extends PHPUnit_Framework_TestCase{
 
    public function testbd() {
        $conexion = new conexion();
        $this->assertEquals('Conexion a Bd exitosa', $conexion->conexionOk());
    }

    public function testbd2() {
        $conexion = new conexion();
        $this->assertEquals('Conexion a Bd no existe', $conexion->conexionFail());
    }
}
 
?>