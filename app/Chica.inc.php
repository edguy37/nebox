<?php
class Chica{
	private $id;
	private $nombre;
	private $descripcion;
	private $logo;
	private $img1;
	private $img2;
	private $img3;
	private $img4;
	private $img5;
	private $fechaRegistro;
	private $correo;
	private $telefono;
	private $categorias;
	private $ubicacion;
	private $precio;
	private $activo;
	private $promocion;
	private $descanso;
	private $open;
	private $close;
	private $day;

	public function __construct($id, $nombre, $descripcion, $logo, $img1, $img2, $img3, $img4, $img5, $fechaRegistro, $correo, $telefono, $categorias, $ubicacion, $precio, $activo, $promocion, $descanso, $open, $close, $day){
		$this -> id = $id;
		$this -> nombre = $nombre;
		$this -> descripcion = $descripcion;
		$this -> logo = $logo;
		$this -> img1 = $img1;
		$this -> img2 = $img2;
		$this -> img3 = $img3;
		$this -> img4 = $img4;
		$this -> img5 = $img5;
		$this -> fecha_registro = $fechaRegistro;
		$this -> correo = $correo;
		$this -> telefono = $telefono;
		$this -> categorias = $categorias;
		$this -> ubicacion = $ubicacion;
		$this -> precio = $precio;
		$this -> activo = $activo;
		$this -> promocion = $promocion;
		$this -> descanso = $descanso;
		$this -> open = $open;
		$this -> close = $close;
		$this -> day = $day;
	}

	public function obtenerId(){
		return $this -> id;
	}

	public function obtenerNombre(){
		return $this -> nombre;
	}

	public function obtenerDescripcion(){
		return $this -> descripcion;
	}

	public function obtenerLogo(){
		return $this -> logo;
	}

	public function obtenerImg1(){
		return $this -> img1;
	}

	public function obtenerImg2(){
		return $this -> img2;
	}

	public function obtenerImg3(){
		return $this -> img3;
	}

	public function obtenerImg4(){
		return $this -> img4;
	}

	public function obtenerImg5(){
		return $this -> img5;
	}

	public function obtenerFechaRegistro(){
		return $this -> fecha_registro;
	}

	public function obtenerCorreo(){
		return $this -> correo;
	}

	public function obtenerTelefono(){
		return $this -> telefono;
	}

	public function obtenerCategorias(){
		return $this -> categorias;
	}

	public function obtenerUbicacion(){
		return $this -> ubicacion;
	}

	public function obtenerPrecio(){
		return $this -> precio;
	}

	public function estaActivo(){
		return $this -> activo;
	}

	public function obtenerDescanso(){
		return $this -> descanso;
	}

	public function obtenerOpen(){
		return $this -> open;
	}

	public function obtenerClose(){
		return $this -> close;
	}

	public function obtenerDay(){
		return $this -> day;
	}

	public function cambiarNombre($nombre){
		$this -> nombre = $nombre;
	}

	public function cambiarDescripcion($descripcion){
		$this -> descripcion = $descripcion;
	}

	public function cambiarLogo($logo){
		$this -> logo = $logo;
	}

	public function cambiarImg1($img1){
		$this -> img1 = $img1;
	}

	public function cambiarImg2($img2){
		$this -> img2 = $img2;
	}

	public function cambiarImg3($img3){
		$this -> img3 = $img3;
	}

	public function cambiarImg4($img4){
		$this -> img4 = $img4;
	}

	public function cambiarImg5($img5){
		$this -> img5 = $img5;
	}

	//Tener cuidado con esta
	public function cambiarFechaRegistro($fecha_registro){
		$this -> fechaRegistro = $fechaRegistro;
	}

	public function cambiarCorreo($correo){
		$this -> correo = $correo;
	}

	public function cambiarTelefono($telefono){
		$this -> telefono = $telefono;
	}

	public function cambiarCategorias($categorias){
		$this -> categorias = $categorias;
	}

	public function cambiarUbicacion($ubicacion){
		$this -> ubicacion = $ubicacion;
	}

	public function cambiarPrecio($precio){
		$this -> precio = $precio;
	}

	public function cambiarActivo($activo){
		$this -> activo = $activo;
	}

	public function cambiarDescanso($descanso){
		$this -> descanso = $descanso;
	}

	public function cambiarOpen($open){
		$this -> open = $open;
	}

	public function cambiarClose($close){
		$this -> close = $close;
	}

	public function cambiarDay($day){
		$this -> day = $day;
	}

}
