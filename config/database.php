<?php

class Conectar {

    public static function conexion(){

        $ServerName = "181.72.63.189";
        $NameBD = "ccmdata";
        $Username = "userccmshop";
        $Password = "ccmshop";

        $conexion = new mysqli($ServerName,$Username,$Password,$NameBD);
        return $conexion;
    }

}


?>