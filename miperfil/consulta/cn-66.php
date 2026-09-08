<?php
require '../controlador/conexion.php';
require '../funciones/fn-66.php';
require '../funciones/fn-91.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn66 = new Fn_66();
$fn91 = new Fn_91();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn66->fn66_reducacion_financiera_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $titulo_edfi = ($_POST['titulo_edfi']);
    $fecha_edfi = ($_POST['fecha_edfi']);
    $resumen_edfi = ($_POST['resumen_edfi']);
    $descripcion_edfi = ($_POST['descripcion_edfi']);
    $orden_edfi = ($_POST['orden_edfi']);
    if ($orden_edfi == null || $orden_edfi == "") {
        $orden_edfi = 0;
    }
    $estado = 0;
    $cuenta = $fn66->fn66_ceducacion_financiera_xdata($titulo_edfi,$fecha_edfi, $descripcion_edfi,$resumen_edfi, $orden_edfi, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn66->fn66_reducacion_financiera_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $titulo_edfi = ($_POST['titulo_edfi']);
    $descripcion_edfi = ($_POST['descripcion_edfi']);
    $orden_edfi = ($_POST['orden_edfi']);
    $resumen_edfi = ($_POST['resumen_edfi']);
    $fecha_edfi = ($_POST['fecha_edfi']);
    $cuenta = $fn66->fn66_ueducacion_financiera_x($titulo_edfi, $resumen_edfi, $descripcion_edfi, $fecha_edfi, $orden_edfi, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn66->fn66_reducacion_financiera_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../assets/img/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn66->fn66_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn66->fn66_ueducacion_financiera_xest($id, $st);
    if ($cuenta == 0) {
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if ($st == 0) {
                ?>
                <input value="1" name="estado" onchange="cn66_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn66_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                <input value="1" name="estado" onchange="cn66_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn66_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                <?php
            }
            ?>
        </div>
        <?php
    }
//    $tabla = $fn66->fn66_reducacion_financiera_all();
//    $include = 1;
}

if ($opc_cn == 5) {
    ////Guarda en la tabla repositorio los datos del video

    $estado = 1;
    $tipo_rep = 2;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../assets/img/';
    $newFileName = $fileNameCmps[0] . '' . $idusu_open . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    if ($fileName != null || $fileName != "") {
        if ($fileExtension == "mp4" || $fileExtension == "avi" || $fileExtension == "MOV" || $fileExtension == "WMV" || $fileExtension == "FLV") {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen   

            $qImg = $_POST['dato_1'];
            $id_edfi = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 1) {
                $imagen = "url_edfi";
                $cuenta = $fn66->fn66_ueducacion_financiera_xImg($imagen, $urlimagen, $id_edfi);
                echo $fnalert->fnalert_edit($cuenta);
            }
        }
    } else {
        echo $fnalert->fnalert_file(2);
    }
    $tabla = $fn66->fn66_reducacion_financiera_all();
    $include = 1;
}

if ($opc_cn == 6) {
////Guarda en la tabla repositorio los datos de la imagen
    $nombre_rep = ($_POST['nombre_rep']);
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../assets/img/';
    $newFileName = $fileNameCmps[0] . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp")) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {

                $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
                ////Guarda en la tabla slider la la direccion de la imagen   

                $qImg = $_POST['dato_1'];
                $id_edfi = $_POST['dato_2'];
                $urlimagen = $url_repositorio;
                if ($qImg == 1) {
                    $imagen = "imagen_edfi";
                    $cuenta = $fn66->fn66_ueducacion_financiera_xImg($imagen, $urlimagen, $id_edfi);
                    echo $fnalert->fnalert_edit($cuenta);
                }
            } else {
                echo $fnalert->fnalert_file(2);
            }
        }
    } else {
        echo $fnalert->fnalert_file(2);
    }
    ?>
    <img src="../assets/img/<?php echo $fileName ?>" width="200px" />
    <?php
//    $tabla = $fn66->fn66_reducacion_financiera_all();
//    $include = 1;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn66->fn66_ueducacion_financiera_xest($id, $estado);
    $tabla = $fn66->fn66_reducacion_financiera_all();
    $include = 1;
}
if ($opc_cn == 8) {
////Guarda en la tabla repositorio los datos de la imagen
    $img_rep = ($_POST['img_rep']);
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['img_edfi']['tmp_name'];
    $fileName = $_FILES['img_edfi']['name'];
    $fileSize = $_FILES['img_edfi']['size'];
    $fileType = $_FILES['img_edfi']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../assets/img/';
    $newFileName = $fileNameCmps[0] . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if (($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp")) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {

                $urlimagen = $url_repositorio;
                $id_edfi = $_POST['dato_2'];
                $imagen = "img" . $img_rep . "_edfi";
                $cuenta = $fn66->fn66_ueducacion_financiera_xImgenes($imagen, $urlimagen, $id_edfi);
                echo $fnalert->fnalert_edit($cuenta);
            } else {
                echo $fnalert->fnalert_file(2);
            }
        } else {
            echo $fnalert->fnalert_file(3);
        }
    } else {
        echo $fnalert->fnalert_file(4);
    }
    ?>
    <img src="../assets/img/<?php echo $fileName ?>" width="200px" />
    <?php
//    $tabla = $fn66->fn66_reducacion_financiera_all();
//    $include = 1;
}if ($opc_cn == 9) {
    $img_rep=$_POST['dato_1'];
    $id_edfi = $_POST['dato_2'];
    $imagen = "img" . $img_rep . "_edfi";
    $urlimagen="";
    $cuenta = $fn66->fn66_ueducacion_financiera_xImgenes($imagen, $urlimagen, $id_edfi);
    ?>
    SIN IMAGEN
    <?php
}
//INCLUDE

if ($include == 1) {
    $tabla = $fn66->fn66_reducacion_financiera_all();
    ?>
    <div id="cargando" class="bg_load" style="display: none" >
        <img class="loader_animation" src="../assets/images/Loading_2.gif"  /><br>
    </div>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Título</th>
                <th>Fecha</th>
                <th>Resumen</th>
                <th>URL</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
    <?php
    while ($menu = $tabla->fetch_assoc()) {
        $st = $menu['estado_edfi'];
        $id = $menu['id_edfi'];
        $estado = $fn66->fn66_estado_xid($st);
        ?>
                <tr>
                    <td> <?php echo ($menu['titulo_edfi']) ?></td>
                    <td> <?php echo ($menu['fecha_edfi']) ?> </td>
                    <td> <?php echo ($menu['resumen_edfi']) ?> </td>
                    <td> 
                        <button onclick='md66_u005_d4(5, 1, 2,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs  mr-1'><i class="fa fa-file-video-o fa-2x" ></i></button>
                    </td>
                    <td> 
                        <button onclick='md66_d6(6, 1, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs  mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
        <?php
        if ($st == 0) {
            ?>
                                    <input value="1" name="estado" onchange="cn66_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
            <?php
        } else if ($st == 1) {
            ?>
                                    <input value="0" name="estado" onchange="cn66_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
            <?php
        }
        ?>
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md66_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md66_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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

