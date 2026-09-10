<?php

$iopc = $_POST['iopc'];
if ($iopc == 1) {

    $nombre_contacto = $_POST['nombre_contacto'];
    $apellido_contacto = $_POST['apellido_contacto'];
    $email_contacto = $_POST['email_contacto'];
    $telefono_contacto = $_POST['telefono_contacto'];
    $texto_contacto = $_POST['texto_contacto'];
    $observacion_contacto = $_POST['observacion_contacto'];
    if (!empty($nombre_contacto) && !empty($apellido_contacto) && !empty($telefono_contacto) && !empty($texto_contacto) && !empty($observacion_contacto)) {
        $html = '<html>
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .email-wrapper {
      background-color: #ffffff;
      max-width: 600px;
      margin: 40px auto;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .email-header {
      background-color: #f7f1eb;
      padding: 20px;
      text-align: center;
    }
    .email-header img {
      max-height: 60px;
    }
    .email-content {
      padding: 30px;
    }
    .email-content h2 {
      color: #1a1c23;
      margin-bottom: 20px;
    }
    .campo {
      margin-bottom: 15px;
    }
    .campo strong {
      display: inline-block;
      width: 130px;
      color: #444;
    }
    .mensaje {
      background-color: #f9f9f9;
      padding: 15px;
      border-left: 4px solid #f5f5f5;
      margin-top: 10px;
      white-space: pre-wrap;
    }
    .email-footer {
      font-size: 12px;
      text-align: center;
      padding: 15px;
      background-color: #eeeeee;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="email-wrapper">
    <div class="email-header">
      <img src="https://cooperativa15deagosto.fin.ec/TEST/assets/img/logo/logo2.png" alt="Coac 15 de Agosto">
    </div>
    <div class="email-content">
      <h2>Mensaje contáctanos</h2>
      <p>Se ha recibido un mensaje desde el formulario del sitio web:</p>

      <div class="campo"><strong>Nombres:</strong> ' . $nombre_contacto . '</div>
      <div class="campo"><strong>Email:</strong> ' . $email_contacto . '</div>
      <div class="campo"><strong>Teléfono:</strong> ' . $telefono_contacto . '</div>
      <div class="campo"><strong>Mensaje:</strong></div>
      <div class="mensaje">' . nl2br($texto_contacto) . '<br>' . $observacion_contacto . '</div>
    </div>
    <div class="email-footer">
      Este mensaje fue enviado automáticamente desde el sitio web de cooperativa15deagosto.fin.ec
    </div>
  </div>
</body>
</html>';

        $subject = 'Mensaje Contáctanos';
        $encabezados = "MIME-Version: 1.0" . "\r\n";
# ojo, es una concatenación:
        $encabezados .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        $encabezados .= 'From:  Coac 15 de agosto <noreply@cooperativa15deagosto.fin.ec>' . "\r\n";
        // TODO: confirmar con la cooperativa el correo real que debe recibir estos
        // mensajes (antes apuntaba a la empresa desarrolladora del sitio).
        $emails = 'info@coop15deagosto.fin.ec';
        $resultado = mail($emails, $subject, $html, $encabezados); #Mandar al final los encabezados
        if ($resultado) {
            echo '<div style="margin-top:20px;background:#edffed; padding: 5px 10px;">Mensaje enviado correctamente, en la brevedad de lo posible uno de nuestros asesores responderá a tu mensaje.</div>';
            return 1;
        } else {
            echo '<div style="margin-top:20px;background:#f6d9d8; padding: 5px 10px;">Ocurrió un inconveniente al enviar el mensaje, porfavor comunícate con nosotros.</div>';
            return 2;
        }
    } else {
        echo '<div style="margin-top:20px;background:#f6d9d8; padding: 5px 10px;">Ingrese porfavor toda la información requerida.</div>';
        return 2;
    }
}
if ($iopc == 2) {
    $nombre_queja = $_POST['nombre_queja'];
    $apellido_queja = $_POST['apellido_queja'];
    $email_queja = $_POST['email_queja'];
    $telefono_queja = $_POST['telefono_queja'];
    $asunto_queja = $_POST['asunto_queja'];
    $observacion_queja = $_POST['observacion_queja'];
    if (!empty($nombre_queja) && !empty($apellido_queja) && !empty($observacion_queja) && !empty($email_queja) && !empty($telefono_queja) && !empty($asunto_queja)) {
        $html = '<html>
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .email-wrapper {
      background-color: #ffffff;
      max-width: 600px;
      margin: 40px auto;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .email-header {
      background-color: #f7f1eb;
      padding: 20px;
      text-align: center;
    }
    .email-header img {
      max-height: 60px;
    }
    .email-content {
      padding: 30px;
    }
    .email-content h2 {
      color: #1a1c23;
      margin-bottom: 20px;
    }
    .campo {
      margin-bottom: 15px;
    }
    .campo strong {
      display: inline-block;
      width: 130px;
      color: #444;
    }
    .mensaje {
      background-color: #f9f9f9;
      padding: 15px;
      border-left: 4px solid #f5f5f5;
      margin-top: 10px;
      white-space: pre-wrap;
    }
    .email-footer {
      font-size: 12px;
      text-align: center;
      padding: 15px;
      background-color: #eeeeee;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="email-wrapper">
    <div class="email-header">
      <img src="https://cooperativa15deagosto.fin.ec/TEST/assets/img/logo/logo2.png" alt="Coac 15 de Agosto">
    </div>
    <div class="email-content">
      <h2>Mensaje Quejas y reclamos</h2>
      <p>Se ha recibido un mensaje desde el formulario del sitio web:</p>

      <div class="campo"><strong>Nombres:</strong> ' . $nombre_queja . '</div>
      <div class="campo"><strong>Email:</strong> ' . $email_queja . '</div>
      <div class="campo"><strong>Teléfono:</strong> ' . $telefono_queja . '</div>
      <div class="campo"><strong>Mensaje:</strong></div>
      <div class="mensaje">' . nl2br($asunto_queja) . '<br>' . $observacion_queja . '</div>
    </div>
    <div class="email-footer">
      Este mensaje fue enviado automáticamente desde el sitio web de cooperativa15deagosto.fin.ec
    </div>
  </div>
</body>
</html>';

        $subject = 'Mensaje Quejas y Reclamos';
        $encabezados = "MIME-Version: 1.0" . "\r\n";
# ojo, es una concatenación:
        $encabezados .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        $encabezados .= 'From:  Coac 15 de agosto <noreply@cooperativa15deagosto.fin.ec>' . "\r\n";
        // TODO: confirmar con la cooperativa el correo real que debe recibir estos
        // mensajes (antes apuntaba a la empresa desarrolladora del sitio).
        $emails = 'info@coop15deagosto.fin.ec';
        $resultado = mail($emails, $subject, $html, $encabezados); #Mandar al final los encabezados
        if ($resultado) {
            echo '<div style="margin-top:20px;background:#edffed; padding: 5px 10px;">Mensaje enviado correctamente, en la brevedad de lo posible uno de nuestros asesores responderá a tu mensaje.</div>';
            return 1;
        } else {
            echo '<div style="margin-top:20px;background:#f6d9d8; padding: 5px 10px;">Ocurrió un inconveniente al enviar el mensaje, porfavor comunícate con nosotros.</div>';
            return 2;
        }
    } else {
        echo '<div style="margin-top:20px;background:#f6d9d8; padding: 5px 10px;">Ingrese porfavor toda la información requerida.</div>';
        return 2;
    }
}



if ($iopc == 3) {
    $agencia_eval = $_POST['agencia_eval'];
    $rating_eval = $_POST['rating_eval'];
    $comentario_eval = $_POST['comentario_eval'];
    if (!empty($agencia_eval) && !empty($rating_eval)) {
        $html = '<html><head><meta charset="UTF-8"></head><body>'
                . '<h2>Nueva evaluacion de servicio</h2>'
                . '<p><strong>Sucursal:</strong> ' . htmlspecialchars($agencia_eval) . '</p>'
                . '<p><strong>Calificacion:</strong> ' . htmlspecialchars($rating_eval) . ' / 5</p>'
                . '<p><strong>Comentario:</strong><br>' . nl2br(htmlspecialchars($comentario_eval)) . '</p>'
                . '</body></html>';
        $subject = 'Nueva evaluacion de servicio';
        $encabezados = "MIME-Version: 1.0" . "\r\n";
        $encabezados .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        $encabezados .= 'From:  Coac 15 de agosto <noreply@cooperativa15deagosto.fin.ec>' . "\r\n";
        // TODO: confirmar con la cooperativa el correo real que debe recibir las evaluaciones.
        $emails = 'info@coop15deagosto.fin.ec';
        $resultado = mail($emails, $subject, $html, $encabezados);
        if ($resultado) {
            echo '<div style="margin-top:20px;background:#edffed; padding: 5px 10px;">Gracias por tu evaluacion.</div>';
            return 1;
        } else {
            echo '<div style="margin-top:20px;background:#f6d9d8; padding: 5px 10px;">Ocurrio un inconveniente al enviar tu evaluacion.</div>';
            return 2;
        }
    } else {
        echo '<div style="margin-top:20px;background:#f6d9d8; padding: 5px 10px;">Selecciona una sucursal y una calificacion.</div>';
        return 2;
    }
}
