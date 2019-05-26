
<?php 
require_once("conexion.php");


// ==========================CONSULTA SELECCION======================
if (isset($_GET['idCurso'])){
$idCurso = $_GET['idCurso'];



$consulta1="SELECT * FROM cursos WHERE idCurso = ?";
$sentencia1 =$conexion->prepare($consulta1);
$sentencia1->execute([$idCurso]);

$resultado1 = $sentencia1->fetch();


}
// =====================CONSULTA INSERTAR===================

if($_POST){
    $idCurso=$_GET['idCurso'];
    $tituloCurso = $_POST['tituloCurso'];
    $fotoCurso = $_FILES['fotoCurso']; 

    $nombreArchivo1 = $fotoCurso['name'];
    $temporal1 = $fotoCurso['tmp_name'];
    $ruta1="../img/" . $nombreArchivo1;
    
    move_uploaded_file($temporal1, $ruta1);   
    
    $profesor = $_POST['profesor'];
    $descripcionCurso = $_POST['descripcionCurso'];
    $estudiantes = $_POST['estudiantes'];
    $precio = $_POST['precio'];


    $consulta2 = "UPDATE cursos SET tituloCurso=?, fotoCurso=?, profesor=?, descripcionCurso=?, estudiantes=?, precio=? WHERE idCurso=?";
    
    $sentencia2=$conexion->prepare($consulta2);
    $resultado2 = $sentencia2->execute([$tituloCurso,$nombreArchivo1,$profesor,$descripcionCurso,$estudiantes,$precio,$idCurso]);
    
    if($resultado2 == true){
        header("location: admin.php");
    }
    
}



// ==========================CONSULTA SELECCION======================
if (isset($_GET['idNoticia'])){
    $idNoticia = $_GET['idNoticia'];
    
    
    
    $consulta3="SELECT * FROM noticias WHERE idNoticia = ?";
    $sentencia3 =$conexion->prepare($consulta3);
    $sentencia3->execute([$idNoticia]);
    
    $resultado3 = $sentencia3->fetch();
    
    
    }
    // =====================CONSULTA INSERTAR===================
    
    if($_POST){
        $idNoticia=$_GET['idNoticia'];
        $tituloNoticia = $_POST['tituloNoticia'];
        $fotoNoticia = $_FILES['fotoNoticia']; 
    
        $nombreArchivo = $fotoNoticia['name'];
        $temporal = $fotoNoticia['tmp_name'];
        $ruta="../img/" . $nombreArchivo;
        
        move_uploaded_file($temporal, $ruta);   
        
        $fechaNoticia = $_POST['fechaNoticia'];
        $descripcionNoticia = $_POST['descripcionNoticia'];
        $horaNoticia = $_POST['horaNoticia'];
    
    
        $consulta4 = "UPDATE noticias SET tituloNoticia=?, fotoNoticia=?, fechaNoticia=?, descripcionNoticia=?, horaNoticia=? WHERE idNoticia=?";
        
        $sentencia4=$conexion->prepare($consulta4);
        $resultado4 = $sentencia4->execute([$tituloNoticia,$nombreArchivo,$fechaNoticia,$descripcionNoticia,$horaNoticia,$idNoticia]);
        
        if($resultado4 == true){
            header("location: adminNoticias.php");
        }
        
    }

?>



