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

    $consulta = $dbh->prepare("SELECT asignaturas.nom_asig FROM asignaturas");  //o podemos hacerlo así $dbh->prepare("SELECT * FROM alumnos WHERE nom_alum= :nombre AND dni = :dni");
    
    //Segundo paso, ejecutar consulta

    $consulta->execute(); //o podemos hacerlo así $consulta->execute([":nombre" => $nombre,":dni" 0=> $dni])


    //Tercer paso, recoger el resultado

    $alumnos = $consulta->fetchAll();

    foreach($alumnos as $alumno){
        foreach($alumno as $dato => $valor){
            echo "<p>Dato: " . $dato. " | Valor: " . $valor. "</p>";
           
        }
    } echo "<hr>";
//---------------------------------------------------------------------------------------

    $consulta = $dbh->prepare("SELECT asignaturas.creditos FROM asignaturas");  //o podemos hacerlo así $dbh->prepare("SELECT * FROM alumnos WHERE nom_alum= :nombre AND dni = :dni");
    
    //Segundo paso, ejecutar consulta

    $consulta->execute(); //o podemos hacerlo así $consulta->execute([":nombre" => $nombre,":dni" 0=> $dni])

    //Tercer paso, recoger el resultado

    $alumnos = $consulta->fetchAll();

    foreach($alumnos as $alumno){
        foreach($alumno as $dato => $valor){
            echo "<p>" . $dato. " | : " . $valor. "</p>";
            
        }
    }echo "<hr>";

//---------------------------------------------------------------------------------------


    $consulta = $dbh->prepare("SELECT asignaturas.cod_asig, asignaturas.curso FROM asignaturas"); 
    $nombre="Lucía";
    $dni="11111111Z";
    //Segundo paso, ejecutar consulta

    $consulta->execute([$nombre,$dni]); //o podemos hacerlo así $consulta->execute([":nombre" => $nombre,":dni" 0=> $dni])

    //Tercer paso, recoger el resultado

    $alumnos = $consulta->fetchAll();

    foreach($alumnos as $alumno){
        foreach($alumno as $dato => $valor){
            echo "<p>Dato: " . $dato. " | Valor: " . $valor. "</p>";
            
        }
    }echo "<hr>";
?>