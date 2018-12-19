<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$ciudades=["Madrid"=>3,"Barcelona"=>2,"Berlín"=>0.4,"Amsterdam"=>2,"Roma"=>0.8,"Nápoles"=>0.4,"Bruselas"=>2,"Lisboa"=>0.8];
	$ciudad=array_keys($ciudades);
	
	echo "<table border=1 cellpadding=10 align=center style='text-align:center';>
		<tr>
			<td>Ciudad</td>
			<td>Población (En millones)</td>
		</tr>
		<tr>	
			<td>".$ciudad[0]."</td>
			<td>".$ciudades["Madrid"]."</td>
		</tr>
		<tr>	
			<td>".$ciudad[1]."</td>
			<td>".$ciudades["Barcelona"]."</td>
		</tr>
		<tr>	
			<td>".$ciudad[2]."</td>
			<td>".$ciudades["Berlín"]."</td>
		</tr>
		<tr>	
			<td>".$ciudad[3]."</td>
			<td>".$ciudades["Amsterdam"]."</td>
		</tr>
		<tr>	
			<td>".$ciudad[4]."</td>
			<td>".$ciudades["Roma"]."</td>
		</tr>
		<tr>	
			<td>".$ciudad[5]."</td>
			<td>".$ciudades["Nápoles"]."</td>
		</tr>
		<tr>	
			<td>".$ciudad[6]."</td>
			<td>".$ciudades["Bruselas"]."</td>
		</tr>
		<tr>	
			<td>".$ciudad[7]."</td>
			<td>".$ciudades["Lisboa"]."</td>
		</tr>
		
		
		
		
		</table>";
		
		if($ciudades["Madrid"]>1){
			echo "<p>Madrid tiene más de un millón de habitantes</p>";
		}else{
			echo "<p>Madrid tiene menos de un millón de habitantes</p>";
			
		}
	
	if($ciudades["Barcelona"]>1){
			echo "<p>Barcelona tiene más de un millón de habitantes</p>";
		}else{
			echo "<p>Barcelona tiene menos de un millón de habitantes</p>";
		}
	
	if($ciudades["Berlín"]>1){
			echo "<p>Berlín tiene más de un millón de habitantes</p>";
		}else{
			echo "<p>Berlín tiene menos de un millón de habitantes</p>";
		}
	
	if($ciudades["Amsterdam"]>1){
			echo "<p>Amsterdam tiene más de un millón de habitantes</p>";
		}else{
			echo "<p>Amsterdam tiene menos de un millón de habitantes</p>";
		}
	
	if($ciudades["Roma"]>1){
			echo "<p>Roma tiene más de un millón de habitantes</p>";
		}else{
			echo "<p>Roma tiene menos de un millón de habitantes</p>";
		}
	
	if($ciudades["Nápoles"]>1){
			echo "<p>Nápoles tiene más de un millón de habitantes</p>";
		}else{
			echo "<p>Nápoles tiene menos de un millón de habitantes</p>";
		}
	
	if($ciudades["Bruselas"]>1){
			echo "<p>Bruselas tiene más de un millón de habitantes</p>";
		}else{
			echo "<p>Bruselas tiene menos de un millón de habitantes</p>";
		}
	
	if($ciudades["Lisboa"]>1){
			echo "<p>Lisboa tiene más de un millón de habitantes</p>";
		}else{
			echo "<p>Lisboa tiene menos de un millón de habitantes</p>";
		}
	?>		
<body>
</body>
</html>