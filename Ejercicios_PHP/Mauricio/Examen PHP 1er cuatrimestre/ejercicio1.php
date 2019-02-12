<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$notas=array(2,5,5,4,6);
	$aprobadas=0;
	$suspensas=0;
	
		for($i=0;$i<count($notas);$i++){
		if($notas[$i]<5){
			$suspensas++;
		}else{
			$aprobadas++;
			
			}
		}echo "<p>Has aprobado ".$aprobadas." asignaturas y has suspendido ".$suspensas." asignaturas</p>";
	
	
	$nota2=["Wordpress"=>5, "PHP" => 8, "Java" =>6, "Marketing" =>2, "CSS" =>1];
	echo "<h1>Boletín de notas</h1><table border='4' cellpadding='10'>";	
	foreach($nota2 as $nombre_asignatura => $nota )
		
		if($nota<5){
			echo "<tr><td>".$nombre_asignatura."</td><td bgcolor=red>".$nota."</td>";
		}
		else if($nota>5){
			echo "<tr><td>".$nombre_asignatura."</td><td bgcolor=green>".$nota."</td>";
		}else{
			echo "<tr><td>".$nombre_asignatura."</td><td bgcolor=green>".$nota."</td>";
		}
		
	echo "</table>"
	?>
	
<body>
</body>
</html>

	