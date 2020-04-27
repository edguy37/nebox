<?php
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_busqueda.inc.php';
?>

<div class="enviado">
  <h2>Mensaje enviado correctamente</h2>
  <h2>Tu anuncio aparecerá en la página en un lapso de 24hrs</h2>
</div>
<div class="container-fluid h-100 fondo-chica">
	<section class="portada-inscripcion d-flex flex-column justify-content-center align-items-center">
		<div class="titulo-inscripcion d-flex align-items-center">
			<h1>Inscríbete ahora mismo <br>¡es gratis!</h1>
		</div>
	<!--	<div class="flecha-abajo d-flex align-items-center">
			<a href="#" class="scroll">
				<i class="px50 fa fa-angle-down fa-4x drop-arrow fnt-blanco bounce-flecha"></i>
			</a>
		</div> -->
	</section>
</div>
<div class="container-fluid contacto">
  <div class="info-inscripcion">
    <h2>¿Quieres aparecer en nuestra página?</h2>
    <p>¡Inscríbete ahora, es gratis! Sólo tienes que rellenar el siguiente formulario para aparecer en la página. Todos los campos son importantes, 
      así que asegurate de llenarlos correctamente.</p>
    <p>Tu anuncio aparecerá en nuestra página en menos de 24hrs, te avisaremos cuando ya esté disponible para que puedas verlo.</p>
    <p>En SexyLove queremos que tus clientes puedan contar siempre con los anuncios más recientes, es por eso que al cumplir un mes se desactivará automáticamente tu
      anuncio. No te preocupes, te avisaremos antes de que eso suceda para que puedas reactivarlo y seguir disfrutando del servicio.</p>
  </div>
	<div class="formulario">
    <form id="contact" accept-charset="UTF-8" class="formn" action="<?php echo RUTA_INSCRIBIR;?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
            <div class="container">
                <h2>Formulario</h2>
              <div class="inset">
                <input type="text" name="name" placeholder="Nombre" required/><br>
                <input type="tel" name="number" placeholder="Teléfono" required/><br>
                <input  type="email" name="email" placeholder="Correo electrónico" required/><br>
                <input type="text" name="price" placeholder="Precio por hora" required/><br />
                <input type="text" name="ubication" placeholder="Ciudad" required/><br>
                <textarea type="text" name="description" placeholder="Descripción" required></textarea><br>
                <h5>Acontinuación elige tus 5 mejores fotos</h5>
                <input type="file" name="imagen1" accept="image/*" required/><br>
                <input type="file" name="imagen2" accept="image/*" required/><br>
                <input type="file" name="imagen3" accept="image/*" required/><br>
                <input type="file" name="imagen4" accept="image/*" required/><br>
                <input type="file" name="imagen5" accept="image/*" required/><br>
                <h5>Elige tus categorías</h5>
                <select name="category[]" class="seleccionar-categoria" multiple="multiple" required>
                  <option value="24hrs">24hrs</option>
                  <oition value="Chichona">Chichona</option>
                  <option value="Colombiana">Colombiana</option>
                  <option value="Extranjera">Extranjera</option>
                  <option value="Flaquita">Flaquita</option>
                  <option value="Gay">Gay</option>
                  <option value="Güera">Güera</option>
                  <option value="Jovencita">Jovencita</option>
                  <option value="Masaje_tántrico">Masaje tántrico</option>
                  <option value="Morena">Morena</option>
                  <option value="Nalgona">Nalgona</option>
                  <option value="Show_lésbico">Show lésbico</option>
                  <option value="Spa">Spa</option>
                  <option value="Tabasqueña">Tabasqueña</option>
                  <option value="Tetona">Tetona</option>
                  <option value="Venezolana">Venezolana</option>
                  <option value="Veracruzana">Veracruzana</option>
                  <option value="VIP">VIP</option>
                </select><br>
                <input type="text" name="categoria-extra" placeholder="Otras categorías"><br>
                <!--<span>
                  <input type="checkbox" name="terms" value="terminosCondiciones"> He leído y acepto los <a href="#">Términos y condiciones</a> del servicio
                </span><br>-->
                <button id="submit" type="submit">
                    Enviar
                </button>
              </div>
          </div>
      </form>
  </div>
</div>

<!--<div>
  <a href="<?php echo RUTA_VIP?>">
    <img class="img-width img-tenue"src="http://www.sexyloveapp.com/vip.png" alt="¡Anúnciate!">
  </a>
</div>-->
<?php
include_once 'plantillas/footer.inc.php'; 
include_once 'plantillas/cierre.inc.php';
?>