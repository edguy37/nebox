<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$msg = null;

      if (isset($_POST["phpmailer"]))
     {
        
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $asunto =htmlspecialchars( $_POST["asunto"]);
    $mensaje = $_POST["mensaje"];
    $img1 = $_FILES["imagen1"];
    $img2 = $_FILES["imagen2"];
        
        require 'phpmailer/src/PHPMailer.php';
        require 'phpmailer/src/Exception.php';
        require 'phpmailer/src/SMTP.php';
    
          $mail = new PHPMailer;

          //$mail -> isSMTP();

          $mail->CharSet = 'UTF-8';

          $mail -> SMTPDebug = 2;

          $mail ->Host = "192.185.131.115";
		  
          $mail->setFrom('inscripcion@sexyloveapp.com', 'Sexylove');
        
          $mail->AddAddress('inscripcion@sexyloveapp.com');
        
          $mail->Subject = $asunto;
        
         // $mail->addAddress($email, $nombre);
        
          $mail->MsgHTML($mensaje);
        
    
       if ($img1 ["size"] > 0){
           
          $mail->addAttachment($img1 ["tmp_name"], $img1 ["name"]);
          $mail->addAttachment($img2 ["tmp_name"], $img2 ["name"]);
        }
    
        
          if($mail->Send())
        {
    $msg= "En hora buena el mensaje ha sido enviado con exito a $email";
    }
        else
        {
    $msg = "Lo siento, ha habido un error al enviar el mensaje a $email";
    $msg .= "Mailer Error; ". $mail->ErrorInfo;
    }
 }
?>
    
<!DOCTYPE HTML>
<html>
<head>
<title>Contacto</title>
</head>
<body>
  <div class="enviado">
    <h2>Mensaje enviado correctamente</h2>
    <h2>Tu anuncio debe aparecer en la página en un lapso de 24hrs</h2>   
  </div>
<h3>Email de Contacto</h3>
<strong><?php echo $msg; ?></strong>

<form action="" method="post" enctype="multipart/form-data">
    
<table border="0">
<tr>
<td>Nombre del destinatario:</td>
<td><input name="nombre" type="text" id="nombre"></td>
</tr>
<tr>
<td>Email del destinatario:</td>
<td><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td>Asunto:</td>
<td><input name="asunto" type="text" id="asunto"></td>
</tr>
<tr>
<td>imagen 1:</td>
<td><input type="file" name="imagen1" accept="image/*"></td>
</tr>
<tr>
<td>imagen 2:</td>
<td><input type="file" name="imagen2" accept="image/*"></td>
</tr>
<tr>
<td>Mensaje:</td>
<td><textarea name="mensaje" cols="50" rows="15" id="mensaje"></textarea></td>
</tr>
<tr>
<td></td><td><input type="submit" value="Enviar"></td>
</tr>
</table>
<input type="hidden" name="phpmailer">
</form>
</body>