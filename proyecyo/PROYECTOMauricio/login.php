<?php 
  session_start();
if(isset($_COOKIE['id']) && !isset($_SESSION['id'])){
  $_SESSION['email']=$_COOKIE['email']; //vemos si existen las cookies para un autologin
  $_SESSION['contrasenia']=$_COOKIE['contrasenia'];
  $_SESSION['id']=$_COOKIE['id'];
  $_SESSION['foto']=$_COOKIE['foto'];
}
if(isset($_SESSION['id'])){ //vemos si la sesión está abierta
  // header('location:index.php');
}
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $contrasenia=$_POST['contrasenia'];
  if(empty($email)){
    $errorEmail="No has introducido ningún email";
  }else if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
    $errorEmail="Email no válido";
  }
  if(empty($contrasenia)){
    $errorContrasenia="La contraseña está vacía";

  }
  if(strlen($contrasenia)<8){
    $errorContrasenia="La contraseña no tiene un mínimo de 8 carácteres";

  }
  if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($contrasenia) && strlen($contrasenia)>=8){
    require_once "funciones/conexion.php";
    if($conexion!=null){
      $consulta = "SELECT * FROM usuario WHERE email = ? AND contrasenia = ?";
      $sentencia = $conexion -> prepare($consulta);
      $sentencia ->execute([$email,$contrasenia]);//hash('sha512',$contrasenia)
      $resultado = $sentencia->fetchAll();
      // var_dump($resultado);
      if($resultado!=null && $resultado && count($resultado)>0){ // si en resultado hay algo
        foreach($resultado as $usuario){
          $_SESSION['email']=$usuario['email']; //vemos si existen las cookies para un autologin
          $_SESSION['contrasenia']=$usuario['contrasenia'];
          $_SESSION['id']=$usuario['id'];
          $_SESSION['foto']=$usuario['foto'];
          if(isset($_POST['recuerdame'])){ //si hemos marcado el checkbox
            setcookie("email", $email, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie("contrasenia", $usuario['contrasenia'], time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie("id", $usuario['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie("foto", $usuario['foto'], time() + (86400 * 30), "/"); // 86400 = 1 day
          }
          header('location:index.php');
          // var_dump("logueado guay");
        }
      }else{
        $error_system="Usuario o contraseña incorrectos";
      }

    }
  }
  
}
//
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Agrega tu producto</title>

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
    
     <section id="agregarProducto">
      <div class="container"> 
     
      <div class="row" style="display: flex;justify-content: center"> 
      
        <form action="" method="POST" class="registro col-md-6">
            <div class="form-group">

                <h2 style="text-align:center;padding-bottom: 7%;">Login</h2>
              </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Introduce tu correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="<?php isset($email) ? $email : "" ?>"> <!--es la estructura de un if y else acortada-->
                        <span class="primary-danger" id="errorEmail"><?php isset($errorEmail) ? $errorEmail : "" ?></span>
                      </div>   
                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña" value="<?php isset($contrasenia) ? $contrasenia : "" ?>">
                        <span class="primary-danger" id="errorContrasenia"><?php isset($errorContrasenia) ? $errorContrasenia : "" ?></span>

                      </div>
                      <div class="form-check">
                        <input name="recuerdame" type="checkbox" class="form-check-input" id="recuerdame">
                        <label class="form-check-label" for="recuerdame">Recuérdame</label>
                      </div>
                      <div class="boton">
                       <input name="submit" type="submit" class="btn btn-primary" style="margin-top:10%;" value="Entrar">
                      </div>
                    </form>
                    <a class="hide" id="modalshow" data-toggle="modal" data-target="#modal"></a>
        </div>
        </div>
    </section> 
    <?php require_once 'modal.php'; ?>

    <!-- jQuery CDN - Min version -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <?php
      if(isset($error_system)){
        ?> <script>
        $(document).ready(function(){
          $('#modalshow').trigger("click");
        });
        </script> <?php
      }
    ?>
</body>

</html>