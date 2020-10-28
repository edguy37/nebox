<?php
include_once 'app/config.inc.php';
$conexion = new PDO('mysql:host=localhost;dbname=sexylove_db', 'root', '');

$nid = $_POST['nid'];
$promoid = $_POST['promoid'];
try {
  $sql = "INSERT INTO negocio_promos (negocio_id, promo_id)
    VALUES ('$nid', '$promoid')";
    $sentencia = $conexion -> prepare($sql);
    $sentencia -> execute();
}   catch(PDOException $ex){
    print 'ERROR: '.$ex -> getMessage();
}


include_once "plantillas/declaracion.inc.php";
include_once "plantillas/barra_atras.inc.php";
?>
<p>Promocion y negocio enlazados con exito</p>
