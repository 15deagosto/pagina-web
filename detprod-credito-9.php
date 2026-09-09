<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
$id = $_GET['id'];
$detproducto = $fnindex->fnindex_rproducto_xtextoses($id);
$titulo = utf8_encode($detproducto[0]['nombre_prod']);
$desc = utf8_encode($detproducto[0]['descripcion_prod']);

$tipoCredito = 'CREDIPUNTOS';
$montoTexto = 'hasta 1.000,00 dólares';
$plazoTexto = 'máximo hasta 12 meses';
$perfilTexto = 'Ser mayor de 18 años y no mayor a 65 años incluido la vida del crédito.';
$segmentoTexto = 'Personas naturales que busquen mejorar su score crediticio (monto que quedará ignorado).';

include './plantilla-detalle-credito.php';
