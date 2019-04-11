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
                Filtar alumnos por calificación:
            </label>
            <select name="calificacion">
                <option value="" selected>Selecciona una opción...</option>
                <option value="aprobado">Aprobado</option>
                <option value="suspenso">Suspenso</option>
            </select>
            <input type="submit" name="envio" value="Enviar">
        </form>
    </div>
    <div id="tabla" style="margin: 50px;">
        <?php
            if(isset($_POST["envio"])){
                if($_POST["calificacion"] == "aprobado"){
                    $consulta = $dbh->prepare("SELECT alumnos.*, matriculas.calificacion FROM alumnos, matriculas WHERE alumnos.dni = matriculas.dni AND matriculas.calificacion >= 5");
                }
                elseif($_POST["calificacion"] == "suspenso"){
                    $consulta = $dbh->prepare("SELECT alumnos.*, matriculas.calificacion FROM alumnos, matriculas WHERE alumnos.dni = matriculas.dni AND matriculas.calificacion < 5");
                }
                else{
                    echo "<p style='color: red; font-size: 25px;'>Es necesario seleccionar una opción válida.</p>";
                    die;
                }

                $consulta->execute();

                $alumnos = $consulta->fetchAll();

                echo "<table border='1' cellpadding='10'>
                    <tr>
                        <td>DNI</td>
                        <td>Nombre</td>
                        <td>Fecha de nacimiento</td>
                        <td>Provincia</td>
                        <td>Beca</td>
                        <td>Calificación</td>
                    </tr>";

                foreach($alumnos as $datos){
                    echo "<tr>
                            <td>" . $datos["dni"] . "</td>
                            <td>" . $datos["nom_alum"] . "</td>
                            <td>" . $datos["fecha_nac"] . "</td>
                            <td>" . $datos["provincia"] . "</td>
                            <td>" . $datos["beca"] . "</td>
                            <td>" . $datos["calificacion"] . "</td>
                        </tr>";
                }

                echo "</table>";
            }
        ?>
    </div>
</body>
</html>