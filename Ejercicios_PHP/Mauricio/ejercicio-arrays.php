<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	//$misNotas = array("Javascript"=>9 ,"PHP" =>10 ,"Wordpress" =>8 ,"HTML"=> 2 ,"GitHub"=> 2 );
	 
    $notasAlumnos=array(
		
    "1" => array(
            "nombre" => "Mauricio",
			"asignatura" => "Javascript",
            "nota" =>  10
			
        )
		
	);
		
	//echo $misNotas["Javascript"];
	echo "<table border='1px'>";
	echo "<tr>";
	echo "<td>".$notasAlumnos["1"]["nombre"]."</td>";
	echo "<td>".$notasAlumnos["1"]["asignatura"]."</td>";
	echo "<td>".$notasAlumnos["1"]["nota"]."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".$notasAlumnos["1"]["nombre"]."</td>";
	echo "<td>".$notasAlumnos["1"]["asignatura"]."</td>";
	echo "<td>".$notasAlumnos["1"]["nota"]."</td>";
	echo "</tr>";
	echo "</table>";
	/*$suma=  $misNotas["Javascript"]+$misNotas[1]+$misNotas[2]+$misNotas[3]+$misNotas[4];
	$media= ($suma)/5;
	echo $media;*/
	?>
<body>
</body>
</html>