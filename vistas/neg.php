<?php
  $conn = mysqli_connect("localhost", "root", "", "sexylove_db");
  $results = mysqli_query($conn, "SELECT CH_ID, NOMBRE FROM chicas");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);

  // ****DELETE FILE****
  $msg = "";
  $msgClass = "";
  if (array_key_exists('negocio_id', $_POST)) {
  $id = $_POST['negocio_id'];
  $nombre = $_POST['nombre'];
  if (isset($id)) {
    mysqli_query($conn, "DELETE FROM chicas WHERE CH_ID = $id");
    $msg = 'Negocio: '.$nombre.' Se eliminó correctamente. <br> espere...';
    $msgClass = 'alert-success';
    header("Refresh:3");
    } else {
      $msg = 'No se pudo borrar: '.$nombre.', ocurrió un error';
      $msgClass = 'alert-danger';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todos los negocios</title>
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
      <div class="col-4 offset-md-4" style="margin-top: 30px;">
        <a href="alt.php" class="btn btn-success">Nuevo negocio</a>
        <br>
        <br>
        <div class="<?php echo $msgClass; ?>" role="alert"><?php echo $msg; ?></div>
        <table class="table table-bordered">
          <thead>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Opciones</th>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td> <p><?php echo $user['NOMBRE']; ?></p> </td>
                <td>
                    <img src="images/avatar.jpg" alt="">
                </td>
                <td>
                  <form method="get" action="edi.php">
                    <input type="hidden" name="nid" value="<?php echo $user['CH_ID']; ?>">
                    <input type="submit" value="Editar" />
                  </form>
                  <form method="post" action="neg.php">
                    <input type="hidden" name="negocio_id" value="<?php echo $user['CH_ID']; ?>">
                    <input type="hidden" name="nombre" value="<?php echo $user['NOMBRE']; ?>">
                    <input type="submit" value="Borrar" />
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
