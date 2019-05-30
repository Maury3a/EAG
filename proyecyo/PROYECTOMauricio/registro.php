
<?php
    include "funciones/conexion.php";

    session_start();

    if(isset($_COOKIE["Sesión"])){
        session_decode($_COOKIE["Sesión"]);
    }

    if(isset($_SESSION["id_usuario"])){
        header("location:panel_usuario.php");
    }

    if(isset($_POST["envio"])){
        if(empty($_POST["nombre_usuario"]) || empty($_POST["email"]) || empty($_POST["contrasenia"])){
            echo "<p>No se pueden dejar campos vacíos.</p>";
        }
        else{
            $contraseña_encriptada = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT);
            $consulta = $conexion->prepare("INSERT INTO usuario (id, Nombre_usuario, email, contrasenia, foto) VALUES (NULL, ?, ?, ?, ?)");
            $consulta->execute([$_POST["nombre_usuario"],$_POST["email"], $contraseña_encriptada, $_POST["foto"]);
            $resultado = $consulta->rowCount();
        }
    }   
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Regístrate</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilo.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">


</head>
<body>
        <nav class="navbar justify-content-between" style="background-color:#EEEEEE">
                <a class="navbar-brand" href="#">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Photographer_Barnstar.png" width="30" height="30" class="d-inline-block align-top" alt="">
                  Bootstrap
                </a><p class="usuario">Aureliano Buendía</p>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAxxBzZ7qAJhg_ujzUvnDJVONeOsy0uhVwgJs542lhZZsmu0aX" class="img-perfil">
              </nav>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 style="margin-top:10%;">Multiwish</h3>
            </div>
    
            <ul class="list-unstyled components">
                <p>Lista deseos</p>
                <li class="active" style="line-height: 300%"> 
                    <a href="index.html" class="homeBoton">  <i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
                   
                    <a href="perfil.html">   <button class="perfilBoton"> <i class="fas fa-user"></i>&nbsp; &nbsp; Perfil</button><br></a>
                   
                    <a href="agregarProducto.html"> <button class="agregarBoton"> <i class="fas fa-plus"></i> Agregar producto</button></a>
        </nav>
       
        <!-- Page Content -->
        
    </div>
    <h2 style="text-align:center">REGISTRO</h2>
     <section id="agregarProducto">
      <div class="container">
      <div class="row" style="display: flex;justify-content: center">     
        <form action="#" method="POST" class="registro col-md-6">
            <div class="form-group"><div class="imgForm"><img src="img/foto-persona.jpg" style="width:500%;"></div>
               <br>
               <label for="exampleFormControlFile1" style="margin-top:5%;"><h3>Cambia tu foto</h3></label>
                <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
              </div>
                     <div class="form-group ">
                        <label for="exampleInputEmail1">Introduce tu nombre</label>
                        <input type="text" name="nombre_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                        
                      </div>    
                       <div class="form-group">
                        <label for="exampleInputPassword1">Correo electrónico asociado</label>
                        <input type="email" name="email" class="form-control" id="emailUsuario" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="contrasenia" class="form-control" id="contraseniaUsuario" placeholder="Contraseña">
                      </div>
                  
                      
                      <div class="boton">
                        <button type="submit" name="envio" class="btn btn-primary" style="margin-top:10%;">Regístrate</button>
                      </div>
                    </form>
            </div>
        </div>
    </section> 
    <?php
        if(!empty($resultado)){
            if($resultado != 0){
                echo "<p>Registro completado con éxito. Para iniciar sesión <a href='login.php'>haz click aquí</a>.</p>";
            }
            else{
                echo "<p>Ha habido un error en el registro.</p>";
            }
        }
    ?>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>