<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$numero = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100),mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];
	$tamano= count($numero);
	
	echo "<table align='center' border=1> 
	<center><h1>Array</h1></center>
                 <tr align='center'>
				 <td><strong>Array</strong></td>
                  <td> ".$numero[0]." </td>   
				  <td> ".$numero[1]." </td> 
				  <td> ".$numero[2]." </td> 
				  <td> ".$numero[3]." </td> 
				  <td> ".$numero[4]." </td> 
				  <td> ".$numero[5]." </td> 
				  <td> ".$numero[6]." </td> 
			      <td> ".$numero[7]." </td> 
				  <td> ".$numero[8]." </td> 
				  <td> ".$numero[9]." </td> 
                </tr><tr>
				<td align=center><strong>Número de elementos del array</strong></td>
				<td align=center>".$tamano."</td></tr>
				<tr></table>";
	
				asort($numero);
	
	echo $numero[0]."<br>".$numero[1]."<br>".$numero[2]."<br>".$numero[3]."<br>".$numero[4];
	
				/*echo "<table align=center>
				<td align=center><strong>Ordenados de menor a mayor</strong></td>
				<td align=center>".$numero."</td>
				
				
				</tr>
				
            </table>";*/
	
		
	?>
<body>
</body>
</html>