<?php
session_start();
include '../controlador/conexion.php';

$opcion = $_POST['id_opc'];
if ($opcion == 2) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $id_inversion = $_POST['id_inversion'];
    $prociento_inversion = $_POST['prociento_inversion'];
    $sql = "update inversion set prociento_inversion=" . $prociento_inversion . " "
            . "where id_inversion=" . $id_inversion . "";
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Actualizado correctamente&opc=22');
    } else {
        header('Location: ../index.php?msge=Problemas al actualizar&opc=22');
    }
} 
?>

