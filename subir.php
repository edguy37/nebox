<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
$nombre = $_POST['nombre_negocio'];
$descripcion = $_POST['descripcion_negocio'];
$logo = $_POST['logo_negocio'];
$img1 = $_POST['img1_negocio'];
$img2 = $_POST['img2_negocio'];
$img3 = $_POST['img3_negocio'];
$img4 = $_POST['img4_negocio'];
$img5 = $_POST['img5_negocio'];
$correo = $_POST['correo_negocio'];
$telefono = $_POST['tel_negocio'];
$whats = $_POST['whats'];
$direccion = $_POST['direccion'];
$categorias = $_POST['categoria'];
$ubicacion = $_POST['ubicacion'];
$face = $_POST['facebook'];
$insta = $_POST['instagram'];

$conexion = new PDO('mysql:host=localhost;dbname=sexylove_db', 'root', '');

try {
  $sql = "INSERT INTO chicas (NOMBRE, DESCRIPCION, LOGO, IMG1, IMG2, IMG3, IMG4, IMG5,
    CORREO, NUM_TEL, whats, direccion, CATEGORIA, UBICACION, facebook, insta)
    VALUES ('$nombre', '$descripcion', '$logo', '$img1', '$img2', '$img3', '$img4', '$img5', '$correo', '$telefono', '$whats', '$direccion', '$categorias', '$ubicacion', '$face', '$insta' )";
    $sentencia = $conexion -> prepare($sql);
    $sentencia -> execute();
}   catch(PDOException $ex){
    print 'ERROR: '.$ex -> getMessage();
}


include_once "plantillas/declaracion.inc.php";
include_once "plantillas/barra_atras.inc.php";
?>

<p>Negocio subido con exito</p>
