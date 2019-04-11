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
                Selecciona una provincia para mostrar sus alumnos:
            </label>
            <select name="provincia">
                <?php
                     $consulta = $dbh->prepare("SELECT DISTINCT provincia FROM alumnos");
     
                     $consulta->execute();

                     $provincias = $consulta->fetchAll();

                     foreach($provincias as $dato){
                        echo "<option value=" . $dato["provincia"] . ">" . $dato["provincia"] . "</option>";
                     }
                ?>
            </select>
            <input type="submit" name="envio" value="Enviar">
        </form>
    </div>
    <div id="tabla" style="margin: 50px;">
        <?php
            if(isset($_POST["envio"])){
                $consulta = $dbh->prepare("SELECT * FROM alumnos WHERE  provincia = ?");

                $provincia = $_POST["provincia"];

                $consulta->execute([$provincia]);

                $alumnos = $consulta->fetchAll();

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