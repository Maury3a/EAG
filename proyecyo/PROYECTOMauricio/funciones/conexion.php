<?php
$user ="root";
$pass ="";
$host ="localhost";
$db="multiwish";

try{
    $conexion = new PDO("mysql:host=$host; dbname=$db; charset=utf8",$user,$pass);
}

catch(PDOException $e){
    $error_system="Error al conectar a la base de datos";
}
?>