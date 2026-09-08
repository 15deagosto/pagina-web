<?php
require '../controlador/conexion.php';
require '../funciones/fn-98.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn98 = new Fn_98();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn98->fn98_rimagenes_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_imagen = $_POST['nombre_imagen'];
    $url_imagen = $_POST['url_imagen'];
    $cuenta = $fn98->fn98_cimagenes_xdata($nombre_imagen, $url_imagen);
    echo $fnalert->fnalert_create($cuenta);
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_imagen = $_POST['nombre_imagen'];
    $url_imagen = $_POST['url_imagen'];
    $cuenta = $fn98->fn98_uimagenes_x($nombre_imagen, $url_imagen, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $include = 1;
}


if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn98->fn98_uimagenes_xest($id, $st);
    if ($cuenta == 0) {
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if ($st == 0) {
                ?>
                <input value="1" name="estado" onchange="cn98_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn98_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                <input value="1" name="estado" onchange="cn98_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn98_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
    $cuenta = $fn98->fn98_uimagenes_xest($id, $estado);
    $include = 1;
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $cuenta = $fn98->fn98_uimagenes_xtip($id, $tipo);
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
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);
    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn98->fn98_uimg_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    $imagen_upd = $dato;
    $include = 2;
}
if ($opc_cn == 8) {
    $id = $_POST['dato_1'];
    $dato = '';
    $cuenta = $fn98->fn98_uimg_xid($id, $dato);
    $imagen_upd = $dato;
    $include = 2;
}

if ($opc_cn == 9) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);
    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn98->fn98_uimg2_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    $imagen_upd = $dato;
    $include = 2;
}

//INCLUDE

if ($include == 1) {
    $tabla = $fn98->fn98_rimagenes_all();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Tipo</th>
                <th style="width: 10%">Imagen</th>
                <th style="width: 10%">Imagen 2</th>
                <th style="width: 10%">Estado</th>
                <th style="width: 10%">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_imagen'];
                $id = $menu['id_imagen'];
                $tip = $menu['tipo_imagen'];
                $dettipo = $fn98->fn98_tipo_xid($tip);
                ?>
                <tr>
                    <td> <?php echo ($menu['id_imagen']) ?></td>
                    <td> <?php echo $menu['nombre_imagen'] ?></td>
                    <td>
                        <select class="form-control" onchange="cn98_f6(6,<?php echo $id ?>, this.value)">
                            <option value="<?php echo $tip ?>"><?php echo $dettipo ?></option>
                            <option value="1">BANNER PAGINAS</option> 
                            <option value="0">IMÁGENES PÁGINAS</option> 
                        </select>
                        <div id="selec<?php echo $id ?>">

                        </div>
                    </td>
                    <td> 
                        <button onclick='md98_d5(5,<?php echo $id ?>, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                    </td>
                    <td> 
                        <button onclick='md98_d6(6,<?php echo $id ?>, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" 
                                class='btn btn-outline-primary shadow btn-xs mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn98_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn98_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md98_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md98_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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