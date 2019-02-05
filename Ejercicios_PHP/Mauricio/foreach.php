<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form action="#" method="post" enctype="multipart/form-data">
	<input type="text" name="nombre" placeholder="Nombre de usuario"><br><br>
		<input type="file" name="archivo"><br><br>
		<input type="submit" name="enviar" value="Enviar"><br><br><hr>
		
	</form>
	
</body>
	
	<?php 
		$notas= array("Javascript" =>5, "PHP" => 4, "HTML" => 10, "CSS" => 2, "WordPress" =>7);
	echo "<table border='1' cellpadding='10'>";
	foreach($notas as $nombre_asignatura => $nota){   //determinamos los contenedores donde almacenaremos, los nombres de las asignaturas y el d elas notas
		echo "<tr><td>".$nombre_asignatura."</td>
		<td>".$nota."</td></tr>";
		if($nota<5){
			echo $nombre_asignatura."Estás suspenso<br><br>";
		}
		else if($nota>=5 && $nota<=7){
			echo "La asignatura ".$nombre_asignatura."tienes un suficiente<br><br>";
		}else if($nota>=7 && $nota<=10){
			echo "La asignatura ".$nombre_asignatura."tienes un sobrebresaliente<br>";
		}
	}
	?>
</html>
