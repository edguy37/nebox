<?php

include_once 'config.inc.php';
include_once 'Conexion.inc.php';
include_once 'Chica.inc.php';

class RepositorioNegocio{

	public static function obtenerNegocioPorId($conexion, $url){
		$negocio = null;

		if(isset($conexion)){
			try{
				$sql = "SELECT * FROM chicas
								LEFT OUTER JOIN horario ON chicas.CH_ID=horario.negocio_id
								LEFT OUTER JOIN extras ON chicas.CH_ID=extras.negocio_id
								LEFT OUTER JOIN negocio_promos ON chicas.CH_ID=negocio_promos.negocio_id
								LEFT OUTER JOIN promociones ON  negocio_promos.promo_id=promociones.promoid
								WHERE CH_ID LIKE :id";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':id', $url, PDO::PARAM_INT);
				$sentencia -> execute();
				$resultado = $sentencia -> fetch();

				if(!empty($resultado)){
					$negocio = new Chica(
						$resultado['CH_ID'], $resultado['NOMBRE'], $resultado['DESCRIPCION'], $resultado['LOGO'], $resultado['IMG1'], $resultado['IMG2'],
						$resultado['IMG3'], $resultado['IMG4'], $resultado['IMG5'], $resultado['FECHA_REG'], $resultado['CORREO'], $resultado['NUM_TEL'], $resultado['direccion'],
						$resultado['CATEGORIA'], $resultado['UBICACION'], $resultado['PRECIO'], $resultado['ACTIVO'], $resultado['PROMOCION'], $resultado['lunes'],
						$resultado['martes'], $resultado['miercoles'], $resultado['jueves'], $resultado['viernes'], $resultado['sabado'], $resultado['domingo'],
						$resultado['tarjeta'], $resultado['alcohol'], $resultado['estacionamiento'], $resultado['est_bicis'], $resultado['valor'], $resultado['descripcion_promo']
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

	public static function obtenerExtras($conexion, $url){
			$negocio = null;

			if(isset($conexion)){
				try{
					$sql = "SELECT tarjeta, alcohol, estacionamiento, est_bicis FROM chicas INNER JOIN horario ON chicas.CH_ID=horario.negocio_id INNER JOIN extras ON chicas.CH_ID=extras.negocio_id WHERE CH_ID LIKE :id";
					$sentencia = $conexion -> prepare($sql);
					$sentencia -> bindParam(':id', $url, PDO::PARAM_INT);
					$sentencia -> execute();
					$resultado = $sentencia -> fetch();

					if(!empty($resultado)){
						$negocio = new Chica(
							$resultado, $resultado, $resultado, $resultado, $resultado, $resultado,
							$resultado, $resultado, $resultado, $resultado, $resultado, $resultado,
							$resultado, $resultado, $resultado, $resultado, $resultado, $resultado,
							$resultado, $resultado, $resultado, $resultado, $resultado, $resultado, $resultado,
							$resultado['tarjeta'], $resultado['alcohol'], $resultado['estacionamiento'], $resultado['est_bicis'], $resultado, $resultado
							);
					}
					else{
						echo "No hay nada en extras";
					}
				} catch(PDOException $ex){
					print 'ERROR'. $ex -> getMessage();
				}
			}
			return $negocio;
	}

	public static function obtenerNegocioConHorario($conexion, $url){
		$negocios = [];

		if(isset($conexion)){
			try{
				$sql = "SELECT * FROM chicas INNER JOIN horario ON chicas.CH_ID=horario.negocio_id WHERE CH_ID LIKE :id";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':id', $url, PDO::PARAM_INT);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();

				if (count($resultado)){
					foreach ($resultado as $fila) {
						$negocios[] = new 	Chica(
							$fila['CH_ID'], $fila['NOMBRE'], $fila['DESCRIPCION'], $fila['LOGO'], $fila['IMG1'], $fila['IMG2'],
							$fila['IMG3'], $fila['IMG4'], $fila['IMG5'], $fila['FECHA_REG'], $fila['CORREO'], $fila['NUM_TEL'], $fila['direccion'],
							$fila['CATEGORIA'], $fila['UBICACION'], $fila['PRECIO'], $fila['ACTIVO'], $fila['PROMOCION'], $fila['lunes'],
							$fila['martes'], $fila['miercoles'], $fila['jueves'], $fila['viernes'], $fila['sabado'], $fila['domingo'],
							$fila, $fila, $fila, $fila, $fila, $fila
						);
					}
				}
				else{
					echo "Horario no disponible";
				}
			} catch(PDOException $ex){
				print 'ERROR'. $ex -> getMessage();
			}
		}
		return $negocios;
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
							$fila['CH_ID'], $fila['NOMBRE'], $fila, $fila['LOGO'], $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila['PRECIO'], $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila
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
							$fila['CH_ID'], $fila['NOMBRE'], $fila, $fila['LOGO'], $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila['PRECIO'], $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila, $fila
						);
					}
				}
			}	 catch(PDOException $ex){
				print 'ERROR: '.$ex -> getMessage();
			}
		}

		return $negocios;
	}
}
