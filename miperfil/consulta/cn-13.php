<?php
session_start();
require '../controlador/conexion.php';
require '../funciones/fn-13.php';
include '../sesiones/abrir.php';
$a = new Fn13();
$iopc = $_POST['dato_0'];
$state = 0;

if ($iopc == 1) {
    $id_rol = $_POST['dato_1'];
    $id_padre = 0;

    $menuc = $a->fn13_menucompleto_xrol($id_padre);
//echo "asdasd";
    $rol=$a->fn13_rol_xid($id_rol);
    $state = 1;
}if ($iopc == 2) {
    $id_rol = $_POST['dato_1'];
    $id_padre = $_POST['dato_2'];
    $menuc = $a->fn13_menucompleto_xrol($id_padre);
//echo "asdasd";
    $padre=$a->fn41_r_menu_xid($id_padre);
    $state = 2;
}if ($iopc == 3) {
    $id_rol = $_POST['dato_1'];
    $id_menu = $_POST['dato_2'];
    $opcion = $_POST['dato_3'];
    $detallemenu = $a->fn41_r_menu_xid($id_menu);
    $id_padre = $detallemenu[0]['pertenece_menu'];
    // echo "CODIGO:".$id_padre;
    $padre=$a->fn41_r_menu_xid($id_padre);
    if ($opcion == 1) {
        $cuenta = $a->fn13_u_rolmenu_xid($id_rol, $id_menu);
        $valida1 = $a->fn13_menuvalida_xrol($id_rol, $id_padre);
        if ($valida1->num_rows == 0) {
            $cuenta = $a->fn13_u_rolmenu_xid($id_rol, $id_padre);
        }
    } else if ($opcion == 0) {
        $cuenta = $a->fn13_d_rolmenu_xid($id_rol, $id_menu);
        $valida2 = $a->fn13_menusub_xrol($id_rol, $id_padre);
        if ($valida2->num_rows == 0) {
            $cuenta = $a->fn13_d_rolmenu_xid($id_rol, $id_padre);
        }
    }
    $menuc = $a->fn13_menucompleto_xrol($id_padre);
    $state = 2;
}if ($iopc == 4) {
    $id_rol = $_POST['dato_1'];
    $nombre_menu = $_POST['nombre_menu'];
    $pertenece_menu = 0;
    $icon_menu = $_POST['icon_menu'];
    $estado_menu = 1;
    $id_padre = 0;
    $url_menu=$a->fn13_r_codigo_xid();
    
    $cuenta = $a->fn13_c_menu_xdata($url_menu, $nombre_menu,$pertenece_menu,$icon_menu,$estado_menu);
    $menuc = $a->fn13_menucompleto_xrol($id_padre);

    $rol=$a->fn13_rol_xid($id_rol);
    $state = 1;
}if ($iopc == 5) {
    $id_rol = $_POST['dato_1'];
    $nombre_menu = $_POST['nombre_menu'];
    $pertenece_menu = $_POST['dato_2'];
    $icon_menu = "";
    $estado_menu = 1;
    $id_padre = $_POST['dato_2'];
    $url_menu=$a->fn13_r_codigo_xid();
    
    $cuenta = $a->fn13_c_menu_xdata($url_menu, $nombre_menu,$pertenece_menu,$icon_menu,$estado_menu);
   $menuc = $a->fn13_menucompleto_xrol($id_padre);
    
    $state = 2;
}

if ($state == 1) {
    while ($datos = $menuc->fetch_assoc()) {
        $id_menu = $datos['id_menu'];
        $menu = $a->fn13_menu_xrol($id_rol, $id_menu);
        if ($menu == 0) {
            ?>
            <div class="external-event" data-class="bg-primary">
                <button class="btn btn-secondary" onclick="cn13_002_d2(2,<?php echo $id_rol ?>,<?php echo $id_menu ?>)" style="width: 90%">
                    <?php echo ($datos['nombre_menu']) ?></button></div>
            <?php
        } else {
            ?>
            <div class="external-event" data-class="bg-primary">
                <button class="btn btn-warning" onclick="cn13_002_d2(2,<?php echo $id_rol ?>,<?php echo $id_menu ?>)" style="width: 90%">
                    <?php echo ($datos['nombre_menu']) ?></button></div>
            <?php
        }
    }
    ?>
    <a style="cursor: pointer; color: white; width: 100%" class="btn btn-primary shadow btn-xs" data-toggle="modal" data-target=".mod_1" onclick="mod13_001_d2(1,<?php echo $id_rol ?>)">
        <i class="fa fa-plus"></i> NUEVO MENÚ PARA <?php echo $rol[0]['nombre_rol'] ?></a>
    <?php
}if ($state == 2) {
    while ($datos = $menuc->fetch_assoc()) {
        $id_menu = $datos['id_menu'];
        $menu = $a->fn13_menu_xrol($id_rol, $id_menu);
        if ($menu == 0) {
            ?>
            <div class="external-event" data-class="bg-primary">
                <button class="btn btn-secondary" onclick="cn13_003_d2(3,<?php echo $id_rol ?>,<?php echo $id_menu ?>, 1)" style="width: 90%">
                    <?php echo ($datos['nombre_menu']) ?></button></div>
            <?php
        } else {
            ?>
            <div class="external-event" data-class="bg-primary">
                <button class="btn btn-warning" onclick="cn13_003_d2(3,<?php echo $id_rol ?>,<?php echo $id_menu ?>, 0)" style="width: 90%">
                    <?php echo ($datos['nombre_menu']) ?></button></div>
            <?php
        }
    }
    ?>
    <a style="cursor: pointer; color: white; width: 100%" class="btn btn-primary shadow btn-xs" data-toggle="modal" data-target=".mod_1" onclick="mod13_002_d2(2,<?php echo $id_rol ?>,<?php echo $id_padre ?>)">
        <i class="fa fa-plus"></i> NUEVO SUB MENÚ PARA: <?php echo $padre[0]['nombre_menu'] ?></a>
    <?php
}
if ($state == 3) {
    
}