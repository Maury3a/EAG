<?php
    include "conexion.php";

    if(empty($_POST["dni"]) || strlen($_POST["dni"]) > 9){
        echo "Es necesario completar el DNI.";
        die;
    }else{
        $dni = $_POST["dni"];
    }

    if(empty($_POST["nombre"])){
        echo "Es necesario completar el nombre.";
        die;
    }else{
        $nombre = $_POST["nombre"];
    }

    if(empty($_POST["fecha_nacimiento"])){
        echo "Es necesario completar la fecha de nacimiento.";
        die;
    }else{
        $fechaNacimiento = $_POST["fecha_nacimiento"];
    }

    if(empty($_POST["provincia"])){
        echo "Es necesario completar la provincia.";
        die;
    }else{
        $provincia = $_POST["provincia"];
    }

    if(empty($_POST["beca"]) || $_POST["beca"] != "Si" && $_POST["beca"] != "No"){
        echo "Es necesario completar la beca.";
        die;
    }else{
        $beca = $_POST["beca"];
    }

    $consulta = $dbh->prepare("INSERT INTO alumnos VALUES (?, ?, ?, ?, ?)");

    $consulta->execute([$dni, $nombre, $fechaNacimiento, $provincia, $beca]);

    $resultado = $consulta->rowCount();

    if($resultado > 0){
        echo "true";
    }else{
        echo "false";
    }

?>