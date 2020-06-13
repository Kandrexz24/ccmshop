<?php
// Declaramos las variables de conexión
$ServerName = "181.72.63.189";
$NameBD = "ccmdata";
$Username = "userccmshop";
$Password = "ccmshop";

try {
    $conn = new PDO("mysql:host=$ServerName;dbname=$NameBD;", $Username, $Password);
    echo "Conectado correctamente";
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }
?> 