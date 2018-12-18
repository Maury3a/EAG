<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$numero=mt_rand(0,50);
	echo "<center>El número resultado es:".$numero.", y por tanto ";
	switch($numero){
		case $numero>=0 && $numero<=10;
			
				echo " está entre 0 y 10</center>";
				break;
		case $numero>=10 && $numero<=20;
			
				echo " está entre 10 y 20</center>";
				break;
		case $numero>=20 && $numero<=30;
			
				echo " está entre 20 y 30</center>";
				break;
		case $numero>=30 && $numero<=40;
			
				echo " está entre 30 y 40</center>";
				break;
		case $numero>=40 && $numero<=50;
			
				echo " está entre 40 y 50</center>";
				break;
	}
	?>
<body>
</body>
</html>