<?php
include '../fn/fn-calcula-credito.php';
$fn_calculacredito = new Fn_calculacredito();
$monto = $_POST['monto_calcula'];
$plazo = $_POST['plazo_calcula'];
$tasa = $_POST['tasa_calcula'];
$tipocred = $_POST['tipocred_calcula'];
$resultado = $fn_calculacredito->calcularCreditoCompleto($monto, $plazo, $tasa, $tipoCredito);
print_r($resultado);

