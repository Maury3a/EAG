<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$numeros=[-10, 10, -8, -9, 5, 4, 3, -1, 9, 8];
	for($i=0;$i<count($numeros);$i++){
		if ($numeros[$i]<0){
			echo "<p>".$numeros[$i]." El valor es menor que cero</p>";
	}	
		elseif($numeros[$i]>0){
			echo "<p>".$numeros[$i]." El valor es mayor que cero</p>";
		}else{
			echo "<p>".$numeros[$i]." El valor es mayor que cero</p>";
		}
		
	}
	?>
<body>
<body>
</body>
</html>