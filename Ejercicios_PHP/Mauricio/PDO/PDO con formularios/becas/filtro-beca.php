<?php
    include "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO y formularios</title>
</head>
<body>
    <div id="formulario" style="margin: 50px;">
        <form action="#" method="POST">
            <label>
               Filtrar alumnos por beca
            </label>
            <select name="beca">  <!--seleccionamos por lo que queremos filtrar -->
                <?php
                     $consulta = $dbh->prepare("SELECT DISTINCT beca FROM alumnos");
     
                     $consulta->execute();

                     $becas = $consulta->fetchAll();

                     foreach($becas as $dato){
                        echo "<option value=" . $dato["beca"] . ">" . $dato["beca"] . "</option>";
                     }
                ?>
            </select>
            <input type="submit" name="envio" value="Enviar">
        </form>
    </div>
    <div id="tabla" style="margin: 50px;">
        <?php
            if(isset($_POST["envio"])){
                $consulta = $dbh->prepare("SELECT * FROM alumnos WHERE  beca = ?");

                $beca = $_POST["beca"];

                $consulta->execute([$beca]);

                $alumnos = $consulta->fetchAll();  //Se mantiene $alumnos porque es lo que queremos sacar

                echo "<table border='1' cellpadding='10'>
                    <tr>
                        <td>DNI</td>
                        <td>Nombre</td>
                        <td>Fecha de nacimiento</td>
                        <td>Provincia</td>
                        <td>Beca</td>
                    </tr>";

                foreach($alumnos as $datos){
                    echo "<tr>
                            <td>" . $datos["dni"] . "</td>
                            <td>" . $datos["nom_alum"] . "</td>
                            <td>" . $datos["fecha_nac"] . "</td>
                            <td>" . $datos["provincia"] . "</td>
                            <td>" . $datos["beca"] . "</td>
                        </tr>";
                }

                echo "</table>";
            }
        ?>
    </div>
</body>
</html>