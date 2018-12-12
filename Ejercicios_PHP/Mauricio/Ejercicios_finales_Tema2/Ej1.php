<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php /*.....Ej1.....*/
	/*$num1=mt_rand(-100,100);
	
	if ($num1>0){
		echo "El número es positivo";
	}elseif($num1<0){
		echo "EL número es negativo";
	}else{
		echo "El número es 0";
	}?>*/
	
//	.....Ej2.....
	
	
	/*$num1=mt_rand(0,100);
	$num2=mt_rand(0,100);
	 if($num1>$num2){
		 echo "El primer número es el mayor";
	 }elseif($num1<$num2){
		 echo "El segundo número es el mayor";
	 }else{
		 echo "Los números son iguales";
	 }*/
	
//	.....Ej3.....
	
	/*$letra1="c";
	$letra2="b";
	if($letra1<$letra2){
		echo "la primera letra es la 1";
	}else{
		echo "la primera letra es la 2";
	}*/
	
	
	//	.....Ej4.....
	
/*	$edad1=mt_rand(0,100);
	$edad2=mt_rand(0,100);
	$resta1=$edad1-$edad2;
	$resta2=$edad2-$edad1;
	$hermano1="Jose";
	$hermano2="David";
	 if($edad1>$edad2){
		 echo "El primer hermano es el mayor, cuyo nombre es: ".$hermano1;
		 
		 echo "  La diferencia de edad es de: ".$resta1."años";
	 }elseif($edad1<$edad2){
		 echo "El segundo hermano es el mayor cuyo nombre es: ".$hermano2;
		 echo "  Diferencia de edad: ".$resta2."años";
	 }else{
		 echo "Las edades son iguales";
		 
	 }*/
	//.....Ej5.....
	
	
	/*$edad=17;
	
	if($edad>18){
		echo "No eres mayor de edad";
	}
	elseif($edad<18){
		echo "Eres mayor de edad";
	}elseif($edad=18)
		echo "Tienes 18 años, por lo que eres mayor de edad";*/
	
	//.....Ej6.....
	
	/*$num=21;
	if($num%2==0){
		echo "El número es par";
	}else 
		echo "El número es impar";*/
	
	
	//.....Ej7.....
	/*$num1=12;
	$num2=6;
	
	if($num1%$num2==0){
		echo "El número primero es divisible por el segundo";
	}else
		echo "El número primero no es divisible por el segundo";*/
	
	//.....Ej8.....
	/*
	$num1=mt_rand(0,20);
	$num2=mt_rand(0,20);
	$num3=mt_rand(0,20);
	
	if($num1>$num2 && $num2>$num3){
		echo "El primer número es el mayor";
		echo $num3.",".$num2.",".$num1;
	}elseif($num1>$num2 && $num3>$num2 && $num1>$num3){
		echo "El primer número es el mayor";
		echo $num2.",".$num3.",".$num1;
	}
	
	
	elseif($num2>$num1 && $num1>$num3){
		echo "El segundo número es el mayor";
		echo $num3.",".$num1.",".$num2;
	}elseif($num2>$num1 && $num3>$num1 && $num2>$num3){
		echo "El segundo número es el mayor";
		echo $num1.",".$num3.",".$num2;
	}
	
	elseif($num3>$num1 && $num1>$num2){
		echo "El tercer número es el mayor";
		echo $num2.",".$num1.",".$num3;
	}elseif($num3>$num2 && $num2>$num1 && $num3>$num2){
		echo "El tercer número es el mayor";
		echo $num1.",".$num2.",".$num3;
	}elseif($num1==$num2 &&$num2==$num3){
		echo "Los números son iguales";
	}
	
	//.....Ej9.....
	$ropa=["Zapatos"=>mt_rand(0,3),"Chaquetas"=>mt_rand(0,3),"Pantalones"=>mt_rand(0,3)];
	
	if($ropa[0]!=0 && $ropa[1]!=0 && $ropa[2]!=0)*/
	
	
	
	//.....Ej10.....
	
	$notas=["Lengua"=>3,"Literatura"=>8,"Matemáticas"=>6,"PHP"=>7,"Wordpress"=>5];
	
	
	$media=($notas[0]+$notas[1]+$notas[2]+$notas[3]+$notas[4])/5;
	echo $media;
	switch($media){
		case 1:
			$media<5;
				echo "Suspenso";
	
		case 2:
			$media>=5 && $media<7;
				echo "Bien";
		case 3:
			$media>=7 && $media<9;
				echo "Notable";
		case 4:
			$media>=9 && $media<10;
				echo "Sobresaliente";
	}
	?>
<body>
</body>
</html>