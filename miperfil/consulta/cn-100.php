<?php
require '../controlador/conexion.php';
require '../funciones/fn-100.php';
require '../funciones/fn-91.php';
require '../funciones/fn-alert.php';
require '../sesiones/abrir.php';
$opc_cn = $_POST['dato_0'];
$fn100 = new Fn_100();
$fn91 = new Fn_91();
$fnalert = new Fn_alert();

//OPC
//echo $opc_cn;
if ($opc_cn == 1) {
    $titulo = ($_POST['titulo']);
    $resumen = $_POST['resumen'];
    $desc = $_POST['descripcion'];
    $fecha_inicio = date('Y-m-d');
    $fecha_final = date('Y-m-d');
    $imagen = "sin img";
    $estado = 0;
    $cuenta = $fn100->fn100_cvacante_x($titulo, $resumen, $desc, $fecha_inicio, $fecha_final, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn100->fn100_rnoticias_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = $_POST['dato_1'];
    $nombre_vacante = ($_POST['nombre_vacante']);
//    $tiempo_vacante = ($_POST['tiempo_vacante']);
//    $area_vacante = ($_POST['area_vacante']);
//    $tipo_vacante = ($_POST['tipo_vacante']);
//    $presencia_vacante = ($_POST['presencia_vacante']);
//    $lugar_vacante = ($_POST['lugar_vacante']);
//    $niveleduca_vacante = ($_POST['niveleduca_vacante']);
    $tiempo_vacante = 1;
    $area_vacante = "N";
    $tipo_vacante = 1;
    $presencia_vacante = "Presencial";
    $lugar_vacante = "Sumak";
    $niveleduca_vacante = "SU";
    $fechain_vacante = ($_POST['fechain_vacante']);
    $fechaout_vacante = ($_POST['fechaout_vacante']);
    $cuenta = $fn100->fn100_unoticias_x($nombre_vacante, $tiempo_vacante, $area_vacante, $tipo_vacante,
            $presencia_vacante, $lugar_vacante, $niveleduca_vacante, $fechain_vacante, $fechaout_vacante, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn100->fn100_rnoticias_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn100->fn100_unoticias_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn100->fn100_unoticias_xest($id, $estado);
    if ($cuenta == 0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $tiponot = $_POST['dato_2'];
    $cuenta = $fn100->fn100_unoticias_xtip($id, $tiponot);
    $tabla = $fn100->fn100_rnoticias_all();
    $include = 1;
}

if ($opc_cn == 6) {
////Guarda en la tabla repositorio los datos de la imagen
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../images/';
    $newFileName = $fileNameCmps[0] . '' . $idusu_open . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    $img_anterior = $_POST['img_ant'];
    //print_r($fileName);
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen
            $qImg = $_POST['dato_1'];
            $id_noticia = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 1) {
                $imagen = "img_vacante";
                $cuenta = $fn100->fn100_unoticias_xImg($imagen, $urlimagen, $id_noticia);
                $imagen_upd = $urlimagen;
                echo $fnalert->fnalert_file($cuenta);
            }
            $imagen_upd = $urlimagen;
        }
    } else {
        $imagen_upd = $img_anterior;
        echo $fnalert->fnalert_file(2);
    }
    $tabla = $fn100->fn100_rnoticias_all();
    $include = 2;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn100->fn100_unoticias_xest($id, $estado);
    $tabla = $fn100->fn100_rnoticias_all();
    $include = 1;
}
if ($opc_cn == 8) {
////Guarda en la tabla repositorio los datos de la imagen
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../images/';
    $newFileName = $fileNameCmps[0] . '' . $idusu_open . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    $img_anterior = $_POST['img_ant'];
    //print_r($fileName);
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen
            $qImg = $_POST['dato_1'];
            $id_noticia = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 1) {
                $imagen = "img2_noticia";
                $cuenta = $fn100->fn100_unoticias_xImg($imagen, $urlimagen, $id_noticia);
                $imagen_upd = $urlimagen;
                echo $fnalert->fnalert_file($cuenta);
            }
            $imagen_upd = $urlimagen;
        }
    } else {
        $imagen_upd = $img_anterior;
        echo $fnalert->fnalert_file(2);
    }
    $tabla = $fn100->fn100_rnoticias_all();
    $include = 2;
}
if ($opc_cn == 9) {
    $imagen = "img2_noticia";
    $urlimagen = '';
    $id_noticia = $_POST['dato_2'];
    $cuenta = $fn100->fn100_unoticias_xImg($imagen, $urlimagen, $id_noticia);
    $tabla = $fn100->fn100_rnoticias_all();
    $include = 2;
}
if ($opc_cn == 10) {
    $id = $_POST['dato_1'];
    $funcion_vacante = ($_POST['funcion_vacante']);
    $requisitos_vacante = ($_POST['requisitos_vacante']);
    $desc_vacante = ($_POST['desc_vacante']);
    $frame_vacante = ($_POST['frame_vacante']);
    $cuenta = $fn100->fn100_utextonoticias_x($funcion_vacante, $requisitos_vacante, $desc_vacante,$frame_vacante, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn100->fn100_rnoticias_all();
    $include = 1;
}
//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th></th>
                <th>Título</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Imagen</th>
    <!--                                    <th>Imagen Detalle</th>-->
                <th>Estado</th>
                <th>Información</th>
                <th>Textos</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_vacante'];
                $id = $menu['id_vacante'];
                $tipo = $menu['tipo_noticia'];
                $estado = $fn100->fn100_estado_xid($st);
                $user = $fn100->fn100_rusernoticias_xid($id);
                switch ($tipo) {
                    case 0:
                        $tiponot = "Normal";
                        break;
                    case 1:
                        $tiponot = "Destacado";
                        break;
                    case 2:
                        $tiponot = "Slider";
                        break;
                    case 3:
                        $tiponot = "Actualidad";
                        break;
                }
                ?>
                <tr>
                    <td>  </td>
                    <td> <?php echo $menu['nombre_vacante'] ?> </td>
                    <td> <?php echo ($menu['fechain_vacante']) ?> </td>
                    <td> <?php echo ($menu['fechaout_vacante']) ?> </td>
                    <td> 
                        <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                        <button onclick='md100_d6(6, 1, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    </td>
        <!--                                        <td> 
                        <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                        <button onclick='md100_d6(7,1,1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    </td>-->

                    <td>

                        <div class="custom-control custom-checkbox mb-3">
                            <?php
                            if ($st == 0) {
                                ?>
                                <input value="1" name="estado" onchange="cn100_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                <?php
                            } else if ($st == 1) {
                                ?>
                                <input value="0" name="estado" onchange="cn100_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                <?php
                            }
                            ?>
                        </div>
                        <div id="fill_<?php echo $id ?>">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md100_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                        </div>												
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md100_d8(8,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                        </div>												
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md100_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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
    <img src="../images/<?php echo $imagen_upd ?>" width="200px" />
    <div id="cargando_img" class="bg_load" style="display: none" >
        <img class="loader_animation" src="../images/loading-gif.gif"  /><br>
    </div>
    <?php
}