<?php

class Fn_proveedores {

    function varifica_datos3($dp_nombre, $dp_cedula, $dp_acteco, $dp_fechsri, $dp_prodprin,
            $dn_cuidad, $dn_email, $dn_telefono1, $dn_telefono2, $da_nombre, $da_apellido, $da_cargo, $da_email, $da_confiremail,
            $da_telefono1, $da_telefono2, $dpf_anio, $dpf_ingresos, $dpf_egresos, $dpf_utilbr, $dpf_activos, $dpf_pasivos,
            $dpf_patrimonio, $drc_prodofertado, $drc_servofertado, $datocategoria, $tf_name, $tf_cuenta, $tf_dato, $tc_name, $tc_dir, $tc_tel, $dn_direccion) {
        $aun = 1;

        if ($dp_nombre == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dp_nombre").html('<label style="color: red">Ingrese nombre </label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dp_nombre").html('');
            </script>

            <?php
        }
        if ($dp_cedula == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dp_cedula").html('<label style="color: red">Ingrese identificación</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dp_cedula").html('');
            </script>

            <?php
        }
        if ($dp_acteco == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dp_acteco").html('<label style="color: red">Ingrese actividad económica</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dp_acteco").html('');
            </script>

            <?php
        }
        if ($dp_fechsri == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dp_fechsri").html('<label style="color: red">Ingrese fecha de inicio de actividades en el SRI</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dp_fechsri").html('');
            </script>

            <?php
        }
        if ($dp_prodprin == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dp_prodprin").html('<label style="color: red">Ingrese producto principal</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dp_prodprin").html('');
            </script>

            <?php
        }
        if ($dn_cuidad == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dn_cuidad").html('<label style="color: red">Ingrese Parroquia</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dn_cuidad").html('');
            </script>

            <?php
        }
        if ($dn_email == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dn_email").html('<label style="color: red">Ingrese email</label>');
            </script>

            <?php
        } else {
            $matches = null;
            $verificameil = (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $dn_email, $matches));
            if ($verificameil == 'true') {
                ?>
                <script>
                    $("#msg_dn_email").html('');
                </script>

                <?php
            } else {
                $aun = 0;
                ?>
                <script>
                    $("#msg_dn_email").html('<label style="color: red">Ingrese email valido</label>');
                </script>

                <?php
            }
        }
        if ($dn_telefono1 == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dn_telefono1").html('<label style="color: red">Ingrese Teléfono</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dn_telefono1").html('');
            </script>

            <?php
        }
        if ($dn_telefono2 == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dn_telefono2").html('<label style="color: red">Ingrese Celular</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dn_telefono2").html('');
            </script>

            <?php
        }
        if ($da_nombre == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_da_nombre").html('<label style="color: red">Ingrese nombre</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_da_nombre").html('');
            </script>

            <?php
        }
        if ($da_apellido == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_da_apellido").html('<label style="color: red">Ingrese apellido</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_da_apellido").html('');
            </script>

            <?php
        }
        if ($da_cargo == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_da_cargo").html('<label style="color: red">Ingrese cargo</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_da_cargo").html('');
            </script>

            <?php
        }
        if ($da_email == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_da_email").html('<label style="color: red">Ingrese email</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_da_email").html('');
            </script>

            <?php
        }
        if ($da_confiremail == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_da_confiremail").html('<label style="color: red">Vuelva a ingresar el email </label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_da_confiremail").html('');
            </script>

            <?php
        }
        if ($da_confiremail != $da_email) {
            $aun = 0;
            ?>
            <script>
                $("#msg_da_email").html('<label style="color: red">Los email no coinsiden </label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_da_email").html('');
            </script>

            <?php
        }
        if ($da_telefono1 == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_da_telefono1").html('<label style="color: red">Ingrese teléfono</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_da_telefono1").html('');
            </script>

            <?php
        }
        if ($da_telefono2 == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_da_telefono2").html('<label style="color: red">Ingrese celular</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_da_telefono2").html('');
            </script>

            <?php
        }
        if ($dpf_anio == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dpf_anio").html('<label style="color: red">Ingrese año</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dpf_anio").html('');
            </script>

            <?php
        }
        if ($dpf_ingresos == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dpf_ingresos").html('<label style="color: red">Ingrese ingresos</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dpf_ingresos").html('');
            </script>

            <?php
        }
        if ($dpf_egresos == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dpf_egresos").html('<label style="color: red">Ingrese egresos</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dpf_egresos").html('');
            </script>

            <?php
        }
        if ($dpf_utilbr == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dpf_utilbr").html('<label style="color: red">Ingrese utilidad bruta</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dpf_utilbr").html('');
            </script>

            <?php
        }
        if ($dpf_activos == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dpf_activos").html('<label style="color: red">Ingrese activos</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dpf_activos").html('');
            </script>

            <?php
        }
        if ($dpf_pasivos == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dpf_pasivos").html('<label style="color: red">Ingrese pasivos</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dpf_pasivos").html('');
            </script>

            <?php
        }
        if ($dpf_patrimonio == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dpf_patrimonio").html('<label style="color: red">Ingrese patrimonio</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dpf_patrimonio").html('');
            </script>

            <?php
        }
        if ($drc_prodofertado == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_drc_prodofertado").html('<label style="color: red">Ingrese producto ofertado</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_drc_prodofertado").html('');
            </script>

            <?php
        }
        if ($drc_servofertado == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_drc_servofertado").html('<label style="color: red">Ingrese servicio ofertado</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_drc_servofertado").html('');
            </script>

            <?php
        }

        if ($datocategoria == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_drc_categoria").html('<label style="color: red">Ingrese al menos uno</label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_drc_categoria").html('');
            </script>

            <?php
        }
        for ($key = 1; $key <= count($tf_name); $key++) {
//            
//        }
//        foreach ($tf_name as $key => $value) {
            $pos = $key;
            if ($tf_name[$key] == '') {
                $aun = 0;
                ?>
                <script>
                    $("#msg_tf_name<?php echo $pos ?>").html('<label style="color: red">Este campo es obligatorio.</label>');
                </script>

                <?php
            } else {
                ?>
                <script>
                    $("#msg_tf_name<?php echo $pos ?>").html('');
                </script>

                <?php
            }if ($tf_cuenta[$key] == '') {
                $aun = 0;
                ?>
                <script>
                    $("#msg_tf_cuenta<?php echo $pos ?>").html('<label style="color: red">Este campo es obligatorio.</label>');
                </script>

                <?php
            } else {
                ?>
                <script>
                    $("#msg_tf_cuenta<?php echo $pos ?>").html('');
                </script>

                <?php
            }if ($tf_dato[$key] == '') {
                $aun = 0;
                ?>
                <script>
                    $("#msg_tf_dato<?php echo $pos ?>").html('<label style="color: red">Este campo es obligatorio.</label>');
                </script>

                <?php
            } else {
                ?>
                <script>
                    $("#msg_tf_dato<?php echo $pos ?>").html('');
                </script>

                <?php
            }
        }
        for ($key = 1; $key <= count($tc_name); $key++) {
//        foreach ($tc_name as $key => $value) {
            $pos = $key;
            if ($tc_name[$key] == '') {
                $aun = 0;
                ?>
                <script>
                    $("#msg_tc_name<?php echo $pos ?>").html('<label style="color: red">Este campo es obligatorio.</label>');
                </script>

                <?php
            } else {
                ?>
                <script>
                    $("#msg_tc_name<?php echo $pos ?>").html('');
                </script>

                <?php
            }if ($tc_dir[$key] == '') {
                $aun = 0;
                ?>
                <script>
                    $("#msg_tc_dir<?php echo $pos ?>").html('<label style="color: red">Este campo es obligatorio.</label>');
                </script>

                <?php
            } else {
                ?>
                <script>
                    $("#msg_tc_dir<?php echo $pos ?>").html('');
                </script>

                <?php
            }if ($tc_tel[$key] == '') {
                $aun = 0;
                ?>
                <script>
                    $("#msg_tc_tel<?php echo $pos ?>").html('<label style="color: red">Este campo es obligatorio.</label>');
                </script>

                <?php
            } else {
                ?>
                <script>
                    $("#msg_tc_tel<?php echo $pos ?>").html('');
                </script>

                <?php
            }
        }

        if ($dn_direccion == '') {
            $aun = 0;
            ?>
            <script>
                $("#msg_dn_direccion").html('<label style="color: red">Ingrese dirección </label>');
            </script>

            <?php
        } else {
            ?>
            <script>
                $("#msg_dn_direccion").html('');
            </script>

            <?php
        }

        return $aun;
    }

    function verifica_texto_datos3($dp_nombre, $dp_cedula, $dp_acteco, $dp_fechsri, $dp_prodprin,
            $dn_cuidad, $dn_email, $dn_telefono1, $dn_telefono2, $da_nombre, $da_apellido, $da_cargo, $da_email, $da_confiremail,
            $da_telefono1, $da_telefono2, $dpf_anio, $dpf_ingresos, $dpf_egresos, $dpf_utilbr, $dpf_activos, $dpf_pasivos,
            $dpf_patrimonio, $drc_prodofertado, $drc_servofertado, $datocategoria, $tf_name, $tf_cuenta, $tf_dato, $tc_name, $tc_dir, $tc_tel, $dn_direccion) {
        $aun = 1;
        $aux = '';
        if ($dp_nombre == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese un nombre';
        }
        if ($dp_cedula == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese una cédula';
        }
        if ($dp_acteco == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese una actividad económica';
        }
        if ($dp_fechsri == '') {
            $aux .= '<br> - Ingrese fecha de inicio de actividades en el SRI';
            $aun = 0;
        }
        if ($dp_prodprin == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese el producto principal';
        }
        if ($dn_cuidad == '') {
            $aux .= '<br> - Ingrese una parroquia ___';
            $aun = 0;
        }
        if ($dn_email == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese un correo electrónico ';
        } else {
            $matches = null;
            $verificameil = (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $dn_email, $matches));
            if ($verificameil != 'true') {
                $aun = 0;
                $aux .= '<br> - Ingrese un email válido';
            }
        }
        if ($dn_telefono1 == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese un teléfono';
        }
        if ($dn_telefono2 == '') {
            $aux .= '<br> - Ingrese un celular';
        }
        if ($da_nombre == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese un nombre';
        }
        if ($da_apellido == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese un apellido';
        }
        if ($da_cargo == '') {
            $aux .= '<br> - Ingrese el cargo';
            $aun = 0;
        }
        if ($da_email == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese el correo electrónico ';
        }
        if ($da_confiremail == '') {
            $aun = 0;
            $aux .= '<br> - Vuelva a ingresar el correo electrónico ';
        }
        if ($da_confiremail != $da_email) {
            $aun = 0;
            $aux .= '<br> - Los correos electrónicos no coinciden ';
        }
        if ($da_telefono1 == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese un teléfono';
        }
        if ($da_telefono2 == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese un celular';
        }
        if ($dpf_anio == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese un año';
        }
        if ($dpf_ingresos == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese los ingresos';
        }
        if ($dpf_egresos == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese los egresos';
        }
        if ($dpf_utilbr == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese utilidad bruta';
        }
        if ($dpf_activos == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese los activos';
        }
        if ($dpf_pasivos == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese los pasivos';
        }
        if ($dpf_patrimonio == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese el patrimonio';
        }
        if ($drc_prodofertado == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese producto ofertado';
        }
        if ($drc_servofertado == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese servicio ofertado';
        }

        if ($datocategoria == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese al menos uno';
        }
        if ($dn_direccion == '') {
            $aun = 0;
            $aux .= '<br> - Ingrese una dirección ';
        }
        return $aux;
    }

    function fnproveedores_cempresa_xdata($tlf1_empresa, $tlf2_empresa, $email_empresa, $id_zona, $representante_empresa, $emailrep_empresa,
            $actividad_empresa, $tipo_empresa, $ruc_empresa, $fechinsri_empresa, $tipopersona_empresa, $paisrepre_empresa, $anio_empresa,
            $ingreso_empresa, $egreso_empresa, $utilidadbruto_empresa, $pasivos_empresa, $activos_empresa, $patrimonio_empresa, $terminos_empresa,
            $prodprincipal_empresa, $dn_direccion) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $fechain_empresa = date('Y-m-d');
        $sql2 = "INSERT INTO  empresa (tlf1_empresa, tlf2_empresa, email_empresa, id_zona, representante_empresa, emailrep_empresa,"
                . "actividad_empresa,tipo_empresa,ruc_empresa,fechinsri_empresa,tipopersona_empresa,paisrepre_empresa,anio_empresa,"
                . "ingreso_empresa,egreso_empresa,utilidadbruto_empresa,pasivos_empresa,activos_empresa,patrimonio_empresa,terminos_empresa,"
                . "prodprincipal_empresa,tlfrep_empresa,tlf2rep_empresafechain_empresa,dir1_empresa)"
                . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);
        //echo $sql2;
        if ($stmt->bind_param("sssssssissisiddddddisssss", $tlf1_empresa, $tlf2_empresa, $email_empresa, $id_zona, $representante_empresa, $emailrep_empresa,
                        $actividad_empresa, $tipo_empresa, $ruc_empresa, $fechinsri_empresa, $tipopersona_empresa, $paisrepre_empresa, $anio_empresa,
                        $ingreso_empresa, $egreso_empresa, $utilidadbruto_empresa, $pasivos_empresa, $activos_empresa, $patrimonio_empresa, $terminos_empresa,
                        $prodprincipal_empresa, $tlf1_empresa, $tlf2_empresa, $fechain_empresa, $dn_direccion)) {
            if ($stmt->execute()) {
                //echo $stmt->errno;
                $resultado = $stmt->insert_id;
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

    function fnproveedores_ccontactosempresa_xdata($nombre_conemp, $tlf1_conemp, $tlf2_conemp, $email_conemp, $apellido_conemp, $cargo_conemp,
            $id_empresa) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $estado_conemp = 1;
        $sql2 = "INSERT INTO contactosempresa(nombre_conemp, tlf1_conemp, tlf2_conemp, email_conemp, apellido_conemp, cargo_conemp,"
                . " estado_conemp, id_empresa) "
                . " VALUES (?,?,?,?,?,?,?,?)";
        $resultado = 0;
        $stmt = $mysqlidato->prepare($sql2);
        //echo $sql2;
        if ($stmt->bind_param("ssssssii", $nombre_conemp, $tlf1_conemp, $tlf2_conemp, $email_conemp, $apellido_conemp, $cargo_conemp,
                        $estado_conemp, $id_empresa)) {
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

    function fnproveedores_csql_xdata($sql) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        //echo $sql;
        if ($mysqlidato->query($sql) == FALSE) {
            $cuenta = 0;
        } else {
            $cuenta = 1;
        }
        return $cuenta;
    }

    function fnproveedores_rempresa_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * from empresa e , contactosempresa c WHERE e.id_empresa=c.id_empresa and e.id_empresa=$id limit 0,1";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnproveedores_rempresa_x -- fnproveedores";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('id_empresa' => $menu['id_empresa'],
                'nombre_empresa' => $menu['nombre_empresa'],
                'desc_empresa' => $menu['desc_empresa'],
                'tlf1_empresa' => $menu['tlf1_empresa'],
                'tlf2_empresa' => $menu['tlf2_empresa'],
                'email_empresa' => $menu['email_empresa'],
                'id_zona' => $menu['id_zona'],
                'representante_empresa' => $menu['representante_empresa'],
                'tlfrep_empresa' => $menu['tlfrep_empresa'],
                'tlf2rep_empresa' => $menu['tlf2rep_empresa'],
                'emailrep_empresa' => $menu['emailrep_empresa'],
                'actividad_empresa' => $menu['actividad_empresa'],
                'tipo_empresa' => $menu['tipo_empresa'],
                'ruc_empresa' => $menu['ruc_empresa'],
                'fechinsri_empresa' => $menu['fechinsri_empresa'],
                'tipopersona_empresa' => $menu['tipopersona_empresa'],
                'paisrepre_empresa' => $menu['paisrepre_empresa'],
                'prodprincipal_empresa' => $menu['prodprincipal_empresa'],
                'anio_empresa' => $menu['anio_empresa'],
                'ingreso_empresa' => $menu['ingreso_empresa'],
                'egreso_empresa' => $menu['egreso_empresa'],
                'utilidadbruto_empresa' => $menu['utilidadbruto_empresa'],
                'pasivos_empresa' => $menu['pasivos_empresa'],
                'activos_empresa' => $menu['activos_empresa'],
                'patrimonio_empresa' => $menu['patrimonio_empresa'],
                'terminos_empresa' => $menu['terminos_empresa'],
                'id_conemp' => $menu['id_conemp'],
                'nombre_conemp' => $menu['nombre_conemp'],
                'tlf1_conemp' => $menu['tlf1_conemp'],
                'tlf2_conemp' => $menu['tlf2_conemp'],
                'email_conemp' => $menu['email_conemp'],
                'apellido_conemp' => $menu['apellido_conemp'],
                'cargo_conemp' => $menu['cargo_conemp']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnproveedores_rrelacioncomercial_xid($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM relacioncomercial r , categoriacomercio c WHERE r.id_catcom=c.id_catcom and id_empresa = $id  ORDER by id_relcom ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnproveedores_rrelacioncomercial_xid -- fnproveedores ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnproveedores_rreferencia_xid($id, $tipo) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT * FROM referencia WHERE id_empresa = $id AND tipo_referencia=$tipo   ORDER by id_referencia  ASC";
        $arreglo;
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnproveedores_rreferencia_xid -- fnproveedores ";
            exit;
        } else {
            $arreglo = $resultado2;
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnproveedores_rzona_x($id) {
        $con = new Conecciones;
        $mysqlidato = $con->crearConexion();
        $sql2 = "SELECT c.lugar_zona as canton , pr.lugar_zona as provincia , p.lugar_zona as pais "
                . "from zona c , zona pr , zona p where c.codigopadre_zona=pr.id_zona "
                . "and pr.codigopadre_zona=p.id_zona and c.id_zona='$id'";
        //echo $sql2;
        $arreglo = array();
        if (!$resultado2 = $mysqlidato->query($sql2)) {
            echo "Error fnproveedores_rempresa_x -- fnproveedores";
            exit;
        }while ($menu = $resultado2->fetch_assoc()) {
            $datosNuevos = array('canton' => $menu['canton'],
                'provincia' => $menu['provincia'],
                'pais' => $menu['pais']);
            array_push($arreglo, $datosNuevos);
        }
        $mysqlidato->close();
        return $arreglo;
    }

    function fnproveedores_msgemail_x($id) {
        $a = new Fn_proveedores();
        $detempresa = $a->fnproveedores_rempresa_x($id);
        $listrelacioncomercial = $a->fnproveedores_rrelacioncomercial_xid($id);
        $listreferecia = $a->fnproveedores_rreferencia_xid($id, 1);
        $detzona = $a->fnproveedores_rzona_x($detempresa[0]['id_zona']);
        $tipo1 = $detempresa[0]['tipopersona_empresa'];
        $txttipo1 = 'NATURAL';
        if ($tipo1 == 1) {
            $txttipo1 = 'JURIDICO';
        }
        $tipo2 = $detempresa[0]['tipo_empresa'];
        $txttipo2 = 'CEDULA';
        if ($tipo2 == 1) {
            $txttipo2 = 'RUC';
        }if ($tipo2 == 1) {
            $txttipo2 = 'PASAPORTE';
        }

        $html = '<table style="width: 50%" border="1">
    <tr>
        <td><img src="' . URLPRINCIPAL . 'assets/images/logo_coopoccidental_large_001.png" width="100%"></td>
    </tr>
    <tr>
        <td style="text-align: center"><h3 style="color: #00437d">FORMULARIO PROVEEDOR</h3></td>
    </tr>
</table>
<table style="width: 50%" border="1">
    <tr>
        <td colspan="2" style="background-color: #055399; width: 20%; color: white">DATOS DE LA PERSONA NATURAL / JURÍDICA</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">TIPO DE PERSONA:</td>
        <td>' . $txttipo1 . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">NOMBRE</td>
        <td>' . utf8_encode($detempresa[0]['representante_empresa']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">TIPO DE DOCUMENTO</td>
        <td>' . $txttipo2 . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">DOCUMENTO</td>
        <td>' . $detempresa[0]['ruc_empresa'] . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">ACTIVIDAD ECONOMICA</td>
        <td>' . utf8_encode($detempresa[0]['actividad_empresa']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">FECHA DE INICIO DE ACTIVIDADES EN EL SRI</td>
        <td>' . utf8_encode($detempresa[0]['fechinsri_empresa']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">PAIS DE CONSTITUCIÓN</td>
        <td>' . utf8_encode($detempresa[0]['paisrepre_empresa']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">PRODUCTO PRINCIPAL</td>
        <td>' . utf8_encode($detempresa[0]['prodprincipal_empresa']) . '</td>
    </tr>
    <tr>
        <td colspan="2" style="background-color: #055399; width: 20%; color: white">DIRECCIÓN DEL NEGOCIO</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">PAÍS</td>
        <td>' . $detzona[0]['pais'] . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">PROVINCIA</td>
        <td>' . $detzona[0]['provincia'] . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">CANTÓN</td>
        <td>' . $detzona[0]['canton'] . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">EMAIL</td>
        <td>' . utf8_encode($detempresa[0]['email_empresa']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">TELÉFONO</td>
        <td>' . utf8_encode($detempresa[0]['tlf1_empresa']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">CELULAR</td>
        <td>' . utf8_encode($detempresa[0]['tlf2_empresa']) . '</td>
    </tr>
    <tr>
        <td colspan="2" style="background-color: #055399; width: 20%; color: white">DATOS DEL ASESOR COMERCIAL O CONTACTO</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">NOMBRE</td>
        <td>' . utf8_encode($detempresa[0]['tlf2_empresa'] . ' ' . $detempresa[0]['apellido_conemp']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">CARGO</td>
        <td>' . utf8_encode($detempresa[0]['cargo_conemp']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">EMAIL</td>
        <td>' . utf8_encode($detempresa[0]['email_conemp']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">TELEFONO</td>
        <td>' . utf8_encode($detempresa[0]['tlf1_conemp']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">CELULAR</td>
        <td>' . utf8_encode($detempresa[0]['tlf2_conemp']) . '</td>
    </tr>
    <tr>
        <td colspan="2" style="background-color: #055399; width: 20%; color: white">PERFIL FINANCIERO ( NIVEL DE VENTAS MENSUALES )</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">AÑO</td>
        <td>' . utf8_encode($detempresa[0]['anio_empresa']) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">INGRESOS</td>
        <td>$' . number_format($detempresa[0]['ingreso_empresa'], 2) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">EGRESOS</td>
        <td>$' . number_format($detempresa[0]['egreso_empresa'], 2) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">UTILIDAD BRUTA</td>
        <td>$' . number_format($detempresa[0]['utilidadbruto_empresa'], 2) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">ACTIVOS</td>
        <td>$' . number_format($detempresa[0]['pasivos_empresa'], 2) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">PASIVOS</td>
        <td>$' . number_format($detempresa[0]['activos_empresa'], 2) . '</td>
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">PATRIMONIO</td>
        <td>$' . number_format($detempresa[0]['patrimonio_empresa'], 2) . '</td>
    </tr>
    <tr>
        <td colspan="2" style="background-color: #055399; width: 20%; color: white">DATOS DE LA RELACIÓN COMERCIAL</td>
    </tr>';

        while ($menuRC = $listrelacioncomercial->fetch_assoc()) {
            $html .= '<tr>
        <td style="background-color: #055399; width: 20%; color: white">PRODUCTO OFERTADO</td>
        <td>' . utf8_encode($menuRC['prodofertado_relcom']) . '</td>     
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">SERVICIO OFERTADO</td>
        <td>' . utf8_encode($menuRC['servofertado_relcom']) . '</td>   
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">CATEGORIA</td>
        <td>' . utf8_encode($menuRC['nombre_catcom']) . '</td>        
    </tr> ';
        }
        $html .= '<tr>
        <td colspan="2" style="background-color: #055399; width: 20%; color: white">REFERENCIAS</td>
    </tr>';
        $html .= '<tr>
        <td colspan="2" style="background-color: #055399; width: 20%; color: white">FINANCIERAS</td>
    </tr>';

        while ($menuR = $listreferecia->fetch_assoc()) {
            $tipoc = $menuR['tipocuenta_referencia'];
            $txttipoc = 'AHORROS';
            if ($tipoc == 2) {
                $txttipoc = 'CORRIENTE';
            }
            $html .= '<tr>
        <td style="background-color: #055399; width: 20%; color: white">INTITUCIÓN FINANCIERA</td>
        <td>' . utf8_encode($menuR['instituto_referencia']) . '</td>     
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">CUENTA</td>
        <td>' . $txttipoc . '</td>   
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">NRO.CUENTA O TARGETA</td>
        <td>' . utf8_encode($menuR['numcuenta_referencia']) . '</td>        
    </tr> ';
        }
        $html .= '<tr>
        <td colspan="2" style="background-color: #055399; width: 20%; color: white">COMERCIALES</td>
    </tr>';
        $listreferecia = $a->fnproveedores_rreferencia_xid($id, 2);
        while ($menuR = $listreferecia->fetch_assoc()) {
            $html .= '<tr>
        <td style="background-color: #055399; width: 20%; color: white">ESTABLECIMIENTO COMERCIAL</td>
        <td>' . utf8_encode($menuR['instituto_referencia']) . '</td>     
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">DIRECIÓN</td>
        <td>' . utf8_encode($menuR['direccion_referencia']) . '</td>   
    </tr>
    <tr>
        <td style="background-color: #055399; width: 20%; color: white">TELÉFONO</td>
        <td>' . utf8_encode($menuR['tlf_referencia']) . '</td>        
    </tr> ';
        }
        $html .= '</table>';
        return $html;
    }

    function fnproveedores_sendemail_x($mensaje) {
        $html = $mensaje;
        $subject = 'Formulario proveedores';
        $encabezados = "MIME-Version: 1.0" . "\r\n";
        # ojo, es una concatenación:
        $encabezados .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        $encabezados .= 'From: CoacOccidental<' . EMAIL_USER . '>' . "\r\n";
        # emails produccion
        $emails = EMAILPROVEEDOR;
        # emails prueba
        //$emails = 'calidad@supaysoft.net,calidad@supaysoft.net';
        $resultado = mail($emails, $subject, $html, $encabezados); #Mandar al final los encabezados
        if ($resultado) {
            return 1;
        } else {
            return 2;
        }
    }
}
