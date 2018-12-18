<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$toby=["Nombre"=>"Toby","Peso"=>13,"Raza"=>"Bulldog","Color"=>"Blanco","Edad"=>7,"Dueño"=>"Ramón"];
	$kiba=["Nombre"=>"Kiba","Peso"=>15,"Raza"=>"Labrador","Color"=>"Marrón","Edad"=>3,"Dueño"=>"Juan"];
	$pluto=["Nombre"=>"Pluto","Peso"=>8,"Raza"=>"Chihuahua","Color"=>"Gris","Edad"=>1,"Dueño"=>"David"];
	$nala=["Nombre"=>"Nala","Peso"=>11,"Raza"=>"Salchicha","Color"=>"Negro","Edad"=>2,"Dueño"=>"Javier"];
	$coco=["Nombre"=>"Coco","Peso"=>20,"Raza"=>"Beagle","Color"=>"Caoba","Edad"=>7,"Dueño"=>"Álvaro"];
	
	$nombres=["Toby","Kiba","Pluto","Nala","Coco"];
	
 	echo "<table border=1 cellpadding=10 align=center style='text-align:center';>
		<tr>
			<td>Nombre del Perro</td>
			<td>Peso (En Kg)</td>
			<td>Raza</td>
			<td>Color</td>
			<td>Edad</td>
			<td>Nombre del Dueño</td>
		</tr>
		<tr>
			<td>".$nombres[0]."</td>
			<td>".$toby["Peso"]."</td>
			<td>".$toby["Raza"]."</td>
			<td>".$toby["Color"]."</td>
			<td>".$toby["Edad"]."</td>
			<td>".$toby["Dueño"]."</td>
		</tr>
		<tr>
			<td>".$nombres[1]."</td>
			<td>".$kiba["Peso"]."</td>
			<td>".$kiba["Raza"]."</td>
			<td>".$kiba["Color"]."</td>
			<td>".$kiba["Edad"]."</td>
			<td>".$kiba["Dueño"]."</td>
		</tr>
		<tr>
			<td>".$nombres[2]."</td>
			<td>".$pluto["Peso"]."</td>
			<td>".$pluto["Raza"]."</td>
			<td>".$pluto["Color"]."</td>
			<td>".$pluto["Edad"]."</td>
			<td>".$pluto["Dueño"]."</td>
		</tr>
		<tr>
			<td>".$nombres[3]."</td>
			<td>".$nala["Peso"]."</td>
			<td>".$nala["Raza"]."</td>
			<td>".$nala["Color"]."</td>
			<td>".$nala["Edad"]."</td>
			<td>".$nala["Dueño"]."</td>
		</tr>
		<tr>
			<td>".$nombres[4]."</td>
			<td>".$coco["Peso"]."</td>
			<td>".$coco["Raza"]."</td>
			<td>".$coco["Color"]."</td>
			<td>".$coco["Edad"]."</td>
			<td>".$coco["Dueño"]."</td>
		</tr>
		</table>";
	
	if($toby["Peso"]<10){
			echo $toby["Dueño"]." tiene un perro pequeño";
		}else if($toby["Peso"]>=10 && $toby["Peso"]<=20){
			echo $toby["Dueño"]." tiene un perro de tamaño mediano";
		}else if ($toby["Peso"]>20){
		echo $toby["Dueño"]." tiene un perro de tamaño grande";
		
	}
	echo "<br><br>";
	
	if($kiba["Peso"]<10){
			echo $kiba["Dueño"]." tiene un perro pequeño";
		}else if($kiba["Peso"]>=10 && $kiba["Peso"]<=20){
			echo $kiba["Dueño"]." tiene un perro de tamaño mediano";
		}else if ($kiba["Peso"]>20){
		echo $kiba["Dueño"]." tiene un perro de tamaño grande";
	}
	echo "<br><br>";
	
	if($pluto["Peso"]<10){
			echo $pluto["Dueño"]." tiene un perro pequeño";
		}else if($pluto["Peso"]>=10 && $pluto["Peso"]<=20){
			echo $pluto["Dueño"]." tiene un perro de tamaño mediano";
		}else if ($pluto["Peso"]>20){
		echo $pluto["Dueño"]." tiene un perro de tamaño grande";
	}
	
	echo "<br><br>";
	
	if($nala["Peso"]<10){
			echo $nala["Dueño"]." tiene un perro pequeño";
		}else if($nala["Peso"]>=10 && $nala["Peso"]<=20){
			echo $nala["Dueño"]." tiene un perro de tamaño mediano";
		}else if ($nala["Peso"]>20){
		echo $nala["Dueño"]." tiene un perro de tamaño grande";
	}
	
	echo "<br><br>";
	
	if($coco["Peso"]<10){
			echo $coco["Dueño"]." tiene un perro pequeño";
		}else if($coco["Peso"]>=10 && $coco["Peso"]<=20){
			echo $coco["Dueño"]." tiene un perro de tamaño mediano";
		}else if ($coco["Peso"]>20){
		echo $coco["Dueño"]." tiene un perro de tamaño grande";
	}
	?>
<body>
</body>
</html>