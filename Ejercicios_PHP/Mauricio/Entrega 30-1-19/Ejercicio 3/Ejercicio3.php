<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>

<h3>Adopcion Perros</h3>

<form action="#" method="POST" enctype="multipart/form-data">
    
    <label for="nombre">Nombre Completo</label>
    <br><br>
    <input type="text" name="nombre">
    <br><br>
    <label for="email">mail</label>
    <br><br>
    <input type="email" name="email">
    <br><br>
    <select name="raza">
        <option value="Pastor_Aleman">Pastor Aleman</option>
        <option value="Chiuaua">Chiuaua</option>
        <option value="Pastor_Belga">Pastor Belga</option>
    </select>
    <input type="submit"  name="perros"  value="Enviar">
    <br><br>
</form>

<h3>Adopcion Gatos</h3>

<form action="#" method="POST" enctype="multipart/form-data">
 
    <label for="nombre">Nombre Completo</label>
    <br><br>
    <input type="text" name="nombre">
    <br><br>
    <label for="email">mail</label>
    <br><br>
    <input type="email" name="email">
    <br><br>
    <select name="raza">
        <option value="Persa">Gato Persa</option>
        <option value="Sphynx">Gato Sphynx</option>
        <option value="Siames">Gato Siames</option>
    </select>
    <input type="submit"  name="gatos"  value="Enviar">
    <br><br>
</form>

<?php

$usuario= $_POST["nombre"];
$raza= $_POST["raza"];
$mail= $_POST["email"];

    if(isset($_POST["perros"])){
        
        if(empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["raza"])){
          
            echo "<h3>Has dejado un campo en blanco</h3>";  
        
        }else{
            echo "<h3>El formulario se ha enviado con éxito, se ha recibido su petición de adopción ". $usuario . " te has interesado por " . $raza . " se te mandará respuesta a " . $mail . "</h3>";

        }
    }
    
    if(isset($_POST["gatos"])){
        
        if(empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["raza"])){
          
            echo "<h3>Has dejado un campo en blanco</h3>";  
        
        }else{
            echo "<h3>El formulario se ha enviado con éxito, se ha recibido su petición de adopción ". $usuario . " te has interesado por " . $raza . " se te mandará respuesta a " . $mail . "</h3>";
        }
    }

?>
    
</body>
</html>