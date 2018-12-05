<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$matnum[0] = [2,4,6];
	$matnum[1] = [9,10,12];
	$matnum[2] = [1,14,2];
	$matnum[3] = [9,10,12];
	$matnum[4] = [9,10,12];
	$matnum[5] = [9,10,12];
	$matnum[6] = [9,10,12];
	$variableNueva1= $matnum[mt_rand(0,6)][mt_rand(0,2)];
	$variableNueva2= $matnum[mt_rand(0,6)][mt_rand(0,2)];
	echo "<center>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>Valor 1</td>";
	echo "<td>Valor 2</td>";
	echo "<td>Suma de Valores</td>";
	echo "<td>Resta de valores</td>";
	echo "<td>División de valores</td>";
	echo "<td>Multiplicación de valores</td>";
	echo "<td>Módulo de valores</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo $variableNueva1;
	echo "</td>";
	echo "<td>";
	echo $variableNueva2;
	echo "</td>";
	echo "<td>";
	echo $variableNueva1 + $variableNueva2;
	echo "</td>";
	echo "<td>";
	echo $variableNueva1 - $variableNueva2;
	echo "</td>";
	echo "<td>";
	echo $variableNueva1 / $variableNueva2;
	echo "</td>";
	echo "<td>";
	echo $variableNueva1 * $variableNueva2;
	echo "</td>";
	echo "<td>";
	echo $variableNueva1 % $variableNueva2;
	echo "</td>";
	
	echo "</tr>";
	echo "</table>";
	echo "</center>";
	

	?>
<body>
</body>
</html>