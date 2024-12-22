<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userdata";
$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
    die("Échec de la connexion à la base de données : " . $connection->connect_error);
}
?>