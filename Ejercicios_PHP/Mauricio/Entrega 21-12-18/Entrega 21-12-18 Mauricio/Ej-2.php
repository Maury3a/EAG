<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$perro["Toby"]=["Peso"=>13,"Raza"=>"Bulldog","Color"=>"Blanco","Edad"=>7,"Dueño"=>"Ramón"];
	$perro["Kiba"]=["Peso"=>15,"Raza"=>"Labrador","Color"=>"Marrón","Edad"=>3,"Dueño"=>"Juan"];
	$perro["Pluto"]=["Peso"=>8,"Raza"=>"Chihuahua","Color"=>"Gris","Edad"=>1,"Dueño"=>"David"];
	$perro["Nala"]=["Peso"=>11,"Raza"=>"Salchicha","Color"=>"Negro","Edad"=>2,"Dueño"=>"Javier"];
	$perro["Coco"]=["Peso"=>20,"Raza"=>"Beagle","Color"=>"Caoba","Edad"=>7,"Dueño"=>"Álvaro"];
	
	$nombre=array_keys($perro);
	
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
			<td>".$nombre[0]."</td>
			<td>".$perro["Toby"]["Peso"]."</td>
			<td>".$perro["Toby"]["Raza"]."</td>
			<td>".$perro["Toby"]["Color"]."</td>
			<td>".$perro["Toby"]["Edad"]."</td>
			<td>".$perro["Toby"]["Dueño"]."</td>
		</tr>
		<tr>
			<td>".$nombre[1]."</td>
			<td>".$perro["Kiba"]["Peso"]."</td>
			<td>".$perro["Kiba"]["Raza"]."</td>
			<td>".$perro["Kiba"]["Color"]."</td>
			<td>".$perro["Kiba"]["Edad"]."</td>
			<td>".$perro["Kiba"]["Dueño"]."</td>
		</tr>
		<tr>
			<td>".$nombre[2]."</td>
			<td>".$perro["Pluto"]["Peso"]."</td>
			<td>".$perro["Pluto"]["Raza"]."</td>
			<td>".$perro["Pluto"]["Color"]."</td>
			<td>".$perro["Pluto"]["Edad"]."</td>
			<td>".$perro["Pluto"]["Dueño"]."</td>
		</tr>
		<tr>
			<td>".$nombre[3]."</td>
			<td>".$perro["Nala"]["Peso"]."</td>
			<td>".$perro["Nala"]["Raza"]."</td>
			<td>".$perro["Nala"]["Color"]."</td>
			<td>".$perro["Nala"]["Edad"]."</td>
			<td>".$perro["Nala"]["Dueño"]."</td>
		</tr>
		<tr>
			<td>".$nombre[4]."</td>
			<td>".$perro["Coco"]["Peso"]."</td>
			<td>".$perro["Coco"]["Raza"]."</td>
			<td>".$perro["Coco"]["Color"]."</td>
			<td>".$perro["Coco"]["Edad"]."</td>
			<td>".$perro["Coco"]["Dueño"]."</td>
		</tr>
		</table>";
	
	if($perro["Toby"]["Peso"]<10){
			echo "<p>".$perro["Toby"]["Dueño"]." tiene un perro pequeño</p>";
		}else if($perro["Toby"]["Peso"]>=10 && $perro["Toby"]["Peso"]<=20){
			echo "<p>".$perro["Toby"]["Dueño"]." tiene un perro de tamaño mediano</p>";
		}else if ($perro["Toby"]["Peso"]>20){
		echo "<p>".$perro["Toby"]["Dueño"]." tiene un perro de tamaño grande</p>";
		
	}
	
	
	if($perro["Kiba"]["Peso"]<10){
			echo "<p>".$perro["Kiba"]["Dueño"]." tiene un perro pequeño</p>";
		}else if($perro["Kiba"]["Peso"]>=10 && $perro["Kiba"]["Peso"]<=20){
			echo "<p>".$perro["Kiba"]["Dueño"]." tiene un perro de tamaño mediano</p>";
		}else if ($perro["Kiba"]["Peso"]>20){
		echo "<p>".$perro["Kiba"]["Dueño"]." tiene un perro de tamaño grande</p>";
	}
	
	
	if($perro["Pluto"]["Peso"]<10){
			echo "<p>".$perro["Pluto"]["Dueño"]." tiene un perro pequeño</p>";
		}else if($perro["Pluto"]["Peso"]>=10 && $perro["Pluto"]["Peso"]<=20){
			echo "<p>".$perro["Pluto"]["Dueño"]." tiene un perro de tamaño mediano</p>";
		}else if ($perro["Pluto"]["Peso"]>20){
		echo "<p>".$perro["Pluto"]["Dueño"]." tiene un perro de tamaño grande</p>";
	}
	

	
	if($perro["Nala"]["Peso"]<10){
			echo "<p>".$perro["Nala"]["Dueño"]." tiene un perro pequeño</p>";
		}else if($perro["Nala"]["Peso"]>=10 && $perro["Nala"]["Peso"]<=20){
			echo "<p>".$perro["Nala"]["Dueño"]." tiene un perro de tamaño mediano</p>";
		}else if ($perro["Nala"]["Peso"]>20){
		echo "<p>".$perro["Nala"]["Dueño"]." tiene un perro de tamaño grande</p>";
	}

	
	if($perro["Coco"]["Peso"]<10){
			echo "<p>".$perro["Coco"]["Dueño"]." tiene un perro pequeño</p>";
		}else if($perro["Coco"]["Peso"]>=10 && $perro["Coco"]["Peso"]<=20){
			echo "<p>".$perro["Coco"]["Dueño"]." tiene un perro de tamaño mediano</p>";
		}else if ($perro["Coco"]["Peso"]>20){
		echo "<p>".$perro["Coco"]["Dueño"]." tiene un perro de tamaño grande</p>";
	}
	?>
<body>
</body>
</html>