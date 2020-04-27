<?php
include_once 'app/Conexion.inc.php';
Conexion :: abrir_conexion();
?>
<header>
  <div class="logo">
    <a href="<?php echo RUTA_INDEX?>">
      <img src="logo.png" alt="Inicio"> <!-- Cambiar link por ruta -->
    </a>
  </div>
  <form class="buscador" id="buscador" action="<?php echo RUTA_INDEX ?>" method="get">
    <input class="txt-buscador" type="text" name="search" autocomplete="off" placeholder="¿Qué estás buscando?" autofocus/>
      <select class="form-control select-ubic" name="ubic">
        <option value="Cancún">Cancún</option>
        <option value="Mérida Yucatán">Mérida Yucatán</option>
      </select>
<!--               <button type="button" class="btn btn-sm btn-default dropdown-toggle ubic" data-toggle="dropdown"> Ubicacion <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                  <li><a href="#">Cancún</a></li>
                  <li><a href="#">Mérida Yucatán</a></li>
               </ul> -->
    <input type="submit" value="Buscar" class="btn btn-sm btn-default btn-buscar"/>
  </form>
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
