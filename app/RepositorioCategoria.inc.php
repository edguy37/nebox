<?php
include_once 'config.inc.php';
include_once 'Conexion.inc.php';
include_once 'Categoria.inc.php';

class RepositorioCategoria{
	public static function obtenerCategorias($conexion){
		$categoria = [];
		if (isset($conexion)){
			try{
				$sql = "SELECT CATEGORIA, IMAGEN FROM `categorias`";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				if (count($resultado)){
					foreach ($resultado as $fila) {
						$categoria[]= new Categoria(
							$fila, $fila['CATEGORIA'], $fila['IMAGEN']
						);
					}
				}
				else{
					echo 'No se encontraron categorias';
				}
			} catch(PDOException $ex){
				print 'ERROR: '.$ex -> getMessage();
			}
		}
		return $categoria;
	}
}
