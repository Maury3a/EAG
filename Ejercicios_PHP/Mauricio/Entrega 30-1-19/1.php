<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	if(empty($_POST['nombre']) || empty($_POST['nombre_usuario']) || empty($_POST['email']) || empty($_POST['suscripcion'])){
	echo "No dejes campos vacíos";
		
		
}else{
		echo "<h1>Tus datos se ha enviado correctamente</h1>";
		echo "<ul>
				<li>Nombre: ".$_POST["nombre"]."</li>
				<li>Nombre de usuario: ".$_POST["nombre_usuario"]."</li>
				<li>Email:".$_POST["email"]."</li>
				<li>Suscripción: ".$_POST["suscripcion"]."</li>
			</ul>";
	}
	?>
<body>
</body>
</html>