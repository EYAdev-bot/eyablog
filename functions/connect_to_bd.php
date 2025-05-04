<?php

session_start();

$servername= "sql101.infinityfree.com";
$dbname= "if0_38903125_eya";
$username= "if0_38903125";
$password= "ekanga123";

try {
    $conn=new PDO("mysql:host=$servername;dbname=$dbname; $username,$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
   die('Une erreur est survenue lors de la connexion a la base de donnée');
}
?>