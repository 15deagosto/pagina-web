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

$tituloInversion = arreglar_mojibake($detproducto[0]['nombre_prod']);
$descInversion = $detproducto[0]['descripcion_prod']
        ? arreglar_mojibake($detproducto[0]['descripcion_prod'])
        : 'Los socios o clientes de la Cooperativa podrán invertir en depósito a plazo fijo, a través de la suscripción de un contrato de DPF, con pago periódico de intereses, aceptando los términos y condiciones del mismo.';
$pagoInteresTexto = 'Periódico durante el plazo';
$montoTexto = 'Sin monto máximo · tasa según el tramo (ver tabla)';
$plazoTexto = 'Desde 90 días en adelante';
$tasaTexto = '5,00% a 9,00% según plazo y monto';

include './plantilla-detalle-inversion.php';
