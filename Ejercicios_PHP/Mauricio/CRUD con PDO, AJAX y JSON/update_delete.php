<?php
    include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD con PDO</title>
    <style>
        *{
            font-family: Arial;
        }

        button{
            margin: 30px 0px 50px 0px;
        }

        div.contenido{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="contenido">
        <div class="formulario">
            <h1>Actualizar un alumno</h1>
            <a href='select_all.php'><button>Volver al inicio</button></a>
            <?php
                if(isset($_GET["dni"])){
                    $dni = $_GET["dni"];
                }
                else{
                    $dni = "";
                }
                $consulta = $dbh->prepare("SELECT * FROM alumnos WHERE dni = ?");
                $consulta->execute([$dni]);
                $datos = $consulta->fetch();
            ?>
            <form action="#" method="POST">
                <label>DNI:</label>
                <input type="text" name="dni" value="<?php echo $datos["dni"] ?>">
                <br><br>
                <label>Nombre completo:</label>
                <input type="text" name="nombre" value="<?php echo $datos["nom_alum"] ?>">
                <br><br>
                <label>Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" value="<?php echo $datos["fecha_nac"] ?>">
                <br><br>
                <label>Provincia:</label>
                <input type="text" name="provincia" value="<?php echo $datos["provincia"] ?>">
                <br><br>
                <label>Beca:</label>
                <?php
                    if($datos["beca"] == "Si"){
                        echo "<input type='radio' name='beca' value='Si' checked>Si";
                        echo "<input type='radio' name='beca' value='No'>No";
                    }
                    else{
                        echo "<input type='radio' name='beca' value='Si'>Si";
                        echo "<input type='radio' name='beca' value='No' checked>No";
                    }
                ?>
                <br><br>
                <input type="submit" name="actualizar" value="Actualizar alumno">
                <br><br>
                <input type="submit" name="eliminar" value="Eliminar alumno">
            </form>
        </div>
        <div class="resultado">
            <?php
                if(isset($_POST["actualizar"])){
                    if(empty($_POST["dni"]) || strlen($_POST["dni"]) > 9){
                        echo "<p style='color: red; font-size: 25px;'>Es necesario completar el DNI.</p>";
                        die;
                    }
                    else{
                        $dni = $_POST["dni"];
                    }

                    if(empty($_POST["nombre"])){
                        echo "<p style='color: red; font-size: 25px;'>Es necesario completar el nombre.</p>";
                        die;
                    }
                    else{
                        $nombre = $_POST["nombre"];
                    }

                    if(empty($_POST["fecha_nacimiento"])){
                        echo "<p style='color: red; font-size: 25px;'>Es necesario completar la fecha de nacimiento.</p>";
                        die;
                    }
                    else{
                        $fechaNacimiento = $_POST["fecha_nacimiento"];
                    }

                    if(empty($_POST["provincia"])){
                        echo "<p style='color: red; font-size: 25px;'>Es necesario completar la provincia.</p>";
                        die;
                    }
                    else{
                        $provincia = $_POST["provincia"];
                    }

                    if(empty($_POST["beca"]) || $_POST["beca"] != "Si" && $_POST["beca"] != "No"){
                        echo "<p style='color: red; font-size: 25px;'>Es necesario completar la beca.</p>";
                        die;
                    }
                    else{
                        $beca = $_POST["beca"];
                    }

                    $consulta = $dbh->prepare("UPDATE alumnos SET dni = ?, nom_alum = ?, fecha_nac = ?, provincia = ?, beca = ? WHERE dni = '$dni'");

                    $consulta->execute([$dni, $nombre, $fechaNacimiento, $provincia, $beca]);

                    $resultado = $consulta->rowCount();

                    if($resultado > 0){
                        echo "<p style='color: green; font-size: 25px;'>Los datos del alumno se han actualizado correctamente, la página se actualizará automaticamente.</p>";

                        echo "<p>Los datos que se han guardado son:</p>
                            <ul>
                                <li>" . $dni . "</li>
                                <li>" . $nombre . "</li>";

                        $fechaFormateada = date('d-m-Y', strtotime($fechaNacimiento));

                        echo "<li>" . $fechaFormateada . "</li>
                              <li>" . $provincia . "</li>
                              <li>" . $beca . "</li>
                            </ul>";

                        echo ('<meta http-equiv="refresh" content="3">');
                    }
                    else{
                        echo "<p style='color: red; font-size: 25px;'>Ha habido un error al insertar los datos.</p>";
                        die;
                    }
                }

                if(isset($_POST["eliminar"])){
                    $dni = $_POST["dni"];

                    $consulta = $dbh->prepare("DELETE FROM alumnos WHERE dni = '$dni'");

                    $consulta->execute();

                    $resultado = $consulta->rowCount();

                    if($resultado > 0){
                        echo "<p style='color: green; font-size: 25px;'>Los datos del alumno se han eliminado correctamente, serás redireccionado automaticamente.</p>";
                        echo ('<meta http-equiv="refresh" content="3; url=select_all.php">');
                    }
                    else{
                        echo "<p style='color: red; font-size: 25px;'>Ha habido un error al eliminar los datos.</p>";
                        die;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>