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
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <a href="neg.php">Ver todos los negocios</a>
        <form action="alt.php" method="post">
          <h2 class="mt-3 mb-3 text-center">Subir negocio</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group">
            <label for="nombre">Nombre del negocio</label><br>
            <input type="text" name="nombre" value="">
          </div>
          <div class="form-group">
            <button type="submit" name="alta_negocio" class="btn btn-primary btn-block">Subir negocio</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="js/img-upload.js"></script>
</html>
