<?php

session_start();

$servername= "mysql-yanndev.alwaysdata.net";
$dbname= "yanndev_eya";
$username= "yanndev";
$password= "yanndev-bot";

try {
    $conn=new PDO("mysql:host=$servername;dbname=$dbname; $username,$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
   die('Une erreur est survenue lors de la connexion a la base de donnée');
}
?>