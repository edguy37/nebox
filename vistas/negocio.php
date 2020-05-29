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
	<div class="row justify-content-center">
		<div class="col-md-6 col-lg-8 descripcion-xl">
			<div class="algo">
				<div class="container text-center nombre-chica">
					<h1><?php echo $negocio -> obtenerNombre();?></h1>
				</div>
				<div class="justificar container"> <p><?php echo $negocio -> obtenerDescripcion();?></p> </div>
			</div>
			<div class="imagenes">
				<div class="row justify-content-center">
					<div class="margen-imgs col-12 col-sm-10 col-md-10">
						<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg1(); ?>" alt="">
					</div>
					<div class="margen-imgs col-12 col-sm-10 col-md-10">
						<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg2(); ?>" alt="">
					</div>
					<div class="margen-imgs col-12 col-sm-10 col-md-10">
						<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg3(); ?>" alt="">
					</div>
					<div class="margen-imgs col-12 col-sm-10 col-md-10">
						<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg4(); ?>" alt="">
					</div>
					<div class="margen-imgs col-12 col-sm-10 col-md-10">
						<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg5(); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="informacion container">
				<div class="row">
					<div class="col-12">
						<div class="seccion-horario caja-info container">
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
								<a href="https://api.whatsapp.com/send?phone=<?php echo $negocio -> obtenerTelefono();?>">
									<i class="fab fa-whatsapp"></i>
									Envíanos un WhatsApp
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<br>
<div>
    <a href="<?php echo RUTA_INSCRIPCION?>">
      <img class ="img-width img-tenue" src="http://www.sexyloveapp.com/bannersl.png" alt="¡Anúnciate!">
    </a>
</div>
<?php
include_once 'plantillas/footer.inc.php';
include_once 'plantillas/cierre.inc.php';
?>
