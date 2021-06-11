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
            $sql3 = "INSERT INTO negocio_imagenes (`neg_id`, `img_id`) VALUES ($nid,$idimg)";
            //  echo $nid . ' ' . $idimg;
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
    $descripcion = $_POST['descripcion_negocio'];
    $correo = $_POST['correo_negocio'];
    $tel = $_POST['tel_negocio'];
    $whats = $_POST['whats'];
    $direccion = $_POST['direccion'];
    $maps = mysqli_real_escape_string($conn, $_POST['maps']);
    $categoria = $_POST['categoria'];
    $ubicacion = $_POST['ubicacion'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $sql = "INSERT INTO chicas SET NOMBRE='$nombre', DESCRIPCION='$descripcion', CORREO='$correo', NUM_TEL='$tel', whats='$whats', direccion='$direccion', CATEGORIA='$categoria', UBICACION='$ubicacion', facebook='$facebook', insta='$instagram', MAPS='$maps'";
    mysqli_query($conn, $sql);
    $nid = mysqli_insert_id($conn);
    if(mysqli_affected_rows($conn)){
      // Horario
      $lunes = $_POST['lunes'];
      $martes = $_POST['martes'];
      $miercoles = $_POST['miercoles'];
      $jueves = $_POST['jueves'];
      $viernes = $_POST['viernes'];
      $sabado = $_POST['sabado'];
      $domingo = $_POST['domingo'];

      $sqlh = "INSERT INTO horario (negocio_id, lunes, martes, miercoles, jueves, viernes, sabado, domingo)
      VALUES ('$nid', '$lunes', '$martes', '$miercoles', '$jueves', '$viernes', '$sabado', '$domingo')";
      mysqli_query($conn, $sqlh);

      // procesar imagen
      if(isset($_FILES["profileImage"])){
            // for the database
        $imageName = time() . '-' . $_FILES["profileImage"]["name"];
        // For image upload
        $target_dir = "promos/";
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
            sleep(1);
            $sql2 = "INSERT INTO promociones SET img='$imageName'";
            mysqli_query($conn, $sql2);
            if(mysqli_affected_rows($conn)){
              $sql3 = "SELECT promoid FROM promociones WHERE img='$imageName'";
              $results3 = mysqli_query($conn, $sql3);
              $imgid = mysqli_fetch_all($results3, MYSQLI_ASSOC);
              foreach($imgid as $id){
                $idimg = $id['promoid'];
                $sql4 = "INSERT INTO negocio_promos (`negocio_id`, `promo_id`) VALUES ($nid,$idimg)";
                //  echo $nid . ' ' . $idimg;
                $result4 = mysqli_query($conn, $sql4);
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
      $msg = "Negocio subido exitosamente";
      $msg_class = "alert-success";
    } else {
      $msg = "Hubo un error en la base de datos";
      $msg_class = "alert-danger";
    }
  }
?>
