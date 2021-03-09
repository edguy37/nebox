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
								<?php EscritorPromociones::escribirPromosPrincipales(); ?>
							<?php
            }
   					?>
					   <!-- Se pone otra liga -->
   					<!-- <h5 class="w3-center w3-padding-64"><center><span class="w3-tag w3-wide">CONSIGUE TU MEMBRESIA AQUI: &nbsp;<a class="typeform-share button" href="https://form.typeform.com/to/AuIKwhiI" data-mode="popup" style="display:inline-block;text-decoration:none;background-color:#267DDD;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:20px;text-align:center;margin:0px auto;height:20px;padding:0px 33px;border-radius:25px;max-width:80%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">¡Quiero mi membresía! </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> </span></center></h5> -->
						<a class="typeform-share button" href="https://api.whatsapp.com/send?phone=529994561025&text=Hola, Quiero mi membresia de Nebox" data-mode="popup" style="display:inline-block;text-decoration:none;background-color:#267DDD;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:20px;text-align:center;margin:0px auto;height:20px;padding:0px 33px;border-radius:25px;max-width:80%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">¡Quiero mi membresía! </a>
    		</div>
		</section>
	</div>
<?php
include_once 'plantillas/footer.inc.php';
include_once 'plantillas/cierre.inc.php';
?>
