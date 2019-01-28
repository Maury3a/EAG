<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	
$foto = $_FILES["foto"]["tmp_name"];
$tipo_foto = exif_imagetype($foto);
$nombre_archivo= $_POST['nombre'];	
//	$tipo_archivo=$_FILES['foto']['tmp_name'];
//	$nombre=$_FILES["foto"]["name"];
//	$temp_name = $_FILES["foto"]["tmp_name"];
	
	if($_FILES['foto']['size'] >  2097152 ) { //comprobamos que no ocupe más de 2 mb      
		echo 'File over 2MB';
	}
	if($tipo_foto != IMAGETYPE_JPEG){ //comprobamos el tipo de foto
		echo "<br>Solo archivos jpg";
	}
	if($tipo_foto = IMAGETYPE_JPEG && $_FILES['foto']['size'] <  2097152 ){ //comprobamos que todo esta correcto
		echo "<h2>Tu foto se ha subido correctamente</h2>";
	}
	if(!file_exist("./img")){
	$ruta = ".img/".$nombre_archivo;
mkdir($ruta);	
	}
	?>
<body>
</body>
</html>