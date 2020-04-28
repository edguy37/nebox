<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Chica.inc.php';
include_once 'app/RepositorioNegocio.inc.php';
include_once 'app/RepositorioCategoria.inc.php';
$componentes_url = parse_url($_SERVER["REQUEST_URI"]);

$ruta = $componentes_url['path'];

$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';
if($partes_ruta[0] == 'nebox'){
	if(count($partes_ruta) == 1){
		$ruta_elegida = "vistas/home.php";
	}elseif (count($partes_ruta)==2) {
		switch ($partes_ruta[1]) {
			case 'index.php':
				$ruta_elegida = 'vistas/home.php';
				break;

				case 'inscripcion.php':
				$ruta_elegida = 'vistas/inscripcion.php';
				break;

				case 'inscribir.php':
				$ruta_elegida = 'vistas/inscribir.php';
				break;

				case 'inscribirvip.php':
					$ruta_elegida = 'vistas/inscribirvip.php';
					break;

				case 'vip.php':
				$ruta_elegida = 'vistas/vip.php';
				break;

			default:
				# code...
				break;
		}
	}elseif (count($partes_ruta) == 3) {
		if($partes_ruta[1] == 'negocio'){
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$negocio = RepositorioNegocio :: obtenerNegocioPorId(Conexion::obtener_conexion(), $url);

			if($negocio != null){
				$ruta_elegida = 'vistas/negocio.php';
			}
		}
	}
}
include_once $ruta_elegida;
