<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$asignaturas = ["Matematicas"=>8,"Lengua"=>6,"Filosofia"=>18,"Diseño"=>3,"PHP"=>10,"Wordpress"=>3];
	echo "<center>";
	echo "<h1>Clase Omega</h1>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>Número de alumnos en Matemáticas</td>";
	echo "<td>Número de alumnos en Lengua</td>";
	echo "<td>Número de alumnos en Filosofía</td>";
	echo "<td>Número de alumnos en Diseño</td>";
	echo "<td>Número de alumnos en PHP</td>";
	echo "<td>Número de alumnos en Wordpress</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<br>";
	echo "<td align='center'>".$asignaturas["Matematicas"]."</td>";
	echo "<td align='center'>".$asignaturas["Lengua"]."</td>";
	echo "<td align='center'>".$asignaturas["Filosofia"]."</td>";
	echo "<td align='center'>".$asignaturas["Diseño"]."</td>";
	echo "<td align='center'>".$asignaturas["PHP"]."</td>";
	echo "<td align='center'>".$asignaturas["Wordpress"]."</td>";
	echo "</tr>";
	echo "</table>";
	echo "<center>";
	?>
<body>
</body>
</html>