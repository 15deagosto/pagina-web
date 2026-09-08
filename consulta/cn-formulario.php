<?php

//consultar agencias y cajeros 
include '../controler/conexion.php';
require '../funciones/fn-index.php';
require '../funciones/fn-envioemail.php';
require '../funciones/fn-formulario.php';
include '../controler/config.php';
$fnindex = new Fn_index();
$fnenvioemail = new Fn_envioemail();
$fnformulario = new Fn_formulario();
$opc = $_POST['dato_0'];

//trabaja con nosotros
if ($opc == 1) {
    //verificar ingreso de datos
    $fecha_trabajo = $_POST['fecha_trabajo'];
    $cargo_trabajo = $_POST['cargo_trabajo'];
    $salarial_trabajo = $_POST['salarial_trabajo'];
    $trabajoantes_trabajo = $_POST['trabajoantes_trabajo'];
    $ultimocargo_trabajo = $_POST['ultimocargo_trabajo'];
    $anio_trabajo = $_POST['anio_trabajo'];
    $antes1carpeta_trabajo = $_POST['antes1carpeta_trabajo'];
    $cargoaplico_trabajo = $_POST['cargoaplico_trabajo'];
    $entrevistadoantes_trabajo = $_POST['entrevistadoantes_trabajo'];
    $pruebasantes_trabajo = $_POST['pruebasantes_trabajo'];
    $capacitacionantes_trabajo = $_POST['capacitacionantes_trabajo'];
    $nombres_trabajo = $_POST['nombres_trabajo'];
    $apellidos_trabajo = $_POST['apellidos_trabajo'];
    $cedula_trabajo = $_POST['cedula_trabajo'];
    $lugarnac_trabajo = $_POST['lugarnac_trabajo'];
    $fechanac_trabajo = $_POST['fechanac_trabajo'];
    $edad_trabajo = $_POST['edad_trabajo'];
    $direccion_trabajo = $_POST['direccion_trabajo'];
    $ciudad_trabajo = $_POST['ciudad_trabajo'];
    $fijopostulante_trabajo = $_POST['fijopostulante_trabajo'];
    $telefono_trabajo = $_POST['telefono_trabajo'];
    $email_trabajo = $_POST['email_trabajo'];
    $telefono2postulante_trabajo = $_POST['telefono2postulante_trabajo'];
    $otronombrepostulante_trabajo = $_POST['otronombrepostulante_trabajo'];
    $deudapostulante_trabajo = $_POST['deudapostulante_trabajo'];
    $finesdetrabajo1_trabajo = $_POST['finesdetrabajo1_trabajo'];
    $conadis1_trabajo = $_POST['conadis1_trabajo'];
    $viajar1_trabajo = $_POST['viajar1_trabajo'];
    $conadispordes1_trabajo = $_POST['conadispordes1_trabajo'];
    $transportepostula1_trabajo = $_POST['transportepostula1_trabajo'];
    $tipotranspostula_trabajo = $_POST['tipotranspostula_trabajo'];
    $licenciapostula_trabajo = $_POST['licenciapostula_trabajo'];
    $tipolic_trabajo = $_POST['tipolic_trabajo'];
    $gustotrabajar1_trabajo = $_POST['gustotrabajar1_trabajo'];
    $familiacoop1_trabajo = $_POST['familiacoop1_trabajo'];
    $nomfamiliacoop_trabajo = $_POST['nomfamiliacoop_trabajo'];
    $cargofamiliacoop_trabajo = $_POST['cargofamiliacoop_trabajo'];
    $parentezcofamiliacoop_trabajo = $_POST['parentezcofamiliacoop_trabajo'];
    $agenciafamiliacoop_trabajo = $_POST['agenciafamiliacoop_trabajo'];
    $estadocivil_trabajo = $_POST['estadocivil_trabajo'];
    $cargasfam_trabajo = $_POST['cargasfam_trabajo'];
    $ultimocargopadre1_trabajo = $_POST['ultimocargopadre1_trabajo'].'*'.$_POST['ultimocargopadre2_trabajo'].'*'.$_POST['ultimocargopadre3_trabajo'].'*'.$_POST['ultimocargopadre4_trabajo'];
    $ultimocargomadre1_trabajo = $_POST['ultimocargomadre1_trabajo'].'*'.$_POST['ultimocargomadre2_trabajo'].'*'.$_POST['ultimocargomadre3_trabajo'].'*'.$_POST['ultimocargomadre4_trabajo'];
    $ultimocargoconyuge1_trabajo = $_POST['ultimocargoconyuge1_trabajo'].'*'.$_POST['ultimocargoconyuge2_trabajo'].'*'.$_POST['ultimocargoconyuge3_trabajo'].'*'.$_POST['ultimocargoconyuge4_trabajo'];
    $numhijos_trabajo = $_POST['numhijos_trabajo'];
    $edadeshijos_trabajo = $_POST['edadeshijos_trabajo'];
    $hijocapacidades1_trabajo = $_POST['hijocapacidades1_trabajo'];
    $numdiscapacidad_trabajo = $_POST['numdiscapacidad_trabajo'];
    $distanciapostula_trabajo = $_POST['distanciapostula_trabajo'];
    $transportepostula2_trabajo = $_POST['transportepostula2_trabajo'];
    $primaria_trabajo = $_POST['primaria_trabajo'].'*'.$_POST['primarianivel1_trabajo'].'*'.$_POST['egresadopostula1_trabajo'].'*'.$_POST['titulopostula1_trabajo'];
    $secundaria_trabajo = $_POST['secundaria_trabajo'].'*'.$_POST['secundarianivel1_trabajo'].'*'.$_POST['egresadopostula2_trabajo'].'*'.$_POST['titulopostula2_trabajo'];
    $universidad_trabajo = $_POST['universidad_trabajo'].'*'.$_POST['universidadpostula1_trabajo'].'*'.$_POST['egresadopostula3_trabajo'].'*'.$_POST['titulopostula3_trabajo'];
    $otroestudio_trabajo = $_POST['otroestudio_trabajo'].'*'.$_POST['egresadotros_trabajo'].'*'.$_POST['titulotros_trabajo'];
    $curso1_trabajo = $_POST['cursopostula1_trabajo'].'*'.$_POST['mesaniocursopostula1_trabajo'].'*'.$_POST['duracurso1_trabajo'];
    $curso2_trabajo = $_POST['cursopostula2_trabajo'].'*'.$_POST['mesaniocursopostula2_trabajo'].'*'.$_POST['duracurso2_trabajo'];
    $curso3_trabajo = $_POST['cursopostula3_trabajo'].'*'.$_POST['mesaniocursopostula3_trabajo'].'*'.$_POST['duracurso3_trabajo'];
    $ofimaticapostula_trabajo = $_POST['ofimaticapostula_trabajo'];
    $otroscualidadespostula_trabajo = $_POST['otroscualidadespostula_trabajo'];
    $inglespostula_trabajo = $_POST['inglespostula_trabajo'];
    $otroidiomapostula1_trabajo = $_POST['otroidiomapostula1_trabajo'];
    $otroidiomapostula2_trabajo = $_POST['otroidiomapostula2_trabajo'];
    $experiencialaboral1_trabajo = $_POST['nombreempresaexperiencia1_trabajo'].'*'.$_POST['telefonoempresaexperiencia1_trabajo'].'*'.$_POST['sueldopercibidoempresaexperiencia1_trabajo'].'*'.$_POST['cargoempresaexperiencia1_trabajo'].'*'.$_POST['funcionempresaexperiencia1_trabajo'].'*'.$_POST['desdeempresaexperiencia1_trabajo'].'*'.$_POST['hastaempresaexperiencia1_trabajo'].'*'.$_POST['retiroempresaexperiencia1_trabajo'].'*'.$_POST['jefeempresaexperiencia1_trabajo'].'*'.$_POST['telefonojefeempresaexperiencia1_trabajo'];
    $experiencialaboral2_trabajo = $_POST['nombreempresa2experiencia1_trabajo'].'*'.$_POST['telefonoempresa2experiencia1_trabajo'].'*'.$_POST['sueldopercibidoempresa2experiencia1_trabajo'].'*'.$_POST['cargoempresa2experiencia1_trabajo'].'*'.$_POST['funcionempresa2experiencia1_trabajo'].'*'.$_POST['desdeempresa2experiencia1_trabajo'].'*'.$_POST['hastaempresa2experiencia1_trabajo'].'*'.$_POST['retiroempresa2experiencia1_trabajo'].'*'.$_POST['jefeempresa2experiencia1_trabajo'].'*'.$_POST['telefonojefeempresa2experiencia1_trabajo'];
    $experiencialaboral3_trabajo = $_POST['nombreempresa3experiencia1_trabajo'].'*'.$_POST['telefonoempresa3experiencia1_trabajo'].'*'.$_POST['sueldopercibidoempresa3experiencia1_trabajo'].'*'.$_POST['cargoempresa3experiencia1_trabajo'].'*'.$_POST['funcionempresa3experiencia1_trabajo'].'*'.$_POST['desdeempresa3experiencia1_trabajo'].'*'.$_POST['hastaempresa3experiencia1_trabajo'].'*'.$_POST['retiroempresa3experiencia1_trabajo'].'*'.$_POST['jefeempresa3experiencia1_trabajo'].'*'.$_POST['telefonojefeempresa3experiencia1_trabajo'];
    $referenciapersonal1_trabajo = $_POST['nombreref1_trabajo'].'*'.$_POST['relacionref1_trabajo'].'*'.$_POST['lugartraref1_trabajo'].'*'.$_POST['cargoref1_trabajo'].'*'.$_POST['telref1_trabajo'];
    $referenciapersonal2_trabajo = $_POST['nombreref2_trabajo'].'*'.$_POST['relacionref2_trabajo'].'*'.$_POST['lugartraref2_trabajo'].'*'.$_POST['cargoref2_trabajo'].'*'.$_POST['telref2_trabajo'];
    $referenciapersonal3_trabajo = $_POST['nombreref3_trabajo'].'*'.$_POST['relacionref3_trabajo'].'*'.$_POST['lugartraref3_trabajo'].'*'.$_POST['cargoref3_trabajo'].'*'.$_POST['telref3_trabajo'];
    $enterovacante_trabajo = $_POST['enterovacante_trabajo'];
    $conocioespecifica_trabajo = $_POST['conocioespecifica_trabajo'];
    $hojavida_trabajo = $_POST['hojavida_trabajo'];
    $autorizo_trabajo = $_POST['autorizo_trabajo'];
    $est_trabajo=1;
    $autorizo_trabajo=0;
    
    //enviar email de confirmacion
    //echo $nombres_trabajo.'/'.$mensaje_trabajo;
         if ($nombres_trabajo != '' && $apellidos_trabajo != '' && $telefono_trabajo != '' 
            && $email_trabajo != '' && $ciudad_trabajo != '' && $direccion_trabajo != '') {
        //ingreso de datos
        $cuentainsert = $fnformulario->fnformulario_ctrabajonosotros_xdata($nombres_trabajo, $apellidos_trabajo, $telefono_trabajo, 
            $email_trabajo, $ciudad_trabajo, $direccion_trabajo, $mensaje_trabajo, $est_trabajo, $cv_trabajo, 
            $fecha_trabajo, $cargo_trabajo, $salarial_trabajo, $trabajoantes_trabajo, $ultimocargo_trabajo,
            $anio_trabajo, $antes1carpeta_trabajo, $cargoaplico_trabajo, $entrevistadoantes_trabajo, 
            $pruebasantes_trabajo, $capacitacionantes_trabajo, $cedula_trabajo, $fechanac_trabajo, 
            $edad_trabajo, $lugarnac_trabajo, $fijopostulante_trabajo, $telefono2postulante_trabajo, 
            $otronombrepostulante_trabajo, $deudapostulante_trabajo, $finesdetrabajo1_trabajo, $conadis1_trabajo, 
            $viajar1_trabajo, $conadispordes1_trabajo, $conadisdes1_trabajo, $transportepostula1_trabajo, 
            $tipotranspostula_trabajo, $licenciapostula_trabajo, $tipolic_trabajo, $gustotrabajar1_trabajo, 
            $familiacoop1_trabajo, $nomfamiliacoop_trabajo, $cargofamiliacoop_trabajo, $parentezcofamiliacoop_trabajo, 
            $agenciafamiliacoop_trabajo, $estadocivil_trabajo, $cargasfam_trabajo, $ultimocargopadre1_trabajo, 
            $ultimocargomadre1_trabajo, $ultimocargoconyuge1_trabajo, $numhijos_trabajo, $edadeshijos_trabajo, 
            $hijocapacidades1_trabajo, $numdiscapacidad_trabajo, $distanciapostula_trabajo, $transportepostula2_trabajo, 
            $primaria_trabajo, $secundaria_trabajo, $universidad_trabajo, $otroestudio_trabajo, $curso1_trabajo, 
            $curso2_trabajo, $curso3_trabajo, $ofimaticapostula_trabajo, $otroscualidadespostula_trabajo, 
            $inglespostula_trabajo, $otroidiomapostula1_trabajo, $otroidiomapostula2_trabajo, 
            $experiencialaboral1_trabajo, $experiencialaboral2_trabajo, $experiencialaboral3_trabajo, 
            $referenciapersonal1_trabajo, $referenciapersonal2_trabajo, $referenciapersonal3_trabajo,
            $enterovacante_trabajo, $hojavida_trabajo, $autorizo_trabajo,$conocioespecifica_trabajo);
        //$cuentainsert=1;
        if ($cuentainsert > 0) {
            //comprobacion ingreso
            $msg_mail = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Quejas y Reclamos</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 20px auto; background: #ffffff; padding: 20px; border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ddd;  }
        .header img { max-width: 150px; width:50%; }
        .content { padding: 20px 0; }
        .info { background: #f8f8f8; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
        .footer { text-align: center; font-size: 12px; color: #777; padding-top: 10px; border-top: 1px solid #ddd; }
        .button { display: inline-block; padding: 10px 20px; background: #007BFF; color: #ffffff; text-decoration: none; 
            border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>

    <div class='container'>
        <div class='header'>
            <img src='https://www.sumakkawsay.fin.ec/images/logo-sumakkawsay-02.png' alt='Logo Empresa'>
            <h2>Trabaja con nosotros </h2>
        </div>

        <div class='content'>
            <p><strong>Hemos recibido una hoja de vida desde la pagina web,</strong></p>

            <div class='info'>
                <p><strong>Nombre:</strong> ".$nombres_trabajo." ".$apellidos_trabajo."</p>
                <p><strong>Correo Electrónico:</strong> $email_trabajo</p>
                <p><strong>Teléfono:</strong> $telefono_trabajo</p>
                <p><strong>Fecha:</strong> $fecha_trabajo</p>
                <p><strong>Ciudad:</strong> $ciudad_trabajo</p>
                <p><strong>Dirección trabajo:</strong> $direccion_trabajo</p>
            </div>

            <p>Para revisar a detalle la hoja de vida, puedes revisarla aquí.</p>
            <a href='https://www.sumakkawsay.fin.ec/miperfil/reporte/reporte-hv-pdf.php?iset_t=".$cuentainsert."' target='_blank'>Hoja de vida</a>
        </div>

        
    </div>

</body>
</html>
";

            $cuenta = $fnenvioemail->fnenvioemail_formulariotrabajo($msg_mail);
            if ($cuenta == 1) {
                echo '5';
            } else {
                echo '4';
            }
        } else {
            echo '3';
        }
    } else {
        echo '2';
    }
   
}
//reclamos y quejas
if ($opc == 2) {
    //verificar ingreso de datos
    $tipo_quejas = $_POST['tipo_quejas'];
    $id_gencia = $_POST['agencia_quejas'];
    $area_queja = $_POST['area_quejas'];
    $email_queja = $_POST['email_quejas'];
    $telefono1_queja = $_POST['telefono_quejas'];
    $nombre_queja = $_POST['nombre_quejas'];
    $mensaje_queja = $_POST['mensaje_quejas'];
    $cedula_queja = '0000000000';
    $telefono2_queja = '000000000';
    $direccion_queja = utf8_decode('dirección 1');
    $id_zona = '';
    $referencia_queja = '';
    $fecha_queja = date('Y-m-d');
    $hora_queja = date('h:i:s');
    $datocuenta_queja = '';
    $peticion_queja = '';
    $estado_queja = 0;
    $acuerdo_queja = 1;
    $inconformidad_queja = '';
    $terminos_queja = 1;
    //enviar email de confirmacion
    if ($tipo_quejas != '' && $id_gencia != '' && $area_queja != '' && $email_queja != '' && $telefono1_queja != '' && $nombre_queja != '' && $mensaje_queja != '') {
        //ingreso de datos
        $cuentainsert = $fnformulario->fnformulario_cquejas_xdata($id_gencia, $cedula_queja, $nombre_queja,
                $telefono1_queja, $telefono2_queja, $email_queja, $direccion_queja,
                $id_zona, $referencia_queja, $fecha_queja, $hora_queja, $datocuenta_queja,
                $mensaje_queja, $peticion_queja, $estado_queja, $acuerdo_queja, $area_queja,
                $tipo_quejas, $inconformidad_queja, $terminos_queja);
        if ($cuentainsert > 0) {
            $detagencia = $fnformulario->fnformulario_ragencia_xid($id_gencia);
            //comprobacion ingreso
            $msg_mail = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Quejas y Reclamos</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 20px auto; background: #ffffff; padding: 20px; border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ddd;  }
        .header img { max-width: 150px; width:50%; }
        .content { padding: 20px 0; }
        .info { background: #f8f8f8; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
        .footer { text-align: center; font-size: 12px; color: #777; padding-top: 10px; border-top: 1px solid #ddd; }
        .button { display: inline-block; padding: 10px 20px; background: #007BFF; color: #ffffff; text-decoration: none; 
            border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>

    <div class='container'>
        <div class='header'>
            <img src='".URLIMAGEN."' alt='Logo Empresa'>
            <h2>Quejas y Reclamos</h2>
        </div>

        <div class='content'>
            <p><strong>Estimado(a) $nombre,</strong></p>
            <p>Hemos recibido su solicitud de queja o reclamo. A continuación, los detalles:</p>

            <div class='info'>
                <p><strong>Nombre:</strong> $nombre_queja</p>
                <p><strong>Correo Electrónico:</strong> $email_queja</p>
                <p><strong>Teléfono:</strong> $telefono1_queja</p>
                <p><strong>Fecha del Reclamo:</strong> $fecha_queja</p>
                <p><strong>Tipo de Reclamo:</strong> $tipo_quejas</p>
                <p><strong>Área de Trabajo:</strong> $area_queja</p>
                <p><strong>Agencia:</strong> ". utf8_encode($detagencia[0]['nombre_nosotros'])."</p>
                <p><strong>Descripción:</strong></p>
                <p>$mensaje_queja</p>
            </div>

            <p>Estamos revisando su caso y nos pondremos en contacto con usted lo antes posible.</p>
        </div>

        <div class='footer'>
            <p>Si tiene dudas, puede responder a este correo o llamarnos al [".TELFEMPRESA."].</p>
            <p>Gracias por confiar en ".EMPRESA.".</p>
        </div>
    </div>

</body>
</html>
";

            $cuenta = $fnenvioemail->fnenvioemail_formularioxquejayreclamo_data($msg_mail);
            if ($cuenta == 1) {
                echo '5';
            } else {
                echo '4';
            }
        } else {
            echo '3';
        }
    } else {
        echo '2';
    }
}
//Educacion Financiera
if ($opc == 3) {
    //verificar ingreso de datos
    $nombre_educacion = $_POST['nombre_educacion'];
    $apellido_educacion = $_POST['apellido_educacion'];
    $email_educacion = $_POST['email_educacion'];
    $telefono_educacion = $_POST['telefono_educacion'];
    $fecha_educacion = date('Y-m-d');
    $hora_queja = date('h:i:s');
    $datocuenta_queja = '';
    $terminos_educacion = 1;
    //enviar email de confirmacion
    if ($nombre_educacion != '' && $apellido_educacion != '' && $email_educacion != '' && $telefono_educacion != '' ) {
        //ingreso de datos
        $cuentainsert = $fnformulario->fnformulario_ceducacion_xdata($nombre_educacion, $apellido_educacion,
                $email_educacion, $telefono_educacion, $fecha_educacion, $terminos_educacion);
        if ($cuentainsert > 0) {
            //comprobacion ingreso
            $msg_mail = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Quejas y Reclamos</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 20px auto; background: #ffffff; padding: 20px; border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ddd;  }
        .header img { max-width: 150px; width:50%; }
        .content { padding: 20px 0; }
        .info { background: #f8f8f8; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
        .footer { text-align: center; font-size: 12px; color: #777; padding-top: 10px; border-top: 1px solid #ddd; }
        .button { display: inline-block; padding: 10px 20px; background: #007BFF; color: #ffffff; text-decoration: none; 
            border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>

    <div class='container'>
        <div class='header'>
            <img src='".URLIMAGEN."' alt='Logo Empresa'>
            <h2>Educación Financiera</h2>
        </div>

        <div class='content'>
            <p><strong>Estimado(a) $nombre_educacion,</strong></p>
            <p>Hemos recibido tu solicitud de Educación Financiera. A continuación, los detalles:</p>

            <div class='info'>
                <p><strong>Nombre:</strong> ".$nombre_educacion." ".$apellido_educacion."</p>
                <p><strong>Correo Electrónico:</strong> $email_educacion</p>
                <p><strong>Teléfono:</strong> $telefono_educacion</p>
                <p><strong>Fecha:</strong> $fecha_educacion</p>
            </div>

            <p>Estamos revisando su caso y nos pondremos en contacto con usted lo antes posible.</p>
        </div>

        <div class='footer'>
            <p>Si tiene dudas, puede responder a este correo o llamarnos al [".TELFEMPRESA."].</p>
            <p>Gracias por confiar en ".EMPRESA.".</p>
        </div>
    </div>

</body>
</html>
";

            $cuenta = $fnenvioemail->fnenvioemail_formulariofinanciero03_xdata($msg_mail);
            if ($cuenta == 1) {
                echo '5';
            } else {
                echo '4';
            }
        } else {
            echo '3';
        }
    } else {
        echo '2';
    }
}
//Contactanos
if ($opc == 4) {
    //verificar ingreso de datos
    $nombre_contactanos = $_POST['nombre_contacto'];
    $apellido_contactanos= $_POST['apellido_contacto'];
    $email_contactanos = $_POST['email_contacto'];
    $telefono_contacto = $_POST['telefono_contacto'];
    $requerimiento_contactanos = $_POST['motivo_contacto'];
    //$requerimiento_contactanos = 1;
    $msg_contactanos = $_POST['mensaje_contacto'];
    $fecha_contactanos = date('Y-m-d');
    $suscribe_contactanos = 1;
    //enviar email de confirmacion
    if ($nombre_contactanos != '' && $email_contactanos != '' && $telefono_contacto != '' &&
            $requerimiento_contactanos != '' && $msg_contactanos != '') {
        //ingreso de datos
        $cuentainsert = $fnformulario->fnformulario_ccontactanos_xdata($nombre_contactanos.' '.$apellido_contactanos, $email_contactanos,
                $requerimiento_contactanos, $msg_contactanos, $suscribe_contactanos, $fecha_contactanos);
        if ($cuentainsert > 0) {
            //comprobacion ingreso
            $msg_mail = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Quejas y Reclamos</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 20px auto; background: #ffffff; padding: 20px; border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ddd;  }
        .header img { max-width: 150px; width:50%; }
        .content { padding: 20px 0; }
        .info { background: #f8f8f8; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
        .footer { text-align: center; font-size: 12px; color: #777; padding-top: 10px; border-top: 1px solid #ddd; }
        .button { display: inline-block; padding: 10px 20px; background: #007BFF; color: #ffffff; text-decoration: none; 
            border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>

    <div class='container'>
        <div class='header'>
            <img src='".URLIMAGEN."' alt='Logo Empresa'>
            <h2>Contactos</h2>
        </div>

        <div class='content'>
            <p><strong>Estimado(a) $nombre,</strong></p>
            <p>Hemos recibido tu solicitud . A continuación, los detalles:</p>

            <div class='info'>
                <p><strong>Nombre:</strong> ".$nombre_contactanos." ".$apellido_contactanos."</p>
                <p><strong>Correo Electrónico:</strong> $email_contactanos</p>
                <p><strong>Teléfono:</strong> $telefono_contacto</p>
                <p><strong>Requerimiento:</strong> $requerimiento_contactanos</p>
                <p><strong>Fecha:</strong> $fecha_contactanos</p>
                <p><strong>Descripción:</strong></p>
                <p>$msg_contactanos</p>
            </div>

            <p>Estamos revisando su caso y nos pondremos en contacto con usted lo antes posible.</p>
        </div>

        <div class='footer'>
            <p>Si tiene dudas, puede responder a este correo o llamarnos al [".TELFEMPRESA."].</p>
            <p>Gracias por confiar en ".EMPRESA.".</p>
        </div>
    </div>

</body>
</html>
";
            $cuenta = $fnenvioemail->fnenvioemail_formulariocontacto($msg_mail);
            if ($cuenta == 1) {
                echo '5';
            } else {
                echo '4';
            }
        } else {
            echo '3';
        }
    } else {
        echo '2';
    }
}
//reclamos y quejas
if ($opc == 5) {
    
    //verificar ingreso de datos
    $tipo_saras = $_POST['tipo_saras'];
    $id_gencia = $_POST['id_gencia'];
    $email_saras = $_POST['email_saras'];
    $telefono_saras = $_POST['telefono_saras'];
    $nombres_saras = $_POST['nombres_saras'];
    $msj_saras = $_POST['msj_saras'];
    $cedula_queja = '0000000000';
    $telefono2_queja = '000000000';
    $direccion_queja = utf8_decode('dirección 1');
    $id_zona = '';
    $referencia_queja = '';
    $fecha_saras = date('Y-m-d');
    $hora_saras = date('h:i:s');
    $terminos_saras = 1;
    $ip_saras = $_SERVER['REMOTE_ADDR']; 
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $sesion_saras = $fnformulario->getBrowser($userAgent);
//$os = $fnformulario->getOS($userAgent);
    //enviar email de confirmacion
    if ($tipo_saras != '' && $id_gencia != '' && $msj_saras != '') {
        //ingreso de datos
        $cuentainsert = $fnformulario->fnformulario_cquejassaras_xdata($nombres_saras, $email_saras, $telefono_saras,
                        $msj_saras, $id_gencia, $ip_saras, $sesion_saras,
                        $terminos_saras, $fecha_saras, $hora_saras, $tipo_saras);
        if ($cuentainsert > 0) {
            $detagencia = $fnformulario->fnformulario_ragencia_xid($id_gencia);
            //comprobacion ingreso
            $msg_mail = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Quejas y Reclamos SARAS</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 20px auto; background: #ffffff; padding: 20px; border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ddd;  }
        .header img { max-width: 150px; width:50%; }
        .content { padding: 20px 0; }
        .info { background: #f8f8f8; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
        .footer { text-align: center; font-size: 12px; color: #777; padding-top: 10px; border-top: 1px solid #ddd; }
        .button { display: inline-block; padding: 10px 20px; background: #007BFF; color: #ffffff; text-decoration: none; 
            border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>

    <div class='container'>
        <div class='header'>
            <img src='".URLIMAGEN."' alt='Logo Empresa'>
            <h2>Quejas y Reclamos</h2>
        </div>

        <div class='content'>
            <p><strong>Estimado(a) $nombre,</strong></p>
            <p>Hemos recibido su solicitud de queja o reclamo. A continuación, los detalles:</p>

            <div class='info'>
                <p><strong>Nombre:</strong> $nombre_queja</p>
                <p><strong>Correo Electrónico:</strong> $email_queja</p>
                <p><strong>Teléfono:</strong> $telefono1_queja</p>
                <p><strong>Fecha del Reclamo:</strong> $fecha_queja</p>
                <p><strong>Tipo de Reclamo:</strong> $tipo_quejas</p>
                <p><strong>Área de Trabajo:</strong> $area_queja</p>
                <p><strong>Agencia:</strong> ". utf8_encode($detagencia[0]['nombre_nosotros'])."</p>
                <p><strong>Descripción:</strong></p>
                <p>$mensaje_queja</p>
            </div>

            <p>Estamos revisando su caso y nos pondremos en contacto con usted lo antes posible.</p>
        </div>

        <div class='footer'>
            <p>Si tiene dudas, puede responder a este correo o llamarnos al [".TELFEMPRESA."].</p>
            <p>Gracias por confiar en ".EMPRESA.".</p>
        </div>
    </div>

</body>
</html>
";

            $cuenta = $fnenvioemail->fnenvioemail_formularioxquejayreclamo_data($msg_mail);
            if ($cuenta == 1) {
                echo '5';
            } else {
                echo '4';
            }
        } else {
            echo '3';
        }
    } else {
        echo '2';
    }
}
