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

$tipoCredito = 'ESPECIAL';
$montoTexto = 'hasta 84.000,00 dólares';
$plazoTexto = 'máximo hasta 108 meses';
$perfilTexto = 'Ser mayor de 18 años y no mayor a 65 años incluido la vida del crédito.';
$segmentoTexto = 'Personas Naturales y jurídicas, que la permanencia de su negocio sea al menos de un año en el mercado.';

include './plantilla-detalle-credito.php';
