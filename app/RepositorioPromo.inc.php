<?php
include_once 'config.inc.php';
include_once 'Conexion.inc.php';
include_once 'Promocion.inc.php';

class RepositorioPromo{

  public static function obtenerPromocionesBusqueda($conexion, $busqueda, $ubic){
    $promos = [];

    if (isset($conexion)){
      try {
        $sql = "SELECT img, CH_ID FROM promociones LEFT OUTER JOIN negocio_promos ON promociones.promoid=negocio_promos.promo_id
                LEFT OUTER JOIN chicas ON negocio_promos.negocio_id=chicas.CH_ID
                WHERE (`NOMBRE` LIKE '%$busqueda%' AND UBICACION LIKE '%$ubic%' AND ACTIVO = 1)
                OR (`CATEGORIA` LIKE '%$busqueda%' AND UBICACION LIKE '%$ubic%' AND ACTIVO = 1)
                OR (`DESCRIPCION` LIKE '%$busqueda%' AND UBICACION LIKE '%$ubic%' AND ACTIVO = 1)
                OR (`UBICACION` LIKE '%$busqueda%' AND UBICACION LIKE '%$ubic%' AND ACTIVO = 1)
                ORDER BY CH_ID DESC";
        $sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				if (count($resultado)){
					foreach ($resultado as $fila) {
						$promos[] = new 	Promocion(
							$fila, $fila, $fila, $fila['img'], $fila['CH_ID'], $fila
						);
					}
				}
				else{
					echo "No se encontraron promociones que coincidan con el criterio de búsqueda";
				}
      } catch (PDOException $ex) {
        print 'ERROR '.$ex -> getMessage();
      }

    }
    return $promos;
  }

  public static function obtenerPromociones($conexion){
    $promos = [];

    if (isset($conexion)){
      try{
        $sql = "SELECT CH_ID, NOMBRE, img, descripcion_promo, promoid, valor
        FROM negocio_promos
        LEFT JOIN chicas on negocio_promos.negocio_id = chicas.CH_ID
        LEFT JOIN promociones on negocio_promos.promo_id = promociones.promoid
        ORDER BY rand();";
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> execute();
        $resultado = $sentencia -> fetchAll();
        if (count($resultado)){
          foreach ($resultado as $fila) {
            $promos[] = new Promocion(
              $fila['promoid'], $fila['valor'], $fila['descripcion_promo'], $fila['img'], $fila['CH_ID'], $fila['NOMBRE']
            );
          }
        }
      }	 catch(PDOException $ex){
        print 'ERROR: '.$ex -> getMessage();
      }
    }

    return $promos;
  }

  public static function obtenerPromocionesNegocio($conexion, $url){
    $promos = [];

    if (isset($conexion)){
      try{
        $sql = "SELECT promoid, valor, descripcion_promo, img, CH_ID, NOMBRE FROM promociones
                LEFT OUTER JOIN negocio_promos ON promociones.promoid=negocio_promos.promo_id
                LEFT OUTER JOIN chicas ON negocio_promos.negocio_id=chicas.CH_ID
                WHERE CH_ID LIKE :id;";
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> bindParam(':id', $url, PDO::PARAM_INT);
        $sentencia -> execute();
        $resultado = $sentencia -> fetchAll();
        if (count($resultado)){
          foreach ($resultado as $fila) {
            $promos[] = new Promocion(
              $fila['promoid'], $fila['valor'], $fila['descripcion_promo'], $fila['img'], $fila['CH_ID'], $fila['NOMBRE']
            );
          }
        }
      }	 catch(PDOException $ex){
        print 'ERROR: '.$ex -> getMessage();
      }
    }

    return $promos;
  }
}
