<?php
$host = "localhost";
$db   = "biblotecawissen";
$user = "root";
$pass = "Jcorito85";  

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo ("Servidor en orden");
    $conexion->exec("INSERT into usuarios(nombre, correo) values ('Erika', 'erika@gmail.com');");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>