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
	private $whats;
	private $direccion;
	private $categorias;
	private $ubicacion;
	private $precio;
	private $activo;
	private $promocion;
	private $lunes;
	private $martes;
	private $miercoles;
	private $jueves;
	private $viernes;
	private $sabado;
	private $domingo;
	private $tarjeta;
	private $alcohol;
	private $estacionamiento;
	private $est_bicis;
	private $valor_promo;
	private $descripcion_promo;
	private $face;
	private $insta;

	public function __construct($id, $nombre, $descripcion, $logo, $img1, $img2, $img3, $img4, $img5, $fechaRegistro, $correo, $telefono, $whats, $direccion, $categorias,
	$ubicacion, $precio, $activo, $promocion, $lunes, $martes, $miercoles, $jueves, $viernes, $sabado, $domingo, $tarjeta, $alcohol, $estacionamiento, $est_bicis, $valor_promo,
	$descripcion_promo,	$face, $insta){
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
		$this -> whats = $whats;
		$this -> direccion = $direccion;
		$this -> categorias = $categorias;
		$this -> ubicacion = $ubicacion;
		$this -> precio = $precio;
		$this -> activo = $activo;
		$this -> promocion = $promocion;
		$this -> lunes = $lunes;
		$this -> martes = $martes;
		$this -> miercoles = $miercoles;
		$this -> jueves = $jueves;
		$this -> viernes = $viernes;
		$this -> sabado = $sabado;
		$this -> domingo = $domingo;
		$this -> tarjeta = $tarjeta;
		$this -> alcohol = $alcohol;
		$this -> estacionamiento = $estacionamiento;
		$this -> est_bicis = $est_bicis;
		$this -> valor_promo = $valor_promo;
		$this -> promocion_promo = $descripcion_promo;
		$this -> face = $face;
		$this -> insta = $insta;
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

	public function obtenerWhats(){
		return $this -> whats;
	}

	public function obtenerDireccion(){
		return $this -> direccion;
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

	public function obtenerPromo(){
		return $this -> promocion;
	}

	public function obtenerLunes(){
		return $this -> lunes;
	}

	public function obtenerMartes(){
		return $this -> martes;
	}

	public function obtenerMiercoles(){
		return $this -> miercoles;
	}

	public function obtenerJueves(){
		return $this -> jueves;
	}

	public function obtenerViernes(){
		return $this -> viernes;
	}

	public function obtenerSabado(){
		return $this -> sabado;
	}

	public function obtenerDomingo(){
		return $this -> domingo;
	}

	public function obtenerTarjeta(){
		return $this -> tarjeta;
	}

	public function obtenerAlcohol(){
		return $this -> alcohol;
	}

	public function obtenerEstacionamiento(){
		return $this -> estacionamiento;
	}

	public function obtenerBicis(){
		return $this -> est_bicis;
	}

	public function obtenerValorPromo(){
		return $this -> valor_promo;
	}

	public function obtenerDescripcionPromo(){
		return $this -> descripcion_promo;
	}

	public function obtenerFace(){
		return $this -> face;
	}

	public function obtenerInsta(){
		return $this -> insta;
	}
// ================================================setters========================================
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
	public function cambiarFechaRegistro($fechaRegistro){
		$this -> fechaRegistro = $fechaRegistro;
	}

	public function cambiarCorreo($correo){
		$this -> correo = $correo;
	}

	public function cambiarTelefono($telefono){
		$this -> telefono = $telefono;
	}

	public function cambiarWhats($whats){
		$this -> whats = $whats;
	}

	public function cambiarDireccion($direccion){
		$this -> direccion = $direccion;
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

	public function cambiarPromo($promocion){
		$this -> promocion = $promocion;
	}

	public function cambiarLunes($lunes){
		$this -> lunes = $lunes;
	}

	public function cambiarMartes($martes){
		$this -> martes = $martes;
	}

	public function cambiarMiercoles($miercoles){
		$this -> miercoles = $miercoles;
	}

	public function cambiarJueves($jueves){
		$this -> jueves = $jueves;
	}

	public function cambiarViernes($viernes){
		$this -> viernes = $viernes;
	}

	public function cambiarSabado($sabado){
		$this -> sabado = $sabado;
	}

	public function cambiarDomingo($domingo){
		$this -> domingo = $domingo;
	}

	public function cambiarTarjeta($tarjeta){
		$this -> tarjeta = $tarjeta;
	}

	public function cambiarAlcohol($alcohol){
		$this -> alcohol = $alcohol;
	}

	public function cambiarEstacionamiento($estacionamiento){
		$this -> estacionamiento = $estacionamiento;
	}

	public function cambiarBicis($est_bicis){
		$this -> est_bicis = $est_bicis;
	}

	public function cambiarValorPromo($valor_promo){
		$this -> valor_promo = $valor_promo;
	}

	public function cambiarDescripcionPromo($descripcion_promo){
		$this -> descripcion_promo = $descripcion_promo;
	}

	public function cambiarFace($face){
		$this -> face = $face;
	}

	public function cambiarInsta($insta){
		$this -> insta = $insta;
	}
}
