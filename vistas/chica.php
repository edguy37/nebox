<?php
//include_once 'app/config.inc.php';
//include_once 'app/Conexion.inc.php';
//include_once 'app/Chica.inc.php';
//include_once 'app/RepositorioChica.inc.php';
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_busqueda.inc.php';
?>
<div class="container text-center nombre-chica">
	<h1><?php echo $chica -> obtenerNombre();?></h1> 
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $chica -> obtenerImg1(); ?>" alt="">
		</div>
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $chica -> obtenerImg2(); ?>" alt="">
		</div>
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $chica -> obtenerImg3(); ?>" alt="">
		</div>
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $chica -> obtenerImg4(); ?>" alt="">
		</div>
		<div class="col-md4">
			<img class="ajustable-pantalla" src="<?php echo $chica -> obtenerImg5(); ?>" alt="">
		</div>
	</div>
</div>
<br>
<div class="container"><?php echo $chica -> obtenerDescripcion();?></div>
<div class="container text-center">
	<h3>Número de teléfono: </h3>
	<a href="tel:<?php echo $chica -> obtenerTelefono();?>">
     <h3>
     	<?php echo $chica -> obtenerTelefono();?>
     	<i class="fas fa-phone-square"></i>
     </h3>
	</a> 
	<!--<h3>Número de teléfono: <?php echo $chica -> obtenerTelefono();?></h3>	-->
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