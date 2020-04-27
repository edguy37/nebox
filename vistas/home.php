<?php
include_once 'app/Conexion.inc.php';
include_once 'app/buscador.inc.php';
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_busqueda.inc.php';
include_once 'app/RepositorioChica.inc.php';
include_once 'app/Chica.inc.php';
?>
	<div class="girls-content">
		<section class="resultados">
			<div class="row">
   					<?php 
   					if (isset($_GET['search'])) {
   						EscritorChicas::escribirChicas();
   					}
            else{
              EscritorChicas::escribirChicasPromo();
              EscritorUbicaciones::escribirUbicaciones();
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