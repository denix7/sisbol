<?php
/** /mis-proyectos/autentia/php/tutorial/php-unit/test/AdictosTutorialTest.php */
 
require_once 'Datos/conexion.php';
 
class conexiontest extends PHPUnit_Framework_TestCase{
 
    public function testReturnGreeting() {
        $conexion = new conexion();
        $this->assertEquals('Hola Adictos Al Trabajo !!!', $conexion->greet());
    }
}
 
?>