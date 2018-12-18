<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$ciudades=["Madrid"=>3,"Barcelona"=>2,"Berlín"=>0.4,"Amsterdam"=>2,"Roma"=>0.8,"Nápoles"=>0.4,"Bruselas"=>2,"Lisboa"=>0.8];
	$nombres=["Madrid","Barcelona","Berlín","Amsterdam","Roma","Nápoles","Bruselas","Lisboa"];
	echo "<table border=1 cellpadding=10 align=center style='text-align:center';>
		<tr>
			<td>Ciudad</td>
			<td>Población (En millones)</td>
		</tr>
		<tr>	
			<td>".$nombres[0]."</td>
			<td>".$ciudades["Madrid"]."</td>
		</tr>
		<tr>	
			<td>".$nombres[1]."</td>
			<td>".$ciudades["Barcelona"]."</td>
		</tr>
		<tr>	
			<td>".$nombres[2]."</td>
			<td>".$ciudades["Berlín"]."</td>
		</tr>
		<tr>	
			<td>".$nombres[3]."</td>
			<td>".$ciudades["Amsterdam"]."</td>
		</tr>
		<tr>	
			<td>".$nombres[4]."</td>
			<td>".$ciudades["Roma"]."</td>
		</tr>
		<tr>	
			<td>".$nombres[5]."</td>
			<td>".$ciudades["Nápoles"]."</td>
		</tr>
		<tr>	
			<td>".$nombres[6]."</td>
			<td>".$ciudades["Bruselas"]."</td>
		</tr>
		<tr>	
			<td>".$nombres[7]."</td>
			<td>".$ciudades["Lisboa"]."</td>
		</tr>
		
		
		
		
		</table>";
		
		if($ciudades["Madrid"]>1){
			echo "Madrid tiene más de un millón de habitantes";
		}else{
			echo "Madrid tiene menos de un millón de habitantes";
			
		}echo "<br><br>";
	
	if($ciudades["Barcelona"]>1){
			echo "Barcelona tiene más de un millón de habitantes";
		}else{
			echo "Barcelona tiene menos de un millón de habitantes";
		}echo "<br><br>";
	
	if($ciudades["Berlín"]>1){
			echo "Berlín tiene más de un millón de habitantes";
		}else{
			echo "Berlín tiene menos de un millón de habitantes";
		}echo "<br><br>";
	
	if($ciudades["Amsterdam"]>1){
			echo "Amsterdam tiene más de un millón de habitantes";
		}else{
			echo "Amsterdam tiene menos de un millón de habitantes";
		}echo "<br><br>";
	
	if($ciudades["Roma"]>1){
			echo "Roma tiene más de un millón de habitantes";
		}else{
			echo "Roma tiene menos de un millón de habitantes";
		}echo "<br><br>";
	
	if($ciudades["Nápoles"]>1){
			echo "Nápoles tiene más de un millón de habitantes";
		}else{
			echo "Nápoles tiene menos de un millón de habitantes";
		}echo "<br><br>";
	
	if($ciudades["Bruselas"]>1){
			echo "Bruselas tiene más de un millón de habitantes";
		}else{
			echo "Bruselas tiene menos de un millón de habitantes";
		}echo "<br><br>";
	
	if($ciudades["Lisboa"]>1){
			echo "Lisboa tiene más de un millón de habitantes";
		}else{
			echo "Lisboa tiene menos de un millón de habitantes";
		}echo "<br><br>";
	?>		
<body>
</body>
</html>