<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php

    if(isset($_POST["registro"])){
        
        if(empty($_POST["nombre"]) || empty($_POST["apellidos"]) || empty($_POST["email"]) || empty($_POST["contraseña"]) || empty($_POST["subscripcion"])){
          
            echo "<h3>No puedes dejar un campo en blanco, reintenta el envío</h3>";  
        
        }else{
            
            echo "<h3>Te has registrado con éxito</h3>
            <ul>
            <li>Nombre:" . $_POST["nombre"] ."</li>
            <li>Correo:" . $_POST["email"] . "</li>
            <li>Subscripción: " . $_POST["subscripcion"] . "</li>
            </ul>";

        }
    }    

?>

</body>
</html>