<?php

$nid = $_GET['nid'];
include_once('processForm.php');

  $results = mysqli_query($conn, "SELECT * FROM chicas
    LEFT OUTER JOIN negocio_imagenes ON chicas.CH_ID=negocio_imagenes.neg_id
    WHERE CH_ID LIKE $nid;");
  $imgs = mysqli_fetch_all($results, MYSQLI_ASSOC);
  // foreach ($imgs as $img) {
  //   $id = $img['img_id'];
  //   $r = mysqli_query($conn, "SELECT * FROM imgs
  //     WHERE imgid LIKE $id;");
  //   $i = mysqli_fetch_all($r, MYSQLI_ASSOC);
  // }
  // ****DELETE FILE****
  //if (isset($_POST['delete_file'])) {
  if (array_key_exists('delete_file', $_POST)) {
  $filename = 'images/' . $_POST['delete_file'];
  $fileid = $_POST['file_id'];
  if (file_exists($filename)) {
    mysqli_query($conn, "DELETE FROM negocio_imagenes WHERE img_id = $fileid;");
    mysqli_query($conn, "DELETE FROM imagenes WHERE imgid = $fileid");
    unlink($filename);
    $msg = 'Archivo '.$filename.' Se eliminó correctamente';
    $msg_class = 'alert-success';
    header("Refresh:3");
    } else {
      $msg = 'No se pudo borrar: '.$filename.', el archivo no existe';
      $msg_class = 'alert-danger';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar negocio</title>
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
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
        <table class="table table-bordered">
          <thead>
            <th>Imagen</th>
            <th>Borrar</th>
          </thead>
          <tbody>
            <?php foreach ($imgs as $img): ?>
              <?php $id = $img['img_id']; ?>
              <?php $r = mysqli_query($conn, "SELECT * FROM imagenes WHERE imgid LIKE $id;"); ?>
              <?php if (!is_bool($r)){ ?>
              <?php $i = mysqli_fetch_array($r, MYSQLI_ASSOC); ?>
              <?php $fileid = $i['imgid']; ?>
              <?php $file = $i['img']; ?>
              <tr>
                <td> <img src="<?php echo 'images/' . $file ?>" width="90" height="90" alt=""> </td>
                <td>
                  <form method="post" action="<?php 'echo edit.php' . $nid; ?>">
                    <input type="hidden" name="file_id" value="<?php echo $fileid; ?>">
                    <input type="hidden" value="<?php echo $file; ?>" name="delete_file" />
                    <input type="submit" value="Delete image" />
                  </form>
                </td>
              </tr>
            <?php }else{echo "no hay imagenes";} endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-4 offset-md-4">
        <form action="<?php 'echo edit.php' . $nid; ?>" method="post" enctype="multipart/form-data">
          <h2 class="mt-3 mb-3 text-center">Subir imagen</h2>
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
          <div class="form-group">
            <input type="hidden" value="<?php echo $nid; ?>" name="nid" />
            <button type="submit" name="up_img" class="btn btn-primary btn-block">Subir imagen</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="js/img-upload.js"></script>
</html>
