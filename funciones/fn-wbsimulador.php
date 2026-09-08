<?php

class Fn_wbsimulador {

    function fnwbsimulador_tabla_credito($valor_credito, $tiempo_credito, $codigo_prestamo) {
        $secuencial_empresa = 1;
        $nombre_cliente = "QUISHPE USHCO JUAN ADOLFO";
        $numero_cuota = $tiempo_credito;
        $frecuencia_pago = 30;
        $monto_solicitado = $valor_credito;
        $fecha_adjudicacion = "2024-09-02T16:54:27.374Z";
        $dia_pago = 30;
        //$codigo_prestamo = 11;
        $url_endpoint = 'https://enlinea.sumakkawsay.fin.ec/API';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url_endpoint . '/api/v1.0/Prestamo/ObtenerTablaPresuntivaPrestamoImpresion',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{   "nombreCliente": "' . $nombre_cliente . '",
    "codigoTipoPrestamo": "' . $codigo_prestamo . '",
    "codigoSubCalificacionContable": "401",
    "secuencialEmpresa": ' . $secuencial_empresa . ',
    "secuencialCondicionTablaAmortizacion": 4,
    "numeroCuotas": ' . $numero_cuota . ',
    "frecuenciaPago": ' . $frecuencia_pago . ',
    "diaDePago": ' . $dia_pago . ',
    "secuencialCliente": 31634,
    "montoSolicitado": ' . $monto_solicitado . ',
    "fechaAdjudicacion": "' . $fecha_adjudicacion . '"
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
        $json_data = json_decode($response, true);
        if (count($json_data) > 0) {
            return $json_data;
        } else {
            return ["response" => $response];
        }
    }

    function fnwbsimulador_tabla_inversion($plazo_deposito,$monto_deposito, $tasa_deposito, $codigo_tipoDeposito) {
        $url_endpoint = 'https://enlinea.sumakkawsay.fin.ec/API';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url_endpoint . '/api/v1.0/Deposito/ObtenerTablaPresuntivaDepositoImpresion',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{ 
    "codigoTipoDeposito": "' . $codigo_tipoDeposito . '",
    "diaDePago": 1,
    "numeroEnDias": 30,
    "plazoEnDias": '.$plazo_deposito.',
    "esInstitucionFinanciera": true,
    "monto": ' . $monto_deposito . ',
    "tasa": ' . $tasa_deposito . ',
    "variacionTasa": 0
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        //echo $response;
        $json_data = json_decode($response, true);
        if (count($json_data) > 0) {
            return $json_data;
        } else {
            return ["response" => $response];
        }
    }

    function fnwbsimulador_tasa_inversion($monto_deposito, $plazo_deposito, $codigo_tipoDeposito) {
        $plazo_periodo = 31;
        $url_endpoint = 'https://enlinea.sumakkawsay.fin.ec/API';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url_endpoint . '/api/v1.0/Deposito/ObtenerTasaComponenteDeposito',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{ 
    "monto": ' . $monto_deposito . ',
    "plazo": ' . $plazo_deposito . ',
    "plazoPeriodo": ' . $plazo_periodo . ',
    "secuencialComponentePlazoCapital": 31,
    "codigoTipoDeposito": "' . $codigo_tipoDeposito . '",
    "esCobroAlVencimiento": true
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        //echo $response;
        $json_data = json_decode($response, true);
        return $json_data['tasaNominal'];
        //echo $json_data['tasaEfectiva'] . '<br>';
    }
}
