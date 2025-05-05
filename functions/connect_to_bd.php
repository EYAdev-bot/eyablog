<?php

session_start();

$servername= "localhost";
$dbname= "blog";
$username= "root";
$password= "";

try {
    $conn=new PDO("mysql:host=$servername;dbname=$dbname; $username,$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo'Une erreur est survenue lors de la connexion a la base de donnée'. $e->getMessage();
}
?>