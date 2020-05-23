<?php
include_once 'app/Conexion.inc.php';
Conexion :: abrir_conexion();
?>
<header class="atras">
  <div class="logo logo-atras">
    <a href="<?php echo RUTA_INDEX?>">
      <img src="<?php echo RUTA_INDEX."logo.png"?>" alt="Inicio"> <!-- Cambiar link por ruta -->
    </a>
  </div>
  <div class="Regresar">
    <a href="<?php echo RUTA_INDEX?>">
      <h4>
        <i class="fas fa-arrow-left"></i>
        Regresar
      </h4>
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
