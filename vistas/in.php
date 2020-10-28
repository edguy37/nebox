<?php
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/barra_atras.inc.php'
 ?>
<br>
<div class="container sub">
  <form class="subir" action="subir.php" method="post">
    Nombre del negocio <br>
    <input type="text" name="nombre_negocio" value=""><br>
    Descripcion del negocio <br>
    <input type="text" name="descripcion_negocio" value=""><br>
    Link imagen principal <br>
    <input type="text" name="logo_negocio" value=""><br>
    Link imagen 1 <br>
    <input type="text" name="img1_negocio" value=""><br>
    Link imagen 2 <br>
    <input type="text" name="img2_negocio" value=""><br>
    Link imagen 3 <br>
    <input type="text" name="img3_negocio" value=""><br>
    Link imagen 4 <br>
    <input type="text" name="img4_negocio" value=""><br>
    Link imagen 5 <br>
    <input type="text" name="img5_negocio" value=""><br>
    Correo <br>
    <input type="text" name="correo_negocio" value=""><br>
    Telefono a 10 digitos <br>
    <input type="text" name="tel_negocio" value=""><br>
    Whatsapp (Debe tener '52' al principio) <br>
    <input type="text" name="whats" value=""> <br>
    Direccion <br>
    <input type="text" name="direccion" value=""> <br>
    Categorias <br>
    <input type="text" name="categoria" value=""> <br>
    Ubicacion <br>
    <input type="text" name="ubicacion" value=""> <br>
    Link facebook. Debe incluir lo siguiente: https://www.facebook.com/ <br>
    <input type="text" name="facebook" value=""> <br>
    Link instagram. Debe incluir lo siguiente: https://www.instagram.com/ <br>
    <input type="text" name="instagram" value="" class="last"> <br>
    <input type="submit" name="subir" value="Inscribir">
  </form>
</div>

 <?php
 include_once 'plantillas/footer.inc.php';
 include_once 'plantillas/cierre.inc.php';
 ?>
