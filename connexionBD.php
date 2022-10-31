<?php
$serveur = "localhost";
$dbname = "gestion_logement";
$user = "root";
$pass = "";

try {
    //connexion a la base de données

    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'ERREUR : '.$e->getMessage();
}