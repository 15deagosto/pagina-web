<?php
include '../controler/conexion.php';
require '../funciones/fn-index.php';
require '../funciones/fn-simuladores.php';
require '../funciones/fn-wbsimulador.php';
include '../controler/config.php';
$fnindex = new Fn_index();
$fnsimulador = new Fn_simuladores();
$fnwbsimulador = new Fn_wbsimulador();
$opc = $_POST['dato_0'];
//simulador creditos
if ($opc == 10) {
    ?>
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitar crédito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" id="div_mod_credito">
        <div class="col-lg-12 col-md-12 col-sm-12" >
            <?php
            $valor_credito = $_POST['valor_credito'];
            $tiempo_credito = $_POST['tiempo_credito'];
            $codigo_prestamo = $_POST['dato_2'];
            //echo $response;
            $json_data = $fnwbsimulador->fnwbsimulador_tabla_credito($valor_credito, $tiempo_credito,
                    $codigo_prestamo);
            ?> <table class="table">
                <tr>
                    <td>Fecha</td>
                    <td>Cuota</td>
                    <td>Capital</td>
                    <td>Interes</td>
                    <td>Seguro</td>
                    <td>Total</td>
                    <td>Saldo</td>
                </tr> <?php
                for ($i = 0; $i < count($json_data['tablaPresuntivaPrestamoParaImpresionDetalles']); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $json_data['tablaPresuntivaPrestamoParaImpresionDetalles'][$i]['fechaPago'] ?></td>
                        <td><?php echo $json_data['tablaPresuntivaPrestamoParaImpresionDetalles'][$i]['cuota'] ?></td>
                        <td><?php echo $json_data['tablaPresuntivaPrestamoParaImpresionDetalles'][$i]['capital'] ?></td>
                        <td><?php echo $json_data['tablaPresuntivaPrestamoParaImpresionDetalles'][$i]['interes'] ?></td>
                        <td><?php echo $json_data['tablaPresuntivaPrestamoParaImpresionDetalles'][$i]['seguro'] ?></td>
                        <td><?php echo $json_data['tablaPresuntivaPrestamoParaImpresionDetalles'][$i]['totalCuota'] ?></td>
                        <td><?php echo $json_data['tablaPresuntivaPrestamoParaImpresionDetalles'][$i]['saldoReducido'] ?></td>
                    </tr>

                <?php }
                ?>
            </table>
        </div>
    </div>
    <div class="modal-footer">
    </div>
    <?php
}
if ($opc == 2) {
    $valor_credito = $_POST['valor_credito'];
    $tiempo_credito = $_POST['tiempo_credito'];
    $tipo_credito = $_POST['tipo_credito'];
    $valor_credito = str_replace([',', '.'], '', $valor_credito);
    $tupla2 = $fnsimulador->fn_rproducto_xid($tipo_credito);
    $interes = !empty($tupla2) ? $tupla2[0]['int_prod'] : 0;
    $segurodegrav = !empty($tupla2) ? $tupla2[0]['segurograv_prod'] : 0;
    $cuota_credito = 0;
    if($valor_credito!="" && $valor_credito>0 && $tiempo_credito!=0 && count($tupla2)>0){
        $interestotal=(($interes/100)/2)*($tiempo_credito/12);
    $valortotalinteres=($valor_credito*$interestotal)+$valor_credito;
    $valorgravament=($segurodegrav*$valor_credito)/1000;
    $ahorroprog=10;
    $valorcuota=$valortotalinteres/$tiempo_credito;
    $cuota_credito=$valorcuota+$valorgravament+$ahorroprog;
    }
    
if ($valor_credito != "" && $valor_credito > 0 && $tiempo_credito != 0 && count($tupla2) > 0) {
        $interestotal = (($interes / 100) / 2) * ($tiempo_credito / 12);
        $valortotalinteres = ($valor_credito * $interestotal) + $valor_credito;
        $valorgravament = ($segurodegrav * $valor_credito) / 1000;
        $ahorroprog = 10;
        $valorcuota = $valortotalinteres / $tiempo_credito;
        $cuota_credito = $valorcuota + $valorgravament + $ahorroprog;
    }
    
    // EVALUACIÓN DE CONTROL TRANSACCIONAL: Si el cálculo falló o da cero, pintamos una alerta limpia e institucional
    if ($cuota_credito <= 0 || empty($tupla2)) {
        ?>
        <div class="text-center p-4 w-full bg-[#7a1310]/40 border border-white/10 rounded-2xl shadow-inner animate-[fadeIn_0.3s_ease-out]">
            <div class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-3 text-[#ffd9d6] border border-white/10">
                <i class="fa-solid fa-triangle-exclamation text-lg"></i>
            </div>
            <h4 class="font-black text-sm mb-1.5 text-white tracking-tight uppercase">Restricción de Parámetros</h4>
            <p class="text-xs text-white/80 leading-relaxed font-medium px-2">El monto o plazo ingresado está fuera de los límites permitidos para este producto financiero. Por favor, verifique los valores de simulación.</p>
        </div>
        <?php
    } else {
       
        ?>
        <div class="w-full flex flex-col md:flex-row gap-6 items-center md:items-start text-left">
            <!-- Bloque Izquierdo: Valor Grande de la Cuota -->
            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <h4 class="text-xs uppercase font-bold tracking-widest text-white/60 mb-1">Cuota Mensual</h4>
                <h1 class="text-3xl md:text-4xl font-black text-white tracking-tight mb-2">$ <?php echo number_format($cuota_credito, 2) ?></h1>
                <p class="text-xs font-semibold text-[#ffd9d6] bg-white/5 border border-white/10 rounded-lg px-2.5 py-1 inline-block self-start">Tasa aplicada: <?php echo number_format($interes, 2) ?>% Anual</p>
            </div>
            
            <!-- Línea Divisoria Vertical Fina -->
            <div class="hidden md:block w-px bg-white/10 self-stretch my-2"></div>
            
            <!-- Bloque Derecho: Información y Nota de Responsabilidad -->
            <div class="w-full md:w-1/2 text-xs text-white/70 leading-relaxed pt-1">
                <p class="font-bold text-white/90 mb-1">Nota Informativa:</p>
                <p class="mb-2">El valor proyectado representa una cuota aproximada de amortización mensual bajo las mejores tasas del mercado.</p>
                <p class="text-[10px] text-white/40 italic">* El cálculo referencial de la cuota no incluye valores adicionales de seguros de desgravamen o administrativos.</p>
            </div>
        </div>
        <?php
    }
}
//enviar datos de credito
if ($opc == 3) {
    $id = utf8_decode($_POST['dato_3']);
    $cred_cantidad = utf8_decode($_POST['cred_cantidad']);
    $cred_tiempo = utf8_decode($_POST['cred_tiempo']);
    $nombre_credito = utf8_decode($_POST['nombres_credito']);
    $apellido_credito = utf8_decode($_POST['apellidos_credito']);
    $email_credito = utf8_decode($_POST['email_credito']);
    $telefono_credito = utf8_decode($_POST['celular_credito']);
    $agencia_credito = utf8_decode($_POST['agencia_credito']);
    $cedula_credito = utf8_decode($_POST['cedula_credito']);
    $fechaactual=date('Y-m-d');
    if ($nombre_credito != '' && $apellido_credito != '' && $email_credito != '' && $telefono_credito != '' && $agencia_credito != '' && $cedula_credito != '') {
        $acuerdo_credito = 1;
        $estado = 1;
        $tupla2 = $fnsimulador->fn_rproducto_xcodERP($id);
        $tupla3 = $fnsimulador->fn_rnosotros_xid($agencia_credito);
        $dp_direccion = '';
        $id_tasa = 1;
        $cuenta = $fnsimulador->fnsimulador_credito_x($nombre_credito, $apellido_credito,
                $telefono_credito, $email_credito, utf8_decode($tupla3[0]['nombre_nosotros']), $agencia_credito,
                $cred_cantidad, $cred_tiempo, $id_tasa, $acuerdo_credito, $estado, $id, $dp_direccion);

        if ($cuenta == 1) {
            //enviar email de confirmacion
            $nro_inver = $fnsimulador->fnindex_lastidsolcred_x();
            $mensaje = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Solicitud de Inversión</title>
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
            <h2>Solicitud Inversión</h2>
        </div>

        <div class='content'>
            <p><strong>Estimado(a) $nombre_credito,</strong></p>
            <p>Hemos recibido tu solicitud de inversión. A continuación, los detalles:</p>

            <div class='info'>
                <p><strong>Nombre:</strong> " . $nombre_credito . " " . $apellido_credito . "</p>
                <p><strong>Correo Electrónico:</strong> $email_credito</p>
                <p><strong>Teléfono:</strong> $telefono_credito</p>
                <p><strong>Cédula:</strong> $cedula_credito</p>
                <p><strong>Fecha:</strong> $fechaactual</p>
                <p><strong>Tipo de inversión:</strong> $nombre_credito</p>
                <p><strong>Monto a solicitar:</strong> $ " . $cred_cantidad . " días</p>
                <p><strong>Tiempo:</strong> " . $cred_tiempo . "</p>
            </div>

            <p>Estamos revisando su mensaje y nos pondremos en contacto con usted lo antes posible.</p>
        </div>

        <div class='footer'>
            <p>Si tiene dudas, puede responder a este correo o llamarnos al [" . TELFEMPRESA . "].</p>
            <p>Gracias por confiar en " . EMPRESA . ".</p>
        </div>
    </div>

</body>
</html>
";
//            $mensaje = 'Mensaje Sr./a ' . $nombre_credito . ' ' . $apellido_credito . ' se envia este mensaje con los datos de simulación del crédito '
//                    . ' para el tipo de crédito ' . utf8_decode($tupla2[0]['nombre_lineacred'] . ' ' . $tupla2[0]['nombre_prod']) . ' con un Capital de $' . $cred_cantidad
//                    . ' en un tiempo de ' . $cred_tiempo . ' meses se obtuvo un interes del $' . number_format($Ttinteres, 2, '.', '') . ' a una tasa de ' . $tasa . '% anual, la Cuota mensual aproximada seria de $' . number_format($cuotamensualap, 2, '.', '')
//                    . ' y el total a pagar seria de $' . number_format($valorTotal, 2, '.', '');
            $correo = $fnsimulador->fnindex_sendemail_solicitudcredito($mensaje);
            echo '1';
        } else {
            echo '0';
        }
    } else {
        echo '<b>Ingrese todos los datos requeridos (*)</b>';
    }
}
if ($opc == 4) {
    $monto_deposito = $_POST['valor_credito'];
    $plazo_deposito = $_POST['tiempo_credito'];
    $codigo_tipoDeposito = $_POST['tipo_deposito'];
    $tasa_deposito = $fnwbsimulador->fnwbsimulador_tasa_inversion($monto_deposito, $plazo_deposito, $codigo_tipoDeposito);
    //echo $tasa_deposito;
    $json_data = $fnwbsimulador->fnwbsimulador_tabla_inversion($plazo_deposito, $monto_deposito, $tasa_deposito, $codigo_tipoDeposito);
    //print_r($json_data);
    if (count($json_data['tablaPresuntivaDepositoParaImpresionDetalles']) > 0) {
        $cuota_credito = $json_data['interes'];
    } else {
        $cuota_credito = 0;
        //echo $json_data['response'];
    }
    ?>
    <h4 class="darkcolor bottom20 whitetext" style="color:#767676 !important;">Total a recibir</h4>
    <h1 class="darkcolor bottom20 whitetext" style="color:#213e97 !important; font-weight: bold;">$ <?php echo number_format($cuota_credito, 2) ?></h1>
    <h4 class="darkcolor bottom20 whitetext" style="color:#767676 !important;">Las mejores tasas de interés <?php echo number_format($tasa_deposito, 2) ?>%</h4>
    <span class="darkcolor bottom20 whitetext" style="color:#767676 !important;">
        * Cálculo de la cuota NO INCLUYE valores de seguros *</span>
    <?php
}
//ingresar inversion
if ($opc == 5) {
    $id = utf8_decode($_POST['dato_3']);
    $monto_inversion = utf8_decode($_POST['inversion_cantidad']);
    $cred_tiempo = utf8_decode($_POST['inversion_tiempo']);
    $nombre_inversion = utf8_decode($_POST['nombres_credito']);
    $apellido_inversion = utf8_decode($_POST['apellidos_credito']);
    $email_inversion = utf8_decode($_POST['email_credito']);
    $telefono_inversion = utf8_decode($_POST['celular_credito']);
    $agencia_credito = utf8_decode($_POST['agencia_credito']);
    $dni_inversion = utf8_decode($_POST['cedula_credito']);
    $tasa = utf8_decode($_POST['tasa_credito']);
    $valorTotal = utf8_decode($_POST['valor_total']);
    $entidad_inversion = 'N';
    $ciudad_inversion = 'N';
    $acuerdo_inversion = 1;
    $dp_direccion = 'N';
    $fecha_inversion = date('Y-m-d');
    //echo $monto_inversion;
    if ($nombre_inversion != '' && $apellido_inversion != '' && $email_inversion != '' && $telefono_inversion != '' && $agencia_credito != '' && $dni_inversion != '') {
        $acuerdo_credito = 1;
        $estado = 1;
        $tupla2 = $fnsimulador->fn_rproducto_xcodERP($id);
        $tupla3 = $fnsimulador->fn_rnosotros_xid($agencia_credito);
        $dp_direccion = '';
        $id_tasa = 1;
        $cuenta = $fnsimulador->fnsimulador_inversion_x($nombre_inversion, $telefono_inversion,
                $email_inversion, $apellido_inversion, $entidad_inversion, $ciudad_inversion,
                $monto_inversion, $acuerdo_inversion, $id, $dni_inversion);
        if ($cuenta == 1) {
            //enviar email de confirmacion
            $nro_inver = $fnsimulador->fnindex_lastidsolcred_x();
//            $mensaje = 'Tenga un buen dia Sr./a ' . $nombre_credito . ' ' . $apellido_credito . ' se envia este mensaje con los datos de simulación del crédito '
//                    . ' para el tipo de crédito ' . utf8_decode($tupla2[0]['nombre_lineacred'] . ' ' . $tupla2[0]['nombre_prod']) . ' con un Capital de $' . $cred_cantidad
//                    . ' en un tiempo de ' . $cred_tiempo . ' meses se obtuvo un interes del $' . number_format($Ttinteres, 2, '.', '') . ' a una tasa de ' . $tasa . '% anual, la Cuota mensual aproximada seria de $' . number_format($cuotamensualap, 2, '.', '')
//                    . ' y el total a pagar seria de $' . number_format($valorTotal, 2, '.', '');
            $mensaje = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Solicitud de Inversión</title>
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
            <h2>Solicitud Inversión</h2>
        </div>

        <div class='content'>
            <p><strong>Estimado(a) $nombre_inversion,</strong></p>
            <p>Hemos recibido tu solicitud de inversión. A continuación, los detalles:</p>

            <div class='info'>
                <p><strong>Nombre:</strong> " . $nombre_inversion . " " . $apellido_inversion . "</p>
                <p><strong>Correo Electrónico:</strong> $email_inversion</p>
                <p><strong>Teléfono:</strong> $telefono_inversion</p>
                <p><strong>Cédula:</strong> $dni_inversion</p>
                <p><strong>Fecha:</strong> $fecha_inversion</p>
                <p><strong>Tipo de inversión:</strong> Depósitos a plazo fijo</p>
                <p><strong>Monto a solicitar:</strong> $ " . $monto_inversion . " días</p>
                <p><strong>Tiempo:</strong> " . $cred_tiempo . "</p>
                <p><strong>Tasa Anual:</strong> " . $tasa . "%</p>
                <p><strong>Valor a entregar:</strong> $" . $valorTotal. "</p>
            </div>

            <p>Estamos revisando su mensaje y nos pondremos en contacto con usted lo antes posible.</p>
        </div>

        <div class='footer'>
            <p>Si tiene dudas, puede responder a este correo o llamarnos al [" . TELFEMPRESA . "].</p>
            <p>Gracias por confiar en " . EMPRESA . ".</p>
        </div>
    </div>

</body>
</html>
";
            $correo = $fnsimulador->fnindex_msgemail_solicitudcredito($mensaje);
            echo $correo;
        } else {
            echo '0';
        }
    } else {
        echo '<b>Ingrese todos los datos requeridos (*)</b>';
    }
}