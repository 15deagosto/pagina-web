<?php
session_start();
include '../controlador/conexion.php';
require '../funciones/funcion-nosotros.php';
$a = new Nosotros();

$opcion = $_POST['c_opcedit'];
if ($opcion == 1) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $id_nosotrosedit = $_POST['id_nosotrosedit'];
    $nombre_nosotros = utf8_decode($_POST['nombre_nosotros']);
    $tele1_nosotros = $_POST['tele1_nosotros'];
    $tele2_nosotros = $_POST['tele2_nosotros'];
    $red1_nosotros = utf8_decode($_POST['red1_nosotros']);
    $red2_nosotros = $_POST['red2_nosotros'];
    $email1_nosotros = utf8_decode($_POST['email1_nosotros']);
    $x_nosotros = $_POST['x_nosotros'];
    $y_nosotros = $_POST['y_nosotros'];
    $sql = "update nosotros set nombre_nosotros='".$nombre_nosotros."',tele1_nosotros='" . $tele1_nosotros . "',"
            . "tele2_nosotros='" . $tele2_nosotros . "',"
            . "red1_nosotros='" . $red1_nosotros . "',red2_nosotros='" . $red2_nosotros . "',email1_nosotros='" . $email1_nosotros . "',"
            . "x_nosotros='" . $x_nosotros . "',y_nosotros='" . $y_nosotros . "' "
            . "where id_nosotros=" . $id_nosotrosedit . "";
    //echo $sql;
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Actualizado correctamente&opc=51');
    } else {
        header('Location: ../index.php?msge=Problemas al actualizar&opc=51');
    }
}else if ($opcion == 2) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
     $sql = "insert into nosotros (nombre_nosotros) values ('NUEVO LOCAL')";
    //echo $sql;
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Ingresado correctamente&opc=51');
    } else {
        header('Location: ../index.php?msge=Problemas al ingresar&opc=51');
    }
} else if ($opcion == 3) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $id_nosotrosedit = $_POST['id_nosotrosedit'];
     $sql = "delete from nosotros where id_nosotros=".$id_nosotrosedit."";
    //echo $sql;
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Eliminado correctamente&opc=51');
    } else {
        header('Location: ../index.php?msge=Problemas al eliminar&opc=51');
    }
} 
?>

