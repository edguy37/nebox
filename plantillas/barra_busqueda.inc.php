<?php
include_once 'app/Conexion.inc.php';
Conexion :: abrir_conexion();
?>
<div class="cover" style="background-image: url(<?php echo RUTA_INDEX.'/categorias/img-buscador.jpg'?>);">
  <div  class="cover-wrapper container">
    <div class="logo">
      <a href="<?php echo RUTA_INDEX?>">
        <img src="<?php echo RUTA_INDEX."logo.png"?>" alt="Inicio"> <!-- Cambiar link por ruta -->
      </a>
    </div>
    <div class="titulo">
      <h1>Encuentra descuentos</h1>
      <p>Nebox te ayuda a encontrar descuentos cerca de ti</p>
    </div>
    <form class="buscador" id="buscador" action="<?php echo RUTA_INDEX ?>" method="get">
      <div class="busqueda">
        <div class="campo-buscar">
          <input class="txt-buscador" type="text" name="search" autocomplete="off" placeholder="¿Qué estás buscando?" autofocus/>
        </div>
        <div class="campo-ubicacion">
          <select class="form-control select-ubic" name="ubic">
            <option value="Cancún">Cancún</option>
            <option value="Mérida Yucatán">Mérida Yucatán</option>
          </select>
        </div>
      </div>
      <input type="submit" value="Buscar" class="btn btn-sm btn-default btn-buscar"/>
    </form>
  </div>
</div>
