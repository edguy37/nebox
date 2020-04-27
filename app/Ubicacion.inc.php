<?php
class Ubicacion{
	private $id;
	private $ubicacion;

	public function __construct($id, $ubicacion){
		$this -> id = $id;
		$this -> ubicacion = $ubicacion;
	}

	public function obtenerId(){
		return $this -> id;
	}

	public function obtenerUbicacion(){
		return $this -> ubicacion;
	}

	public function cambiarUbicacion($ubicacion){
		$this -> ubicacion = $ubicacion;
	}

}