<?php

if($_POST){
$tituloCurso = $_POST['tituloCurso'];
$fotoCurso = $_FILES['fotoCurso'];

$nombreArchivo = $fotoCurso['name'];
$temporal = $fotoCurso['tmp_name'];
$ruta="../img/" . $nombreArchivo;

move_uploaded_file($temporal, $ruta);

$profesor = $_POST['profesor'];
$descripcionCurso = $_POST['descripcionCurso'];
$estudiantes = $_POST['estudiantes'];
$precio = $_POST['precio'];


require_once("conexion.php");

$consulta1 = "INSERT INTO cursos (tituloCurso,fotoCurso,profesor,descripcionCurso,estudiantes,precio) VALUES (?,?,?,?,?,?)";

$sentencia1=$conexion->prepare($consulta1);
$resultado1 = $sentencia1->execute([$tituloCurso,$nombreArchivo,$profesor,$descripcionCurso,$estudiantes,$precio]);

if($resultado1 == true){
    header("location: admin.php");
}

}

if($_POST){

    $tituloNoticia = $_POST['tituloNoticia'];
    $fotoNoticia = $_FILES['fotoNoticia'];
    
    $nombreArchivo = $fotoNoticia['name'];
    $temporal = $fotoNoticia['tmp_name'];
    $ruta="../img/" . $nombreArchivo;
    
    move_uploaded_file($temporal, $ruta);
       
    $fechaNoticia = $_POST['fechaNoticia'];
    $descripcionNoticia = $_POST['descripcionNoticia'];
    $horaNoticia = $_POST['horaNoticia'];
       
    require_once("conexion.php");
    
    $consulta2 = "INSERT INTO cursos (tituloNoticia,fotoNoticia,fechaNoticia,descripcionNoticia,horaNoticia) VALUES (?,?,?,?,?)"; 

    $sentencia2=$conexion->prepare($consulta2);
    $resultado2 = $sentencia2->execute([$tituloNoticia,$nombreArchivo,$fechaNoticia,$descripcionNoticia,$horaNoticia]);
    
    if($resultado2 == true){
        header("location: admin.php");
    }
    
    }


?>
