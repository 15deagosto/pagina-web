<?php

class Fn_simuladores {

    public function fnindex_creditos_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasa WHERE estado_tasa = 1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_creditos_x";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fnsimuladores_sucursales_all() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros WHERE estado_nosotros = 1 and tipo_nosotros=1";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnsimuladores_sucursales_all";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    
    
    public function fn_rtasanm_xidprod($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT min(min_tasa), max(max_tasa),min(valmin_tasa),max(valmax_tasa) FROM tasa WHERE estado_tasa = 1 and id_prod = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('min_tasa' => $menu['min(min_tasa)'],
                'max_tasa' => $menu['max(max_tasa)'],
                'valmin_tasa' => $menu['min(valmin_tasa)'],
                'valmax_tasa' => $menu['max(valmax_tasa)']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fn_rtasainvercion_xidprod() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT min(diain_inversion), max(diaout_inversion) FROM inversion ";
        //echo $sql2;
        $arreglo=array();
        
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('diain_inversion' => $menu['min(diain_inversion)'],
                'diaout_inversion' => $menu['max(diaout_inversion)']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fn_rtasa_xidprod($id,$cred_cantidad,$cred_tiempo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasa t INNER JOIN producto p on p.id_prod=t.id_prod "
                ."INNER JOIN linea_credito li on li.id_lineacred=p.id_lineacred "
                ."WHERE estado_tasa = 1 and t.id_prod = $id and $cred_cantidad>=valmin_tasa and " 
                ."$cred_cantidad<=valmax_tasa  and $cred_tiempo>=min_tasa and $cred_tiempo<=max_tasa  limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_tasa' => $menu['id_tasa'],
                'tasanominal_tasa' => $menu['tasanominal_tasa'],
                'nombre_prod' => $menu['nombre_prod'],
                'nombre_lineacred' => $menu['nombre_lineacred']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fn_rtasa_xtiempo($tiempo_inversiondias) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM inversion "
                ." WHERE  $tiempo_inversiondias>=diain_inversion "
                . " and  $tiempo_inversiondias<=diaout_inversion  limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xtiempo -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_inversion' => $menu['id_inversion'],
                'diain_inversion' => $menu['diain_inversion'],
                'diaout_inversion' => $menu['diaout_inversion'],
                'prociento_inversion' => $menu['prociento_inversion']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fn_rproducto_xcodERP($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto p INNER JOIN linea_credito li "
                . " on li.id_lineacred=p.id_lineacred WHERE estado_prod = 1 "
                . " and codERP_prod = '$id' limit 0,1";
        //echo $sql2;
        $arreglo=array();
        
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_lineacred' => $menu['nombre_lineacred'],
                'tipo_prod' => $menu['tipo_prod'],
                'nombre_prod' => $menu['nombre_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fn_rproducto_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto p INNER JOIN linea_credito li "
                . " on li.id_lineacred=p.id_lineacred WHERE estado_prod = 1 "
                . " and id_prod = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_prod' => $menu['id_prod'],
                'nombre_lineacred' => $menu['nombre_lineacred'],
                'tipo_prod' => $menu['tipo_prod'],
                'nombre_prod' => $menu['nombre_prod'],
                'val_min_prod' => $menu['val_min_prod'],
                'val_max_prod' => $menu['val_max_prod'],
                'int_prod' => $menu['int_prod'],
                'segurograv_prod' => $menu['segurograv_prod']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fn_rnosotros_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros WHERE estado_nosotros = 1 and id_nosotros = $id limit 0,1";
        //echo $sql2;
        $arreglo=array();
        
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rnosotros_xid -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_nosotros' => $menu['id_nosotros'],
                'nombre_nosotros' => $menu['nombre_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
   public function fnsim_rproducto_alltasa() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto p WHERE estado_prod = 1 and tipo_prod=1 GROUP by nombre_prod";
        //$sql2 = "SELECT * FROM producto p INNER JOIN tasa t ON p.id_prod=t.id_prod  WHERE estado_prod = 1 GROUP by nombre_prod";
        
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnsim_rproducto_alltasa -- fn63 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fnsim_rproducto_allxtipo() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto WHERE estado_prod = 1 and tipo_prod=2";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnsim_rproducto_alltasa -- fn63 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    

    public function fnsimulador_credito_x($nombre_credito,$apellido_credito,$telefono_credito,$email_credito,
            $entidad_credito,$ciudad_credito,$cred_cantidad,$cred_tiempo,$id_tasa,$acuerdo_credito,$estado,$id,$dp_direccion) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO solicitud_credito(nombre_credito,apellido_credito,telefono_credito,email_credito,"
                . "entidad_credito,ciudad_credito,monto_credito,tiempo_credito,id_tasa,acuerdo_credito,"
                . "estado_credito,id_prod,direccion_credito) "
                . " VALUES ('$nombre_credito','$apellido_credito','$telefono_credito','$email_credito',"
                . "'$entidad_credito','$ciudad_credito',$cred_cantidad,$cred_tiempo,$id_tasa,$acuerdo_credito,"
                . "$estado,$id,'$dp_direccion') ";
       //echo $sql;
       if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    
    public function fnsimulador_quejas_x($tipo_queja, $direccion_queja,
            $inconformidad_queja, $mensaje_queja, $nombre_queja, $telefono1_queja,
            $terminos_queja) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fecha=date('Y-m-d');
        $hora=date('H:m:s');
        $sql = "INSERT INTO quejas(cedula_queja,nombre_queja,telefono1_queja,telefono2_queja,email_queja,direccion_queja,referencia_queja"
                . ",fecha_queja,hora_queja,mensaje_queja,peticion_queja,estado_queja,acuerdo_queja,area_queja,tipo_queja,"
                . "inconformidad_queja,terminos_queja) "
                . " VALUES ('','$nombre_queja', '$telefono1_queja','','','$direccion_queja','','$fecha','$hora'"
                . ",'$mensaje_queja','',1,'','$inconformidad_queja','$tipo_queja','$inconformidad_queja',$terminos_queja) ";
        //echo $sql;
       if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }
    

    public function fnsimulador_inversion_x($nombre_inversion,$telefono_inversion,$email_inversion
            ,$apellido_inversion,$entidad_inversion,$ciudad_inversion,$monto_inversion,$acuerdo_inversion,$id,$dni_inversion) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql = "INSERT INTO solicitud_inversion(nombre_inversion,telefono_inversion,email_inversion,"
            ."apellido_inversion,entidad_inversion,ciudad_inversion,monto_inversion,acuerdo_inversion,estado_inversion,id_prod,dni_inversion) "
                . " VALUES ('$nombre_inversion','$telefono_inversion','$email_inversion'
            ,'$apellido_inversion','$entidad_inversion','$ciudad_inversion',$monto_inversion,$acuerdo_inversion,0,$id,'$dni_inversion') ";
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    public function fnindex_lastidsolcred_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT id_credito as numero from solicitud_credito order by id_credito desc limit 0,1";
        //echo $sql2;
        $lastid = 0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe la noticia.";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $lastid = $menu['numero'];
        }

        $mysqlidato->close();
        return $lastid;
    }

    public function fnindex_lastidsolinv_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT id_inversion as numero from solicitud_inversion order by id_inversion desc limit 0,1";
        //echo $sql2;
        $lastid = 0;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe la noticia.";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $lastid = $menu['numero'];
        }

        $mysqlidato->close();
        return $lastid;
    }

    public function fnindex_rsolcred_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from solicitud_credito WHERE id_credito  = $id";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe la noticia.";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_credito' => $menu['id_credito'],
                'nombres_credito' => $menu['nombres_credito'],
                'edad_credito' => $menu['edad_credito'],
                'dni_credito' => $menu['dni_credito'],
                'nacionalidad_credito' => $menu['nacionalidad_credito'],
                'civil_credito' => $menu['civil_credito'],
                'ciudad_credito' => $menu['ciudad_credito'],
                'parroquia_credito' => $menu['parroquia_credito'],
                'direccion_credito' => $menu['direccion_credito'],
                'cargasfamiliares_credito' => $menu['cargasfamiliares_credito'],
                'direccion_credito' => $menu['direccion_credito'],
                'cargasfamiliares_credito' => $menu['cargasfamiliares_credito'],
                'hijos_credito' => $menu['hijos_credito'],
                'entidad_credito' => $menu['entidad_credito'],
                'cargo_credito' => $menu['cargo_credito'],
                'direccionentidad_credito' => $menu['direccionentidad_credito'],
                'referenciaentidad_credito' => $menu['referenciaentidad_credito'],
                'tiempotrabajo_credito' => $menu['tiempotrabajo_credito'],
                'tipovivienda_credito' => $menu['tipovivienda_credito'],
                'nombresconyuge_credito' => $menu['nombresconyuge_credito'],
                'dniconyuge_credito' => $menu['dniconyuge_credito'],
                'telefonoconyuge_credito' => $menu['telefonoconyuge_credito'],
                'trabajoconyuge_credito' => $menu['trabajoconyuge_credito'],
                'tiempotrabajoconyuge_credito' => $menu['tiempotrabajoconyuge_credito'],
                'cargoconyuge_credito' => $menu['cargoconyuge_credito'],
                'monto_credito' => $menu['monto_credito'],
                'tiempo_credito' => $menu['tiempo_credito'],
                'id_tasa' => $menu['id_tasa'],
                'estado_credito' => $menu['estado_credito']);
            array_push($arreglo, $datosNuevos);
        }

        $mysqlidato->close();
        return $arreglo;
    }

    public function fnindex_rsolinv_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from solicitud_inversion WHERE id_inversion  = $id";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe la noticia.";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_inversion' => $menu['id_inversion'],
                'nombres_inversion' => $menu['nombres_inversion'],
                'edad_inversion' => $menu['edad_inversion'],
                'dni_inversion' => $menu['dni_inversion'],
                'nacionalidad_inversion' => $menu['nacionalidad_inversion'],
                'estadocivil_inversion' => $menu['estadocivil_inversion'],
                'estado_inversion' => $menu['estado_inversion']);
            array_push($arreglo, $datosNuevos);
        }

        $mysqlidato->close();
        return $arreglo;
    }

    function fnindex_msgemail_solicitudcred($id) {
        $fnsimuladores = new Fn_simuladores();
        $message = "";
        $message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
        $detsolicitud = $fnsimuladores->fnindex_rsolcred_xid($id);
        $message .= '<table style="width: 100%; text-align: center; background-color: #F2F2F2;"><tr><td><img src="" width="400"></td></tr></table>
<table style="width: 100%; text-align: center; margin-top: 20px;"><tr><td><label style="font-weight: 800;">SOLICITUD DE CRÉDITO </label></td></tr></table>
<table style="width: 100%; text-align: center; margin-top: 20px;"><tr><td>Estimado usuario, hemos recibido tu solicitud de crédito con la siguiente información, nos mantendremos en contacto conntigo en los próximos días.</td></tr></table>
<table style="width: 100%; margin-top: 20px; margin-left: 200px;">
    <tr>
        <td><b>Nombres y Apellidos:</b> ' . utf8_encode($detsolicitud[0]['nombres_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Cédula:</b> ' . utf8_encode($detsolicitud[0]['dni_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Monto:</b> ' . utf8_encode($detsolicitud[0]['monto_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Tiempo:</b> ' . utf8_encode($detsolicitud[0]['tiempo_credito']) . ' meses</td>
    </tr>
    <tr>
        <td><b>Ciudad:</b> ' . utf8_encode($detsolicitud[0]['ciudad_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Dirección:</b> ' . utf8_encode($detsolicitud[0]['direccion_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Tipo de vivienda:</b> ' . utf8_encode($detsolicitud[0]['tipovivienda_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Trabajo:</b> ' . utf8_encode($detsolicitud[0]['entidad_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Cargo:</b> ' . utf8_encode($detsolicitud[0]['cargo_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Dirección:</b> ' . utf8_encode($detsolicitud[0]['direccionentidad_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Tiempo laboral:</b> ' . utf8_encode($detsolicitud[0]['tiempotrabajo_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Nombres y Apellido conyuge:</b> ' . utf8_encode($detsolicitud[0]['nombresconyuge_credito']) . ' </td>
    </tr>
    <tr>
        <td><b>Cédula conyuge:</b> ' . utf8_encode($detsolicitud[0]['dniconyuge_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Trabajo conyuge:</b> ' . utf8_encode($detsolicitud[0]['trabajoconyuge_credito']) . '</td>
    </tr>
    <tr>
        <td><b>Cargo conyuge:</b>  ' . utf8_encode($detsolicitud[0]['cargoconyuge_credito']) . '</td>
    </tr>
    
</table>
<table style="width: 100%; margin-left: 200px; margin-top: 50px;"><tr><td>Por favor no responder el email, fué generado automáticamente desde: www.cacec.com.ec</td></tr></table>';

        $message .= "\r\n\r\n--" . $uniqueid . "--";

        return $message;
    }

    function fnindex_msgemail_solicitudinv($id) {
        $fnsimuladores = new Fn_simuladores();
        $message = "";
        $message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
        $detsolicitud = $fnsimuladores->fnindex_rsolinv_xid($id);
        $message .= '<table style="width: 100%; text-align: center; background-color: #F2F2F2;"><tr><td><img src="" width="400"></td></tr></table>
<table style="width: 100%; text-align: center; margin-top: 20px;"><tr><td><label style="font-weight: 800;">SOLICITUD DE INVERSIÓN </label></td></tr></table>
<table style="width: 100%; text-align: center; margin-top: 20px;"><tr><td>Estimado usuario, hemos recibido tu solicitud de crédito con la siguiente información, nos mantendremos en contacto conntigo en los próximos días.</td></tr></table>
<table style="width: 100%; margin-top: 20px; margin-left: 200px;">
    <tr>
        <td><b>Nombres y Apellidos:</b> ' . utf8_encode($detsolicitud[0]['nombres_inversion']) . '</td>
    </tr>
    <tr>
        <td><b>Cédula:</b> ' . utf8_encode($detsolicitud[0]['dni_inversion']) . '</td>
    </tr>
    <tr>
        <td><b>Estadocivil:</b> ' . utf8_encode($detsolicitud[0]['estadocivil_inversion']) . '</td>
    </tr>
</table>
<table style="width: 100%; margin-left: 200px; margin-top: 50px;"><tr><td>Por favor no responder el email, fué generado automáticamente desde: www.cacec.com.ec</td></tr></table>';

        $message .= "\r\n\r\n--" . $uniqueid . "--";

        return $message;
    }

    function fnindex_sendemail_solicitudcred($mensaje, $email,$id,$id_agencia) {
        require '../phpmailer/PHPMailerAutoload.php';
        $html = $mensaje;
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 3;
        $mail->SMTPAutoTLS = false;
        $mail->Host = SMTP_HOST;
        $mail->Port = SMTP_PORT;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASSWORD;
        $mail->setFrom(SMTP_USER, 'Solicitud Inversión - '.EMPRESA);
        $mail->addAddress('calidad@supaysoft.net', 'Solicitud Inversión - '.EMPRESA);
        $mail->Subject = 'Solicitud Inversión - '.EMPRESA;
        $uniqueid = uniqid('np');
        $mail->CharSet = 'UTF-8';
        $mail->msgHTML($html);
        $mail->AltBody = 'This is a plain-text message body';
        if ($mail->send()) {
            return 1;
        } else {
            return 2;
        }
    }
    function fnindex_sendemail_solicitudcredito($mensaje) {
        $para = EMAILPROSPECCION;
        $título = "SOLICITUD CRÉDITO";
        $mensaje = $mensaje;
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
  function fnindex_msgemail_solicitudcredito($mensaje) {
        $para = EMAILPROSPECCION;
        $título = "SOLICITUD INVERSIÓN";
        $mensaje = $mensaje;
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
    function fnindex_sendemail_queja($mensaje) {
        $from = EMAIL_USER;
        $to= trim(EMAILQUEJAS);
        $subject = 'Mensaje desde la web (Quejas y sugerencias)';
        $message = $mensaje;
        $encabezados = "MIME-Version: 1.0" . "\r\n";
        # ojo, es una concatenación:
        $encabezados .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        $encabezados .= "From:" . $from;
//        while ($menu = $tabla->fetch_assoc()) {
//            $to.=','.trim($menu['mail_coordinador']);
//             // mail($menu['mail_coordinador'],$subject,$message, $headers);
//        }
        $send=mail($to,$subject,$message, $encabezados);
        if($send){
            return 1;
        }else{
            return 0;
        }
    }  
    function fnindex_sendemail_solicitudinversion($mensaje, $email, $id,$id_agencia) {
        //print_r($mensaje.'/'.$email.'/'. $id.'/'.$id_agencia);
        
        //print_r($server);
        /*$mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->SMTPAutoTLS = true;
        $mail->Host = EMAIL_HOST;
        $mail->Port = EMAIL_PORT;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL_USER;
        $mail->Password = EMAIL_PASS;
        //Set who the message is to be sent from
        $mail->setFrom(EMAIL_USER, 'Solicitud de Inversion Nro. '.$id);
        //Set who the message is to be sent to
        while ($menu = $tabla->fetch_assoc()) {
            $mail->addAddress(trim($menu['mail_coordinador']), 'Solicitud de Inversion Nro. '.$id);    
        }
        
        $mail->addAddress(trim($email), 'Solicitud de Inversion Nro. '.$id);
        //Set the subject line
        $mail->Subject = 'Solicitud de Inversion Nro. '.$id;
        $uniqueid = uniqid('np');
        $mail->CharSet = 'UTF-8';
        $mail->msgHTML($mensaje);
        $mail->AltBody = 'This is a plain-text message body';
        if ($mail->send()) {
            return 1;
        } else {
            return 2;
        }*/
        
        $from = EMAIL_USER;
        $email2=EMAILINVERSION;
        $to= trim($email);
        $to.=','.trim($email2);
        $subject = 'Solicitud de inversión Nro. '.$id;
        $message = utf8_decode($mensaje);
        $headers= 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From:" . $from;
//        while ($menu = $tabla->fetch_assoc()) {
//            $to.=','.trim($menu['mail_coordinador']);
//             // mail($menu['mail_coordinador'],$subject,$message, $headers);
//        }
        mail($to,$subject,$message, $headers);
    }
    function fnindex_sendemail_solicitudahorro($mensaje, $email, $id,$id_agencia) {
        //print_r($mensaje.'/'.$email.'/'. $id.'/'.$id_agencia);
        
        
        //print_r($server);
        /*$mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->SMTPAutoTLS = true;
        $mail->Host = EMAIL_HOST;
        $mail->Port = EMAIL_PORT;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL_USER;
        $mail->Password = EMAIL_PASS;
        //Set who the message is to be sent from
        $mail->setFrom(EMAIL_USER, 'Solicitud de Inversion Nro. '.$id);
        //Set who the message is to be sent to
        while ($menu = $tabla->fetch_assoc()) {
            $mail->addAddress(trim($menu['mail_coordinador']), 'Solicitud de Inversion Nro. '.$id);    
        }
        
        $mail->addAddress(trim($email), 'Solicitud de Inversion Nro. '.$id);
        //Set the subject line
        $mail->Subject = 'Solicitud de Inversion Nro. '.$id;
        $uniqueid = uniqid('np');
        $mail->CharSet = 'UTF-8';
        $mail->msgHTML($mensaje);
        $mail->AltBody = 'This is a plain-text message body';
        if ($mail->send()) {
            return 1;
        } else {
            return 2;
        }*/
        
        $from = EMAIL_USER;
        $email2=EMAILAHORRO;
        $to= trim($email);
        $to.=','.trim($email2);
        $subject = 'Solicitud de ahorro Nro. '.$id;
        $message = utf8_decode($mensaje);
        $headers= 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers.= "From:" . $from;
//        while ($menu = $tabla->fetch_assoc()) {
//            $to.=','.trim($menu['mail_coordinador']);
//             // mail($menu['mail_coordinador'],$subject,$message, $headers);
//        }
        mail($to,$subject,$message, $headers);
    }
    
    function fnindex_sendemail_prueba($mensaje, $email, $id,$id_agencia) {
        require '../config.php';
        require_once '../phpmailer/PHPMailerAutoload.php';
        //print_r($mensaje.'/'.$email.'/'. $id.'/'.$id_agencia);
        
        //print_r($server);
        /*$mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->SMTPAutoTLS = true;
        $mail->Host = EMAIL_HOST;
        $mail->Port = EMAIL_PORT;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL_USER;
        $mail->Password = EMAIL_PASS;
        //Set who the message is to be sent from
        $mail->setFrom(EMAIL_USER, 'Solicitud de Inversion Nro. '.$id);
        //Set who the message is to be sent to
        
            $mail->addAddress(trim($id_agencia), 'Solicitud de Inversion Nro. '.$id);    
        
        
        $mail->addAddress(trim($email), 'Solicitud de Inversion Nro. '.$id);
        //Set the subject line
        $mail->Subject = 'Solicitud de Inversion Nro. '.$id;
        $uniqueid = uniqid('np');
        $mail->CharSet = 'UTF-8';
        $mail->msgHTML($mensaje);
        $mail->AltBody = 'This is a plain-text message body';
        if ($mail->send()) {
            echo 1;
        } else {
            echo 2;
        }*/
         $from = "test@hostinger-tutorials.com";
        $to = $email;
        $subject = 'Solicitud de Inversion Nro. '.$id;
        $message = utf8_decode($mensaje);
        $headers= 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers.= "From:" . $from;
        
        mail($to,$subject,$message, $headers);
        
    }

    public function fnsimulador_rinversion_xid($valor, $mes) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM inversion where m"
                . "ontoin_inversion<=" . $valor . " and "
                . " montoout_inversion>=" . $valor . " and diain_inversion<=" . $mes . " "
                . " and diaout_inversion>=" . $mes . " limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnsimulador_rinversion_xid () ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_inversion' => $menu['id_inversion'],
                'montoin_inversion' => $menu['montoin_inversion'],
                'montoout_inversion' => $menu['montoout_inversion'],
                'diain_inversion ' => $menu['diain_inversion '],
                'diaout_inversion' => $menu['diaout_inversion'],
                'prociento_inversion' => $menu['prociento_inversion']);
            array_push($arreglo, $datosNuevos);
        }

        $mysqlidato->close();
        return $arreglo;
    }

    public function fnsimulador_r_resultinv_xdatos($valor, $mes) {
        $dias = $mes;
        $fnsimuladores = new Fn_simuladores();
        $detinversion = $fnsimuladores->fnsimulador_rinversion_xid($valor, $dias);
        $tasa_interes = $detinversion[0]['prociento_inversion'];
        $interesgenerado = (($valor * ($tasa_interes / 100) + $valor ));
        return $interesgenerado;
    }
    
    public function fnsimulador_r_invtasa_xdatos($valor, $mes) {
        $dias = $mes;
        $fnsimuladores = new Fn_simuladores();
        $detinversion = $fnsimuladores->fnsimulador_rinversion_xid($valor, $dias);
        $tasa_interes = $detinversion[0]['prociento_inversion'];
        return $tasa_interes;
    }
    
    public function fnsimulador_rtasa_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from tasa WHERE id_tasa  = $id";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnindex_rtasa_xid () ";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_tasa' => $menu['id_tasa'],
                'tasanominal_tasa' => $menu['tasanominal_tasa'],
                'efectivaanual_tasa' => $menu['efectivaanual_tasa'],
                'efectivofin_tasa' => $menu['efectivofin_tasa'],
                'acumulacion_tasa' => $menu['acumulacion_tasa'],
                'valmin_tasa' => $menu['valmin_tasa'],
                'valmax_tasa' => $menu['valmax_tasa'],
                'nombre_tasa' => $menu['nombre_tasa'],
                'interes_tasa' => $menu['interes_tasa']);
            array_push($arreglo, $datosNuevos);
        }

        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fnsimulador_cuotamensual_xid($monto, $meses, $interes) {
        $tasa = $interes / 100;
        $totalPay = ($monto * $tasa) + $monto;
        $monthlyPay = $totalPay / $meses;
        return number_format($monthlyPay,2);
    }
    
    public function  fnsimulador_tasasBCE() {
        //include './controler/conecciones.php';
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM bce order by id_bce";
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            exit;
        }
        while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_bce' => $menu['id_bce'],
                'nombre_bce' => $menu['nombre_bce'],
                'tasa_bce' => $menu['tasa_bce']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fnsimulador_rnombrezona_xdata($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT lugar_zona from zona where id_zona LIKE '$id' limit 0,1";
        //echo $sql2;
        $lugar = '';
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Lo sentimos, no existe la noticia.";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $lugar = $menu['lugar_zona'];
        }

        $mysqlidato->close();
        return $lugar;
    }
    
    public function fnsimulador_ramortiza_xdata($id) {
        $texto = '';
        if($id == 1){
            $texto = 'Alemán';
        }
        if($id == 2){
            $texto = 'Frances';
        }
        return $texto;
    }
    
     public function fn_rtextos_x() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM textos WHERE estado_texto = 1 and tipo_texto = 3 limit 0,1";
        //echo $sql2;
        $arreglo=array();
        
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtextos_x -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_texto' => $menu['id_texto'],
                'titulo_texto' => $menu['titulo_texto'],
                'resumen_texto' => $menu['resumen_texto']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fn_rcoordinador_xidagencia($id){
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM coordinadores WHERE estado_coordinador = 1 and id_agencia = $id ";
        //echo $sql2;
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rcoordinador_xidagencia";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
     public function fnsim_rproducto_ahorro() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto WHERE estado_prod = 1 and id_prod=32";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnsim_rproducto_alltasa -- fn63 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }
     
    public function fnsim_rproducto_inversion() {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM producto WHERE estado_prod = 1 and id_prod=31";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnsim_rproducto_alltasa -- fn63 ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function varifica_datos2($nombres,$apellidos,$celular,$email,$id_zona,$entidad_credito,$tipo_identifica,$dni) {
        
        $aun = 1;
        
        if($nombres==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_nombres").html('<label style="color: red">Ingrese nombres completos</label>');
            </script>
            
            <?php
        } else {
            ?>
            <script>
                $("#msg_nombres").html('');
            </script>
            
            <?php
        }
        if($apellidos==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_apellido").html('<label style="color: red">Ingrese apellidos completos</label>');
            </script>
            
            <?php
        } else {
            ?>
            <script>
                $("#msg_apellido").html('');
            </script>
            
            <?php
        }
        if($celular==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_telefono").html('<label style="color: red">Ingrese celular</label>');
            </script>
            
            <?php
        } else {
            if(strlen($celular)==10){
            ?>
            <script>
                $("#msg_telefono").html('');
            </script>
            
            <?php
            } else {
                $aun = 0;
                ?>
                <script>
                    $("#msg_telefono").html('<label style="color: red">Ingrese celular correcto</label>');
                </script>

                <?php
            }
        }
        if($email==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_email").html('<label style="color: red">Ingrese email valido</label>');
            </script>
            
            <?php
        } else {
            $matches = null;
            $verificameil = (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email, $matches));
            if($verificameil=='true'){
                ?>
                <script>
                    $("#msg_email").html('');
                </script>

                <?php
                
            } else {
                $aun = 0;
                ?>
                <script>
                    $("#msg_email").html('<label style="color: red">Ingrese email valido</label>');
                </script>

                <?php
            }
        }
        
        if($id_zona==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_canton").html('<label style="color: red">Ingrese Parroquia</label>');
            </script>
            
            <?php
        } else {
            ?>
            <script>
                $("#msg_canton").html('');
            </script>
            
            <?php
        }
        if($entidad_credito==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_agencia").html('<label style="color: red">Seleccione agencia</label>');
            </script>
            
            <?php
        } else {
            ?>
            <script>
                $("#msg_agencia").html('');
            </script>
            
            <?php
        }
        
        if($dni==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_cedula").html('<label style="color: red">Ingrese identificación</label>');
            </script>
            
            <?php
        } else {
            if($tipo_identifica==0 && strlen($dni)!=10){
                $aun = 0;
                ?>
                <script>
                    $("#msg_cedula").html('<label style="color: red">Ingrese Cedula Válida</label>');
                </script>

                <?php
            }elseif ($tipo_identifica==1 && strlen($dni)!=13) {
                $aun = 0;
                ?>
                <script>
                    $("#msg_cedula").html('<label style="color: red">Ingrese Ingrese Ruc Válido</label>');
                </script>

                <?php
            }else{
                ?>
                <script>
                    $("#msg_cedula").html('');
                </script>

                <?php
            }
            
        }
        return $aun ;
    }
    
    function verifica_texto_datos2($nombres,$apellidos,$celular,$email,$id_zona,$entidad_credito,$tipo_identifica,$dni) {
        $aun = '';
        if($nombres==''){
            $aun .= ' <br>- Ingrese nombres completos';
        } 
        if($apellidos==''){
            $aun .= ' <br>- Ingrese apellidos completos';
        } 
        if($celular==''){
            $aun .= ' <br>- Ingrese celular';
        } else {
            if(strlen($celular)==10){
            } else {
                $aun = 0;
                $aun .= ' <br> - Ingrese celular correcto';
            }
        }
        if($email==''){
            $aun .= ' <br> - Ingrese email válido';
        } else {
            $matches = null;
            $verificameil = (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email, $matches));
            if($verificameil!='true'){
                $aun .= ' <br> - Ingrese email válido';
            } 
        }
        if($id_zona==''){
            $aun .= ' <br> - Ingrese parroquia';
        } 
        if($entidad_credito==''){
            $aun .= ' <br> - Seleccione agencia';
        } 
        if($dni==''){
            $aun .= ' <br> - Ingrese identificación';
        } else {
            if($tipo_identifica==0 && strlen($dni)!=10){
                $aun .= ' <br> - Ingrese cedula válida';
            }elseif ($tipo_identifica==1 && strlen($dni)!=13) {
                $aun .= ' <br> - Ingrese ruc válido';
            }
        }
        return $aun ;
    }
    
    function varifica_datos3($nombres,$apellidos,$celular,$email,$id_zona,$entidad_credito,$tipo_identifica,$dni) {
        $aun = 1;
        if($nombres==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_nombres").html('<label style="color: red">Ingrese nombres completos</label>');
            </script>
            
            <?php
        } else {
            ?>
            <script>
                $("#msg_nombres").html('');
            </script>
            
            <?php
        }
        if($apellidos==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_apellido").html('<label style="color: red">Ingrese apellidos completos</label>');
            </script>
            
            <?php
        } else {
            ?>
            <script>
                $("#msg_apellido").html('');
            </script>
            
            <?php
        }
        if($celular==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_telefono").html('<label style="color: red">Ingrese celular</label>');
            </script>
            
            <?php
        } else {
            if(strlen($celular)==10){
            ?>
            <script>
                $("#msg_telefono").html('');
            </script>
            
            <?php
            } else {
                $aun = 0;
                ?>
                <script>
                    $("#msg_telefono").html('<label style="color: red">Ingrese celular correcto</label>');
                </script>

                <?php
            }
        }
        if($email==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_email").html('<label style="color: red">Ingrese email valido</label>');
            </script>
            
            <?php
        } else {
            $matches = null;
            $verificameil = (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email, $matches));
            if($verificameil=='true'){
                ?>
                <script>
                    $("#msg_email").html('');
                </script>

                <?php
                
            } else {
                $aun = 0;
                ?>
                <script>
                    $("#msg_email").html('<label style="color: red">Ingrese email valido</label>');
                </script>

                <?php
            }
        }
        
        if($id_zona==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_canton").html('<label style="color: red">Ingrese Parroquia</label>');
            </script>
            
            <?php
        } else {
            ?>
            <script>
                $("#msg_canton").html('');
            </script>
            
            <?php
        }
        if($entidad_credito==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_agencia").html('<label style="color: red">Seleccione agencia</label>');
            </script>
            
            <?php
        } else {
            ?>
            <script>
                $("#msg_agencia").html('');
            </script>
            
            <?php
        }
        if($dni==''){
            $aun = 0;
            ?>
            <script>
                $("#msg_cedula").html('<label style="color: red">Ingrese identificación</label>');
            </script>
            
            <?php
        } else {
            if($tipo_identifica==0 && strlen($dni)!=10){
                $aun = 0;
                ?>
                <script>
                    $("#msg_cedula").html('<label style="color: red">Ingrese Cedula Válida</label>');
                </script>

                <?php
            }elseif ($tipo_identifica==1 && strlen($dni)!=13) {
                $aun = 0;
                ?>
                <script>
                    $("#msg_cedula").html('<label style="color: red">Ingrese Ingrese Ruc Válido</label>');
                </script>

                <?php
            }else{
                ?>
                <script>
                    $("#msg_cedula").html('');
                </script>

                <?php
            }
            
        }
        return $aun ;
    }
    
    function verifica_texto_datos3($nombres,$apellidos,$celular,$email,$id_zona,$entidad_credito,$tipo_identifica,$dni) {
        $aun = '';
        if($nombres==''){
            $aun .= '<br> - Ingrese nombres completos';
        } 
        if($apellidos==''){
            $aun .= '<br> - Ingrese apellidos completos';
        } 
        if($celular==''){
            $aun .= '<br> - Ingrese celular ';
        } else {
            if(strlen($celular)==10){
            
            } else {
                $aun .= '<br> - Ingrese celular correcto ';
            }
        }
        if($email==''){
            $aun .= '<br> - Ingrese email válido';
        } else {
            $matches = null;
            $verificameil = (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email, $matches));
            if($verificameil!='true'){
                $aun .= '<br> - Ingrese email válido';
            }
        }
        if($id_zona==''){
            $aun .= '<br> - Ingrese parroquia';
        }
        if($entidad_credito==''){
            $aun .= '<br> - Seleccione agencia';
        } 
        if($dni==''){
            $aun .= '<br> - Ingrese identificación';
        } else {
            if($tipo_identifica==0 && strlen($dni)!=10){
                $aun .= '<br> - Ingrese cedula válida';
            }elseif ($tipo_identifica==1 && strlen($dni)!=13) {
                $aun .= '<br> - Ingrese Ingrese ruc válido';
            }
        }
        return $aun ;
    }
    
    public function fn_rnosotros_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros  WHERE id_nosotros = $id  limit 0,1";
        //echo $sql2;
        $arreglo=array();
        
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtextos_x -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_nosotros' => $menu['id_nosotros'],
                'nombre_nosotros' => $menu['nombre_nosotros'],
                'resumen_texto' => $menu['resumen_texto']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    public function fn_rtasahorro_xidprod($id,$cred_cantidad) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM tasa t INNER JOIN producto p on p.id_prod=t.id_prod "
                ."INNER JOIN linea_credito li on li.id_lineacred=p.id_lineacred "
                ."WHERE estado_tasa = 1 and t.id_prod = $id and $cred_cantidad>=valmin_tasa and " 
                ."$cred_cantidad<=valmax_tasa  limit 0,1";
        //echo $sql2;
        $arreglo=array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fn_rtasa_xidprod -- fnsimulador";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_tasa' => $menu['id_tasa'],
                'tasanominal_tasa' => $menu['tasanominal_tasa'],
                'nombre_prod' => $menu['nombre_prod'],
                'nombre_lineacred' => $menu['nombre_lineacred']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
}
