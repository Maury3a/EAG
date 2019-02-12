<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Examen 06-02-2019</title>
    <style>
        *{
            font-family: Arial;
        }

        div.formularios{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 50px;
        }

        div.resultado{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="formularios">
        <div class="registro">
            <h1>Registro en la web</h1>
            <form action="#" method="POST" enctype="multipart/form-data">
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
                <label>Selecciona tu foto de perfil:</label>
                <input type="file" name="foto">
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
                <input type="submit" name="registro" value="Enviar registro">
            </form>
        </div>
        <div class="inicio_sesion">
        <h1>Iniciar sesión</h1>
            <form action="#" method="POST">
                <label>Correo electrónico:</label>
                <input type="email" name="email">
                <br><br>
                <label>Contraseña:</label>
                <input type="password" name="contraseña">
                <br><br>
                <input type="submit" name="inicio_sesion" value="Iniciar sesión">
            </form>
        </div>
    </div>
    <div class="resultado">
        <?php
				if (isset($_POST["registro"])){
							$nombre=$_POST["nombre"];
							$apellidos=$_POST["apellidos"];
							$fecha_nacimiento=$_POST["fecha_nacimiento"];
							$email=$_POST["email"];
							$telf=$_POST["telf"];
							$nombre_usuario=$_POST["nombre_usuario"];
							$contrasenha=$_POST["contraseña"];
							$confirmacion=$_POST["confirmacion_contraseña"];
							$nombre_original=$_FILES["foto"]["name"]; 
							$nombre_temporal_archivo=$_FILES["foto"]["tmp_name"]; 
							$tipo_archivo=$_FILES["foto"]["type"];
							$tamanho=$_FILES["foto"]["size"];
					
						
						 if(empty($_POST["nombre"]) || empty($_POST["apellidos"]) || empty($_POST["fecha_nacimiento"]) || empty($_POST["email"]) || empty($_POST["telf"]) || empty($_POST["nombre_usuario"]) ||empty($_FILES["foto"]) || empty($_POST["contraseña"]) || empty($_POST["confirmacion_contraseña"]) || empty($_POST["noticias"])){
          
							 	echo "<h1 style='color:red'>Has dejado uno o más campos en blanco</h1><br>";  
					}if($contrasenha!=$confirmacion){
							echo "<h1 style='color:red'>Las contraseñas no coinciden</h1>";  
						 }
						   else if ($contrasenha==$confirmacion){
						 if($tamanho > 2097152 || $tipo_archivo!="image/jpeg"){
							 echo "<h1 style='color:red'>El tipo de archivo no es válido</h1>";
						 }else{
					if(!file_exists("./".$nombre_usuario)){ 
					mkdir("./".$nombre_usuario);
						}
						$ruta_nueva_archivo = $nombre_usuario . "/" . $nombre_original;	 
						move_uploaded_file($nombre_temporal_archivo,$ruta_nueva_archivo);
						echo "<h1>Hola usuario: ".$nombre_usuario.", tu archivo se ha subido <h1><br><img src='./".$nombre_usuario."/".$nombre_original."'>";
						 }
					 }
							   
				}
		
		if (isset($_POST["inicio_sesion"])){
			 if(empty($_POST["email"]) || empty($_POST["contraseña"])){
				echo "<h1 style='color:red'>Has dejado uno o más campos en blanco en el inicio de sesión</h1>";
		}else{
				 echo "Has iniciado sesión con éxito";
			 }
			}
        ?>
    </div>
</body>
</html>