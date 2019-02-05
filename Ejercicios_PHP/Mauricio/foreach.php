

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

!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
//Crear una matriz asociativa con los nombres de las filas como nombres de alumnos y las posiciones con notas de asignaturas.
	//Extraer en arrays nuevos los nombres de los alumnos, de las asignaturas y las notas de cada uno,
	//Recorrer con el bucle for las notas de cada uno, y mostrar por pantalla que asignaturas tiene aprobadas y suspensas
	
	$alumno["Javier"]=["HTML"=>9,"Wordpress"=>4,"PHP"=>8,"Javascript"=>3];
	$alumno["Álvaro"]=["HTML"=>4,"Wordpress"=>2,"PHP"=>8,"Javascript"=>9];
	$alumno["Esteban"]=["HTML"=>3,"Wordpress"=>7,"PHP"=>9,"Javascript"=>5];
	//$nombres=array_keys($alumno);
	$asig=array_keys($alumno["Javier"]);
	$notasJavier=array_values($alumnos["Javier"]);
	$notasAlvaro=array_values($alumnos["Álvaro"]);
	$notasEsteban=array_values($alumnos["Esteban"]);
	
	for($i=0;$i<3;$i++){
		if($notasAlvaro[$i1]<5){
			echo "<p> Pepe tiene la asignatura".$asig[$i]." </p>";
		}
		else{
			echo "<p> Pepe tiene la asignatura".$asig[$i]." </p>";
		}
	}
	
	//Repetir este for para cada uno de los alumnos
	?>
<body>
</body>
</html>

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
		$notas= array("Javascript" =>5, "PHP" => 4, "HTML" => 10, "CSS" => 2, "WordPress" =>7);
	echo "<table border='1' cellpadding='10'>";
	foreach($notas as $nombre_asignatura => $nota){   //determinamos los contenedores donde almacenaremos, los nombres de las asignaturas y el d elas notas
		echo "<tr><td>".$nombre_asignatura."</td>
		<td>".$nota."</td></tr>";
		if($nota<5){
			echo $nombre_asignatura."Estás suspenso<br><br>";
		}
		else if($nota>=5 && $nota<=7){
			echo "La asignatura ".$nombre_asignatura."tienes un suficiente<br><br>";
		}else if($nota>=7 && $nota<=10){
			echo "La asignatura ".$nombre_asignatura."tienes un sobrebresaliente<br>";
		}
	}
	?>
</html>
