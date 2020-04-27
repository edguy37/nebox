<?php 
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_busqueda.inc.php';
?>

<div class="container-fluid h-100 fondo-promo">
	<section class="portada-inscripcion d-flex flex-column justify-content-center align-items-center">
		<div class="titulo-inscripcion d-flex align-items-center">
			<h1>Promociona tu anuncio</h1>
		</div>
	<!--	<div class="flecha-abajo d-flex align-items-center">
			<a href="#" class="scroll">
				<i class="px50 fa fa-angle-down fa-4x drop-arrow fnt-blanco bounce-flecha"></i>
			</a>
		</div> -->
	</section>
</div>
<div class="container-fluid contacto">
	<div class="formulario">
    <form id="contact" class="formn" action="<?php echo RUTA_INSCRIBIR_VIP;?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
            <div class="container">
              <div class="head">
                <h2>Promociona tu anuncio ahora para que más personas puedan verlo</h2>
              </div>
              <h5>Con VIP tu anuncio aparecerá en los primeros resultados y tambien entre las recomendaciones</h5>
              <br>
              <br>
              <h5>Sólo tienes que proporcionar el correo electrónico con el que registraste tu primer anuncio</h5>
              <input  type="email" name="email" placeholder="Correo electrónico" required/><br />
              <br>
              <h5>Ahora elige cuánto tiempo quieres ser VIP</h5>
              <input type="radio" value="250" name="vip" id="semana" onclick="changeText(this.value);" checked/><label for="semana">una semana</label>
              <input type="radio" value="450" name="vip"id="quincena" onclick="changeText(this.value);"/><label for="quincena">15 días</label>
              <input type="radio" value="800" name="vip" id="mes" onclick="changeText(this.value);"/><label for="mes">un mes</label>
              <br>
              <h5>Haz un depósito de <span id="precio">$250</span> en la siguiente cuenta:</h5>
              <p>0000-0000-0000</p>
              <h5>Ahora sólo sube una foto del recibo y preciona el botón "Promocionar"</h5>
              <input type="file" name="imagen1" accept="image/*" required/><br />
              <br>
              <span>
                  <input type="checkbox" value="terminosCondiciones"> He leído y acepto los <a href="#">Términos y condiciones</a> del servicio
              </span> <br>
              <br>
              <button id="submit" type="submit">
                  Promocionar
              </button>
              <br> <br>
              <h5>¡Y ya esta! Ahora tu anuncio se promocionará por un mes. No te preocupes, te mandaremos un correo cuando la promocion esté por terminar</h5>
          </div>
      </form>
      <br>  
  </div>
</div>

<?php
include_once 'plantillas/footer.inc.php'; 
include_once 'plantillas/cierre.inc.php';
?>
        <script type="text/javascript">
            function changeText(value) {
                document.getElementById('precio').innerHTML = "$" + value;
            }
        </script>

       

        