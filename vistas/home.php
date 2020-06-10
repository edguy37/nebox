<?php
include_once 'app/Conexion.inc.php';
include_once 'app/buscador.inc.php';
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_busqueda.inc.php';
include_once 'app/RepositorioNegocio.inc.php';
include_once 'app/RepositorioCategoria.inc.php';
include_once 'app/Chica.inc.php';
?>
	<div class="girls-content">
		<section class="resultados">
			<div class="row resultados-principales">
   					<?php
   					if (isset($_GET['search'])) {
   						EscritorNegocios::escribirNegocios();
   					}
            else{
							?>
							<div class="row negocios">
								<?php Escritorpromociones::escribirPromosPrincipales(); ?>
							</div>
							<div class="row negocios">
								<?php EscritorNegocios::escribirNegociosPromo(); ?>
							</div>
							<div class="row categorias">
								<?php EscritorCategorias::escribirCategorias(); ?>
							</div>
							<div class="row ubicaciones">
								<?php EscritorUbicaciones::escribirUbicaciones();?>
							</div>
							<?php
            }
   					?>
    		</div>
		</section>
	</div>
  <div>
    <a href="<?php echo RUTA_INSCRIPCION?>">
      <img class="img-width img-tenue"src="http://www.sexyloveapp.com/bannersl.png" alt="¡Anúnciate!">
    </a>
  </div>
<?php
include_once 'plantillas/footer.inc.php';
include_once 'plantillas/cierre.inc.php';
?>
