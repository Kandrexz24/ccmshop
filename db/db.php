<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("181.72.63.189", "userccmshop", "ccmshop", "ccmdata");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>



