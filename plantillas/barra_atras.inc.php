<?php
include_once 'app/Conexion.inc.php';
Conexion :: abrir_conexion();
?>
<header class="atras">
  <div class="blank"></div>
  <a href="<?php echo RUTA_INDEX?>">
    <div class="regresar">
      <h4>
        <i class="fas fa-arrow-left"></i>
      </h4>
    </div>
  </a>
  <div class=" logo-atras">
    <a href="<?php echo RUTA_INDEX?>">
      <img src="<?php echo RUTA_INDEX."logo.png"?>" alt="Inicio"> <!-- Cambiar link por ruta -->
    </a>
  </div>
</header>
<script>
$(".dropdown-menu a").click(function(){
var sel = $(this).text()
    $('#buscador').submit(function(eventObj) {
        $(this).append("<input type='hidden' name='ubic' value="+sel+"> ");
        return true;
    });
})
</script>
