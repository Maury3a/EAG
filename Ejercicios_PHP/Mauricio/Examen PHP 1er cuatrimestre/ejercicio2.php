<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Examen 06-02-2019</title>
    <style>
        *{
            font-family: Arial;
        }

        div.contenido{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="contenido">
        <div class="formulario">
            <h1>Formulario de registro</h1>
            <form action="#" method="POST">
                <h3>Datos personales</h3>
                <label>Nombre:</label>
                <input type="text" name="nombre">
                <br><br>
                <label>Apellidos:</label>
                <input type="text" name="apellidos">
                <br><br>
                <label>Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento">
                <br><br>
                <label>Correo electrónico:</label>
                <input type="email" name="email">
                <br><br>
                <label>Teléfono de contacto:</label>
                <input type="number" name="telf">
                <br><br>
                <h3>Datos de la cuenta</h3>
                <label>Nombre de usuario:</label>
                <input type="text" name="nombre_usuario">
                <br><br>
                <label>Contraseña:</label>
                <input type="password" name="contraseña">
                <br><br>
                <label>Confirma tu contraseña:</label>
                <input type="password" name="confirmacion_contraseña">
                <br><br>
                <label>¿Quieres recibir las últimas noticias de la web en tu correo?</label>
                <input type="radio" name="noticias" value="Si">Si
                <input type="radio" name="noticias" value="No">No
                <br><br>
                <input type="submit" name="enviar" value="Enviar registro">
            </form>
        </div>
        <div class="resultado">
            <?php
					if (isset($_POST["enviar"])){
							$nombre=$_POST["nombre"];
							$apellidos=$_POST["apellidos"];
							$fecha_nacimiento=$_POST["fecha_nacimiento"];
							$email=$_POST["email"];
							$telf=$_POST["telf"];
							$nombre_usuario=$_POST["nombre_usuario"];
							$contrasenha=$_POST["contraseña"];
							$confirmacion=$_POST["confirmacion_contraseña"];
					
						
						 if(empty($_POST["nombre"]) || empty($_POST["apellidos"]) || empty($_POST["fecha_nacimiento"]) || empty($_POST["email"]) || empty($_POST["telf"]) || empty($_POST["nombre_usuario"]) || empty($_POST["contraseña"]) || empty($_POST["confirmacion_contraseña"]) || empty($_POST["noticias"])){
          
							 	echo "<h1 style='color:red'>Has dejado uno o más campos en blanco</h1>";  
					}else if($contrasenha!=$confirmacion){
							echo "<h1 style='color:red'>Las contraseñas no coinciden</h1>";  
						 }else if ($contrasenha==$confirmacion) {
							 echo "<h1 style='color:red'>El formulario se ha enviado correctamente. Has introducido como nombre de usuario:".$nombre." y tu correo es ".$email." </h1>";  
						 }
				}
            ?>
        </div>
    </div>
</body>
</html>