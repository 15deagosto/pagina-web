<?php

session_start();
include '../controlador/conexion.php';

$opcion = $_POST['c_opcedit'];
if ($opcion == 1) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $nombre_tasa = $_POST['nombre_tasa'];
    $idinteres = $_POST['id_interesedit'];
    $tasanominal_tasa = $_POST['tasanominal_tasa'];
    $efectivaanual_tasa = $_POST['efectivaanual_tasa'];
    $efectivofin_tasa = $_POST['efectivofin_tasa'];
    $acumulacion_tasa = $_POST['acumulacion_tasa'];
    $interesanual_tasa = $_POST['interesanual_tasa'];
    $desc_tasa = utf8_decode($_POST['desc_tasa']);
    $min_tasa = utf8_decode($_POST['min_tasa']);
    $max_tasa = utf8_decode($_POST['max_tasa']);
    $valmin_tasa = utf8_decode($_POST['valmin_tasa']);
    $valmax_tasa = utf8_decode($_POST['valmax_tasa']);

    $desccat = $_POST['desc_catprod'];
    $sql = "update tasa set nombre_tasa='".$nombre_tasa."', tasanominal_tasa=" . $tasanominal_tasa . ",efectivaanual_tasa=" . $efectivaanual_tasa . ",efectivofin_tasa=" . $efectivofin_tasa . ""
            . ",acumulacion_tasa=" . $acumulacion_tasa . ",interesanual_tasa=" . $interesanual_tasa . ",desc_tasa='" . $desc_tasa . "',min_tasa=".$min_tasa.""
            . ",max_tasa=".$max_tasa.",valmin_tasa=".$valmin_tasa.",valmax_tasa=".$valmax_tasa." "
            . "where id_tasa=" . $idinteres . "";
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Actualizado correctamente&opc=21');
    } else {
        header('Location: ../index.php?msge=Problemas al actualizar&opc=21');
    }
}else if ($opcion == 2) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $sql = "insert into tasa (nombre_tasa) values ('NUEVA TASA')";
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Ingresado correctamente, Puede editarlo desde el panel de opciones&opc=21');
    } else {
        header('Location: ../index.php?msge=Sucedio algo al ingresar&opc=21');
    }
}
?>

