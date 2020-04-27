<?php
function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } 
    else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}
$headers = "Content-Type: text/plain; charset=UTF-8";

	$destino = "inscripcion@sexyloveapp.com";
	$nombre = $_POST["name"];
	$numero = $_POST["number"];
	$correo = $_POST["email"];
	$precio = $_POST["price"];
	$ubicacion = $_POST["ubication"];
	$descripcion = $_POST["description"];
	$img1 = $_POST["imagen1"];
	$img2 = $_POST["imagen2"];
	$img3 = $_POST["imagen3"];
	$img4 = $_POST["imagen4"];
	$img5 = $_POST["imagen5"];
	$categoria = $_POST["category"];
	$categorias = implode(", ", $categoria);
	$contenido = "Nombre: ".$nombre."\nTeléfono: ".$numero."\nCorreo: ".$correo."\nPrecio: ".$precio."\nUbicacion: ".$ubicacion."\nDescripción:\n".$descripcion."\nImagen1: ".$img1."\nImagen2: ".$img2."\nImagen3: ".$img3."\nImagen4: ".$img4."\nImagen5: ".$img5."\nCategoría: ".$categorias;
	/*utf8ize($contenido);*/
	mail($destino,"Inscripcion",$contenido,$headers);
	header("Location:inscripcion.php")
?>