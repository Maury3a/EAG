<?php
    include "conexion.php";

    $consulta = $dbh->prepare("SELECT * FROM alumnos");

    $consulta->execute();

    $alumnos = $consulta->fetchAll();

    $alumnosJson = json_encode(array('alumnos' => $alumnos), JSON_UNESCAPED_UNICODE);

    echo $alumnosJson;
?>