<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios Práctica</title>
</head>
<body>
    <?php

        // $posiciones = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];
        // $suma = array_sum($posiciones);
        // $resta = $posiciones[0] - $posiciones[1] - $posiciones[2] - $posiciones[3] - $posiciones[4];
        // $media = array_sum($posiciones) / count($posiciones);

        // echo"<h1>Ejercicio 1</h1>
        //         <table>
        //         <tr>
        //             <td> " . $posiciones[0] . " </td>
        //             <td> " . $posiciones[1] . " </td>
        //             <td> " . $posiciones[2] . " </td>
        //             <td> " . $posiciones[3] . " </td>
        //             <td> " . $posiciones[4] . " </td>
        //             <td> " . $suma . " </td>
        //             <td> " . $resta . " </td>
        //             <td> " . $media . " </td>
        //         </tr>
        //     </table>"



        // $matnum[0] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100),];
        // $matnum[1] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100),];
        // $matnum[2] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100),];
        // $matnum[3] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100),];
        // $matnum[4] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100),];
        // $matnum[5] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100), mt_rand(1,100),];

        // echo"<h1>Ejercicio 2</h1>" . $matnum[4][3];



        // $matriz[0] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];
        // $matriz[1] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];
        // $matriz[2] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];
        // $matriz[3] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];
        // $matriz[4] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];
        // $matriz[5] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];
        // $matriz[6] = [mt_rand(1,100), mt_rand(1,100), mt_rand(1,100)];

        // $variable1 = $matriz[1][2];
        // $variable2 = $matriz[4][0];
        // $suma = $variable1 + $variable2;
        // $resta = $variable1 - $variable2;
        // $multiplicacion = $variable1 * $variable2;
        // $division = $variable1 / $variable2;
        // $resto = $variable1 % $variable2;

        // echo "<h1>Ejercicio 3</h1>
        //     <table align='center'>
        //     <tr align='center'>
        //         <td>PRIMER VALOR</td>
        //         <td>SEGUNDO VALOR</td>
        //         <td>SUMA</td>
        //         <td>RESTA</td>
        //         <td>MULTIPLICACIÓN</td>
        //         <td>DIVISIÓN</td>
        //         <td>RESTO</td>
        //     </tr>
        //     <tr align='center'>
        //         <td> " . $variable1 . " </td>
        //         <td> " . $variable2 . " </td>
        //         <td> " . $suma . " </td>
        //         <td> " . $resta . " </td>
        //         <td> " . $multiplicacion . " </td>
        //         <td> " . $division . " </td>
        //         <td> " . $resto . " </td>
        //     </tr>
        // </table>";



        // $arrai = [1.5, "hei", "perro" => "Breo", 9, "años" => 22, "Javier"];

        // echo "<h1>Ejercicio 4</h1>
        //     <table align='center'> 
        //     <tr align='center'>
        //         <td> " . $arrai[0] . "</td>
        //         <td>Número flotante</td>
        //     </tr>
        //     <tr align='center'>
        //         <td> " . $arrai[1] . "</td>
        //         <td>Asociativo</td>
        //     </tr>
        //     <tr align='center'>
        //         <td> " . $arrai["perro"] . "</td>
        //         <td>Posición asociativa</td>
        //     </tr>
        //     <tr align='center'>
        //         <td> " . $arrai[3] . "</td>
        //         <td>Integer</td>
        //     </tr>
        //     <tr align='center'>
        //         <td> " . $arrai["años"] . "</td>
        //         <td>Edad</td>
        //     </tr>
        //     <tr align='center'>
        //         <td> " . $arrai[5] . "</td>
        //         <td>Nombre</td>
        //     </tr>
    
        // </table>";

        

        // $clase = ["php" => 12, "js" => 15, "html" => 6, "proyect" => 10, "diseno" => 5];

        // echo "<h1 align='center'>Ejercicio 5</h1>
        //         <table align='center'> 
        //         <tr align='center'>
        //             <td> " . $clase["php"] . " </td>
        //             <td> " . $clase["js"] . " </td>
        //             <td> " . $clase["html"] . " </td>
        //             <td> " . $clase["proyect"] . " </td>
        //             <td> " . $clase["diseno"] . " </td>
        //         </tr>
        //         <tr align='center'>
        //             <td>PHP</td>
        //             <td>JavaScript</td>
        //             <td>HTML5</td>
        //             <td>Proyecto</td>
        //             <td>Diseño UI/UX</td>
        //         </tr>
        //     </table>";



        $perro = ["nombre" => "Breogán", "color" => "Marrón", "raza" => "Dogo de Burdeos", "edad" => 1, "peso" => 68];
      
      /*  echo "<h1>Ejercicio 6</h1>
                <table align='center'> 
                <tr align='center'>
                    <td>NOMBRE</td>
                    <td>COLOR</td>
                    <td>RAZA</td>
                    <td>EDAD</td>
                    <td>PESO</td>
                </tr>
                <tr align='center'>
                    <td> " . $perro[0]["nombre"] . " </td>
                    <td> " . $perro[0]["color"] . " </td>
                    <td> " . $perro[0]["raza"] . " </td>
                    <td> " . $perro[0]["edad"] . " </td>
                    <td> " . $perro[0]["peso"] . " </td>
                </tr>
                <tr align='center'>
                    <td> " . $perro[1]["nombre"] . " </td>
                    <td> " . $perro[1]["color"] . " </td>
                    <td> " . $perro[1]["raza"] . " </td>
                    <td> " . $perro[1]["edad"] . " </td>
                    <td> " . $perro[1]["peso"] . " </td>
                </tr>
                <tr align='center'>
                    <td> " . $perro[2]["nombre"] . " </td>
                    <td> " . $perro[2]["color"] . " </td>
                    <td> " . $perro[2]["raza"] . " </td>
                    <td> " . $perro[2]["edad"] . " </td>
                    <td> " . $perro[2]["peso"] . " </td>
                </tr>
            </table>";*/
	sort($perro);
	echo $perro[0]."<br>".$perro[1]."<br>".$perro[2]."<br>".$perro[3]."<br>".$perro[4];
	
	$perro = ["nombre" => "Breogán", "color" => "Marrón", "raza" => "Dogo de Burdeos", "edad" => 1, "peso" => 68];
	asort($perro);
	echo "<br><br>".$perro["nombre"]."<br>".$perro["color"]."<br>".$perro["raza"]."<br>".$perro["edad"]."<br>".$perro["peso"]; //redeclaramos el array después de cada función de ordenación, para coger el array original
	
	$perro = ["nombre" => "Breogán", "color" => "Marrón", "raza" => "Dogo de Burdeos", "edad" => 1, "peso" => 68];
	ksort($perro);
	echo "<br><br>".$perro["nombre"]."<br>".$perro["color"]."<br>".$perro["raza"]."<br>".$perro["edad"]."<br>".$perro["peso"];//después del primero, no usamos el índice para llamar a los elementos del array, sino a los valores asociativos ("nombre")()"color")...
	
	//la unica funcion que modifica el array original de asociativo a numérico es SORT()

    ?>
</body>
</html>