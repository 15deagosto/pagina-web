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

$tipoCredito = 'POLIZA';
$montoTexto = 'hasta el 90% del capital de la póliza (DPF)';
$plazoTexto = 'Al vencimiento de la póliza';
$perfilTexto = 'Ser mayor de 18 años y no mayor a 65 años incluido la vida del crédito.';
$segmentoLabel = 'Tasa de interés';
$segmentoTexto = 'Calculamos tu crédito al 17.99%';

include './plantilla-detalle-credito.php';
