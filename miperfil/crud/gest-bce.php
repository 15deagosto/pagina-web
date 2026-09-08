<?php
session_start();
include '../controlador/conexion.php';

$opcion = $_POST['id_opc'];
if ($opcion == 2) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $id_bce = $_POST['id_bce'];
    $tasa_bce = $_POST['tasa_bce'];
    $sql = "update bce set tasa_bce=" . $tasa_bce . " "
            . "where id_bce=" . $id_bce . "";
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Actualizado correctamente&opc=23');
    } else {
        header('Location: ../index.php?msge=Problemas al actualizar&opc=23');
    }
} 
?>

