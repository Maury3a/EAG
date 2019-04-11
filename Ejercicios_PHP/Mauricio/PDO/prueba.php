<?php

    $host="localhost";
    $db="escuela";
    $user="root";
    $password="";
    $charset="utf8";
$dsn="mysql:host=$host;dbname=$db;charset=$charset";
$opciones =[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try{
    $dbh=new PDO($dsn,$user,$password,$opciones);
}catch(PDOException $e){
    $e->getmessage();
}


//primer paso, preparar consulta

$consulta= $dbh->prepare("SELECT nom_alum FROM alumnos");


//ejecutamos la consulta
$consulta->execute();

//recogemos el resultado

$alumnos =$consulta->fetchAll();
foreach($alumnos as $alumno){
    foreach($alumno as $dato => $valor){
        echo "<p>Dato: ".$dato." | Valor: " . $valor."</p>";
    }
}
?>