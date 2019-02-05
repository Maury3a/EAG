<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>

<?php

$nombreOriginal = $_FILES["foto"]["name"];
$nombreTemporal = $_FILES["foto"]["tmp_name"];

$usuario= $_POST["nombre"];

$tamaño= $_FILES["foto"]["size"];

$extension= $_FILES["foto"]["type"];


if(isset($_POST["enviar"])){

    if(empty($nombreOriginal) || empty($usuario)){

        echo "<h3>No dejes campos vacíos, rellena de nuevo</h3>";
    
    }else{
        if($tamaño > 2171528 || $extension != "image/jpeg"){    
            echo "<h4>La imagen no es .jpg o ocupa más de 2 Mb</h4>";
        }else{
            if(!file_exists("./" . $usuario)){
            mkdir("./" . $usuario);}               
        }
    }
} 

$rutaNueva = $usuario . "/" . $nombreOriginal;

move_uploaded_file($nombreTemporal, $rutaNueva);

echo "<br><br>Saludos:" . $usuario;
echo "<br><br><img src='./" . $usuario . "/" . $nombreOriginal . "'>";


?>
    
</body>
</html>