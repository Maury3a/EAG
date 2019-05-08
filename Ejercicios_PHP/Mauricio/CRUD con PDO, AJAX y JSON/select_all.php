<?php
    include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD con PDO y AJAX</title>
    <style>
        *{
            font-family: Arial;
        }

        div#contenido{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }

        form{
            margin: 25px;
        }
    </style>
</head>
<body>
    <h1>Aplicación de gestión de alumnos</h1>
    <div id="contenido">
        <div id="formularios">
            <form action="insert_form.php">
                <input type="submit" value="Insertar alumno nuevo">
            </form>
            <form action="#" method="GET" id="mostrar_todos">
                <input type="submit" name="mostrar_todos" value="Mostrar todos los alumnos">
            </form>
            <form action="#" method="GET" id="mostrar_provincias">
                <input type="submit" name="filtrar_provincias" value="Mostrar alumnos por provincia">
                <select name="provincia" id="provincia">
                    <?php
                        $consulta = $dbh->prepare("SELECT DISTINCT provincia FROM alumnos");

                        $consulta->execute();

                        $provincias = $consulta->fetchAll();

                        foreach ($provincias as $dato) {
                            echo "<option value=" . $dato["provincia"] . ">" . $dato["provincia"] . "</option>";
                        }
                    ?>
                </select>
            </form>
            <form action="#" method="GET">
                <input type="submit" name="filtrar_becas" value="Mostrar alumnos por beca">
                <select name="beca">
                    <?php
                        $consulta = $dbh->prepare("SELECT DISTINCT beca FROM alumnos");

                        $consulta->execute();

                        $beca = $consulta->fetchAll();

                        foreach ($beca as $dato) {
                            echo "<option value=" . $dato["beca"] . ">" . $dato["beca"] . "</option>";
                        }
                    ?>
                </select>
            </form>
        </div>
        <div id="resultado">
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).ready();

        $("#mostrar_todos").submit(function(evento){
            evento.preventDefault();
            $.ajax({
                url: "mostrar_todos.php",
                type: "get",
                dataType: "json",
                success: function(datos){
                    let alumnos = datos["alumnos"];

                    $("div#resultado").html("");

                    if(alumnos.length > 0){
                        let tabla = $("<table cellpadding='15'><thead><tr><th>DNI</th><th>Nombre</th><th>Fecha de nacimiento</th><th>Provincia</th><th>Beca</th></tr></thead><tbody id='datos'></tbody></table>");

                        $("div#resultado").append(tabla);

                        for(let i = 0; i < alumnos.length; i++){
                            $("tbody#datos").append("<tr><td>" + alumnos[i]["dni"] + "</td><td>" + alumnos[i]["nom_alum"] + "</td><td>" + new Date(alumnos[i]["fecha_nac"]).toLocaleDateString() + "</td><td>" + alumnos[i]["provincia"] + "</td><td>" + alumnos[i]["beca"] + "</td><td><a href='update_delete.php?dni=" + alumnos[i]["dni"] + "'><button>Editar</button></a></td></tr>");
                        }
                    }
                },
                error: function(error){
                    alert("Se ha producido un error en la consulta.");
                    console.log(error["responseText"]);
                }
            });
        });

        $("#mostrar_provincias").submit(function(evento){
            evento.preventDefault();
            $.ajax({
                url: "mostrar_provincias.php",
                type: "get",
                dataType: "json",
                data: {"provincia": $("select#provincia").val()},
                success: function(datos){
                    let alumnos = datos["alumnos"];

                    $("div#resultado").html("");

                    if(alumnos.length > 0){
                        let tabla = $("<table cellpadding='15'><thead><tr><th>DNI</th><th>Nombre</th><th>Fecha de nacimiento</th><th>Provincia</th><th>Beca</th></tr></thead><tbody id='datos'></tbody></table>");

                        $("div#resultado").append(tabla);

                        for(let i = 0; i < alumnos.length; i++){
                            $("tbody#datos").append("<tr><td>" + alumnos[i]["dni"] + "</td><td>" + alumnos[i]["nom_alum"] + "</td><td>" + new Date(alumnos[i]["fecha_nac"]).toLocaleDateString() + "</td><td>" + alumnos[i]["provincia"] + "</td><td>" + alumnos[i]["beca"] + "</td><td><a href='update_delete.php?dni=" + alumnos[i]["dni"] + "'><button>Editar</button></a></td></tr>");
                        }
                    }
                },
                error: function(error){
                    alert("Se ha producido un error en la consulta.");
                    console.log(error["responseText"]);
                }
            });
        });
    </script>
</body>
</html>