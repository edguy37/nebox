<?php
include_once 'config.inc.php';
include_once 'Conexion.inc.php';
include_once 'Promocion.inc.php';

class RepositorioPromo{

  public static function obtenerPromociones($conexion){
    $promos = [];

    if (isset($conexion)){
      try{
        $sql = "SELECT promoid, valor, descripcion_promo, img, CH_ID, NOMBRE FROM promociones
                LEFT OUTER JOIN negocio_promos ON promociones.promoid=negocio_promos.promo_id
                LEFT OUTER JOIN chicas ON negocio_promos.negocio_id=chicas.CH_ID
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
}
