<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$mascota[0] = ["Nombre"=>"Lazy","Peso"=>"20kg","Color"=>"Negro","Edad"=>"5 años","Raza"=>"Labrador"];
	$mascota[1] = ["Nombre"=>"Rodrigo","Peso"=>"18kg","Color"=>"Blanco","Edad"=>"4 años","Raza"=>"Bull Dog"];
	$mascota[2] = ["Nombre"=>"Perete","Peso"=>"19kg","Color"=>"Marrón", "Edad"=>"3 años","Raza"=>"Terrier"];
	echo "<center>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td></td>";
	echo "<td>Nombre</td>";
	echo "<td>Peso</td>";
	echo "<td>Color</td>";
	echo "<td>Edad</td>";
	echo "<td>Raza</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Datos de ".$mascota[0]["Nombre"]."</td>";
	echo "<td>" .$mascota[0]["Nombre"]."</td>";
	echo "<td>" .$mascota[0]["Peso"]."</td>";
	echo "<td>" .$mascota[0]["Color"]."</td>";
	echo "<td>" .$mascota[0]["Edad"]."</td>";
	echo "<td>" .$mascota[0]["Raza"]."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Datos de ".$mascota[1]["Nombre"]."</td>";
	echo "<td>" .$mascota[1]["Nombre"]."</td>";
	echo "<td>" .$mascota[1]["Peso"]."</td>";
	echo "<td>" .$mascota[1]["Color"]."</td>";
	echo "<td>" .$mascota[1]["Edad"]."</td>";
	echo "<td>" .$mascota[1]["Raza"]."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Datos de ".$mascota[2]["Nombre"]."</td>";
	echo "<td>" .$mascota[2]["Nombre"]."</td>";
	echo "<td>" .$mascota[2]["Peso"]."</td>";
	echo "<td>" .$mascota[2]["Color"]."</td>";
	echo "<td>" .$mascota[2]["Edad"]."</td>";
	echo "<td>" .$mascota[2]["Raza"]."</td>";
	echo "</tr>";
	echo "</table>";
	echo "</center>";
	
	?>
<body>
</body>
</html>