<?php
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_atras.inc.php';
include_once 'app/Chica.inc.php';
?>

<br>
<div class="container sub">
  <form class="subir-hor" action="subhor.php" method="post">
    ID del negocio<br>
    <input type="text" name="id" value=""> <br>
    Lunes<br>
    <input type="text" name="lunes" value=""><br>
    Martes<br>
    <input type="text" name="martes" value=""><br>
    Miercoles<br>
    <input type="text" name="miercoles" value=""><br>
    Jueves<br>
    <input type="text" name="jueves" value=""><br>
    Viernes<br>
    <input type="text" name="viernes" value=""><br>
    Sabado<br>
    <input type="text" name="sabado" value=""><br>
    Domingo<br>
    <input type="text" name="domingo" value="" class="last"><br>
    <input type="submit" name="subir" value="Subir">
  </form>
</div>

<?php
include_once 'plantillas/footer.inc.php';
 ?>
