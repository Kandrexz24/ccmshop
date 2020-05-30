<?php
//conexion myql
    //servidor de conexion
    $server = 'databases.000webhost.com';
    //usuario del servidor
    $username = 'root';
    //contraseña del servidor
    $password = 'sZg6vK}[]A\|pQ~|';
    //base de datos de conexion
    $database = 'csmshop';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
      }
?>