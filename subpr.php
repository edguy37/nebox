<?php
include_once 'app/config.inc.php';
$conexion = new PDO('mysql:host=localhost;dbname=sexylove_db', 'root', '');

$link = $_POST['link'];
try {
  $sql = "INSERT INTO promociones (img)
    VALUES ('$link')";
    $sentencia = $conexion -> prepare($sql);
    $sentencia -> execute();
}   catch(PDOException $ex){
    print 'ERROR: '.$ex -> getMessage();
}


include_once "plantillas/declaracion.inc.php";
include_once "plantillas/barra_atras.inc.php";
?>
<p>Promocion subida con exito</p>
