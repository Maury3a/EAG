<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<?php $dia="A";
			if($dia=="L" || $dia=="M" || $dia=="X" || $dia=="J" || $dia=="V"){
				echo "<h1>El día es entre semana</h1>";
	}else if($dia=="S" || $dia=="D"){
				echo "<h1>El día es fin de semana</h1>";		
	}else{
				echo "<h2>El día introducido no es correcto</h2>";
			}
	
	?>
<body>
</body>
</html>