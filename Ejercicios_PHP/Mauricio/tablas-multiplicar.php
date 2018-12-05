<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	$a = 5;
	$b = 1;
	$tabla1 = $a * $b;
	$tabla2 = $a * ++$b;
	$tabla3 = $a * ++$b;
	$tabla4 = $a * ++$b;
	$tabla5 = $a * ++$b;
	$tabla6 = $a * ++$b;
	$tabla7 = $a * ++$b;
	$tabla8 = $a * ++$b;
	$tabla9 = $a * ++$b;
	$tabla10 = $a * ++$b;
	
	
	echo "<table border='1' cellpadding='10'>
		 <tr>
			 <td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla1."</td>
		 </tr>
		 <tr>
			<td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla2."</td>
		 </tr>
		 <tr>
			 <td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla3."</td>
		 </tr>
		 <tr>
			<td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla4."</td>
		 </tr>
		 <tr>
			 <td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla5."</td>
		 </tr>
		  <tr>
			<td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla6."</td>
		 </tr>
		  <tr>
			 <td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla7."</td>
		 </tr>
		  <tr>
			 <td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla8."</td>
		 </tr>
		  <tr>
			<td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla9."</td>
		 </tr>
		  <tr>
			 <td>".$a."</td>
			 <td>".$b."</td>
			 <td>".$tabla10."</td>
		 </tr>
	 </table>";
	?>
<body>
</body>
</html>