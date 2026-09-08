<?php

class Fn_formulario {

    function fnformulario_ctrabajonosotros_xdata($nombres_trabajo, $apellidos_trabajo, $telefono_trabajo, 
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
            $enterovacante_trabajo, $hojavida_trabajo, $autorizo_trabajo,$conocioespecifica_trabajo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "INSERT INTO `trabajonosotros` (`nombres_trabajo`, `apellidos_trabajo`, `telefono_trabajo`, 
            `email_trabajo`, `ciudad_trabajo`, `direccion_trabajo`, `mensaje_trabajo`, `est_trabajo`, `cv_trabajo`, 
            `fecha_trabajo`, `cargo_trabajo`, `salarial_trabajo`, `trabajoantes_trabajo`, `ultimocargo_trabajo`,
            `anio_trabajo`, `antes1carpeta_trabajo`, `cargoaplico_trabajo`, `entrevistadoantes_trabajo`, 
            `pruebasantes_trabajo`, `capacitacionantes_trabajo`, `cedula_trabajo`, `fechanac_trabajo`, 
            `edad_trabajo`, `lugarnac_trabajo`, `fijopostulante_trabajo`, `telefono2postulante_trabajo`, 
            `otronombrepostulante_trabajo`, `deudapostulante_trabajo`, `finesdetrabajo1_trabajo`, `conadis1_trabajo`, 
            `viajar1_trabajo`, `conadispordes1_trabajo`, `conadisdes1_trabajo`, `transportepostula1_trabajo`, 
            `tipotranspostula_trabajo`, `licenciapostula_trabajo`, `tipolic_trabajo`, `gustotrabajar1_trabajo`, 
            `familiacoop1_trabajo`, `nomfamiliacoop_trabajo`, `cargofamiliacoop_trabajo`, `parentezcofamiliacoop_trabajo`, 
            `agenciafamiliacoop_trabajo`, `estadocivil_trabajo`, `cargasfam_trabajo`, `ultimocargopadre1_trabajo`, 
            `ultimocargomadre1_trabajo`, `ultimocargoconyuge1_trabajo`, `numhijos_trabajo`, `edadeshijos_trabajo`, 
            `hijocapacidades1_trabajo`, `numdiscapacidad_trabajo`, `distanciapostula_trabajo`, `transportepostula2_trabajo`, 
            `primaria_trabajo`, `secundaria_trabajo`, `universidad_trabajo`, `otroestudio_trabajo`, `curso1_trabajo`, 
            `curso2_trabajo`, `curso3_trabajo`, `ofimaticapostula_trabajo`, `otroscualidadespostula_trabajo`, 
            `inglespostula_trabajo`, `otroidiomapostula1_trabajo`, `otroidiomapostula2_trabajo`, 
            `experiencialaboral1_trabajo`, `experiencialaboral2_trabajo`, `experiencialaboral3_trabajo`, 
            `referenciapersonal1_trabajo`, `referenciapersonal2_trabajo`, `referenciapersonal3_trabajo`,
            `enterovacante_trabajo`, `hojavida_trabajo`, `autorizo_trabajo`, `conocioespecifica_trabajo`) VALUES
            ('$nombres_trabajo', '$apellidos_trabajo', '$telefono_trabajo', 
            '$email_trabajo', '$ciudad_trabajo', '$direccion_trabajo', '$mensaje_trabajo', $est_trabajo, '$cv_trabajo', 
            '$fecha_trabajo', '$cargo_trabajo', '$salarial_trabajo', '$trabajoantes_trabajo', '$ultimocargo_trabajo',
            '$anio_trabajo', '$antes1carpeta_trabajo', '$cargoaplico_trabajo', '$entrevistadoantes_trabajo', 
            '$pruebasantes_trabajo', '$capacitacionantes_trabajo', '$cedula_trabajo', '$fechanac_trabajo', 
            '$edad_trabajo', '$lugarnac_trabajo', '$fijopostulante_trabajo', '$telefono2postulante_trabajo', 
            '$otronombrepostulante_trabajo', '$deudapostulante_trabajo', '$finesdetrabajo1_trabajo', '$conadis1_trabajo', 
            '$viajar1_trabajo', '$conadispordes1_trabajo', '$conadisdes1_trabajo', '$transportepostula1_trabajo', 
            '$tipotranspostula_trabajo', '$licenciapostula_trabajo', '$tipolic_trabajo', '$gustotrabajar1_trabajo', 
            '$familiacoop1_trabajo', '$nomfamiliacoop_trabajo', '$cargofamiliacoop_trabajo', '$parentezcofamiliacoop_trabajo', 
            '$agenciafamiliacoop_trabajo', '$estadocivil_trabajo', '$cargasfam_trabajo', '$ultimocargopadre1_trabajo', 
            '$ultimocargomadre1_trabajo', '$ultimocargoconyuge1_trabajo', '$numhijos_trabajo', '$edadeshijos_trabajo', 
            '$hijocapacidades1_trabajo', '$numdiscapacidad_trabajo', '$distanciapostula_trabajo', '$transportepostula2_trabajo', 
            '$primaria_trabajo', '$secundaria_trabajo', '$universidad_trabajo', '$otroestudio_trabajo', '$curso1_trabajo', 
            '$curso2_trabajo', '$curso3_trabajo', '$ofimaticapostula_trabajo', '$otroscualidadespostula_trabajo', 
            '$inglespostula_trabajo', '$otroidiomapostula1_trabajo', '$otroidiomapostula2_trabajo', 
            '$experiencialaboral1_trabajo', '$experiencialaboral2_trabajo', '$experiencialaboral3_trabajo', 
            '$referenciapersonal1_trabajo', '$referenciapersonal2_trabajo', '$referenciapersonal3_trabajo',
            '$enterovacante_trabajo', '$hojavida_trabajo', '$autorizo_trabajo','$conocioespecifica_trabajo');";
        //echo $sql2;
        if ($mysqlidato->query($sql2) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = $mysqlidato->insert_id;
        }
        return $cuenta;
    }
    
    function fnformulario_ceducacion_xdata($nombre_educacion, $apellido_educacion, $email_educacion,
            $telefono_educacion, $fecha_educacion, $terminos_educacion) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "INSERT INTO educacion(`nombre_educacion`, `apellido_educacion`, `email_educacion`,"
                . " `telefono_educacion`, `fecha_educacion`, `terminos_educacion`)"
                . " VALUES (?,?,?,?,?,?)";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);
        //echo $sql2;
        if ($stmt->bind_param("sssssi", $nombre_educacion, $apellido_educacion, $email_educacion,
            $telefono_educacion, $fecha_educacion, $terminos_educacion)) {
            if ($stmt->execute()) {
                //echo $stmt->errno;
                $resultado = 1;
            } else {
                //echo $stmt->error;
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }
        //echo 'ERROR: ' . $stmt->error;
        $mysqlidato->close();
        return $resultado;
    }
    
    function fnformulario_ccontactanos_xdata($nombre_contactanos, $email_contactanos, $requerimiento_contactanos,
            $msg_contactanos, $suscribe_contactanos, $fecha_contactanos) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "INSERT INTO contactanos(`nombre_contactanos`, `email_contactanos`, `requerimiento_contactanos`,"
                . " `msg_contactanos`, `suscribe_contactanos`, `fecha_contactanos`)"
                . " VALUES (?,?,?,?,?,?)";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);
        //echo $sql2;
        if ($stmt->bind_param("ssisis", $nombre_contactanos, $email_contactanos, $requerimiento_contactanos,
            $msg_contactanos, $suscribe_contactanos, $fecha_contactanos)) {
            if ($stmt->execute()) {
                //echo $stmt->errno;
                $resultado = 1;
            } else {
                //echo $stmt->error;
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }
        //echo 'ERROR: ' . $stmt->error;
        $mysqlidato->close();
        return $resultado;
    }
    
    function fnformulario_ragencia_xid($id_agencia) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM nosotros WHERE id_nosotros = $id_agencia ";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnproveedores_rempresa_x -- fnproveedores";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('nombre_nosotros' => $menu['nombre_nosotros'],
                'tele1_nosotros' => $menu['tele1_nosotros'],
                'email1_nosotros' => $menu['email1_nosotros']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    
    function fnformulario_rhojavida_xid($id_trabajo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM trabajonosotros WHERE id_trabajo = $id_trabajo limit 0,1 ";
        ///echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnformulario_rhojavida_xid -- fnfomrulario";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_trabajo' => $menu['id_trabajo'],
                'nombres_trabajo' => $menu['nombres_trabajo'],
                'apellidos_trabajo' => $menu['apellidos_trabajo'],
                'telefono_trabajo' => $menu['telefono_trabajo'],
                'email_trabajo' => $menu['email_trabajo'],
                'ciudad_trabajo' => $menu['ciudad_trabajo'],
                'direccion_trabajo' => $menu['direccion_trabajo'],
                'mensaje_trabajo' => $menu['mensaje_trabajo'],
                'est_trabajo' => $menu['est_trabajo'],
                'cv_trabajo' => $menu['cv_trabajo'],
                'fecha_trabajo' => $menu['fecha_trabajo'],
                'cargo_trabajo' => $menu['cargo_trabajo'],
                'salarial_trabajo' => $menu['salarial_trabajo'],
                'trabajoantes_trabajo' => $menu['trabajoantes_trabajo'],
                'ultimocargo_trabajo' => $menu['ultimocargo_trabajo'],
                'anio_trabajo' => $menu['anio_trabajo'],
                'antes1carpeta_trabajo' => $menu['antes1carpeta_trabajo'],
                'cargoaplico_trabajo' => $menu['cargoaplico_trabajo'],
                'entrevistadoantes_trabajo' => $menu['entrevistadoantes_trabajo'],
                'pruebasantes_trabajo' => $menu['pruebasantes_trabajo'],
                'capacitacionantes_trabajo' => $menu['capacitacionantes_trabajo'],
                'cedula_trabajo' => $menu['cedula_trabajo'],
                'fechanac_trabajo' => $menu['fechanac_trabajo'],
                'edad_trabajo' => $menu['edad_trabajo'],
                'lugarnac_trabajo' => $menu['lugarnac_trabajo'],
                'fijopostulante_trabajo' => $menu['fijopostulante_trabajo'],
                'telefono2postulante_trabajo' => $menu['telefono2postulante_trabajo'],
                'otronombrepostulante_trabajo' => $menu['otronombrepostulante_trabajo'],
                'deudapostulante_trabajo' => $menu['deudapostulante_trabajo'],
                'finesdetrabajo1_trabajo' => $menu['finesdetrabajo1_trabajo'],
                'conadis1_trabajo' => $menu['conadis1_trabajo'],
                'viajar1_trabajo' => $menu['viajar1_trabajo'],
                'conadispordes1_trabajo' => $menu['conadispordes1_trabajo'],
                'conadisdes1_trabajo' => $menu['conadisdes1_trabajo'],
                'transportepostula1_trabajo' => $menu['transportepostula1_trabajo'],
                'tipotranspostula_trabajo' => $menu['tipotranspostula_trabajo'],
                'licenciapostula_trabajo' => $menu['licenciapostula_trabajo'],
                'tipolic_trabajo' => $menu['tipolic_trabajo'],
                'gustotrabajar1_trabajo' => $menu['gustotrabajar1_trabajo'],
                'familiacoop1_trabajo' => $menu['familiacoop1_trabajo'],
                'nomfamiliacoop_trabajo' => $menu['nomfamiliacoop_trabajo'],
                'cargofamiliacoop_trabajo' => $menu['cargofamiliacoop_trabajo'],
                'parentezcofamiliacoop_trabajo' => $menu['parentezcofamiliacoop_trabajo'],
                'agenciafamiliacoop_trabajo' => $menu['agenciafamiliacoop_trabajo'],
                'estadocivil_trabajo' => $menu['estadocivil_trabajo'],
                'cargasfam_trabajo' => $menu['cargasfam_trabajo'],
                'ultimocargopadre1_trabajo' => $menu['ultimocargopadre1_trabajo'],
                'ultimocargomadre1_trabajo' => $menu['ultimocargomadre1_trabajo'],
                'ultimocargoconyuge1_trabajo' => $menu['ultimocargoconyuge1_trabajo'],
                'numhijos_trabajo' => $menu['numhijos_trabajo'],
                'edadeshijos_trabajo' => $menu['edadeshijos_trabajo'],
                'hijocapacidades1_trabajo' => $menu['hijocapacidades1_trabajo'],
                'numdiscapacidad_trabajo' => $menu['numdiscapacidad_trabajo'],
                'distanciapostula_trabajo' => $menu['distanciapostula_trabajo'],
                'transportepostula2_trabajo' => $menu['transportepostula2_trabajo'],
                'primaria_trabajo' => $menu['primaria_trabajo'],
                'secundaria_trabajo' => $menu['secundaria_trabajo'],
                'universidad_trabajo' => $menu['universidad_trabajo'],
                'otroestudio_trabajo' => $menu['otroestudio_trabajo'],
                'curso1_trabajo' => $menu['curso1_trabajo'],
                'curso2_trabajo' => $menu['curso2_trabajo'],
                'curso3_trabajo' => $menu['curso3_trabajo'],
                'ofimaticapostula_trabajo' => $menu['ofimaticapostula_trabajo'],
                'otroscualidadespostula_trabajo' => $menu['otroscualidadespostula_trabajo'],
                'inglespostula_trabajo' => $menu['inglespostula_trabajo'],
                'otroidiomapostula1_trabajo' => $menu['otroidiomapostula1_trabajo'],
                'otroidiomapostula2_trabajo' => $menu['otroidiomapostula2_trabajo'],
                'experiencialaboral1_trabajo' => $menu['experiencialaboral1_trabajo'],
                'experiencialaboral2_trabajo' => $menu['experiencialaboral2_trabajo'],
                'experiencialaboral3_trabajo' => $menu['experiencialaboral3_trabajo'],
                'referenciapersonal1_trabajo' => $menu['referenciapersonal1_trabajo'],
                'referenciapersonal2_trabajo' => $menu['referenciapersonal2_trabajo'],
                'referenciapersonal3_trabajo' => $menu['referenciapersonal3_trabajo'],
                'enterovacante_trabajo' => $menu['enterovacante_trabajo'],
                'hojavida_trabajo' => $menu['hojavida_trabajo'],
                'autorizo_trabajo' => $menu['autorizo_trabajo'],
                'conocioespecifica_trabajo' => $menu['conocioespecifica_trabajo']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }
    function fnformulario_cquejas_xdata($id_gencia, $cedula_queja, $nombre_queja,
            $telefono1_queja, $telefono2_queja, $email_queja, $direccion_queja,
            $id_zona, $referencia_queja, $fecha_queja, $hora_queja, $datocuenta_queja,
            $mensaje_queja, $peticion_queja, $estado_queja, $acuerdo_queja,
            $area_queja, $tipo_queja, $inconformidad_queja, $terminos_queja) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "INSERT INTO quejas(`id_gencia`, `cedula_queja`, `nombre_queja`,"
                . " `telefono1_queja`, `telefono2_queja`, `email_queja`, `direccion_queja`,"
                . " `id_zona`, `referencia_queja`, `fecha_queja`, `hora_queja`, `datocuenta_queja`,"
                . " `mensaje_queja`, `peticion_queja`, `estado_queja`, `acuerdo_queja`,"
                . " `area_queja`, `tipo_queja`, `inconformidad_queja`, `terminos_queja`)"
                . " VALUES (?,?,?,?,"
                . "?,?,?,?,?,?,"
                . "?,?,?,?,?,?,"
                . "?,?,?,?)";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);
        //echo $sql2;
        if ($stmt->bind_param("issssssssssissiisssi", $id_gencia, $cedula_queja, $nombre_queja,
                        $telefono1_queja, $telefono2_queja, $email_queja, $direccion_queja,
                        $id_zona, $referencia_queja, $fecha_queja, $hora_queja, $datocuenta_queja,
                        $mensaje_queja, $peticion_queja, $estado_queja, $acuerdo_queja,
                        $area_queja, $tipo_queja, $inconformidad_queja, $terminos_queja)) {
            if ($stmt->execute()) {
                //echo $stmt->errno;
                $resultado = 1;
            } else {
                //echo $stmt->error;
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }
        //echo 'ERROR: ' . $stmt->error;
        $mysqlidato->close();
        return $resultado;
    }
    function fnformulario_cquejassaras_xdata($nombres_saras, $email_saras, $telefono_saras,
                        $msj_saras, $id_gencia, $ip_saras, $sesion_saras,
                        $terminos_saras, $fecha_saras, $hora_saras, $tipo_saras) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "INSERT INTO quejasaras(nombres_saras, email_saras, telefono_saras,
                        msj_saras, id_gencia, ip_saras, sesion_saras,
                        terminos_saras, fecha_saras, hora_saras, tipo_saras)"
                . " VALUES (?,?,?,?,"
                . "?,?,?,?,?,?,?)";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);
        //echo $sql2;
        if ($stmt->bind_param("ssssississs", $nombres_saras, $email_saras, $telefono_saras,
                        $msj_saras, $id_gencia, $ip_saras, $sesion_saras,
                        $terminos_saras, $fecha_saras, $hora_saras, $tipo_saras)) {
            if ($stmt->execute()) {
                //echo $stmt->errno;
                $resultado = 1;
            } else {
                //echo $stmt->error;
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }
        //echo 'ERROR: ' . $stmt->error;
        $mysqlidato->close();
        return $resultado;
    }
   
function getBrowser($userAgent) {
    $browserArray = array(
        '/msie/i'       => 'Internet Explorer',
        '/trident/i'    => 'Internet Explorer 11',
        '/edge/i'       => 'Microsoft Edge',
        '/firefox/i'    => 'Firefox',
        '/chrome/i'     => 'Chrome',
        '/safari/i'     => 'Safari',
        '/opera/i'      => 'Opera',
        '/opr/i'        => 'Opera',
        '/brave/i'      => 'Brave',
    );

    foreach ($browserArray as $regex => $value) {
        if (preg_match($regex, $userAgent)) {
            return $value;
        }
    }
    return "Navegador Desconocido";
}

function getOS($userAgent) {
    $osArray = array(
        '/windows nt 10/i'     => 'Windows 10',
        '/windows nt 6.3/i'    => 'Windows 8.1',
        '/windows nt 6.2/i'    => 'Windows 8',
        '/windows nt 6.1/i'    => 'Windows 7',
        '/macintosh|mac os x/i'=> 'Mac OS X',
        '/linux/i'             => 'Linux',
        '/ubuntu/i'            => 'Ubuntu',
        '/iphone/i'            => 'iPhone (iOS)',
        '/ipad/i'              => 'iPad (iOS)',
        '/android/i'           => 'Android',
    );

    foreach ($osArray as $regex => $value) {
        if (preg_match($regex, $userAgent)) {
            return $value;
        }
    }
    return "Sistema Operativo Desconocido";
}


}
