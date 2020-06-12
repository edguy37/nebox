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
							EscritorPromociones::escribirPromoBusqueda();
   						/*EscritorNegocios::escribirNegocios();*/
   					}
            else{
							?>
							<div class="row negocios">
								<?php Escritorpromociones::escribirPromosPrincipales(); ?>
							</div>
							<?php
            }
   					?>
    		</div>
		</section>
	</div>
<?php
include_once 'plantillas/footer.inc.php';
include_once 'plantillas/cierre.inc.php';
?>
