<?php
class Promocion{
	private $id;
	private $valor;
	private $descripcion;
	private $img;
	private $negocio_id;
  private $negocio;

	public function __construct($id, $valor, $descripcion, $img, $negocio_id, $negocio){
		$this -> id = $id;
		$this -> valor = $valor;
		$this -> descripcion = $descripcion;
		$this -> img = $img;
		$this -> negocio_id = $negocio_id;
    $this -> negocio = $negocio;
	}

	public function obtenerId(){
		return $this -> id;
	}

	public function obtenerValor(){
		return $this -> valor;
	}

	public function obtenerDescripcion(){
		return $this -> descripcion;
	}

	public function obtenerImg(){
		return $this -> img;
	}

	public function obtenerNegocioId(){
		return $this -> negocio_id;
	}

  public function obtenerNegocio(){
    return $this -> negocio;
  }

	public function cambiarValor($valor){
		$this -> valor = $valor;
	}
	public function cambiarDescripcion($descripcion){
		$this -> descri = $descripcion;
	}

}
