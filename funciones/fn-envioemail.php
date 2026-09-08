<?php

class Fn_envioemail {

    function fnenvioemail_formulariocontacto($msg_mail){
        $para = EMAILCONTATANOS;
        $título = "CONTACTOS SUMAK KAWSAY";
        $mensaje = $msg_mail;
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $cabeceras .= 'To:  <' . $para . '>' . "\r\n";
        $cabeceras .= 'From: noreply@sumakkawsay.fin.ec' . "\r\n";

// Enviarlo
        $send = mail($para, $título, $mensaje, $cabeceras);
        if ($send) {
            return 1;
        } else {
            return 2;
        }
    }
    function fnenvioemail_formulariofinanciero03_xdata($msg_mail) {
        $para = EDUCACIONFINANCIERA;
        $título = "Educación Financiera";
        $mensaje = $msg_mail;
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $cabeceras .= 'To:  <' . $para . '>' . "\r\n";
        $cabeceras .= 'From: noreply@sumakkawsay.fin.ec' . "\r\n";

// Enviarlo
        $send = mail($para, $título, $mensaje, $cabeceras);
        if ($send) {
            return 1;
        } else {
            return 2;
        }
    }
    function fnenvioemail_formularioxquejayreclamo_data($msg_mail){
        $para = EMAILRECLAMOS;
        $título = "QUEJA Y RECLAMO SUMAK KAWSAY";
        $mensaje = $msg_mail;
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $cabeceras .= 'To:  <' . $para . '>' . "\r\n";
        $cabeceras .= 'From: noreply@sumakkawsay.fin.ec' . "\r\n";

// Enviarlo
        $send = mail($para, $título, $mensaje, $cabeceras);
        if ($send) {
            return 1;
        } else {
            return 2;
        }
    }
    function fnenvioemail_formularioxquejayreclamosara_data($msg_mail){
        $para = EMAILRECLAMOSARAS;
        $título = "QUEJA Y RECLAMO SARAS SUMAK KAWSAY";
        $mensaje = $msg_mail;
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $cabeceras .= 'To:  <' . $para . '>' . "\r\n";
        $cabeceras .= 'From: noreply@sumakkawsay.fin.ec' . "\r\n";

// Enviarlo
        $send = mail($para, $título, $mensaje, $cabeceras);
        if ($send) {
            return 1;
        } else {
            return 2;
        }
    }
    function fnenvioemail_formulariotrabajo($msg_mail){
        $para = EMAILTALENTO;
        $título = "POSTULACIÓN SUMAK KAWSAY";
        $mensaje = $msg_mail;
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $cabeceras .= 'To:  <' . $para . '>' . "\r\n";
        $cabeceras .= 'From: noreply@sumakkawsay.fin.ec' . "\r\n";

// Enviarlo
        $send = mail($para, $título, $mensaje, $cabeceras);
        if ($send) {
            return 1;
        } else {
            return 2;
        }
    }
}
