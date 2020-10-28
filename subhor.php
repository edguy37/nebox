<?php
include_once 'app/config.inc.php';
$conexion = new PDO('mysql:host=localhost;dbname=sexylove_db', 'root', '');

$id = $_POST['id'];
$lunes = $_POST['lunes'];
$martes = $_POST['martes'];
$miercoles = $_POST['miercoles'];
$jueves = $_POST['jueves'];
$viernes = $_POST['viernes'];
$sabado = $_POST['sabado'];
$domingo = $_POST['domingo'];
try {
  $sql = "INSERT INTO horario (negocio_id, lunes, martes, miercoles, jueves, viernes, sabado, domingo)
    VALUES ('$id', '$lunes', '$martes', '$miercoles', '$jueves', '$viernes', '$sabado', '$domingo')";
    $sentencia = $conexion -> prepare($sql);
    $sentencia -> execute();
}   catch(PDOException $ex){
    print 'ERROR: '.$ex -> getMessage();
}


include_once "plantillas/declaracion.inc.php";
include_once "plantillas/barra_atras.inc.php";
?>
<p>Horario subido con exito</p>
