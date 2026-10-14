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
$titulo = arreglar_mojibake($detproducto[0]['nombre_prod']);
$desc = arreglar_mojibake($detproducto[0]['descripcion_prod']);

$tipoCredito = 'MUJER EMPRENDEDORA';
$montoTexto = 'hasta 3.000,00 dólares';
$plazoTexto = 'máximo hasta 36 meses';
$perfilTexto = 'Ser mayor de 18 años y no mayor a 55 años incluido la vida del crédito.';
$segmentoTexto = 'Mujeres cuyo negocio tenga al menos un año de permanencia en el mercado, o con 6 meses de estabilidad laboral.';

include './plantilla-detalle-credito.php';
