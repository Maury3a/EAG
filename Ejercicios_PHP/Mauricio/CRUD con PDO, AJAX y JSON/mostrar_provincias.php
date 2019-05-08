<?php
   include "conexion.php";
   
   $consulta = $dbh->prepare("SELECT * FROM alumnos WHERE provincia = ?");

    $consulta->execute([$_GET["provincia"]]);

    $alumnos = $consulta->fetchAll();

    $alumnosJson = json_encode(array('alumnos' => $alumnos), JSON_UNESCAPED_UNICODE);

    echo $alumnosJson;

?>