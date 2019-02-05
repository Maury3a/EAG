<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form action="#" method="post" enctype="multipart/form-data">
	<input type="text" name="nombre" placeholder="Nombre de usuario"><br><br>
		<input type="file" name="archivo"><br><br>
		<input type="submit" name="enviar" value="Enviar"><br><br><hr>
		
	</form>
	
</body>
	<?php
	

	
	
	
		if (isset($_POST["enviar"])){    //se hace siempre, para ver si se le ha dado al botón
				$nombre_usuario = $_POST["nombre"];
	$nombre_original = $_FILES["archivo"]["name"]; //hacemos variable para el nombre con el que el usuario se baja el archivo
	$nombre_temporal_archivo= $_FILES["archivo"]["tmp_name"]; //el nombre con el que el usuario manda el archivo, el que php le da por defecto
	$tipo_archivo=$_FILES["archivo"]["type"];
	$tamanho=$_FILES["archivo"]["size"];
			if(empty($_POST["nombre"]))	{ //campos cuyo valor es un texto (nombre, tlf, select, etc...) TODO MENOS ARCHIVOS
				echo "Error, no campos vacíos";
			}  
			else{
				if($tamanho > 2097524 || $tipo_archivo!="image/jpeg"){ //si pesa más el archivo de 2 mb o no es jpg PONER SIEMPRE JPEG CON "E"
					echo "<h1>Error, el archivo no es jpg, o png o pesa más de 2 mb</h1>";	
				}
				else{
					if(!file_exists("./".$nombre_usuario)){ //si existe la carpeta llamada igual que el nombre de usuario. ponemos el punto para que lo cree en el mismo lugar donde tenemos el archivo php
						mkdir("./".$nombre_usuario); //hacemos la carpeta llamada como el nombre de usuario  en el caso de que no exista
					}
					$ruta_nueva_archivo = $nombre_usuario . "/" . $nombre_original; //almacena la ruta en una variable, que sería como nombre de carpeta el nombre de usuario y de nombre de archivo el nombre con el que el usuario ha subido el archivo en el formulario 
					move_uploaded_file($nombre_temporal_archivo,$ruta_nueva_archivo);
					echo "<h1>Saludos ".$nombre_usuario."<h1><br><img src='./".$nombre_usuario."/".$nombre_original."'>";
				}
			}
		}
	
	
	?>
</html>
