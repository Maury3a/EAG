<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$array= array("a","b","c","d","e");
	$lng =count($array);
	echo "<table border='1' cellpadding='10'>";
	for($contador=0; $contador < $lng; $contador++){
		echo"<tr>
			<td>Posición".$contador."</td>
			<td>".$array[$contador]."</td>
		</tr>";
	
	}
	echo "</table>";
	
	$array= array(21,34,23,56,12);
	echo "<table border='1' cellpadding='10'>";
	for($i=0; $i <= 4; $i++){
		echo "<tr>
		<td>Posición".$i."</td>
		<td>".$array[$i]."</td>
		</tr>";
	}
	echo "</table>";
	
	for($i=0; $i <= 4; $i++){
		echo "<hr>
		<p>Posición".$i."</p>
		<p>".$array[$i]."</p>
		</hr>";
	}
	?>
<body>
</body>
</html>