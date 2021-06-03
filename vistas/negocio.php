<?php
//include_once 'app/config.inc.php';
//include_once 'app/Conexion.inc.php';
//include_once 'app/Chica.inc.php';
//include_once 'app/RepositorioChica.inc.php';
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_atras.inc.php';
include_once 'app/buscador.inc.php';
?>
<div class="container-fluid">
	<div class="container text-center nombre-chica">
		<h1><?php echo $negocio -> obtenerNombre();?></h1>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6 col-lg-8 descripcion-xl">
			<div class="algo">
				<div class="container justificar"> <p><?php echo $negocio -> obtenerDescripcion();?></p> </div>
			</div>
			<div class="imagenes">
				<div class="row justify-content-center">
					<?php
						$imgs = explode(" ", $negocio -> obtenerImg1());
						foreach ($imgs as $img) {
							?>
							<div class="margen-imgs col-12 col-sm-10 col-md-10">
							<img class="ajustable-pantalla" src="<?php echo $img;?>" alt="">
						</div> <?php
							// foreach ($exploded as $img) {
							// 	echo "<img src=".$img."><br>";
							// }
						}
						// echo $negocio -> obtenerImg1();
					 ?>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="container informacion">
				<div class="row">
					<div class="col-12">
						<div class="container seccion-horario caja-info">
							<div class="">
								<h4 class="horario-titulo">
									<i class="fa fa-clock-o" aria-hidden="true"></i> Horario
								</h4>
							</div>
							<table class="horario">
								<?php EscritorNegocios::escribirHorarios(); ?>
							</table>
						</div>
					</div>
					<div class="col-12">
						<div class="container caja-info">
							<div class="info-element">
								<a href="tel:<?php echo $negocio -> obtenerTelefono();?>">
										<i class="fas fa-phone fa-rotate-90"></i>
										<?php echo $negocio -> obtenerTelefono();?>
								</a>
							</div>
							<div class="info-element">
										<i class="fas fa-map-marker-alt"></i>
										<?php echo $negocio -> obtenerDireccion();?>
							</div>
							<div class="info-element">
								<a target="_blank"href="https://api.whatsapp.com/send?phone=<?php echo $negocio -> obtenerWhats();?>&text=Hola, vi tu promocion en Nebox">
									<i class="fab fa-whatsapp"></i>
									Envíanos un WhatsApp
								</a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php echo $negocio -> obtenerFace(); ?>">	<i class="fa fa-facebook-square" aria-hidden="true"></i>
								<?php echo substr($negocio -> obtenerFace(),24); ?> </a> <br>
								<a target="_blank" href="<?php echo $negocio -> obtenerInsta(); ?>"> <i class="fa fa-instagram" aria-hidden="true"></i>
									<?php echo substr($negocio -> obtenerInsta(),25); ?> </a> <br> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<?php
include_once 'plantillas/footer.inc.php';
include_once 'plantillas/cierre.inc.php';
?>
