<?php
include ("../conexion/db.php");
//include ("conexion.php");

if ($link) {

$cod_region = $_POST['cod_region'];
/* lo que recibas de la variable POST desc region se guardara dentro de la variable local desc region*/
$desc_region = $_POST['desc_region'];

//realizando la insercion de datos y se guarda dentro de la variable local query
$query = "INSERT INTO region(COD_REG, DESC_REG) VALUES('$cod_region', '$desc_region')";
//se realiza la consulta y devuelve un resultado
$result = mysqli_query($link, $query);

}
header("Location: ../mantenedor.php");
?>