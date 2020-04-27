<?php
include_once 'config.inc.php';
include_once 'Conexion.inc.php';
include_once 'Ubicacion.inc.php';

class RepositorioUbicacion{
	public static function obtenerUbicaciones($conexion){
		$ubicacion = [];
		if (isset($conexion)){
			try{
				$sql = "SELECT UBICACION FROM `ubicaciones` WHERE UBICACION LIKE '%merida%' OR UBICACION LIKE '%cancun%' OR UBICACION LIKE '%playa%'";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				if (count($resultado)){
					foreach ($resultado as $fila) {
						$ubicacion[]= new Ubicacion(
							$fila, $fila['UBICACION']
						);
					}
				}
				else{
					echo "No se encontraron ubicaciones";
				}
			} catch(PDOException $ex){
				print 'ERROR: '.$ex -> getMessage();
			}
		}
	}
}