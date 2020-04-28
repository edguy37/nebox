<?php
class Categoria{
	private $id;
	private $categoria;

	public function __construct($id, $categoria, $imagen){
		$this -> id = $id;
		$this -> categoria = $categoria;
		$this -> imagen = $imagen;
	}

	public function obtenerId(){
		return $this -> id;
	}

	public function obtenerCategoria(){
		return $this -> categoria;
	}

	public function obtenerImagen(){
		return $this -> imagen;
	}

	public function cambiarCategoria($categoria){
		$this -> categoria = $categoria;
	}
	public function cambiarImagen($imagen){
		$this -> imagen = $imagen;
	}

}
