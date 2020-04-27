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

	$destino = "vip@sexyloveapp.com";
	$correo = $_POST["email"];
	$pago = $_POST["vip"];
	$recibo = $_POST["imagen1"];
	$contenido = "\nCorreo: ".$correo."\nPago: ".$pago."\nRecibo:\n".$img5;
	/*utf8ize($contenido);*/
	mail($destino,"Inscripcion",$contenido,$headers);
	header("Location:vip.php")
?>