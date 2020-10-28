<?php
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_atras.inc.php';
include_once 'app/Chica.inc.php';
?>

<br>
<div class="container sub">
  <form class="subir-hor" action="subpr.php" method="post">
    Link de la imagen de la promocion<br>
    <input type="text" name="link" value="" class="last"> <br>
    <input type="submit" name="subir" value="Subir">
  </form>
</div>

<?php
include_once 'plantillas/footer.inc.php';
 ?>
