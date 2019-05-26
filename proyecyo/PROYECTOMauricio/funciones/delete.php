<?php

require_once("conexion.php");

if (isset($_GET['id_curso'])){
$idCurso = $_GET['id_curso'];

$consulta1="DELETE FROM cursos_online WHERE id_curso=?";
$sentencia1 =$conexion->prepare($consulta1);
$sentencia1 ->execute([$idCurso]);

}
?>
<?php include("header.php");?>

<div class="container">
    <div class="row">
        <div class="col md-4 offset-5 mb-5">

        <a href="adminCurso.php" class="btn btn-success"><i class="fa fa-arrow-circle-o-left mr-2"></i>Volver</a>

        </div>
    </div>

</div>

<?php include("footer.php");?>
