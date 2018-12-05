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
	echo $variableNueva1;
	echo "<br>";
	echo $variableNueva2;
	echo "<br>";
	echo $variableNueva1 - $variableNueva2;
	echo "<br>";
	echo $variableNueva1 / $variableNueva2;
	echo "<br>";
	echo $variableNueva1 * $variableNueva2;
	echo "<br>";
	echo $variableNueva1 % $variableNueva2;

	?>
<body>
</body>
</html>