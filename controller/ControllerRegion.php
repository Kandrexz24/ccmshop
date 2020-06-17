<?php
//Llamada al modelo
require_once("models/RegionModel.php");
$reg=new regionModel();
$datos=$reg->get_region();
 
//Llamada a la vista
require_once("views/mantenedor.php");
?>