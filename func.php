<?php
  if(isset($_POST['submit'])) {

    $to = 'eduardo.loma.08@gmail.com';
    $from = $_POST['correo'];
    $name = $_POST['nombre'];
    $subject = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "De: $name <$from>";

    $sent = mail($to, $subject, $mensaje, $header);

    if($sent){
      echo 'Correo enviado correctamente';
    } else {
      echo 'Correo no enviado';
    }
  }
?>