<?php
require_once './controler/conexion.php';
require_once './funciones/fn-index.php';
$fnindex = new Fn_index();
include './fn/fn-ahorro.php';
$id = $_GET['id'];
$fn_ahorro = new Fn_ahorro();
$titulo = $fn_ahorro->fnahorro_xget_ahorro($id);
$desc = $fn_ahorro->fnahorro_xdescget_ahorro($id);

include './plantilla-detalle-ahorro.php';
