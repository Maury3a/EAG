<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$inventario=["Pantalones"=>5,"Camisetas"=>10,"Faldas"=>25,"Gorros"=>3];
	$nombres=array_keys($inventario);
	$cantidad=array_values($inventario);
	for($i=0;$i<count($cantidad);$i++){
		if($cantidad[$i]<10){
			echo "<p>Hay menos de 10 ".$nombres[$i]." en la tienda</p>";
		}
		elseif ($cantidad[$i]>=10 && $cantidad[$i]<=20){
			echo "<p>Hay entre 10 y 20 ".$nombres[$i]." en la tienda</p>";
	}else{
		echo "<p>Hay más de 20 ".$nombres[$i]." en la tienda</p>";
		}
	}
	?>
<body>
</body>
</html>