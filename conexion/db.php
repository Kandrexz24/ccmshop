<?php
//https://codea.app/php/conexion-y-metodos-de-consulta-a-una-bd-mysql
echo "<label>";
class ApptivaDB{    

    private $ServerName = "181.72.63.189";
    private $NameBD = "ccmdata";
    private $Username = "userccmshop";
    private $Password = "ccmshop";
    public $conexion;
    public function __construct(){
        $this->conexion = new mysqli($this->ServerName, $this->Username, $this->Password,$this->NameBD) or die(mysql_error());
        $this->conexion->set_charset("utf8");
    };

  };


/*

// Declaramos las variables de conexión
$ServerName = "181.72.63.189";
$NameBD = "ccmdata";
$Username = "userccmshop";
$Password = "ccmshop";

try {
    // $conn = new PDO("mysql:host=$ServerName;dbname=$NameBD;", $Username, $Password);
  $link = mysqli_connect($ServerName, $Username,$Password, $NameBD);
    echo "Conectado correctamente";
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }
*/



?> 



