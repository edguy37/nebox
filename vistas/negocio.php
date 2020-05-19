<?php
//include_once 'app/config.inc.php';
//include_once 'app/Conexion.inc.php';
//include_once 'app/Chica.inc.php';
//include_once 'app/RepositorioChica.inc.php';
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_busqueda.inc.php';
include_once 'app/buscador.inc.php';
?>
<div class="container text-center nombre-chica">
	<h1><?php echo $negocio -> obtenerNombre();?></h1>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg1(); ?>" alt="">
		</div>
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg2(); ?>" alt="">
		</div>
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg3(); ?>" alt="">
		</div>
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg4(); ?>" alt="">
		</div>
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $negocio -> obtenerImg5(); ?>" alt="">
		</div>
	</div>
</div>
<br>
<div class="container"><?php echo $negocio -> obtenerDescripcion();?></div>
<div class="informacion container">
	<div class="seccion-extras caja-info container">
		<span><?php echo $negocio -> obtenerTarjeta(); ?></span>
	</div>
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
<div class="container text-center">
	<h3>Número de teléfono: </h3>
	<a href="tel:<?php echo $negocio -> obtenerTelefono();?>">
     <h3>
     	<?php echo $negocio -> obtenerTelefono();?>
     	<i class="fas fa-phone-square"></i>
     </h3>
	</a>
	<!--<h3>Número de teléfono: <?php echo $negocio -> obtenerTelefono();?></h3>	-->
</div>
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
