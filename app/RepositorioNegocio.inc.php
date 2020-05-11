<?php

include_once 'config.inc.php';
include_once 'Conexion.inc.php';
include_once 'Chica.inc.php';

class RepositorioNegocio{

	public static function obtenerNegocioPorId($conexion, $url){
		$negocio = null;

		if(isset($conexion)){
			try{
				$sql = "SELECT * FROM chicas WHERE CH_ID LIKE :id";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':id', $url, PDO::PARAM_INT);
				$sentencia -> execute();
				$resultado = $sentencia -> fetch();

				if(!empty($resultado)){
					$negocio = new Chica(
						$resultado['CH_ID'], $resultado['NOMBRE'], $resultado['DESCRIPCION'], $resultado['LOGO'], $resultado['IMG1'], $resultado['IMG2'],
						$resultado['IMG3'], $resultado['IMG4'], $resultado['IMG5'], $resultado['FECHA_REG'], $resultado['CORREO'], $resultado['NUM_TEL'],
						$resultado['CATEGORIA'], $resultado['UBICACION'], $resultado['PRECIO'], $resultado['ACTIVO'], $resultado['PROMOCION']
						);
				}
				else{
					echo "No hay nada";
				}
			} catch(PDOException $ex){
				print 'ERROR'. $ex -> getMessage();
			}
		}

		return $negocio;
	}

	public static function obtenerNegocioPorBusqueda($conexion,$busqueda,$ubic){
		$negocios = [];

		if (isset($conexion)){
			try{
				$sql = "SELECT CH_ID, NOMBRE, LOGO, PRECIO FROM chicas WHERE (`NOMBRE` LIKE '%$busqueda%' AND UBICACION LIKE '%$ubic%' AND ACTIVO = 1) OR (`CATEGORIA` LIKE '%$busqueda%' AND UBICACION LIKE '%$ubic%' AND ACTIVO = 1) OR (`DESCRIPCION` LIKE '%$busqueda%' AND UBICACION LIKE '%$ubic%' AND ACTIVO = 1) OR (`UBICACION` LIKE '%$busqueda%' AND UBICACION LIKE '%$ubic%' AND ACTIVO = 1) ORDER BY CH_ID DESC";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				if (count($resultado)){
					foreach ($resultado as $fila) {
						$negocios[] = new 	Chica(
							$fila['CH_ID'], $fila['NOMBRE'], $fila, $fila['LOGO'], $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila['PRECIO'], $fila, $fila
						);
					}
				}
				else{
					echo "No se encontraron negocios";
				}
			} catch(PDOException $ex){
				print 'ERROR: '.$ex -> getMessage();
			}
		}

		return $negocios;
	}

	public static function obtenerNegocioPromo($conexion){
		$negocios = [];

		if (isset($conexion)){
			try{
				$sql = "SELECT CH_ID, NOMBRE, LOGO, PRECIO FROM chicas WHERE PROMOCION != 0 AND ACTIVO = 1 ORDER BY rand()";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				if (count($resultado)){
					foreach ($resultado as $fila) {
						$negocios[] = new Chica(
							$fila['CH_ID'], $fila['NOMBRE'], $fila, $fila['LOGO'], $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila['PRECIO'], $fila, $fila
						);$negocio = null;
					}
				}
			}	 catch(PDOException $ex){
				print 'ERROR: '.$ex -> getMessage();
			}
		}

		return $negocios;
	}
}