<?php
//incluimos la conexion de php
//include("../conexion/db.php");
include ("conexion/db.php");

$user = new ApptivaDB();
//si existe a tra ves del metodo post un valor llamado sabe region significa que estan guardando un dato
if(isset($_POST['save_reg'])){
    /*lo que recibas dentro de la variable POST nombre es el titulo de mi tarea
    y se guardara dentro de la variable local nombre*/
 //$link = mysqli_connect("181.72.63.189", "userccmshop", "ccmshop", "ccmdata");
 
    $cod_region = $_POST['cod_region'];
    /* lo que recibas de la variable POST desc region se guardara dentro de la variable local desc region*/
    $desc_region = $_POST['desc_region'];

    //realizando la insercion de datos y se guarda dentro de la variable local query
   //$query = "INSERT INTO region(COD_REG, DESC_REG) VALUES('$cod_region', '$desc_region')";
    //se realiza la consulta y devuelve un resultado
    //$result = mysqli_query($conn, $query);




   
        $resultado =    $this->conexion->query("INSERT INTO region(COD_REG, DESC_REG) VALUES('$cod_region', '$desc_region')") or die($this->conexion->error);
        if($resultado)
            return true;
        return false;
 



    if(!$result){
        die("query failed");
    }

//se guarda un texto local
$_SESSION['message'] = 'Datos guardados correctamente';
//se guarda un estilo
$_SESSION['message_type'] = 'success';

header("Location: mantenedor.php");
}
?>