<?php

require_once("conexion.php");

$consulta1 = "SELECT * FROM cursos ORDER BY idCurso DESC";
$sentencia1 = $conexion -> prepare($consulta1);
$sentencia1 ->execute();
$resultados1 = $sentencia1->fetchAll();

$consulta2 = "SELECT * FROM noticias ORDER BY idNoticia DESC";
$sentencia2 = $conexion -> prepare($consulta2);
$sentencia2 ->execute();
$resultados2 = $sentencia2->fetchAll();

?>




    





