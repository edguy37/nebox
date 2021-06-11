<?php
include_once 'Conexion.inc.php';
include_once 'RepositorioNegocio.inc.php';
include_once 'RepositorioUbicacion.inc.php';
include_once 'RepositorioPromo.inc.php';
include_once 'Chica.inc.php';
include_once 'Ubicacion.inc.php';

    if(isset($_GET['search'])){
        $busqueda = $_GET['search'];
        $busqueda = preg_replace("#[^0-9a-z]#i","", $busqueda);
        if(isset($_GET['ubic'])){
            $ubic = $_GET['ubic'];
        }
    }
    $componentes_url = parse_url($_SERVER["REQUEST_URI"]);

    $ruta = $componentes_url['path'];

    $partes_ruta = explode("/", $ruta);
    $partes_ruta = array_filter($partes_ruta);
    $partes_ruta = array_slice($partes_ruta, 0);

class EscritorNegocios{

    public static function escribirNegociosPromo(){
        $negocios = RepositorioNegocio::obtenerNegocioPromo(Conexion::obtener_conexion());

        if (count($negocios)) {
          ?> <div class="titulo-negocios">
            <h3>Mira estos negocios</h3>
          </div> <?php
            foreach ($negocios as $negocio) {
                self::escribirNegocio($negocio);
            }
        }
    }

    public static function escribirNegocios(){
        global $busqueda;
        global $ubic;
        $negocios = RepositorioNegocio::obtenerNegocioPorBusqueda(Conexion::obtener_conexion(),$busqueda,$ubic);
        if (count($negocios)) {
            foreach ($negocios as $negocio) {
                self::escribirNegocio($negocio);
            }
        }
    }

    public static function escribirNegocio($negocio){
        if (!isset($negocio)){
            return;
        }
        ?>
        <div class="mt-4 col-12 col-sm-6 col-md-4">
            <div style="background-image: url(<?php echo $negocio -> obtenerLogo();?>);" class="centrar-imagen caja-negocio">
              <a href="<?php echo RUTA_NEGOCIO . '/' . $negocio -> obtenerId();?>" class="caja-link-negocio"></a>
              <a href="<?php echo RUTA_NEGOCIO . '/' . $negocio -> obtenerId();?>">
                <div class="resumen">
                  <h5 class="resumen-acortador"><?php echo $negocio -> obtenerNombre();?></h5>
                </div>
              </a>
            </div>
        </div>
        <?php
    }

    public static function escribirHorarios(){
      global $url;
      $negocios = RepositorioNegocio::obtenerNegocioConHorario(Conexion::obtener_conexion(), $url);

      if (count($negocios)) {
          foreach ($negocios as $negocio) {
              self::escribirHorario($negocio);
          }
      }
    }

    public static function escribirHorario($negocio){
      if (!isset($negocio)){
        return;
      }?>
      <tr>
				<th class="horario-padding">Lunes</th>
				<td><?php echo $negocio -> obtenerLunes(); ?></td>
			</tr>
      <tr>
				<th>Martes</th>
				<td class="horario-padding"><?php echo $negocio -> obtenerMartes(); ?></td>
			</tr>
      <tr>
				<th class="horario-padding">Miercoles</th>
				<td><?php echo $negocio -> obtenerMiercoles(); ?></td>
			</tr>
      <tr>
				<th class="horario-padding">Jueves</th>
				<td><?php echo $negocio -> obtenerJueves(); ?></td>
			</tr>
      <tr>
				<th class="horario-padding">Viernes</th>
				<td><?php echo $negocio -> obtenerViernes(); ?></td>
			</tr>
      <tr>
				<th class="horario-padding">Sabado</th>
				<td><?php echo $negocio -> obtenerSabado(); ?></td>
			</tr>
      <tr>
				<th class="horario-padding">Domingo</th>
				<td><?php echo $negocio -> obtenerDomingo(); ?></td>
			</tr>
      <?php
    }
}

class EscritorPromociones{
  public static function escribirPromosPrincipales(){
      $promos = RepositorioPromo::obtenerPromociones(Conexion::obtener_conexion());

      if (count($promos)) {
        ?> <div class="titulo-negocios col-12">
          <h3>Descuentos con Membresia NeBox</h3>
        </div>
        <div class="negocios">
          <?php
          foreach ($promos as $promo) {
            self::escribirPromo($promo);
          } ?>
        </div> <?php
      }
      else {
        echo "No se encontraron promociones";
      }
  }

  public static function escribirPromos(){
    global $partes_ruta;
    $promos = RepositorioPromo::obtenerPromocionesNegocio(Conexion::obtener_conexion(), $partes_ruta[2]);

    if (count($promos)) {
      ?> <div class="titulo-negocios">
        <h3>Nuestras promociones</h3>
      </div> <?php
        foreach ($promos as $promo) {
            self::escribirPromoNegocio($promo);
        }
    }
  }

  public static function escribirPromoBusqueda(){
    global $busqueda;
    global $ubic;
    $promociones = RepositorioPromo::obtenerPromocionesBusqueda(Conexion::obtener_conexion(), $busqueda, $ubic);
    if (count($promociones)) { ?>
    <div class="negocios">
      <?php
      foreach ($promociones as $promo) {
        self::escribirPromo($promo);
      } ?>
      </div> <?php
    }
  }

  public static function escribirPromo($promo){
      if (!isset($promo)){
          return;
      }
      ?>
        <a href="<?php echo RUTA_NEGOCIO . '/' . $promo -> obtenerNegocioId();?>" class="caja-link-negocio-promo">
          <div style="background-image: url(<?php echo 'promos/' . $promo -> obtenerImg();?>);" class="negocio"></div>
        </a>
      <?php
  }

  public static function escribirPromoNegocio($promo){
      if (!isset($promo)){
          return;
      }
      ?>
      <div class="mt-4 col-12 col-sm-6 col-md-6 d-flex extend">
          <div style="background-image: url(<?php echo $promo -> obtenerImg();?>);" class="centrar-imagen caja-promo">
            <a href="<?php echo RUTA_NEGOCIO . '/' . $promo -> obtenerNegocioId();?>" class="caja-link-negocio-promo"></a>
          </div>
      </div>
      <?php
  }
}

class EscritorCategorias{
    public static function escribirCategorias(){
      $categorias = RepositorioCategoria::obtenerCategorias(Conexion::obtener_conexion());
      if (!empty($categorias)){
        ?> <div class="titulo-categorias">
            <h3>Explora nuestras categorias</h3>
          </div> <?php
        foreach ($categorias as $categoria){
          self::escribirCategoria($categoria);
        }
      }
    }

    public static function escribirCategoria($categoria){
      if (!isset($categoria)){
        return;
      }
      ?>
        <div class="col-12 col-sm-6 col-md-4">
          <div style="background-image: url(<?php echo $categoria -> obtenerImagen();?>);" class="centrar-imagen caja-categoria">
            <a href="#" class="caja-link-categoria"></a>
            <a href="#" class="titulo-link-categoria"><?php echo $categoria -> obtenerCategoria();?></a>
          </div>
        </div>
      <?php
    }
}

class EscritorUbicaciones{
    public static function escribirUbicaciones(){
        $ubicaciones = RepositorioUbicacion::obtenerUbicaciones(Conexion::obtener_conexion());
        if (!empty($ubicaciones)) {
            foreach ($ubicaciones as $ubicacion) {
                self::escribirUbicacion($ubicacion);
            }
        }
    }

    public static function escribirUbicacion($ubicacion){
        if (!isset($ubicacion)){
            return;
        }
        ?><h1><?php echo $ubicacion -> obtenerUbicacion();?></h1>
        <li><a href="#"><?php echo $ubicacion -> obtenerUbicacion();?></a></li>
        <?php
    }
}

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    }
    else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}

/*
$output="";
$cnx=new PDO("mysql:host=localhost;dbname=upyappco_sexy","root","") or die("Hubo un problema al iniciar la conexión");
if (isset($_GET['search'])) {
	$searchq = $_GET['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

	$res=$cnx->query("SELECT CH_ID, NOMBRE, LOGO FROM chicas WHERE `NOMBRE` LIKE '%$searchq%' OR `CATEGORIA` LIKE '%$searchq%' OR `DESCRIPCION` LIKE '%$searchq%'") or die("Ocurrió un error al realizar su búsqueda");
	$count=$cnx->query("SELECT COUNT(*) FROM chicas WHERE `NOMBRE` LIKE '%$searchq%' OR `CATEGORIA` LIKE '%$searchq%' OR `DESCRIPCION` LIKE '%$searchq%'");
	$lesCount = $count->fetch(PDO::FETCH_BOTH);
	$resCount=$lesCount[0];
	if ($resCount==0){
		$output = "No se encontraron resultados";
	}
	else{
		while ($row = $res -> fetch(PDO::FETCH_ASSOC)) {
            $id = $row['CH_ID'];
			$nombre = $row['NOMBRE'];
			$foto = $row['LOGO'];
    		if (isset($nombre)) {
    		$output .= '
   				<div class="col-md-3 girls-imgs">
   					<a href="#">
    				<img src="'.$foto.'" class="img-responsive">
    				<h3>'.$nombre.'</h3>
   				</div>';
    		}
		}
	}
}
*/
