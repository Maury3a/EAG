<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$matnum[0] = [mt_rand(0,20),"Hola",28,98.5,true,null];
	echo "<center>";
	echo "<table border='1'>";
		echo "<tr>";
	echo "<td>Valor 1</td>";
	echo "<td>Tipo</td>";
	echo "<td>Valor 2</td>";
	echo "<td>Tipo</td>";
	echo "<td>Valor 3</td>";
	echo "<td>Tipo</td>";
	echo "<td>Valor 4</td>";
	echo "<td>Tipo</td>";
	echo "<td>Valor 5</td>";
	echo "<td>Tipo</td>";
	echo "<td>Valor 6</td>";
	echo "<td>Tipo</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo $matnum[0][0];
	echo "</td>";
	echo "<td>";
	echo var_dump( $matnum[0][0]);
	echo "</td>";
	echo "<td>";
	echo $matnum[0][1];
	echo "</td>";
	echo "<td>";
	echo var_dump( $matnum[0][1]);
	echo "</td>";
	echo "<td>";
	echo $matnum[0][2];
	echo "</td>";
	echo "<td>";
	echo var_dump( $matnum[0][2]);
	echo "</td>";
	echo "<td>";
	echo $matnum[0][3];
	echo "</td>";
	echo "<td>";
	echo var_dump( $matnum[0][3]);
	echo "</td>";
	echo "<td>";
	echo $matnum[0][4];
	echo "</td>";
	echo "<td>";
	echo var_dump( $matnum[0][4]);
	echo "</td>";
	echo "<td>";
	echo $matnum[0][5];
	echo "</td>";
	echo "<td>";
	echo var_dump( $matnum[0][5]);
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</center>";
	?>
<body>
</body>
</html>