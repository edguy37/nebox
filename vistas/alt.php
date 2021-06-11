<?php include_once('processForm.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Subir negocio</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/neg.css">
</head>
<body>
<nav>
    <ul>
      <a href="neg.php">
        <li>Negocios</li>
      </a>
      <a href="alt.php">
        <li>Subir negocio</li>
      </a>
    </ul>
  </nav>
  <div class="container">
    <form action="alt.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-8 form-div">
          <a href="neg.php">Ver todos los negocios</a>
            <h2 class="mt-3 mb-3 text-center">Subir negocio</h2>
            <?php if (!empty($msg)): ?>
              <div class="alert <?php echo $msg_class ?>" role="alert">
                <?php echo $msg; ?>
              </div>
            <?php endif; ?>
            <div class="form-group">
              <label for="nombre">Nombre del negocio</label><br>
              <input class="form-control" type="text" name="nombre" value=""><br>
              <label for="descripcion_negocio">Descripcion del negocio</label><br>
              <textarea class="form-control" name="descripcion_negocio" id="" cols="30" rows="5"></textarea><br>
              <label for="correo_negocio">Correo</label> <br>
              <input class="form-control" type="text" name="correo_negocio" value=""><br>
              <label for="telnegocio">Telefono a 10 digitos</label><br>
              <input class="form-control" type="text" name="tel_negocio" value=""><br>
              <label for="whats">Whatsapp (Debe tener '52' al principio)</label><br>
              <input class="form-control" type="text" name="whats" value="" placeholder="Ejemplo: 521234567890"> <br>
              <label for="direccion">Direccion</label><br>
              <input class="form-control" type="text" name="direccion" value=""> <br>
              <label for="maps">Link de google maps</label><br>
              <input class="form-control" type="text" name="maps" value=""> <br>
              <label for="categoria">Categorias</label><br>
              <input class="form-control" type="text" name="categoria" value=""> <br>
              <label for="ubicacion">Ubicacion</label><br>
              <input class="form-control" type="text" name="ubicacion" value=""> <br>
              <label for="facebook">Link facebook. Debe incluir lo siguiente: https://www.facebook.com/</label><br>
              <input class="form-control" type="text" name="facebook" value="" placeholder="Ejemplo: https://www.facebook.com/nebox"> <br>
              <label for="instagram"> Link instagram. Debe incluir lo siguiente: https://www.instagram.com/ </label><br>
              <input class="form-control" type="text" name="instagram" value="" placeholder="Ejemplo: https://www.instagram.com/" class="last"> <br>
            </div>
            <div class="form-group">
              <button type="submit" name="alta_negocio" class="btn btn-primary btn-block">Subir negocio</button>
            </div>
        </div>
        <div class="col-4 form-div">
          <h2 class="mt-3 mb-3 text-center">Subir imagen <br>(promo)</h2>
          <div class="text-center form-group" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Subir imagen</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Imagen seleccionada</label>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
<script src="js/img-upload.js"></script>
</html>
