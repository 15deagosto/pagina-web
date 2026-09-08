<?php
require '../controlador/conexion.php';
require '../funciones/fn-101.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn101 = new Fn_101();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn101->fn101_rimagenes_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_imagen = $_POST['nombre_imagen'];
    $url_imagen = $_POST['url_imagen'];
    $cuenta = $fn101->fn101_cimagenes_xdata($nombre_imagen, $url_imagen);
    echo $fnalert->fnalert_create($cuenta);
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $url_carrusel = $_POST['url_carrusel'];
    $cuenta = $fn101->fn101_uurl_x($url_carrusel, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn101->fn101_rcarrusel_all();
    $include = 1;
}


if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn101->fn101_uimagenes_xest($id, $st);
    if ($cuenta == 0) {
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if ($st == 0) {
                ?>
                <input value="1" name="estado" onchange="cn101_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn101_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                <?php
            }
            ?>
        </div>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    } else {
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if ($st == 0) {
                ?>
                <input value="1" name="estado" onchange="cn101_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn101_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                <?php
            }
            ?>
        </div>
        <?php
    }
//    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn101->fn101_uimagenes_xest($id, $estado);
    $include = 1;
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $cuenta = $fn101->fn101_uimagenes_xtip($id, $tipo);
    if ($cuenta == 1) {
        ?>
        <label><i class="fa fa-check"></i></label>
        <?php
    } else {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }

    //$include = 1;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $dato = $_FILES['dato_5']['name'];
    $cuenta = 0;
    $dir_subida = '../../images/';
    echo $dato;
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);
    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn101->fn101_uimgcarusel_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(2);
    }
    $imagen_upd = $dato;
    ?>
    <img src="../images/<?php echo $imagen_upd ?>" width="100%" />
    <?php
}

if ($opc_cn == 9) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);
    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn101->fn101_uimg2_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    $imagen_upd = $dato;
    $include = 2;
}

//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagen</th>
                <th>URL</th>
                <th>Estado</th>
                <th>Sitio</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_carrusel'];
                $id = $menu['id_carrusel'];
                $poc = $menu['poc_carrusel'];
                ?>
                <tr>
                    <td> <?php echo $id ?></td>
                    <td> <button onclick="md101_d5(5,<?php echo $id ?>)" data-toggle="modal" 
                                 data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1">
                            <i class="fa fa-upload"></i>
                        </button>
                    </td>
                    <td><?php echo ($menu['url_carrusel']) ?></td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn101_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn101_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </td>
                    <td><?php 
                                        if($menu['sitio_carrusel']==1){
                                            echo "SERVICIOS";
                                        }else{
                                            echo "COSEDE";
                                        }
                                        ?></td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md101_d2(2,<?php echo $id ?>)" data-toggle="modal" 
                                    data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1">
                                <i class="fa fa-pencil"></i>
                            </button>

                        </div>												
                    </td>												
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <script>
        $('#example3').dataTable();
    </script>
    <?php
}
if ($include == 2) {
    ?>
    <?php if ($imagen_upd != '') { ?>
        <img src="../images/<?php echo $imagen_upd ?>" width="200px" />
    <?php } else { ?>
        <center><h5> Sin imagen</h5></center>
    <?php } ?>
    <div id="cargando_img" class="bg_load" style="display: none" >
        <img class="loader_animation" src="../images/loading-gif.gif"  /><br>
    </div>
    <?php
}