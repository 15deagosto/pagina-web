<?php
include '../controler/conexion.php';
require '../funciones/fn-index.php';
require '../funciones/fn-simuladores.php';
$fnindex = new Fn_index();
$fnsimulador = new Fn_simuladores();
$opc = $_POST['dato_0'];
//simulador creditos
if ($opc == 1) {
    $aform = 'form-credit.php';
    $idprod = $_POST['id_producto'];
    $cred_cantidad = $_POST['valor'];
    $cred_tiempo = $_POST['plazo'];
    $tipo_amortizacion = $_POST['tipo_amortizacion'];
    $detproducto = $fnsimulador->fn_rtasa_xidprod($idprod, $cred_cantidad, $cred_tiempo);
    $tinteres = 0;
    $cuotamensual = 0;
    $sinicial1 = $cred_cantidad;
    $tasa = $detproducto[0]['tasanominal_tasa']; //anual
    $tasaMes = ($tasa / 12) / 100;
    //print_r($detproducto);
//    echo "asdasd".$tipo_amortizacion;
    if ($tipo_amortizacion == 1) {
        $include = 1;
    } else if ($tipo_amortizacion == 2) {
        $include = 2;
    }
}

//simulador de ahorro
if ($opc == 2) {
    $aform = 'form-savings.php';
    $idprod = $_POST['id_producto'];
    $cred_cantidad = $_POST['valor'];
    $cred_tiempo = $_POST['plazo'];
    $tipo_amortizacion = $_POST['tipo_amortizacion'];
    $detproducto = $fnsimulador->fn_rtasa_xidprod($idprod, $cred_cantidad, $cred_tiempo);
    $include = 1;
}

//simulador de inversión
if ($opc == 3) {
    $aform = 'form-invest.php';
    $idprod = $_POST['id_producto'];
    $cred_cantidad = $_POST['valor'];
    $cred_tiempo = $_POST['plazo'];
    $tipo_amortizacion = $_POST['tipo_amortizacion'];
    $detproducto = $fnsimulador->fn_rtasa_xidprod($idprod, $cred_cantidad, $cred_tiempo);
    $include = 1;
}
//formulario envio solicitud credito
if ($opc == 4) {
    $id = utf8_decode($_POST['id_producto']);
    $cred_cantidad = utf8_decode($_POST['cred_cantidad']);
    $cred_tiempo = utf8_decode($_POST['cred_tiempo']);
    $nombre_credito = utf8_decode($_POST['nombres_credito']);
    $apellido_credito = utf8_decode($_POST['apellidos_credito']);
    $email_credito = utf8_decode($_POST['email_credito']);
    $telefono_credito = utf8_decode($_POST['celular_credito']);
    $agencia_credito = utf8_decode($_POST['agencia_credito']);
    $cedula_credito = utf8_decode($_POST['cedula_credito']);
    $acuerdo_credito = 1;
    $estado = 1;
    $tupla2 = $fnsimulador->fn_rproducto_xid($id);
    $tupla3 = $fnsimulador->fn_rnosotros_xid($agencia_credito);
    $dp_direccion = '';
    $id_tasa = 1;
    $cuenta = $fnsimulador->fnsimulador_credito_x($nombre_credito, $apellido_credito,
            $telefono_credito, $email_credito, utf8_decode($tupla3[0]['nombre_nosotros']), $agencia_credito,
            $cred_cantidad, $cred_tiempo, $id_tasa, $acuerdo_credito, $estado, $id, $dp_direccion);
    
    if ($cuenta == 1) {
        //enviar email de confirmacion
        $nro_inver = $fnsimulador->fnindex_lastidsolcred_x();
        $mensaje = 'Tenga un buen dia Sr./a ' . $nombre_credito . ' ' . $apellido_credito . ' se envia este mensaje con los datos de simulación del crédito '
                . ' para el tipo de crédito ' . utf8_decode($tupla2[0]['nombre_lineacred'] . ' ' . $tupla2[0]['nombre_prod']) . ' con un Capital de $' . $cred_cantidad
                . ' en un tiempo de ' . $cred_tiempo . ' meses se obtuvo un interes del $' . number_format($Ttinteres, 2, '.', '') . ' a una tasa de ' . $tasa . '% anual, la Cuota mensual aproximada seria de $' . number_format($cuotamensualap, 2, '.', '')
                . ' y el total a pagar seria de $' . number_format($valorTotal, 2, '.', '');
        $correo = $fnsimulador->fnindex_sendemail_solicitudcred($mensaje, $email_credito, $nro_inver, $entidad_credito);
        echo $correo;
    } else {
        echo '0';
    }
}
//formulario envio solicitud inversion
if ($opc == 5) {
    
}
//formulario envio solicitud ahorro
if ($opc == 6) {
    
}
//formulario envio solicitud ahorro
if ($opc == 7) {
    $tipo_queja = utf8_decode($_POST['tipo_queja']);
    $direccion_queja = utf8_decode($_POST['direccion_queja']);
    $inconformidad_queja = utf8_decode($_POST['inconformidad_queja']);
    $mensaje_queja = utf8_decode($_POST['mensaje_queja']);
    $nombre_queja = utf8_decode($_POST['nombre_queja']);
    $telefono1_queja = utf8_decode($_POST['telefono1_queja']);
    $terminos_queja = utf8_decode($_POST['terminos_queja']);
    
    $cuenta = $fnsimulador->fnsimulador_quejas_x($tipo_queja, $direccion_queja,
            $inconformidad_queja, $mensaje_queja, $nombre_queja, $telefono1_queja,
            $terminos_queja);
    
    if ($cuenta == 1) {
        //enviar email de confirmacion
        $mensaje = 'Tenga un buen dia Sr./a ' . $nombre_queja . ' se envia un(a) '.$tipo_queja.' desde '.$direccion_queja.' para el área: '.$inconformidad_queja.' '
                . 'Teléfono de contacto: '.$telefono1_queja.' <br> '
                . ' ' . utf8_decode($mensaje_queja) . ' ';
        $correo = $fnsimulador->fnindex_sendemail_queja($mensaje);
        echo $correo;
    } else {
        echo '0';
    }
}
//amortizacion cuotas fijas
if ($include == 1) {
    $tinteres = 0;
    $cuotamensual = 0;
    $sinicial1 = $cred_cantidad;
    for ($i = 0; $i < $cred_tiempo; $i++) {
        $capAmort = $cred_cantidad / $cred_tiempo;
        $interes = $sinicial1 * $tasaMes;
        $cuota = $capAmort + $interes;
        $saldoF = $sinicial1 - $capAmort;
        $sinicial1 = $saldoF;
        $cuotamensual = $cuotamensual + $cuota;
        $tinteres = $tinteres + $interes;
    }
    $cuotamensualap = $cuotamensual / $cred_tiempo;
    $Ttinteres = $tinteres;
    $valorTotal = $cred_cantidad + $Ttinteres;
    ?>
    <div class="row" >
        <div class="col-md-12" style="padding: 20px;">
            <p style="font-size: 23px;">Para un crédito de <u><b style="font-size: 25px;">$ <?php echo $cred_cantidad ?></b></u> 
                a <u><b style="font-size: 25px;"><?php echo $cred_tiempo ?> mes (es)</b></u> plazo y 
                con una tasa de interés del <u><b style="font-size: 25px;"><?php echo $tasa ?> %</b></u> mensual, tu cuota mensual es:
            </p>
        </div>
        <div class="col-md-12" style="padding: 20px;">
            <div class="row" style="background-color: #003b71;
                 padding: 10px 30px;
                 border-radius: 20px;">
                <div class="col-md-6 dflex">
                    <img src="images/icon-bolsa-de-dinero.svg" style="width: 60px; ">
                    <h4 style="margin-top: 20px;" class="text-white-coop">Primera Cuota Aproximada</h4> 
                </div>

                <div class="col-md-6" style="display: flex !important; align-content: center !important">
                    <span class="text-white-coop" style="font-size: 30px;">$
                    </span><h2 class="text-white-coop" style="font-family: 'GudeaBold';"><?php echo number_format($cuotamensualap, 2) ?> </h2> 
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
            <a href="form-credit.php" style="display: flex;">
                <h4 style="margin-right: 20px;">Consulta las tasas</h4>
                <img src="images/icon-pdf.svg" style="width: 30px; margin-right: 20px;">
            </a>
        </div>
        <div class="col-md-4" style="text-align: right !important; display: flex;">
            <h5 style="margin-top: 5px;">Ver tabla de amortización</h5>
            <img src="images/icon-table.svg" style="width: 30px; margin-left: 20px;">
        </div>
        <div class="col-md-12" style="margin-top: 50px;" >
            <a href="<?php echo $aform ?>?id=<?php echo $idprod ?>&valor=<?php echo $cred_cantidad ?>&tiempo=<?php echo $cred_tiempo ?>" style="display: flex; margin-left: 25%;">
                <h3>SOLICITA TU CRÉDITO AQUÍ</h3>
                <i style="margin-left: 10px; font-size: 10px;" class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="padding: 20px; text-align: justify">
            <p><b>Nota:</b> Los resultados de esta calculadora deben usarse solo como una indicación. Los resultados no representan cotizaciones ni precalificaciones para un préstamo. Los detalles específicos de su préstamo se le proporcionarán en su contrato de préstamo. El cálculo de la cuota no incluye costos asociados al seguro de desgravamen y otros gastos administrativos o impuestos. Se recomienda que consulte a su asesor financiero antes de solicitar un préstamo.</p>
        </div>
    </div>
    <?php
}
//amortizacion cuotas variables
if ($include == 2) {
    $tinteres = 0;
    $cuotamensual = 0;
    $sinicial1 = $cred_cantidad;
    for ($i = 0; $i < $cred_tiempo; $i++) {
        $cuota = ($cred_cantidad * $tasaMes) / (1 - pow(1 + $tasaMes, -$cred_tiempo));
        $interes = $sinicial1 * $tasaMes;
        $capAmort = $cuota - $interes;
        $saldoF = $sinicial1 - $capAmort;
        $sinicial1 = $saldoF;
        $cuotamensual = $cuotamensual + $cuota;
        $tinteres = $tinteres + $interes;
    }
    $cuotamensualap = $cuotamensual / $cred_tiempo;
    $Ttinteres = $tinteres;
    $valorTotal = $cred_cantidad + $Ttinteres;
    ?>
    <div class="row" >
        <div class="col-md-12" style="padding: 20px;">
            <p style="font-size: 23px;">Para un crédito de <u><b style="font-size: 25px;">$ <?php echo $cred_cantidad ?></b></u> 
                a <u><b style="font-size: 25px;"><?php echo $cred_tiempo ?> meses</b></u> plazo y 
                con una tasa de interés del <u><b style="font-size: 25px;"><?php echo $tasa ?> %</b></u> mensual, tu cuota mensual es:
            </p>
        </div>
        <div class="col-md-12" style="padding: 20px;">
            <div class="row" style="background-color: #003b71;
                 padding: 10px 30px;
                 border-radius: 20px;">
                <div class="col-md-6 dflex">
                    <img src="images/icon-bolsa-de-dinero.svg" style="width: 60px; ">
                    <h4 style="margin-top: 20px;" class="text-white-coop">Primera Cuota Aproximada</h4> 
                </div>

                <div class="col-md-6" style="display: flex !important; align-content: center !important">
                    <span class="text-white-coop" style="font-size: 30px;">$
                    </span><h2 class="text-white-coop" style="font-family: 'GudeaBold';"><?php echo number_format($cuotamensualap, 2) ?> </h2> 
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
            <a href="form-credit.php" style="display: flex;">
                <h4 style="margin-right: 20px;">Consulta las tasas</h4>
                <img src="images/icon-pdf.svg" style="width: 30px; margin-right: 20px;">
            </a>
        </div>
        <div class="col-md-4" style="text-align: right !important; display: flex;">
            <h5 style="margin-top: 5px;">Ver tabla de amortización</h5>
            <img src="images/icon-table.svg" style="width: 30px; margin-left: 20px;">
        </div>
        <div class="col-md-12" style="margin-top: 50px;" >
            <a href="<?php echo $aform ?>?id=<?php echo $idprod ?>&valor=<?php echo $cred_cantidad ?>&tiempo=<?php echo $cred_tiempo ?>" style="display: flex; margin-left: 25%;">
                <h3>SOLICITA TU CRÉDITO AQUÍ</h3>
                <i style="margin-left: 10px; font-size: 10px;" class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="padding: 20px; text-align: justify">
            <p><b>Nota:</b> Los resultados de esta calculadora deben usarse solo como una indicación. Los resultados no representan cotizaciones ni precalificaciones para un préstamo. Los detalles específicos de su préstamo se le proporcionarán en su contrato de préstamo. El cálculo de la cuota no incluye costos asociados al seguro de desgravamen y otros gastos administrativos o impuestos. Se recomienda que consulte a su asesor financiero antes de solicitar un préstamo.</p>
        </div>
    </div>
    <?php
}