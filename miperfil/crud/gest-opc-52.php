<?php
session_start();
include '../controlador/conexion.php';
require '../funciones/funcion-promocion.php';
$a = new Promocion();

$opcion = $_POST['id_opc'];
if ($opcion == 1) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $id_transp = $_POST['id_transp'];
    $nombre_transp = $_POST['nombre_transp'];
    $fecha_transp = $_POST['fecha_transp'];
    $sql = "update transparencia set nombre_transp='" . $nombre_transp . "',fecha_transp='" . $fecha_transp . "' where id_transp=" . $id_transp . "";
    //echo $sql;
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Actualizado correctamente&opc=52');
    } else {
        header('Location: ../index.php?msge=Problemas al actualizar&opc=52');
    }
} else if ($opcion == 2) {

    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $id_transp = $_POST['id_transp'];
    $url_transp = utf8_decode($_FILES['url_transp']['name']);
    $dir_subida = '../../pdf/';

    $fichero_subido = $dir_subida . basename($_FILES['url_transp']['name']);
    if (move_uploaded_file($_FILES['url_transp']['tmp_name'], $fichero_subido)) {
        $sql = "update transparencia set url_transp='" . $url_transp . "' "
                . "where id_transp=" . $id_transp . "";
        if ($mysqlidato->query($sql) == TRUE) {
            ?>
            <small style="color: green">Cambiado correctamente</small>
            <a href="../pdf/<?php echo utf8_encode($url_transp) ?>" target="_blank"><?php echo utf8_encode($url_transp) ?></a>
            <?php
        } else {
            ?>
            <small style="color: red">Error al actualizar</small>
            <a href="../pdf/<?php echo utf8_encode($url_transp) ?>" target="_blank"><?php echo utf8_encode($url_transp) ?></a>
            <?php
        }
    } else {
        echo 'PERMISOS DENEGADOS';
    }
} else if ($opcion == 3) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $id_transp = $_POST['id_transp'];
    $posi_transp = $_POST['posi_transp'];
    $sql = "update transparencia set posi_transp=" . $posi_transp . " where id_transp=" . $id_transp . "";
    //echo $sql;
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Actualizado correctamente&opc=52');
    } else {
        header('Location: ../index.php?msge=Problemas al actualizar&opc=52');
    }
}else if ($opcion == 4) {
    $con = new Conecciones;
    $mysqlidato = $con->crearConexion();
    $fecha=date('Y-m-d');
    $sql = "insert into transparencia (nombre_transp,posi_transp,fecha_transp) values('NUEVO BALANCE',1,'".$fecha."')";
    //echo $sql;
    if ($mysqlidato->query($sql) == TRUE) {
        header('Location: ../index.php?msg=Ingresado correctamente, Puede editarlo desde el panel de opciones&opc=52');
    } else {
        header('Location: ../index.php?msge=Sucedio algo al ingresar&opc=52');
    }
}
?>

