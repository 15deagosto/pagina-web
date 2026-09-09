<?php
require './controler/conexion.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fnindex = new Fn_index();

$tituloInversion = 'Inversión Periódica';
$descInversion = 'Los socios o clientes de la Cooperativa podrán invertir en depósito a plazo fijo, a través de la suscripción de un contrato de DPF, con pago periódico de intereses, aceptando los términos y condiciones del mismo.';
$montoTexto = 'hasta 20.000,00 dólares';
$plazoTexto = 'máximo hasta 48 meses';
$tasaTexto = 'hasta 14.99%';

include './plantilla-detalle-inversion.php';
