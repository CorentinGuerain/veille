<?php
// Connection au serveur
try {
    $dns = 'mysql:host=localhost;dbname=veille';
    $utilisateur = 'root';
    $motDePasse = '';
    $connection = new PDO($dns, $utilisateur, $motDePasse);
    $connection->query("SET NAMES utf8");
} catch (Exception $e) {
    echo "Connection Ã  MySQL impossible : ", $e->getMessage();
    die();
}
?>