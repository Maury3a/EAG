<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
-Crear una matriz asociativa con los nombres de las filas como nombres de alumnos y las posiciones con notas de asignaturas.
	-Extraer en arrays nuevos los nombres de los alumnos, de las asignaturas y las notas de cada uno,
	-Recorrer con el bucle for las notas de cada uno, y mostrar por pantalla que asignaturas tiene aprobadas y suspensas
	
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
