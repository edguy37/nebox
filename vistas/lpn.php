<?php
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_atras.inc.php';
include_once 'app/Chica.inc.php';
?>

<br>
<div class="container sub">
  <form class="subir-hor" action="sublpn.php" method="post">
    ID del negocio<br>
    <input type="text" name="nid" value=""> <br>
    ID de la promo<br>
    <input type="text" name="promoid" value="" class="last"> <br>
    <input type="submit" name="subir" value="Subir">
  </form>
</div>

<?php
include_once 'plantillas/footer.inc.php';
 ?>
