<?php
    // PDO - PHP Data Object

    $host = "localhost";
    $db = "escuela";
    $user = "root";
    $password = "";
    $charset = "utf8";

    //DSN - Dato Source Name

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


    //Array de opciones para el PDO

    $opciones = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    // DBH - DataBase Handle, en bloque try-catch

    try{
        $dbh = new PDO($dsn, $user, $password, $opciones);
    }catch(PDOException $e){
        $e->getMessage();
    }

    //Primer paso, preparar consulta

    $consulta = $dbh->prepare("SELECT cod_asig,curso FROM asignaturas");  //o podemos hacerlo así $dbh->prepare("SELECT * FROM alumnos WHERE nom_alum= :nombre AND dni = :dni");
    $consulta->execute(); 

    //Tercer paso, recoger el resultado
    $datos = $consulta->fetchAll();
   

    foreach($datos as $dato){
            echo "<p>".$dato["cod_asig"]."</p>";
            echo "<p>".$dato["curso"]."</p>";
            echo "<hr>";
    }
?>