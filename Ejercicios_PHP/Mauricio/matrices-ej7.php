<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$alumno["Rodrigo"] = ["Nombre"=>"Rodrigo","Matematicas"=>7,"Lengua"=>6,"Filosofia"=>8,"Diseño"=>3,"PHP"=>10];
	$alumno["Valerio"] = ["Nombre"=>"Valerio","Matematicas"=>9,"Lengua"=>3,"Filosofia"=>1,"Diseño"=>0,"PHP"=>10];
	$alumno["Ramón"] = ["Nombre"=>"Ramón","Matematicas"=>9,"Lengua"=>4,"Filosofia"=>7,"Diseño"=>4,"PHP"=>0];
	$alumno["Javier"] = ["Nombre"=>"Javier","Matematicas"=>5,"Lengua"=>6,"Filosofia"=>8,"Diseño"=>2,"PHP"=>1];
	$alumno["Manolo"] = ["Nombre"=>"Manolo","Matematicas"=>8,"Lengua"=>9,"Filosofia"=>1,"Diseño"=>3,"PHP"=>3];
	echo "<center><h1>Aula virtual</h1><h3>Zona Profesores</h3><h4>Clase Omega</h4><table border='1'><tr>";
	echo "<td>Nombre del alumno</td><td>Nota de Matemáticas</td><td>Nota de lengua</td><td>Nota de Filosofía</td><td>Nota de Diseño</td><td>Media del curso</td></tr><tr>";
	echo "<td align='center'>".$alumno["Rodrigo"]["Nombre"]."</td>";
	echo "<td align='center'>".$alumno["Rodrigo"]["Matematicas"]."</td>";
	echo "<td align='center'>".$alumno["Rodrigo"]["Lengua"]."</td>";
	echo "<td align='center'>".$alumno["Rodrigo"]["Filosofia"]."</td>";
	echo "<td align='center'>".$alumno["Rodrigo"]["Diseño"]."</td>";
	echo "<td align='center'>".(($alumno["Rodrigo"]["Matematicas"]+$alumno["Rodrigo"]["Lengua"]+$alumno["Rodrigo"]["Filosofia"]+$alumno["Rodrigo"]["Diseño"]+$alumno["Rodrigo"]["PHP"])/5)."</td></tr><tr>";
	
	echo "<td align='center'>".$alumno["Valerio"]["Nombre"]."</td>";
	echo "<td align='center'>".$alumno["Valerio"]["Matematicas"]."</td>";
	echo "<td align='center'>".$alumno["Valerio"]["Lengua"]."</td>";
	echo "<td align='center'>".$alumno["Valerio"]["Filosofia"]."</td>";
	echo "<td align='center'>".$alumno["Valerio"]["Diseño"]."</td>";
	echo "<td align='center'>".(($alumno["Valerio"]["Matematicas"]+$alumno["Valerio"]["Lengua"]+$alumno["Valerio"]["Filosofia"]+$alumno["Valerio"]["Diseño"]+$alumno["Valerio"]["PHP"])/5)."</td></tr><tr>";
	echo "<td align='center'>".$alumno["Ramón"]["Nombre"]."</td>";
	echo "<td align='center'>".$alumno["Ramón"]["Matematicas"]."</td>";
	echo "<td align='center'>".$alumno["Ramón"]["Lengua"]."</td>";
	echo "<td align='center'>".$alumno["Ramón"]["Filosofia"]."</td>";
	echo "<td align='center'>".$alumno["Ramón"]["Diseño"]."</td>";
	echo "<td align='center'>".(($alumno["Ramón"]["Matematicas"]+$alumno["Ramón"]["Lengua"]+$alumno["Ramón"]["Filosofia"]+$alumno["Ramón"]["Diseño"]+$alumno["Ramón"]["PHP"])/5)."</td></tr><tr>";
		echo "<td align='center'>".$alumno["Javier"]["Nombre"]."</td>";
	echo "<td align='center'>".$alumno["Javier"]["Matematicas"]."</td>";
	echo "<td align='center'>".$alumno["Javier"]["Lengua"]."</td>";
	echo "<td align='center'>".$alumno["Javier"]["Filosofia"]."</td>";
	echo "<td align='center'>".$alumno["Javier"]["Diseño"]."</td>";
	echo "<td align='center'>".(($alumno["Javier"]["Matematicas"]+$alumno["Javier"]["Lengua"]+$alumno["Javier"]["Filosofia"]+$alumno["Javier"]["Diseño"]+$alumno["Javier"]["PHP"])/5)."</td></tr><tr>";
	echo "<td align='center'>".$alumno["Manolo"]["Nombre"]."</td>";
	echo "<td align='center'>".$alumno["Manolo"]["Matematicas"]."</td>";
	echo "<td align='center'>".$alumno["Manolo"]["Lengua"]."</td>";
	echo "<td align='center'>".$alumno["Manolo"]["Filosofia"]."</td>";
	echo "<td align='center'>".$alumno["Manolo"]["Diseño"]."</td>";
	echo "<td align='center'>".(($alumno["Manolo"]["Matematicas"]+$alumno["Manolo"]["Lengua"]+$alumno["Manolo"]["Filosofia"]+$alumno["Manolo"]["Diseño"]+$alumno["Manolo"]["PHP"])/5)."</td></tr><tr>";
	echo"</table>";
	
	
	
	?>
<body>
</body>
</html>