<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
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
	
	//Repetir este fpr para cada uno de los alumnos
	?>
<body>
</body>
</html>