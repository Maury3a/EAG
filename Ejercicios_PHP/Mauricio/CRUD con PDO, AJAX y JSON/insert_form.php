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

        div#contenido{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }
    </style>
</head>
<body>
    <div id="contenido">
        <div id="formulario">
            <h1>Insertar un alumno</h1>
            <a href='select_all.php'><button>Volver al inicio</button></a>
            <form action="#" id="insertar_alumno" method="POST">
                <label>DNI:</label>
                <input type="text" name="dni" id="dni">
                <br><br>
                <label>Nombre completo:</label>
                <input type="text" name="nombre" id="nombre">
                <br><br>
                <label>Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                <br><br>
                <label>Provincia:</label>
                <input type="text" name="provincia" id="provincia">
                <br><br>
                <label>Beca</label>
                <input type="radio" name="beca" value="Si">Si
                <input type="radio" name="beca" value="No">No
                <br><br>
                <input type="submit" name="enviar" value="Insertar alumno">
            </form>
        </div>
        <div id="resultado">
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).ready();

        $("#insertar_alumno").submit(function(evento){
            evento.preventDefault();
            $.ajax({
                url: "insertar_alumno.php",
                type: "post",
                dataType: "json",
                data: {
                    "dni": $("#dni").val(),
                    "nombre": $("#nombre").val(),
                    "fecha_nacimiento": $("#fecha_nacimiento").val(),
                    "provincia": $("#provincia").val(),
                    "beca": $("input[name=beca]:checked").val()
                },
                success: function(datos){
                    $("div#resultado").html("");

                    $("div#resultado").append("<p style='color: green; font-size: 25px;'>Los datos se han insertado correctamente, serás redireccionado automaticamente.</p>");

                    setTimeout(function(){
                        window.location.href = "select_all.php";
                    }, 5000);
                },
                error: function(error){
                    alert("Se ha producido un error en la consulta.");

                    $("div#resultado").html("");

                    $("div#resultado").append("<p style='color: red; font-size: 25px;'>" + error["responseText"] + "</p>");
                }
            });
        });
    </script>
</body>
</html>