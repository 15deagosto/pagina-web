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

$tipoCredito = 'POLICREDITOJURIDICO';
$montoTexto = 'desde 300,00 hasta 100.000,00 dólares';
$plazoTexto = 'máximo hasta 97 meses';
$perfilTexto = 'Persona jurídica legalmente constituida.';
$segmentoTexto = 'Personas jurídicas destinado a capital de trabajo y actividades productivas.';

include './plantilla-detalle-credito.php';
