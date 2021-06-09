<?php
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "sexylove_db");
  if (isset($_POST['save_profile'])) {
    // for the database
    $imageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($imageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "La imagen no debe pesar más de 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "La imagen ya existe";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO imagenes SET img='$imageName'";
        if(mysqli_query($conn, $sql)){
          $msg = "Imagen subida exitosamente";
          $msg_class = "alert-success";
        } else {
          $msg = "Hubo un error en la base de datos";
          $msg_class = "alert-danger";
        }
      } else {
        $msg = "Ocurrió un error al subir la imagen";
        $msg_class = "alert-danger";
      }
    }
  }
  if (isset($_POST['up_img'])) {
    // for the database
    $imageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($imageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "La imagen no debe pesar más de 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "La imagen ya existe";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO imagenes SET img='$imageName'";
        sleep(1);
        // $sql2 = "SELECT imgid FROM imgs WHERE img='$imageName'";
        // $results2 = mysqli_query($conn, $sql2);
        // $imgid = mysqli_fetch_all($results2, MYSQLI_ASSOC);
        if(mysqli_query($conn, $sql)){
          $sql2 = "SELECT imgid FROM imagenes WHERE img='$imageName'";
          $results2 = mysqli_query($conn, $sql2);
          $imgid = mysqli_fetch_all($results2, MYSQLI_ASSOC);
          foreach($imgid as $id){
            $idimg = $id['imgid'];
            $sql3 = "INSERT INTO `negocio_imagenes`(`neg_id`, `img_id`) VALUES ($nid,$idimg)";
            // echo $nid . ' ' . $idimg;
            $result3 = mysqli_query($conn, $sql3);
          }
          $msg = "Imagen subida exitosamente";
          $msg_class = "alert-success";
        } else {
          $msg = "Hubo un error en la base de datos";
          $msg_class = "alert-danger";
        }
        // if(mysqli_query($conn, $sql2)){
        //   echo "mira";
        // }
      } else {
        $msg = "Ocurrió un error al subir la imagen";
        $msg_class = "alert-danger";
      }
    }
  }
  if(isset($_POST['alta_negocio'])){
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO chicas SET NOMBRE='$nombre'";
    if(mysqli_query($conn, $sql)){
      $msg = "Negocio subido exitosamente";
      $msg_class = "alert-success";
    } else {
      $msg = "Hubo un error en la base de datos";
      $msg_class = "alert-danger";
    }
  }
?>
