<?php
include_once 'Conexion.inc.php';
include_once 'RepositorioChica.inc.php';
include_once 'RepositorioUbicacion.inc.php';
include_once 'Chica.inc.php';
include_once 'Ubicacion.inc.php';
    if(isset($_GET['search'])){
        $busqueda = $_GET['search'];
        $busqueda = preg_replace("#[^0-9a-z]#i","", $busqueda);
        if(isset($_GET['ubic'])){
            $ubic = $_GET['ubic'];
        }
    }
class EscritorChicas{
    
        public static function escribirChicasPromo(){
        $chicas = RepositorioChica::obtenerChicaPromo(Conexion::obtener_conexion());

        if (count($chicas)) {
            foreach ($chicas as $chica) {
                self::escribirChica($chica);
            }
        }
    }

    public static function escribirChicas(){
        global $busqueda;
        global $ubic;
        $chicas = RepositorioChica::obtenerChicaPorBusqueda(Conexion::obtener_conexion(),$busqueda,$ubic);

        if (count($chicas)) {
            foreach ($chicas as $chica) {
                self::escribirChica($chica);
            }
        }
    }

    public static function escribirChica($chica){
        if (!isset($chica)){
            return;
        }
        ?>
        <div class="col-md-3 girls-imgs">
            <a class="resumen-link" href="<?php echo RUTA_CHICA . '/' . $chica -> obtenerId();?>">
                <img src="<?php echo $chica -> obtenerLogo();?>"class="img-responsive img-width">
                <div class="resumen">
                <h3 class="resumen-acortador"><?php echo $chica -> obtenerNombre();?></h3>
                <h3><?php echo "$".$chica -> obtenerPrecio()."/h";?></h3>                    
                </div>
            </a>
        </div>
        <?php
    }
}

class EscritorUbicaciones{
    public static function escribirUbicaciones(){
        $ubicaciones = RepositorioUbicacion::obtenerUbicaciones(Conexion::obtener_conexion());
        if (!empty($ubicaciones)) {
            foreach ($ubicaciones as $ubicacion) {
                self::escribirUbicacion($ubicacion);
            }
        }
    }

    public static function escribirUbicacion($ubicacion){
        if (!isset($ubicacion)){
            return;
        }
        ?><h1><?php echo $ubicacion -> obtenerUbicacion();?></h1>
        <li><a href="#"><?php echo $ubicacion -> obtenerUbicacion();?></a></li>
        <?php
    }
}

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

/*
$output="";
$cnx=new PDO("mysql:host=localhost;dbname=upyappco_sexy","root","") or die("Hubo un problema al iniciar la conexión");
if (isset($_GET['search'])) {
	$searchq = $_GET['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

	$res=$cnx->query("SELECT CH_ID, NOMBRE, LOGO FROM chicas WHERE `NOMBRE` LIKE '%$searchq%' OR `CATEGORIA` LIKE '%$searchq%' OR `DESCRIPCION` LIKE '%$searchq%'") or die("Ocurrió un error al realizar su búsqueda");
	$count=$cnx->query("SELECT COUNT(*) FROM chicas WHERE `NOMBRE` LIKE '%$searchq%' OR `CATEGORIA` LIKE '%$searchq%' OR `DESCRIPCION` LIKE '%$searchq%'");
	$lesCount = $count->fetch(PDO::FETCH_BOTH);
	$resCount=$lesCount[0];
	if ($resCount==0){
		$output = "No se encontraron resultados";
	}
	else{
		while ($row = $res -> fetch(PDO::FETCH_ASSOC)) {
            $id = $row['CH_ID'];
			$nombre = $row['NOMBRE'];
			$foto = $row['LOGO'];
    		if (isset($nombre)) {
    		$output .= '
   				<div class="col-md-3 girls-imgs">
   					<a href="#">
    				<img src="'.$foto.'" class="img-responsive">
    				<h3>'.$nombre.'</h3>
   				</div>';
    		}
		}
	}
}
*/