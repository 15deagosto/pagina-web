<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
require_once './funciones/fn-utilidades.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$id = $_GET['id'];
$detproducto = $fnindex->fnindex_rproducto_xtextoses($id);

$tituloInversion = arreglar_mojibake(utf8_encode($detproducto[0]['nombre_prod']));
$descInversion = $detproducto[0]['descripcion_prod']
        ? arreglar_mojibake(utf8_encode($detproducto[0]['descripcion_prod']))
        : 'Los socios o clientes de la Cooperativa podrán invertir en depósito a plazo fijo, a través de la suscripción de un contrato de DPF, aceptando los términos y condiciones del mismo.';
$montoTexto = 'hasta 15.000,00 dólares';
$plazoTexto = 'Al vencimiento del contrato';
$tasaTexto = 'hasta 14.99%';

include './plantilla-detalle-inversion.php';
