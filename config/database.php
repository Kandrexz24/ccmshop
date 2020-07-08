<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=181.72.63.189;dbname=ccmdata;charset=utf8', 'userccmshop', 'ccmshop');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}