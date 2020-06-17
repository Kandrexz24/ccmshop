<?php
// Declaramos las variables de conexión
$ServerName = "181.72.63.189";
$NameBD = "ccmdata";
$Username = "userccmshop";
$Password = "ccmshop";

$link = "";

try {
    // $conn = new PDO("mysql:host=$ServerName;dbname=$NameBD;", $Username, $Password);
  $link = mysqli_connect($ServerName, $Username,$Password, $NameBD);

    echo "Conectado correctamente";
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }




?> 



