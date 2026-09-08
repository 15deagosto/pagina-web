<?php
require '../controlador/conexion.php';
require '../funciones/fn-102.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn102 = new Fn_102();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn102->fn102_rimagenes_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_imagen = $_POST['nombre_imagen'];
    $url_imagen = $_POST['url_imagen'];
    $cuenta = $fn102->fn102_cimagenes_xdata($nombre_imagen, $url_imagen);
    echo $fnalert->fnalert_create($cuenta);
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $url_carrusel = $_POST['url_carrusel'];
    $cuenta = $fn102->fn102_uurl_x($url_carrusel, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn102->fn102_rcarrusel_all();
    $include = 1;
}


if ($opc_cn == 7) {
    
    $dato = $_FILES['dato_5']['name'];
    $cuenta = 0;
    $dir_subida = './../images/';
    echo $dato;
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);
    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
//        $cuenta = $fn102->fn102_uimgcarusel_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(2);
    }
    $imagen_upd = $dato;
    ?>
    <img src="../images/<?php echo $imagen_upd ?>" width="100%" />
    <?php
}

if ($opc_cn == 8) {
    
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = './../videos/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);
    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
//        $cuenta = $fn102->fn102_uimg2_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    $imagen_upd = $dato;
    ?>
    <img src="../images/<?php echo $imagen_upd ?>" width="100%" />
    <?php
}
